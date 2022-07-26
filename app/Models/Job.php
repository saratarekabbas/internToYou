<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

// Query Scope: It extracts a part of a query from the controller and into the model to simplify queries and keep them cleaner
    public function scopeFilter($query, array $filters)
    { //accepts a query and an array of filters
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')->orWhere('body', 'like', '%' . request('search') . '%')->orWhere('company', 'like', '%' . request('search') . '%');
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function employer()
    {
//        we are using user_id as the foreign key and not employer_id (which searches for it by default), that is why we specified.
        return $this->belongsTo(User::class, 'user_id');
    }
}
