
@extends('../../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading p-b-20">
                        Showing User Details
                        <a class="btn btn-primary f-right" href="{{ route('users.edit', $user->id) }}">Edit User</a>
                    </div>

                    <div class="panel-body">

                        <div class="users-panel card">

                            <div class="form-group">
                                <label for="name">Name</label>
                                <pre>{{ $user->name }}</pre>
                            </div>

                            <div class="form-group">
                                <label for="name">Email</label>
                                <pre>{{ $user->email }}</pre>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
