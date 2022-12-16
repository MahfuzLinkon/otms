@extends('admin.master')
@section('title')
    Edit Course Category Page
@endsection
@section('body')
    <section class="py-3">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Course Category</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-center text-success">{{ Session::has('success') ? Session::get('success') : '' }}</p>
                        <form action="{{ route('course-categories.update', $courseCategory->id) }}" method="post">
                            @csrf
{{--                            {{ method_field('PATCH') }}--}}
                            @method('PUT')
                            <div class="row">
                                <label for="" class="col-md-4">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" value="{{ $courseCategory->name }}" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Status</label>
                                <div class="col-md-8">
                                    <label for="published"><input type="radio" name="status" id="published" value="1" {{ $courseCategory->status == 1 ? 'checked' : '' }}> Published</label>
                                    <label for="unpublished"><input type="radio" class="ms-3" id="unpublished" name="status" value="0" {{ $courseCategory->status == 0 ? 'checked' : '' }}> Unpublished</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success form-control" value="Update">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
