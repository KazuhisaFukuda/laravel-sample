@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Task List
                    {{ link_to_route('user.tasks.create', 'Create', [], ['class' => 'btn btn-primary']) }}
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Target Date</th>
                                <th>Content</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{ $task->target_date }}</td>
                                    <td>{{ $task->content }}</td>
                                    <td>
                                        @if($task->is_complete)
                                            {{ Form::open(['route' => ['user.tasks.un_complete', $task->id], 'method' => 'PUT']) }}
                                            {{ Form::token() }}
                                            {{ Form::submit('Complete!', ['class' => 'btn btn-primary']) }}
                                            {{ Form::close() }}
                                        @else
                                            {{ Form::open(['route' => ['user.tasks.complete', $task->id], 'method' => 'PUT']) }}
                                            {{ Form::token() }}
                                            {{ Form::submit('UnComplete...', ['class' => 'btn btn-warning']) }}
                                            {{ Form::close() }}
                                        @endif
                                    </td>
                                    <td>
                                        {{ link_to_route('user.tasks.show', 'Detail', $task->id, ['class' => 'btn btn-primary']) }}
                                        {{ link_to_route('user.tasks.edit', 'Edit', $task->id, ['class' => 'btn btn-primary']) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    {{ $tasks->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
