@extends('App')
@section('content')
<main>
    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top:20%;">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('login.custom') }}" method="post">
                            @csrf
                            <div>
                                @if ($errors->has('email', 'password'))
                                <div><span class="text-danger">{{ $errors->first('email') }}</span></div>
                                <div><span class="text-danger">{{ $errors->first('password') }}</span></div>
                                <br>
                                @endif
                            </div>
                            <div class="mb-3">
                                <input class="form-control form-control-user" type="email" placeholder="Enter Email Address..." name="email">
                            </div>
                            <div class="mb-3">
                                <input class="form-control form-control-user" type="password" placeholder="Password" name="password">
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@stop