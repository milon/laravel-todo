@extends('layouts.master')

@section('content')
    <div class="text-center">
        <h1>Welcome to Laravel ToDo App</h1>
        <hr/>

        @include('partials.flash_notification')

        <p>For any query please contact</p>

        <h3>Nuruzzaman Milon</h3>
        <h4><a href="http://milon.im">http://milon.im</a></h4>
    </div>
@endsection