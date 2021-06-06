<div id="header">
        <img class="img-responsive" src="/images/7.jpg">
  </div>



  <nav class="navbar navbar-inverse">
        
        <div class="container-fluid">
              
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <!-- Branding Image -->   
            <a class="navbar-brand" href="{{ url('/') }}">                
              {{ config('app.name') }}                 
            </a>    
        </div>
       
        <div  class="collapse navbar-collapse" id="myNavbar" >
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>
                <ul class="nav navbar-nav" >
                        <li class="nav-item"><a href="/"class="fa fa-home"> Αρχική</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Αναζήτηση <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/desktops"><img src="/images/desktop-icon.png"/> Desktops </a></li><hr>
                                <li><a href="/laptops"><img src="/images/laptop-icon.png"/> Laptops </a></li><hr>
                                <li><a href="/phones"><img src="/images/smartphone-icon.png"/> Κινητά </a></li><hr>
                                <li><a href="/tablets"><img src="/images/tablet-icon.png"/> Tablets </a></li><hr>
                                <li><a href="/periferiaka"><img src="/images/periferiaka-icon.png"/> Περιφερειακά </a></li>
                            </ul>
                        </li> 
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Καταχώρηση <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/desktops/create"><img src="/images/desktop-icon.png"/> Desktops </a></li><hr>
                                <li><a href="/laptops/create"><img src="/images/laptop-icon.png"/> Laptops </a></li><hr>
                                <li><a href="/phones/create"><img src="/images/smartphone-icon.png"/> Κινητά </a></li><hr>
                                <li><a href="/tablets/create"><img src="/images/tablet-icon.png"/> Tablets </a></li><hr>
                                <li><a href="/periferiaka/create"><img src="/images/periferiaka-icon.png"/> Περιφερειακά </a></li>
                            </ul>
                        </li> 
                        <li><a href="/contact">Επικοινωνία</a></li> 
                        <li><a href="/services">Υπηρεσίες</a></li> 
                </ul>
                   
                 
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right"> 
                 
          
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}"> <span class="glyphicon glyphicon-user"></span> Σύνδεση </a></li>
                    <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span> Εγγραφή </a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img src="/storage/img/{{Auth::user()->pic}}"  alt="" class="img-circle" width="30" height="30"/>   {{ ucwords(Auth::user()->name)}}  {{ ucwords(Auth::user()->lastname) }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">

                                <li>
                                <div class="navbar-content">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img class="img-responsive" src="/storage/img/{{Auth::user()->pic}}"
                                                    alt="Alternate Text"/>
                                                <p class="small">
                                                    <a  style="color:white;" href="{{ url('/changePhoto') }}">Αλλαγή εικόνας</a></p>
                                            </div>
                                            <div class="col-md-7">
                                                    <span style="font-size:22px;">{{ ucwords(Auth::user()->name)}} {{ ucwords(Auth::user()->lastname) }} </span>
                                                    <p style="color:white;" class="text-muted small" >
                                                            {{Auth::user()->email}}</p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="{{url('/profile')}}/{{ Auth::user()->slug }}" class="btn btn-primary btn-sm active"><img src="/images/pp.png" /> Στοιχεία χρήστη </a>
                                                </div>
                                            </div>
                                        </div>
                                  
                                
                                  
                                                <div class="navbar-footer-content">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="/home" class="btn btn-default btn-sm pull-left"><img src="/images/home.png"/> Σελίδα Χρήστη </a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="{{ route('logout') }}" class="btn btn-default btn-sm pull-right"   onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();"> <img src="/images/logout.png"/> Αποσύνδεση </a>
                                                        
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    {{ csrf_field() }}
                                                                </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li> 
                                        </ul>
                                        
                                        </li>
                                       
                               
                       
                    
                @endif
                    
            </ul>
        </div>
    
    </div>
</nav>













