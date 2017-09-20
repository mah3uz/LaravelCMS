
@extends('../../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New User</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="users-panel card">

                            <form action="{{ route('users.update', $user->id) }}" method="POST">

                                {{ method_field('PUT') }}
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" value="{{ $user->name }}" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Enter name">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your information with anyone else.</small>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" value="{{ $user->email }}" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your information with anyone else.</small>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelp" placeholder="Enter name">
                                    {{--<b-checkbox name="auto_generate" :checked="true">Auto generate password</b-checkbox>--}}
                                    <small id="emailHelp" class="form-text text-muted">Password should be at least 8 character.</small>
                                </div>

                                <button type="submit" class="btn btn-primary f-right">Update</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
