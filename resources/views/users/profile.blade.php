@extends('layouts.master')

@section('content')
    <h1>User Profile</h1>
    <hr/>

    {!! Form::model($user, ['method' => 'put', 'route' => ['user.update', $user->id], 'class' => 'form-horizontal', 'role' => 'form']) !!}
        @include('users._form')

        <!-- submit button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                <a href="{{ url('/todo') }}" class="btn btn-default">Cancel</a>
            </div>
        </div>
    {!! Form::close() !!}
@endsection