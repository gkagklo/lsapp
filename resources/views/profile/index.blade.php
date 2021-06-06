@extends('layouts.app')
@section('content')

<div class="well">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >    
            <div class="panel panel-default">
              <div class="panel-heading"> Λογαριασμός χρήστη </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="/storage/img/{{Auth::user()->pic}}" class="img-circle img-responsive"> </div>
                  <br>
                  <div class=" col-md-9 col-lg-9 "> 
                    <table class="table table-user-information">
                      <tbody>
                        <tr>
                          <td class="bold">Όνομα:</td>
                          <td>{{ucwords(Auth::user()->name)}}</td>
                        </tr>
                        <tr>
                          <td class="bold">Επώνυμο:</td>
                          <td>{{ucwords(Auth::user()->lastname)}}</td>
                        </tr>
                        <tr>
                          <td class="bold">Email:</td>
                          <td><a href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a></td>
                        </tr>
                     
                           <tr>
                               <tr>
                          <td class="bold">Όνομα χρήστη:</td>
                          <td>{{Auth::user()->username}}</td>
                        </tr>
                          <tr>
                          <td class="bold">Χώρα:</td>
                          <td>{{ old('country', $data->country) }}</td>
                        </tr>
                        <tr>
                          <td class="bold">Πόλη:</td>
                          <td>{{ old('city', $data->city) }}</td>
                        </tr>
                        <tr>
                          <td class="bold">Τηλέφωνο 1:</td>
                          <td>{{ old('thl1', $data->thl1) }}</td>
                        </tr>
                        <tr>
                        <td class="bold">Τηλέφωνο 2:</td>
                        <td>{{ old('thl2', $data->thl2) }}</td>      
                        </tr>
                       
                      </tbody>
                    </table>
                    
               
                  </div>
                </div>
              </div>

                   <div class="panel-footer">
                     
                        <center>   <p><a href="{{url('editProfile')}}" class="btn btn-primary" role="button">Αλλαγή στοιχείων</a>
                            <a href="/delete/{{Auth::user()->id}}" class="btn btn-danger" role="button"  onclick="return confirmDel();">Διαγραφή Λογαριασμού</a>  
                        </p> </center>  
                      </div>
              
            </div>
          </div>
        </div>
      </div>
@endsection

