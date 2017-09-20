
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @include('_includes.nav.manage')

            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading p-b-20">
                        <span>Manage Your Users</span>
                        <a class="btn btn-primary f-right" href="{{ route('users.create') }}">Add New User</a>
                    </div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="users-panel card">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach($users as $user)

                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name  }}</td>
                                        <td>{{ $user->email  }}</td>
                                        <td>{{ $user->created_at  }}</td>
                                        <td><a class="btn btn-primary" href="{{ route('users.edit', $user->id)  }}">Edit</a></td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                        <div class="pagination f-right">{{ $users->links()  }}</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
