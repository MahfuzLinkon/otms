<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\helper\Helper;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subCategory_id',
        'user_id',
        'title',
        'price',
        'short_description',
        'long_description',
        'image',
        'starting_date',
        'ending_date',
        'total_hour',
        'slug',
    ];
    private static $course;
    public static function courseUpdateOrCreate($request, $id = null){
        Course::updateOrCreate(['id' => $id], [
            'category_id' => $request->category_id,
            'subCategory_id' => $request->subCategory_id,
            'user_id' => auth()->id(),
            'title' => $request->title,
            'price' => $request->price,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => Helper::uploadFile($request->file('image'), 'courses'),
            'starting_date' => $request->starting_date,
            'ending_date' => $request->ending_date,
            'total_hour' => $request->total_hour,
            'slug' => strtolower(str_replace(' ', '-', $request->title)),
        ]);
    }

    public function category(){
        return $this->belongsTo(CourseCategory::class);
    }
    public function subCategory(){
        return $this->belongsTo(CourseSubCategory::class, 'subCategory_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }




}
