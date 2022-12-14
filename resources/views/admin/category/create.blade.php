@extends('admin.master')
@section('title')
    Create Course Category Page
@endsection
@section('body')
    <section class="py-3">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-start">Create Course Category</h4>
                        <a href="{{ route('course-categories.index') }}" class="btn btn-primary float-end">Manage</a>
                    </div>
                    <div class="card-body">
                        <p class="text-center text-success">{{ Session::has('success') ? Session::get('success') : '' }}</p>
                        <form action="{{ route('course-categories.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <label for="" class="col-md-4">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Status</label>
                                <div class="col-md-8">
                                    <label for="published"><input type="radio" name="status" id="published" value="1" checked> Published</label>
                                    <label for="unpublished"><input type="radio" class="ms-3" id="unpublished" name="status" value="0"> Unpublished</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success form-control" value="Create Category">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
