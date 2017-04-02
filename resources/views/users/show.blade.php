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
                    <div class="panel-body">
                        Phone: {{ $user->phone }}
                    </div>
                    <div class="panel-body">
                        DNI: {{ $user->dni }}
                    </div>
                    <div class="panel-body">
                        Address: {{ $user->address }}
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary" onclick="window.location='{{ url('/edit') }}'">
                        Edit
                    </button>
                </div>
                <div>
                    <a href="/users"><button class="btn btn-primary">
                        Go Back
                    </button></a>
                </div>
            </div>
        </div>
    </div>
@endsection