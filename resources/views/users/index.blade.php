@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="list-group">
                    @foreach($users as $user)
                        <a class="list-group-item" href="/users/{{ $user->id }}">
                        @if(auth()->user()->getAuthIdentifier() == $user->id)
                            <b>{{ $user->name }} {{ $user->surname }}</b>
                        @else
                            {{ $user->name }} {{ $user->surname }}
                        @endif
                            <span class="pull-right">{{ $user->created_at->toFormattedDateString() }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection