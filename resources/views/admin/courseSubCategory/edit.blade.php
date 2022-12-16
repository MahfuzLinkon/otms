@extends('admin.master')
@section('title')
    Edit Course Sub Category Page
@endsection
@section('body')
    <section class="py-3">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-start">Edit Course Sub Category</h4>
                        <a href="{{ route('course-sub-categories.index') }}" class="btn btn-primary float-end">Manage</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('course-sub-categories.update', $courseSubCategory->id ) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <label for="" class="col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <select name="category_id" id="" class="form-control">
                                        <option value="" selected disabled>--Select Course Category--</option>
                                        @foreach($courseCategories as $courseCategory)
                                            <option value="{{ $courseCategory->id }}" {{ $courseSubCategory->category_id == $courseCategory->id ? 'selected' : '' }}>{{ $courseCategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" value="{{ $courseSubCategory->name }}" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Status</label>
                                <div class="col-md-8">
                                    <label for="published"><input type="radio" name="status" id="published" value="1" {{ $courseSubCategory->status == 1 ? 'checked' : '' }}> Published</label>
                                    <label for="unpublished"><input type="radio" class="ms-3" id="unpublished" name="status" value="0" {{ $courseSubCategory->status == 0 ? 'checked' : '' }}> Unpublished</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success form-control" value="Update Sub Category">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
