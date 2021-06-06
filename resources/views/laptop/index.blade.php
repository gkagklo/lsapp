@extends('layouts.app')
@section('content')



<div class="container">
   
        <div class="search">
                <div class="container">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="form-section">
                        <div class="row">
                          
                                    <form action="/search" method="POST"  role="search" class="navbar-search">
                                        {{csrf_field() }} 

                              <div class="col-md-4">                
                                    <div class="form-group"> 
                                        <div class="serchtile">Κατασκευαστής :</div> 
                                        <label class="sr-only" for="z"></label>
                                        <input type="text" class="form-control" placeholder="" name="z" >
                                    </div>
                              </div>
    
                              <div class="col-md-2">                    
                                    <div class="form-group"> 
                                            <div class="serchtile">Επεξεργαστής :</div> 
                                            <label class="sr-only" for="x"></label>
                                            <input type="text" class="form-control" placeholder="" name="x" >
                                        </div>
                                    </div>
                                  
                              <div class="col-md-2">
                                    <div class="form-group"> 
                                            <div class="serchtile">Κάρτα γραφικών :</div> 
                                            <label class="sr-only" for="c"></label>
                                            <input type="text" class="form-control" placeholder="" name="c" >
                                            </div>
                              </div>

                              <div class="col-md-2">
                              <div class="form-group"> 
                                    <div class="serchtile">Μνήμη RAM :</div> 
                                    <label class="sr-only" for="v"></label>
                                    <div class="input-group">
                                    <input type="number" min="1" class="form-control" placeholder="" name="v" >
                                    <span class="input-group-addon">GB</span>
                                    </div>
                                    </div>
                                </div>

                                
                                <div class="col-md-2">
                                    <div class="form-group"> 
                                        <div class="serchtile">Τιμή :</div>
                                        <label class="sr-only" for="laptop_price"></label>     
                                    <select  required name="laptop_price" class="form-control"  >
                                    <option value=""></option>   
                                    <option value="100"> έως 100&euro; </option>
                                    <option value="200"> έως 200&euro; </option>
                                    <option value="300"> έως 300&euro; </option>
                                    <option value="400"> έως 400&euro; </option>
                                    <option value="500"> έως 500&euro; </option>
                                    <option value="600"> έως 600&euro; </option>
                                    <option value="700"> έως 700&euro; </option>
                                    <option value="800"> έως 800&euro; </option>
                                    <option value="900"> έως 900&euro; </option>
                                    <option value="1000"> έως 1000&euro; </option>
                                    </select>
                                          </div>
                                      </div>
    
                     
                              <div class="col-md-2">
                                  <br>
                                  <button type="submit" class="btn btn-default btn-primary">Αναζήτηση</button>
                              </div>
    
    
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    
      @if(count($laptop) > 0)
      <center><h1>Laptops</h1></center>
        @foreach($laptop as $laptops)
        <div class="well">
                 
<div class="row">
    <div class="col-md-4">

            <br><center><a href="laptops/{{$laptops->id}}"><img class="img-responsive" width="350" height="180" src="/storage/cover_images/{{$laptops->cover_image}}" alt="Περισσότερες πληροφορίες..." title="Περισσότερες πληροφορίες..."></a></center>       
                </div><br>
                <div class="col-md-6">
                    <table class="table table-bordered">                   
                        <tr>
                        <td class="bold">Κατασκευαστής:</td> <td>{{$laptops->fact}}</td>
                        </tr>
                        <tr class="white">
                        <td class="bold">Επεξεργαστής:</td> <td>{{$laptops->cpu}}</td>
                        </tr>
                        <tr>
                        <td class="bold">Μνήμη RAM:</td> <td>{{$laptops->ram}} GB</td>
                        </tr>
                        <tr class="white">
                        <td class="bold">Κάρτα γραφικών:</td> <td>{{$laptops->gpu}}</td>
                        </tr>
                        <tr>
                        <td class="bold">Αποθηκευτικός χώρος:</td> <td>{{$laptops->disc}} GB</td>
                        </tr>
                        <tr class="white">
                        <td class="bold">Κατάσταση:</td> <td>{{$laptops->status}}</td>
                        </tr>
                        <tr>
                        <td class="bold">Τιμή:</td> <td class="timi">{{$laptops->price}} &euro;</td>
                        </tr>
                    </table>
                    <center><a href="/laptops/{{$laptops->id}}" class="btn btn-primary">Διαβάστε περισσότερα..</a></center>
                    <hr>
                        <center><p class="bold">Δημοσιεύτηκε στις {{$laptops->created_at}} από {{$laptops->user->name}} {{$laptops->user->lastname}}.</p></center>
                </div>
            </div>
        </div>
    
        @endforeach
<div class="text-center">
    <div class="pagination">
        {{$laptop->links()}}      
    </div>
</div>
    @else
    <br>
        <center><p style="font-size:25px;"> Δεν βρέθηκαν Laptops. </p></center>
    <br>
    @endif


@endsection

