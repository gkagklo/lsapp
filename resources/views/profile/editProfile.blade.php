@extends('layouts.app')
@section('content')
<div class="well">
    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >  
            <div class="panel panel-default">
                <div class="panel-heading">Λογαριασμός χρήστη</div>   
                    @foreach ($data as $profiledata)                              
                <br>
                
                <form action="{{url('/updateProfile')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                <div class="panel-body">
                <div class="text-center">  
                <center><img  src="/storage/img/{{Auth::user()->pic}}"  alt="" class="img-circle img-responsive" width="300" height="300"/><br>   </center>
                <a href="{{url('/')}}/changePhoto" class=" btn btn-primary">Αλλαγή εικόνας</a><br><br>
                <p style="font-size:25px;"> {{ucwords(Auth::user()->name)}} {{ucwords(Auth::user()->lastname)}}</p>
                </div>
    
                    <div class="form-row">
                        <div class="form-group col-md-6"> 
                            <label for="name">Όνομα: </label>
                            <input type="text" name="name"   class="form-control"  placeholder="" value="{{Auth::user()->name}}" >
                        </div> 

                        <div class="form-group col-md-6"> 
                                <label for="lastname">Επώνυμο: </label>
                                <input type="text" name="lastname"   class="form-control"  placeholder="" value="{{Auth::user()->lastname}}" >
                        </div> 
                    </div>

                    <div class="form-row">
                            <div class="form-group col-md-6"> 
                                <label for="email">Email: </label>
                                <input type="text" name="email"  class="form-control" placeholder="" value="{{Auth::user()->email}}" >
                            </div>

                            <div class="form-group col-md-6"> 
                                    <label for="username">Όνομα χρήστη: </label>
                                    <input type="text" name="username"  class="form-control" placeholder="" value="{{Auth::user()->username}}" >
                                </div>
                    </div>


                <div class="form-row">
                        <div class="form-group col-md-6"> 
                                <label for="country">Χώρα: </label>
                                <input type="text" name="country"  class="form-control" placeholder="" value="{{ old('country', $profiledata->country) }}" >
                        </div>

                    <div class="form-group col-md-6"> 
                            <label for="city">Πόλη: </label>
                        <input type="text" name="city"   class="form-control"  placeholder="" value="{{ old('city', $profiledata->city) }}" >
                    </div> 

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6"> 
                        <label for="thl1">Τηλέφωνο 1: </label>
                        <input type="text" name="thl1"  class="form-control" placeholder="" value="{{ old('thl1', $profiledata->thl1) }}" >
                    </div>

                        <div class="form-group col-md-6"> 
                            <label for="thl2">Τηλέφωνο 2: </label>
                            <input type="text" name="thl2"  class="form-control" placeholder="" value="{{ old('thl2', $profiledata->thl2) }}" >
                          
                        </div>
                        
                </div>
            
            </div>
            
            <div class="panel-footer">     
                <center>
                <a href="{{url('/profile')}}/{{ Auth::user()->slug }}" class="btn btn-primary">Πίσω</a>
                <input type="submit" class="btn btn-success">
                </center>
                <br>
                <center>   <a href="/delete/{{Auth::user()->id}}" class="btn btn-danger" role="button"  onclick="return confirmDel();">Διαγραφή Λογαριασμού</a>  </center> 
            </div>

        </form>
        </div>
        </div>
        <br><br>
        @endforeach             
    </div>       
</div>       
@endsection

