@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="list-group">
                    @foreach($users as $user)
                        <a class="list-group-item" href="/users/{{ $user->id }}">{{ $user->name }} {{ $user->surname }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection