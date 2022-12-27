@extends('admin.master')
@section('title')
    Manage User Page
@endsection
@section('body')
    <div class="row py-5">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Manage User</h3>
                    <a href="{{ route('users.create') }}" class="btn btn-primary float-end">Create</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th style="width: 18%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->role_type == 1)
                                    <span class="text-primary fw-bold">Admin</span>
                                @elseif($user->role_type == 2)
                                    <span class="text-info fw-bold">Trainer</span>
                                @elseif($user->role_type == 3)
                                    <span class=" fw-bold">Student</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-info">Edit</a>
                                <form action="{{ route('users.destroy', $user->id) }}" onsubmit="return confirm('Are you sure want to delete this?')" style="display: inline-block" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
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
@endsection
