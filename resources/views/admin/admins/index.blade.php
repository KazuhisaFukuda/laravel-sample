@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Search</div>
                <div class="panel-body">
                    {{ Form::open(['route' => 'admin.admins.index', 'method' => 'GET']) }}
                        <div class="col">
                            {{ Form::label('name', 'Name：') }}
                            {{ Form::input('text', 'name', null, ['placeholder' => 'Name']) }}
                            {{ Form::label('name', 'E-Mail：') }}
                            {{ Form::input('text', 'email', null, ['placeholder' => 'E-Mail']) }}
                            {{ Form::submit('Search', ['class' => 'btn btn-success']) }}
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Admin List
                    {{ link_to_route('admin.admins.create', 'Create', [], ['class' => 'btn btn-primary']) }}
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admins as $admin)
                                <tr>
                                    <td>{{ $admin->id }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->created_at }}</td>
                                    <td>{{ $admin->updated_at }}</td>
                                    <td>
                                        {{ link_to_route('admin.admins.show', 'Detail', $admin->id, ['class' => 'btn btn-primary']) }}
                                        {{ link_to_route('admin.admins.edit', 'Edit', $admin->id, ['class' => 'btn btn-primary']) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    {{ $admins->appends(Request::except('page'))->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
