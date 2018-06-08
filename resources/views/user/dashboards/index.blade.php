@extends('user.layouts.app')

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
                    <p>{{ link_to_route('user.tasks.index', 'Task List') }}</p>
                    <p>{{ link_to_route('user.profiles.edit', 'Profile Edit') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
