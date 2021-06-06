@extends('layouts.app')
@section('content')

<div class="container">
    <div class="well">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Ανεβάστε μια εικόνα</div>
            </div>  
                <center><img  src="/storage/img/{{Auth::user()->pic}}"  alt="" class="img-circle img-responsive" width="300" height="300"/><br>   </center>
              
                <form action="{{url('/')}}/uploadPhoto" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input type="file" name="pic" class="form-control"/><br>
                    <input type="submit" class="btn btn-success" name="btn"/>
                </form>    


            
            </div>
        </div>
    </div>

@endsection

