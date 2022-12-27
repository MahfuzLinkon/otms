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
                        <form action="{{ route('users.update', $user->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Full Name</label>
                                <input class="form-control" name="name" type="text" value="{{ $user->name }}" id="fullname" placeholder="Enter your name" required>
                            </div>

                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" value="{{ $user->email }}" name="email" type="email" id="emailaddress" required placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Role Type</label>
                                <select name="role_type" class="form-control">
                                    <option disabled selected >--Select role for user--</option>
                                    <option {{ $user->role_type == 1 ? 'selected' : '' }} value="1">Admin</option>
                                    <option {{ $user->role_type == 2 ? 'selected' : '' }} value="2">Trainer</option>
                                    <option {{ $user->role_type == 3 ? 'selected' : '' }} value="3">Student</option>
                                </select>
                            </div>

                            <div class="mb-3 float-end">
                                <button class="btn btn-success" type="submit"> Update User </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
