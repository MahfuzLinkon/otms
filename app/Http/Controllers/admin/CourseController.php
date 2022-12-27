<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseSubCategory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    private $subCategories;
    private $subCategory;
    private $course;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.course.index', [
            'courses' => Course::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create',[
            'courseCategories' => CourseCategory::where('status', 1)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Course::courseUpdateOrCreate($request);
        return redirect()->back()->with('success', 'Course Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.course.edit',[
            'course' => Course::find($id),
            'courseCategories' => CourseCategory::where('status', 1)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Course::courseUpdateOrCreate($request, $id);
        return redirect()->route('courses.index')->with('success', 'Course Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->course = Course::where('id', $id)->first();
        if ($this->course->image){
            if (file_exists($this->course->image)){
                unlink($this->course->image);
            }
        }
        $this->course->delete();
        return redirect()->back()->with('success', 'Course Deleted Successfully');
    }

    public function getSubCategory(Request $request){
        $this->subCategories = CourseSubCategory::where('category_id',$request->category_id)->get(['id','name']);
//        return json_encode($request->category_id);

//        ---------type 2-----------
//        foreach ($this->subCategories as $subCategory){
//              echo $subCategory .="<option value='".$subCategory->id."'>". $subCategory->name ."</option>";
//        }
        return response()->json($this->subCategories);
    }

    public  function coursesStatus($id){
        $this->course = Course::where('id', $id)->first();
        if ($this->course->status == 1){
            $message = 'Course Unpublished Successfully';
            $this->course->status = 0;

        }elseif ($this->course->status == 0){
            $message = 'Course Published Successfully';
            $this->course->status = 1;
        }
        $this->course->save();
        return redirect()->back()->with('success', $message);
    }












}
