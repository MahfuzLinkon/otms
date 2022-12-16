<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'status',
    ];

    public static function updateOrCreateCouseSubCategory($request, $id = null){
        CourseSubCategory::updateOrCreate(['id' => $id], [
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'status' => $request->status,
        ]);


    }











}