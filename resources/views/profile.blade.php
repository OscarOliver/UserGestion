@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Auth::user()->name }} {{ Auth::user()->surname }}</div>

                    <div class="panel-body">
                        Email: {{ Auth::user()->email }}
                    </div>
                    <div class="panel-body">
                        Phone: {{ Auth::user()->phone }}
                    </div>
                    <div class="panel-body">
                        DNI: {{ Auth::user()->dni }}
                    </div>
                    <div class="panel-body">
                        Address: {{ Auth::user()->address }}
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary" onclick="window.location='{{ url('/edit') }}'">
                        Edit
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection