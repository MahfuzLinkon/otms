@extends('admin.master')
@section('title')
    Course Manage Page
@endsection
@section('body')
    <section class="py-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-start">Course Manage</h4>
                        <a href="{{ route('courses.create') }}" class="btn btn-primary float-end">Create</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th>Author Name</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Short Des</th>
                                <th>Long Des</th>
                                <th>Duration</th>
                                <th>Total Hour</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $course->category->name }}</td>
                                    <td>{{ $course->subCategory->name }}</td>
                                    <td>{{ $course->user->name }}</td>
                                    <td>{{ $course->title }}</td>
                                    <td>{{ $course->price }}</td>
                                    <td>{{ $course->short_description }}</td>
                                    <td>{!! \Illuminate\Support\Str::words($course->long_description, 10) !!}</td>
                                    <td>{{ $course->starting_date.' To '.$course->ending_date }}</td>
                                    <td>{{ $course->total_hour }}</td>
                                    <td>{{ $course->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <img src="{{ asset($course->image) }}" alt="" style="height: 80px; width: 80px;">
                                    </td>
                                    <td>
                                        <a href="{{ route('course-sub-categories.edit', $course->id) }}" class="btn btn-primary"> <i class="uil-edit"></i> </a>
                                        <form onsubmit="return confirm('Are You Sure ?')" action="{{ route('course-sub-categories.destroy', $course->id) }}" style="display: inline-block" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-danger"  ><i class="uil-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
