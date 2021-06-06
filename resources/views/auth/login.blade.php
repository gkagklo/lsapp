@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Σύνδεση:</div>
               
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <img class="center" src="/images/loginform.png"/> 
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">
                                <img src="/images/username.png"/> 'Ονομα χρήστη: </label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus >
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"><img src="/images/pass.png"/>  Κωδικός πρόσβασης: </label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" data-toggle="password"  data-message="Kάντε κλικ εδώ για να εμφανίσετε / αποκρύψετε τον κωδικό πρόσβασης" required >      
                            </div> 
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Αποθήκευση κωδικού πρόσβασης
                                    </label>
                                </div>
                            </div>
                        </div><br>
                        <div class="form-group">
                                <div class="text-center">
                            <div class="row">
                                <button type="submit" class="btn btn-primary">
                                    <img src="/images/login.png" />
                                    Σύνδεση
                                </button>
                            </div><br>

                                <div class="row">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Ξεχάσατε το λογαριασμό σας;
                                </a>
                            </div>
                                <div class="row">
                                <a class="btn btn-link" href="{{ route('auth.activate.resend') }}">
                                       Αποστολή email ενεργοποίησης λογαριασμού
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
