@extends('layouts.master')

@section('content')
    <h1>Create New Todo</h1>
    <hr/>

    {!! Form::open(['url' => '/todo', 'class' => 'form-horizontal', 'role' => 'form']) !!}
        <!-- Name Field -->
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Todo Name', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                <span class="help-block text-danger">
                    {{ $errors -> first('name') }}
                </span>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Create Button', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    {!! Form::close() !!}
@endsection