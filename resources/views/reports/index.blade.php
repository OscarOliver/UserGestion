@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a class="btn btn-info" href="/reports/users_by_name">User name</a>
                <a class="btn btn-info" href="/reports/users_by_dni">DNI</a>
                <a class="btn btn-info" href="/reports/users_by_city">City</a>
            </div>
        </div>
    </div>

@endsection