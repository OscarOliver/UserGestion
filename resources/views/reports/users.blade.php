<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'User Management') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: transparent;
        }
    </style>
</head>
<body>
<div>
    <h1>Users by {{ $title }}</h1>
    @php
        $date = date("d/M/Y");
        $time = date("H:i");
    @endphp
    <p><b>Date:</b> {{ $date }} - {{ $time }}</p>
</div>
<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>DNI</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Created at</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->dni }}</th>
                <td>{{ $user->name }} {{ $user->surname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->created_at->toFormattedDateString() }}</td>
                <td>
                    <a class="btn btn-info" href="http://usermanagement.com/users/{{ $user->id }}">
                        view
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>