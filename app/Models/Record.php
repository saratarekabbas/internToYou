<?php
//
//namespace App\Models;
//
//use Illuminate\Database\Eloquent\ModelNotFoundException;
//use Illuminate\Support\Facades\File;
//use Spatie\YamlFrontMatter\YamlFrontMatter;
//
//class Record
//{
//    public $title;
//    public $company;
//    public $location;
//    public $salary;
//    public $description;
//    public $slug;
//    public $body;
//
//
//    public function __construct($title, $company, $location, $salary, $description, $slug, $body)
//    {
//        $this->title = $title;
//        $this->company = $company;
//        $this->location = $location;
//        $this->salary = $salary;
//        $this->description = $description;
//        $this->slug = $slug;
//        $this->body = $body;
//    }
//
//    public static function all()
//    {
//        return collect(File::files(resource_path("records")))
//            ->map(fn($file) => YamlFrontMatter::parseFile($file))
//            ->map(fn($document) => new Record (
//                $document->title,
//                $document->company,
//                $document->location,
//                $document->salary,
//                $document->description,
//                $document->slug,
//                $document->body()
//            ))->sortByDesc('totalMarks'); //collection
//    }
//
//    public static function find($slug)
//    {
//        $records = static::all();
//
//        return ($records->firstWhere('slug', $slug)); //collection
//    }
//
//
//}
