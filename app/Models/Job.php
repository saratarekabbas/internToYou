<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function employer(){
//        we are using user_id as the foreign key and not employer_id (which searches for it by default), that is why we specified.
        return $this->belongsTo(User::class, 'user_id');
    }
}
