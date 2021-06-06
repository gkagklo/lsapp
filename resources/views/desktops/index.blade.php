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
                                        <label class="sr-only" for="fact"></label>
                                        <input type="text" class="form-control" placeholder="" name="fact" >
                                    </div>
                              </div>
    
                              <div class="col-md-2">                    
                                <div class="form-group"> 
                                    <div class="serchtile">Επεξεργαστής :</div> 
                                    <label class="sr-only" for="cpu"></label>
                                    <input type="text" class="form-control" placeholder="" name="cpu" >
                                 </div>
                                    </div>
                                  
                              <div class="col-md-2">
                                    <div class="form-group"> 
                                            <div class="serchtile">Κάρτα γραφικών :</div> 
                                            <label class="sr-only" for="gpu"></label>
                                            <input type="text" class="form-control" placeholder="" name="gpu" >
                                            </div>
                              </div>

                              <div class="col-md-2">
                              <div class="form-group"> 
                                    <div class="serchtile">Μνήμη RAM :</div> 
                                    <label class="sr-only" for="ram"></label>
                                    <div class="input-group">
                                    <input type="number" min="1" class="form-control" placeholder="" name="ram" >
                                    <span class="input-group-addon">GB</span>
                                    </div>
                                    </div>
                                </div>
    
                                <div class="col-md-2">
                                    <div class="form-group"> 
                                        <div class="serchtile">Τιμή :</div>
                                        <label class="sr-only" for="price"></label>     
                                    <select  required name="price" class="form-control" >
                                    <option value=""> </option>
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
    



 
  
      @if(count($posts) > 0)
      <center><h1>Desktops</h1></center> 
        @foreach($posts as $post)       
        <div class="well"> 

                 
            <div class="row">
                <div class="col-md-4">


                 <br> 
                 <center>
                        <a href="desktops/{{$post->id}}"><img class="img-responsive"  width="350" height="180" src="/storage/cover_images/{{$post->cover_image}}" alt="Περισσότερες πληροφορίες..." title="Περισσότερες πληροφορίες..."></a>
                </center>                 
                </div> <br>
                <div class="col-md-6">     
                   
                        <table class="table table-bordered">
                              
                        <tr class="white">
                        <td class="bold">Κατασκευαστής:</td> <td>{{$post->fact}}</td>
                        </tr>
                        <tr>
                        <td class="bold">Επεξεργαστής:</td> <td>{{$post->cpu}}</td>
                        </tr>
                        <tr class="white">
                        <td class="bold">Μνήμη RAM:</td> <td>{{$post->ram}} GB</td>
                        </tr>
                        <tr>
                        <td class="bold">Κάρτα γραφικών:</td> <td>{{$post->gpu}}</td>
                        </tr>
                        <tr class="white">
                        <td class="bold">Αποθηκευτικός χώρος:</td> <td>{{$post->disc}} GB</td>
                        </tr>
                        <tr>
                        <td class="bold">Κατάσταση:</td> <td>{{$post->status}}</td>
                        </tr>
                        <tr class="white">
                        <td class="bold">Τιμή:</td> <td class="timi">{{$post->price}} &euro;</td>
                        </tr>
                        </table>
                        <center><a href="/desktops/{{$post->id}}" class="btn btn-primary">Διαβάστε περισσότερα..</a></center>
                        <hr>
                        <center><p class="bold">Δημοσιεύτηκε στις {{$post->created_at}} από {{$post->user->name}} {{$post->user->lastname}}.</p></center>

                        
                </div>
            </div>
       
        </div>
       
    
        @endforeach
        
<center>
<div class="text-center">
    <div class="pagination">
        {{$posts->links()}}
        
    </div>
</div>
</center>

    @else
    <br>
       <center> <p style="font-size:25px;"> Δεν βρέθηκαν Desktops. </p><center>
    <br>
    @endif
  

@endsection

