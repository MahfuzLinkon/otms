@extends('front.master')
@section('title')
    {{ $category->name }} Course Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <h3 class="text-center py-3">{{ $category->name }} Courses</h3>
            </div>
            <div class="row">
                @forelse($courses as $course)
                    <div class="col-md-3 mt-2">
                        <div class="card ">
                            <img src="{{ asset($course->image) }}" class="card-img-top" style="height: 220px" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $course->title }}</h5>
                                <p class="mb-0">Date: <small>{{ $course->starting_date.' - '.$course->ending_date }}</small></p>
                                <p class="mb-0">Hour: {{ $course->total_hour }}</p>
                            </div>
                            <div class="card-footer d-flex bg-transparent py-0 ">
                                <p class="mt-2">TK {{ $course->price }}</p>
                                <a class="btn btn-info ms-auto text-primary bg-transparent border-0">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3>Course Not Available</h3>
                @endforelse
            </div>
        </div>
    </section>
@endsection
