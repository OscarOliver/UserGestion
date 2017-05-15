@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Users</h1>
                <div class="list-group">
                    @foreach($users as $user)
                        <a class="list-group-item" href="/users/{{ $user->id }}">
                            {{ $user->name }} {{ $user->surname }}
                        @if(auth()->user()->getAuthIdentifier() == $user->id)
                            <span class="label label-success">you</span>
                        @endif
                            <span class="pull-right">{{ $user->created_at->toFormattedDateString() }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection