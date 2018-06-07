@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Detail</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>E-mail</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                    </table>
                </div>
                <div class="panel-footer">
                    {{ Form::open(['route' => ['admin.users.destroy', $user->id], 'method' => 'DELETE']) }}
                        {{ Form::token() }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
