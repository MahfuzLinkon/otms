@extends('admin.master')
@section('title')
    Home Page
@endsection
@section('body')
    <section class="py-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-start">Course Category List</h4>
                        <a href="{{ route('course-sub-categories.create') }}" class="btn btn-primary float-end">Create</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($courseSubCategories as $courseSubCategory)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $courseSubCategory->name }}</td>
                                <td>{{ $courseSubCategory->category->name }}</td>
                                <td>{{ $courseSubCategory->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('course-sub-categories.edit', $courseSubCategory->id) }}" class="btn btn-primary"> <i class="uil-edit"></i> </a>
                                    <form onsubmit="return confirm('Are You Sure ?')" action="{{ route('course-sub-categories.destroy', $courseSubCategory->id) }}" style="display: inline-block" method="post">
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
