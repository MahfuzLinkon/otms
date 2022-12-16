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
                    </div>
                    <div class="card-body">
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
                                    <form onsubmit="return confirm('Are You Sure ?')" action="{{ route('course-categories.destroy', $courseCategory->id) }}" style="display: inline-block" method="post">
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
