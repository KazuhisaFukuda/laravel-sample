@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Edit</div>
                {{ Form::model($admin, ['route' => ['admin.admins.update', $admin->id], 'method' => 'PUT']) }}
                    <div class="panel-body">
                        {{ Form::token() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{ Form::input('text', 'name', null, ['class' => 'form-control']) }}
                                @include('common.errors', ['errors' => $errors->get('name')])
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{ Form::label('email', 'E-Mail', ['class' => 'col-md-4 control-label']) }}

                            <div class="col-md-6">
                                {{ Form::input('email', 'email', null, ['class' => 'form-control']) }}
                                @include('common.errors', ['errors' => $errors->get('email')])
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {{ Form::label('password', 'Password', ['class' => 'col-md-4 control-label']) }}

                            <div class="col-md-6">
                                {{ Form::input('password', 'password', null, ['class' => 'form-control']) }}
                                @include('common.errors', ['errors' => $errors->get('password')])
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                {{ Form::submit('Update!', ['class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
