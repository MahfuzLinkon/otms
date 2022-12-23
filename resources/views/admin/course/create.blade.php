@extends('admin.master')
@section('title')
    Create Course Page
@endsection
@section('body')
    <section class="py-3">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-start">Create Course</h4>
                        <a href="{{ route('courses.index') }}" class="btn btn-primary float-end">Manage</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <label for="" class="col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <select name="category_id" id="categoryId" class="form-control">
                                        <option value="" selected disabled>--Select Course Category--</option>
                                        @foreach($courseCategories as $courseCategory)
                                            <option value="{{ $courseCategory->id }}">{{ $courseCategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Sub Category Name</label>
                                <div class="col-md-8">
                                    <select name="subCategory_id" id="subCategory" class="form-control" >
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Title</label>
                                <div class="col-md-8">
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Price</label>
                                <div class="col-md-8">
                                    <input type="number" name="price" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Short Description</label>
                                <div class="col-md-8">
                                    <textarea name="short_description" id="" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Starting Date</label>
                                <div class="col-md-8">
                                    <input type="date" name="starting_date" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Ending Date</label>
                                <div class="col-md-8">
                                    <input type="date" name="ending_date" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Ending Date</label>
                                <div class="col-md-8">
                                    <input type="number" name="total_hour" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Long Description</label>
                                <div class="col-md-8">
                                    <textarea name="long_description" id="longDescription" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success form-control" value="Create Sub Category">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).on('change','#categoryId', function (){
            let categoryId = $(this).val();
            // alert(categoryId);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/get-subcategory-category-wise",
                method: "GET",
                datatype: "JSON",
                data: {category_id: categoryId},
                success: function (response){
                    // console.log(response);
                    $('#subCategory').empty();
                    $.each(response,function(index,subCategory){
                        $('#subCategory').append('<option value="'+subCategory.id+'">'+subCategory.name+'</option>');
                        // console.log(subCategory.name );
                    })
                    // $('#subCategory').html(response);
                }
            })
        });
    </script>
@endsection
