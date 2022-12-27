@extends('admin.master')
@section('title')
    Create User Page
@endsection
@section('body')
    <section class="py-3">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-start">Create New User</h4>
                        <a href="{{ route('users.index') }}" class="btn btn-primary float-end">Manage</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Full Name</label>
                                <input class="form-control" name="name" type="text" id="fullname" placeholder="Enter your name" required>
                            </div>

                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" name="email" type="email" id="emailaddress" required placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Enter your password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Role Type</label>
                                <select name="role_type" class="form-control">
                                    <option disabled selected >--Select role for user--</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Trainer</option>
                                    <option value="3">Student</option>
                                </select>
                            </div>

                            <div class="mb-3 float-end">
                                <button class="btn btn-success" type="submit"> Create User </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
