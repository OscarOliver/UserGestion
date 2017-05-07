@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $user->name }} {{ $user->surname }}</div>

                    <div class="panel-body">
                        Email: {{ $user->email }}
                    </div>
                    @if(auth()->user()->getAuthIdentifier() == $user->id)
                        @if($user->phone)
                        <div class="panel-body">
                            Phone: {{ $user->phone }}
                        </div>
                        @endif
                        @if($user->dni)
                        <div class="panel-body">
                            DNI: {{ $user->dni }}
                        </div>
                        @endif
                        @if($user->address)
                        <div class="panel-body">
                            Address: {{ $user->address }}
                        </div>
                        @endif
                    @endif
                </div>
                    <div>
                        <a href="/users"><button class="btn btn-default">
                            Go Back
                        </button></a>
                        @if(auth()->user()->getAuthIdentifier() == $user->id)
                        <a href="/users/{{ $user->id }}/edit"><button class="btn btn-primary">
                            Edit
                        </button></a>
                        @endif
                    </div>
                <div>
                </div>
            </div>
        </div>
    </div>
@endsection