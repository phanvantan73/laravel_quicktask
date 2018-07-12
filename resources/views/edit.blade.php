<!-- resources/views/edit.blade.php -->

@extends('layouts.app')

@section('content')

    <h1>{{ trans('message.edit') }}</h1>

    {!! Form::model($task, ['method' => 'PATCH', 'action' => ['TasksController@update', $task->id]]) !!}
    {!! Form::token() !!}

    <div class="form-group">

        {!! Form::label('name', trans('message.name'), ['class' => 'col-sm-3 control-label']) !!}

        <div class="col-sm-6">

            {!! Form::text('name', null, ['class' => 'form-control']) !!}

        </div>
    </div>

    {!! Form::submit(trans('message.update'), ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}

@endsection
