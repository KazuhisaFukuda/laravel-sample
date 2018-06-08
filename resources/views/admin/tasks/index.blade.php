@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Search</div>
                <div class="panel-body">
                    {{ Form::open(['route' => 'admin.tasks.index', 'method' => 'GET']) }}
                        <div class="col">
                            {{ Form::token() }}
                            {{ Form::label('user_name', 'User Name：') }}
                            {{ Form::input('text', 'user_name', null, ['placeholder' => 'User Name']) }}
                            {{ Form::submit('Search', ['class' => 'btn btn-success']) }}
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    User List
                    {{ link_to_route('admin.tasks.create', 'Create', [], ['class' => 'btn btn-primary']) }}
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Task ID</th>
                                <th>Target Date</th>
                                <th>User Name</th>
                                <th>Content</th>
                                <th>Created_at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->target_date }}</td>
                                    <td>{{ $task->user->name }}</td>
                                    <td>{{ $task->content }}</td>
                                    <td>{{ $task->created_at }}</td>
                                    <td>
                                        {{ link_to_route('admin.tasks.show', 'Detail', $task->id, ['class' => 'btn btn-primary']) }}
                                        {{ link_to_route('admin.tasks.edit', 'Edit', $task->id, ['class' => 'btn btn-primary']) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    {{ $tasks->appends(Request::except('page'))->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
