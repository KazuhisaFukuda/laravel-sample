@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Edit</div>
                {{ Form::model($task, ['route' => ['admin.tasks.update', $task->id], 'method' => 'PUT']) }}
                    <div class="panel-body">
                        {{ Form::token() }}
                        <div class="form-group{{ $errors->has('target_date') ? ' has-error' : '' }}">
                            {{ Form::label('target_date', 'Target Date', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{ Form::input('date', 'target_date', null, ['class' => 'form-control']) }}
                                @include('common.errors', ['errors' => $errors->get('target_date')])
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                            {{ Form::label('user_id', 'User', ['class' => 'col-md-4 control-label']) }}

                            <div class="col-md-6">
                                {{ Form::select('user_id', \App\SelectBoxHelper::userList(), null, ['class' => 'form-control', 'placeholder' => 'Please select']) }}
                                @include('common.errors', ['errors' => $errors->get('user_id')])
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            {{ Form::label('content', 'Content', ['class' => 'col-md-4 control-label']) }}

                            <div class="col-md-6">
                                {{ Form::input('text', 'content', null, ['class' => 'form-control']) }}
                                @include('common.errors', ['errors' => $errors->get('content')])
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('priority_no') ? ' has-error' : '' }}">
                            {{ Form::label('priority_no', 'Priority No', ['class' => 'col-md-4 control-label']) }}

                            <div class="col-md-6">
                                {{ Form::input('number', 'priority_no', null, ['class' => 'form-control', 'min' => '1', 'max' => '5']) }}
                                @include('common.errors', ['errors' => $errors->get('priority_no')])
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
