@extends('admin.master')
@section('title')
    Home Page
@endsection
@section('body')
    <section class="py-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h4>Course Category List</h4>
                        <a href="{{ route('course-categories.create') }}" class="btn btn-info float-end ms-auto">Create Category</a>
                    </div>
                    <div class="card-body">
                        <p class="text-center text-success">{{ Session::has('success') ? Session::get('success') : '' }}</p>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($courseCategories as $courseCategory)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $courseCategory->name }}</td>
                                <td>{{ $courseCategory->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('course-categories.edit', $courseCategory->id) }}" class="btn btn-primary"> <i class="uil-edit"></i> </a>
                                    <a href="{{ route('course-categories.destroy', $courseCategory->id) }}" class="btn btn-danger"><i class="uil-trash"></i></a>
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
