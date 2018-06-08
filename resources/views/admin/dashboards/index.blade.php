@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <p>{{ link_to_route('admin.admins.index', 'Admin List') }}</p>
                    <p>{{ link_to_route('admin.users.index', 'User List') }}</p>
                    <p>{{ link_to_route('admin.tasks.index', 'Tasks List') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
