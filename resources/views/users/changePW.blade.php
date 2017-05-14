@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editing profile</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/users/{{ $user->id }}/password">
                            {{ csrf_field() }}

                            {{ method_field('PUT') }}

                            {{--Actual Password--}}
                            <div class="form-group{{ $errors->has('old-password') ? ' has-error' : '' }}">
                                <label for="old-password" class="col-md-4 control-label">Old-password</label>

                                <div class="col-md-6">
                                    <input id="old-password" type="old-password" class="form-control" name="old-password" placeholder="Enter actual password">

                                    @if ($errors->has('old-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('old-password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--New Password--}}
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Enter new password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--Confirm new password--}}
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm new password">
                                </div>
                            </div>

                            {{--User id--}}
                            <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-success">
                                        Save
                                    </button>
                                    <a href="/users">
                                        <button class="btn btn-danger pull-right">
                                            Cancel
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection