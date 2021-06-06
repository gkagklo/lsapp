
@extends('layouts.app')
@section('content')
<div class="jumbotron">  
  <div class="row">
    <center>
      <h1> Καλως ήρθατε στην ιστοσελίδα μας.</h1>
      <p>Εδώ μπορείτε να πουλήσετε ή να αγοράσετε <br> ηλεκτρονικές συσκευές εύκολα και γρήγορα.</p> 
      <img class="img-responsive"  src="/images/ff.png"/> 
    </center>
  </div>
</div>          
     <center><h2>Κατηγορίες προϊόντων:</h2></center>
      <br>
      <div class="row">      
          <div id="myCarousel" class="carousel slide" data-ride="carousel">        
        <div class="carousel-inner">
                <div class="item active">
                      <div class="row">
                            <div class="col-md-4"><a href="/desktops" class="thumbnail"><img  src="/images/desktop.jpg" title="Desktops" alt="Desktops"/></a><p class="port">Desktops</p></div>
               <div class="col-md-4"> <a href="/laptops" class="thumbnail"><img  src="/images/laptop.jpg" title="Laptops" alt="Laptops" /> </a><p class="port">Laptops</p></div>
                <div class="col-md-4"><a href="/phones" class="thumbnail"><img   src="/images/smartphone.jpg" title="Κινητά" alt="Κινητά"/></a><p class="port">Κινητά</p></div>
                      </div>
               </div>
               
               <div class="item">
                      <div class="row">
                            <div class="col-md-4"><a href="/tablets" class="thumbnail"><img  src="images/tablet.jpg" title="Tablets" alt="Tablets" /></a><p class="port">Tablet</p></div>
                         <div class="col-md-4"><a href="/periferiaka" class="thumbnail"><img  src="images/periferiaka.jpg" title="Περιφεριακά" alt="Περιφεριακά" /></a><p class="port">Περιφερειακά</p></div>
                      </div>
                </div>
          </div>    
           <!-- Left and right controls -->       
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
    </div>
    </div>   
@endsection
