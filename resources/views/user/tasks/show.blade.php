@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Task Detail</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Target Date</th>
                            <td>{{ $task->target_date }}</td>
                        </tr>
                        <tr>
                            <th>Content</th>
                            <td>{{ $task->content }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ $task->is_complete ? 'Complete!' : 'UnComplete...' }}</td>
                        </tr>
                    </table>
                </div>
                <div class="panel-footer">
                    {{ Form::open(['route' => ['user.tasks.destroy', $task->id], 'method' => 'DELETE']) }}
                        {{ Form::token() }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
