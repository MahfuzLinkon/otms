@extends('front.master')
@section('title')
    Contact Page
@endsection
@section('body')
    <section class="py-5" style="min-height: 700px">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Contact Us</h2>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-transparent">
                            <h4 class="text-center">Contact Form</h4>
                        </div>
                        <div class="card-body py-5">
                            <form action="" method="post">
                                <div class="row">
                                    <label for="" class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-3">Phone</label>
                                    <div class="col-md-9">
                                        <input type="text" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-3">Your Message</label>
                                    <div class="col-md-9">
                                        <textarea name="message" id="" cols="30" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-outline-success" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14607.609767991682!2d90.3932688!3d23.7508581!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e70f117856f0c22!2sBASIS%20Institute%20of%20Technology%20%26%20Management%20(BITM)!5e0!3m2!1sen!2sbd!4v1670945120000!5m2!1sen!2sbd" width="600" height="460" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
