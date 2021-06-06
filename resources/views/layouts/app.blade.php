<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{{ asset('images/pro.png') }}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('bootstrap/uu/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('bootstrap/uu/bootstrap.min.css') }}" rel="stylesheet" type="text/css"> 
   
</head>
<body>
  
        @include('inc.navbar')
        @include('inc.messages')
        @yield('content')
        @include('inc.footer')

  <!-- Bootstrap core JavaScript -->

  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
  CKEDITOR.replace( 'article-ckeditor' );
  </script>
  <script src="/bootstrap/js/bootstrap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
  <script src="/bootstrap/js/main.js"></script>
  <script src="/bootstrap/js/captcha.js"></script>
 
  <!-- google map -->
    <script>
    function initMap(){

        //Map options
        var options = {
            zoom:14,
            center:{lat:39.627644,lng:22.382316}
        }
        //New Map
        var map=new
        google.maps.Map(document.getElementById('map'),options);
        
        //Add Marker
        var marker = new google.maps.Marker({
            position:{lat:39.625776,lng:22.380127},
            map:map
        });
        
        //Infowindow
        var infoWindow = new google.maps.InfoWindow({
            content:'<h1>procomputerades</h1>'
        });
        marker.addListener('click',function(){
            infoWindow.open(map,marker);
        })
    }
    </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI7InBGtLRBUut_eBRQjxqkwxC794KWCM&callback=initMap"
  async defer></script>

</script>
   
  <!-- Delete Function -->

  <script>
    function confirmDelete() {

    var result = confirm('Είστε βέβαιος ότι θέλετε να διαγράψετε τη δημοσίευση σας ;');
    
    if (result) {
            return true;
        } else {
            return false;
        }
    }   
</script>


<script>
    function confirmDel() {

    var result = confirm('Είστε βέβαιος ότι θέλετε να διαγράψετε το λογαριασμό σας ;');
    
    if (result) {
            return true;
        } else {
            return false;
        }
    }   
</script>

  <!-- Show hiden password -->
  <script type="text/javascript">
	$("#password").password('toggle');
</script>



<script>
    function showData() {
        var theSelect = demoform.color;
        var thirdP = document.getElementById('thirdP');
        thirdP.innerHTML = ('Its text is: ' + theSelect[theSelect.selectedIndex].text);
    }
     </script>


<script>
function show(aval) {
    if (aval == "Πληκτρολόγια") {
    hiddendpi.style.display='none';
    hiddenpliktra.style.display='none';
    hiddenvolume.style.display='none';
    hiddenmicro.style.display='none';
    hiddenpower.style.display='none';
    hiddenchannels.style.display='none';
    hiddenresolution.style.display='none';
    hiddenfps.style.display='none';
    hiddenmic.style.display='none';
    hiddenusage.style.display='inline-block';
    hiddenmech.style.display='inline-block';
    hiddenrgb.style.display='inline-block';
   

    Form.fileURL.focus();
    }
    if (aval == "Ποντίκια") {
        hiddenusage.style.display='none';
        hiddenmech.style.display='none';
        hiddenrgb.style.display='none';
        hiddenvolume.style.display='none';
        hiddenmicro.style.display='none';
        hiddenpower.style.display='none';
        hiddenchannels.style.display='none';
        hiddenresolution.style.display='none';
        hiddenfps.style.display='none';
        hiddenmic.style.display='none';
        hiddendpi.style.display='inline-block';
        hiddenpliktra.style.display='inline-block';
    Form.fileURL.focus();
    } 
    if (aval == "Ακουστικά") {
        hiddenusage.style.display='none';
        hiddenmech.style.display='none';
        hiddenrgb.style.display='none';
        hiddendpi.style.display='none';
        hiddenpliktra.style.display='none';
        hiddenpower.style.display='none';
        hiddenchannels.style.display='none';
        hiddenresolution.style.display='none';
        hiddenfps.style.display='none';
        hiddenmic.style.display='none';
        hiddenvolume.style.display='inline-block';
        hiddenmicro.style.display='inline-block';

    Form.fileURL.focus();
    } 

     if (aval == "Ηχεία") {
        hiddenusage.style.display='none';
        hiddenmech.style.display='none';
        hiddenrgb.style.display='none';
        hiddendpi.style.display='none';
        hiddenpliktra.style.display='none';
        hiddenvolume.style.display='none';
        hiddenmicro.style.display='none';
        hiddenresolution.style.display='none';
        hiddenfps.style.display='none';
        hiddenmic.style.display='none';
        hiddenpower.style.display='inline-block';
        hiddenchannels.style.display='inline-block';

    Form.fileURL.focus();
    } 
  
    if (aval == "Κάμερες") {
        hiddenusage.style.display='none';
        hiddenmech.style.display='none';
        hiddenrgb.style.display='none';
        hiddendpi.style.display='none';
        hiddenpliktra.style.display='none';
        hiddenvolume.style.display='none';
        hiddenmicro.style.display='none';
        hiddenpower.style.display='none';
        hiddenchannels.style.display='none';
        hiddenresolution.style.display='inline-block';
        hiddenfps.style.display='inline-block';
        hiddenmic.style.display='inline-block';

    Form.fileURL.focus();
    } 


    else{
    hiddenusage.style.display='none';
    hiddenmech.style.display='none';
    hiddenrgb.style.display='none';
    hiddendpi.style.display='none';
    hiddenpliktra.style.display='none';
    hiddenpvolume.style.display='none';
    hiddenmicro.style.display='none';
    hiddenpower.style.display='none';
    hiddenchannels.style.display='none';
    hiddenresolution.style.display='none';
    hiddenfps.style.display='none';
    hiddenmic.style.display='none';
    }
  }
  </script>


<!-- Add fancyBox gallery gia show pages-->
<link rel="stylesheet" href="/bootstrap/source/jquery.fancybox.css?" type="text/css" media="screen" property='stylesheet'/>
<script type="text/javascript" src="/bootstrap/source/jquery.fancybox.pack.js?"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>





<!-- upload image on create page-->
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script >function initImageUpload(box) {
  let uploadField = box.querySelector('.image-upload');

  uploadField.addEventListener('change', getFile);

  function getFile(e){
    let file = e.currentTarget.files[0];
    checkType(file);
  }
  
  function previewImage(file){
    let thumb = box.querySelector('.js--image-preview'),
        reader = new FileReader();

    reader.onload = function() {
      thumb.style.backgroundImage = 'url(' + reader.result + ')';
    }
    reader.readAsDataURL(file);
    thumb.className += ' js--no-default';
  }

  function checkType(file){
    let imageType = /image.*/;
    if (!file.type.match(imageType)) {
      throw 'Datei ist kein Bild';
    } else if (!file){
      throw 'Kein Bild gewählt';
    } else {
      previewImage(file);
    }
  }
  
}

// initialize box-scope
var boxes = document.querySelectorAll('.box');

for(let i = 0; i < boxes.length; i++) {if (window.CP.shouldStopExecution(1)){break;}
  let box = boxes[i];
  initDropEffect(box);
  initImageUpload(box);
}
window.CP.exitedLoop(1);




/// drop-effect
function initDropEffect(box){
  let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;
  
  // get clickable area for drop effect
  area = box.querySelector('.js--image-preview');
  area.addEventListener('click', fireRipple);
  
  function fireRipple(e){
    area = e.currentTarget
    // create drop
    if(!drop){
      drop = document.createElement('span');
      drop.className = 'drop';
      this.appendChild(drop);
    }
    // reset animate class
    drop.className = 'drop';
    
    // calculate dimensions of area (longest side)
    areaWidth = getComputedStyle(this, null).getPropertyValue("width");
    areaHeight = getComputedStyle(this, null).getPropertyValue("height");
    maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

    // set drop dimensions to fill area
    drop.style.width = maxDistance + 'px';
    drop.style.height = maxDistance + 'px';
    
    // calculate dimensions of drop
    dropWidth = getComputedStyle(this, null).getPropertyValue("width");
    dropHeight = getComputedStyle(this, null).getPropertyValue("height");
    
    // calculate relative coordinates of click
    // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
    x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10)/2);
    y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10)/2) - 30;
    
    // position drop and animate
    drop.style.top = y + 'px';
    drop.style.left = x + 'px';
    drop.className += ' animate';
    e.stopPropagation();
    
  }
}
//# sourceURL=pen.js
</script>


<!--epistrofi stin korifi selidas -->
<script>
$(document).ready(function(){
    $(window).scroll(function () {
           if ($(this).scrollTop() > 50) {
               $('#back-to-top').fadeIn();
           } else {
               $('#back-to-top').fadeOut();
           }
       });
       // scroll body to 0px on click
       $('#back-to-top').click(function () {
           $('#back-to-top').tooltip('hide');
           $('body,html').animate({
               scrollTop: 0
           }, 800);
           return false;
       });
       
       $('#back-to-top').tooltip('show');

});
</script>
   
</body>
</html>
