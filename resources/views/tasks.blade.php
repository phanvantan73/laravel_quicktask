<!-- resources/views/tasks.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
    @include('common.errors')

    <!-- New Task Form -->
        {!! Form::open(['url' => 'task', 'method' => 'post', 'class' => 'form-horizontal']) !!}
        {!! Form::token() !!}

        <!-- Task Name -->
            <div class="form-group">
                {!! Form::label('task', trans('message.task'), ['class' => 'col-sm-3 control-label']) !!}

                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('message.enter_name'), 'id' => 'task-name']) !!}
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::submit(trans('message.add_task'), ['class' => 'btn btn-success', 'name' => 'add']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>

    <!-- TODO: Current Tasks -->
    @if (count($tasks))
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ trans('message.current_task') }}
            </div>

            <div class="panel-body">
                <table class="table table-hover task-table">

                    <!-- Table Headings -->
                    <thead>
                    <th>{{ trans('message.task') }}</th>
                    <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>

                            <td>
                                <!-- TODO: Delete Button -->
                                {!! Form::open(['url' => 'task/' . $task->id, 'method' => 'delete'])!!}
                                {!! Form::token() !!}
                                {!! Form::submit(trans('message.delete'), ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}

                                {!! Html::linkAction('TasksController@edit', trans('message.edit'), ['id' => $task->id]) !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
