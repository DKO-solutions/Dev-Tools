@extends('App')
@section('content')
<main>
    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top:20%;">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('register.custom') }}" method="post">
                            @csrf
                            <div>
                                @if (Session::has('msg'))
                                <div class="text-danger">{{ Session::get('msg') }}</div>
                                <br>
                                @endif
                            </div>
                            <div>
                                @if ($errors->has('email', 'password', 'confirm_password'))
                                <div><span class="text-danger">{{ $errors->first('email') }}</span></div>
                                <div><span class="text-danger">{{ $errors->first('password') }}</span></div>
                                <div><span class="text-danger">{{ $errors->first('confirm_password') }}</span></div>
                                <br>
                                @endif
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Name" name="name"></div>
                            </div>
                            <div class="mb-3">
                                <div class="col-sm-12"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="email"></div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="password"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="confirm_password"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Authentication Pin" name="pin"></div>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@stop