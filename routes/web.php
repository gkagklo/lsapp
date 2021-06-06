<?php

use Illuminate\Support\Facades\Input;
use App\Post;
use App\Laptop;
use App\Phone;
use App\Tablet;
use App\Periferiaka;

 

Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/contact', 'PagesController@getContact'); 
Route::post('/contact', 'PagesController@postContact'); 
Route::resource('desktops', 'PostsController');
Route::resource('laptops', 'LaptopController');
Route::resource('phones', 'PhoneController');
Route::resource('tablets', 'TabletController');
Route::resource('periferiaka', 'PeriferiakaController');
Route::get('refresh_captcha','HomeController@refreshCaptcha')->name('refresh_captcha');
Route::get('auth/activate/resend', 'Auth\ActivationResendController@showResendForm')->name('auth.activate.resend');
Route::post('auth/activate/resend', 'Auth\ActivationResendController@resend');
Route::get('auth/activate', 'Auth\ActivationController@activate')->name('auth.activate');

Route::get('/anazitisi',function(){
    return view('pages.anazitisi');
});
Route::post('/search',function(){
    
    $fact = Input::get('fact');
    $gpu = Input::get('gpu');
    $ram = Input::get('ram');
    $cpu = Input::get('cpu');
    $price = Input::get('price');
    $z = Input::get('z');
    $x = Input::get('x');
    $c = Input::get('c');
    $v = Input::get('v');
    $laptop_price = Input::get('laptop_price');
    $phone_fact = Input::get('phone_fact');
    $phone_cpu = Input::get('phone_cpu');
    $phone_ram = Input::get('phone_ram');
    $phone_color = Input::get('phone_color');
    $phone_price = Input::get('phone_price');
    $tablet_fact = Input::get('tablet_fact');
    $tablet_cpu = Input::get('tablet_cpu');
    $tablet_ram = Input::get('tablet_ram');
    $tablet_color = Input::get('tablet_color');
    $tablet_price = Input::get('tablet_price');
    $periferiaka_category = Input::get('periferiaka_category');
    $periferiaka_fact = Input::get('periferiaka_fact');
    $periferiaka_color = Input::get('periferiaka_color');
    $periferiaka_price = Input::get('periferiaka_price');

    if(   ($periferiaka_category!="") or ($periferiaka_fact!="")  or ($periferiaka_color!="") or ($periferiaka_price!="")  ){
        $periferiaka = Periferiaka::where('category', 'LIKE', '%' .$periferiaka_category. '%')->where('fact', 'LIKE', '%' .$periferiaka_fact. '%')->where('color', 'LIKE', '%' .$periferiaka_color. '%')->where('price', '<=',  $periferiaka_price)->get(); 
        if(count ( $periferiaka ) > 0 )
        return view('pages.anazitisi')->with('periferiakas',$periferiaka);  
        }

    if( ($tablet_fact!="") or ($tablet_cpu!="")  or ($tablet_ram!="")  or ($tablet_color!="") or ($tablet_price!="")  ){
        $tablet = Tablet::where('fact', 'LIKE', '%' .$tablet_fact. '%')->where('cpu', 'LIKE', '%' .$tablet_cpu. '%')->where('ram', 'LIKE', '%' .$tablet_ram. '%')->where('color', 'LIKE', '%' .$tablet_color. '%')->where('price', '<=',  $tablet_price)->get(); 
        if(count ( $tablet ) > 0 )
        return view('pages.anazitisi')->with('tablets',$tablet);  
        }


    if( ($phone_fact!="") or ($phone_cpu!="")  or ($phone_ram!="")  or ($phone_color!="") or ($phone_price!="")  ){
        $phone = Phone::where('fact', 'LIKE', '%' .$phone_fact. '%')->where('cpu', 'LIKE', '%' .$phone_cpu. '%')->where('ram', 'LIKE', '%' .$phone_ram. '%')->where('color', 'LIKE', '%' .$phone_color. '%')->where('price', '<=',  $phone_price)->get(); 
        if(count ( $phone ) > 0 )
        return view('pages.anazitisi')->with('phones',$phone);
        }



    if( ($fact!="") or ($gpu!="")  or ($ram!="")  or ($cpu!="") or ($price!="")  ){
    $post = Post::where('fact', 'LIKE', '%' .$fact. '%')->where('gpu', 'LIKE', '%' .$gpu. '%')->where('ram', 'LIKE', '%' .$ram. '%')->where('cpu', 'LIKE', '%' .$cpu. '%')->where('price', '<=',  $price)->get(); 
    if(count ( $post ) > 0 )
    return view('pages.anazitisi')->withDetails($post);
    }


    if( ($z!="") or ($x!="")  or ($c!="")  or ($v!="") or ($laptop_price!="") ){
    $laptop = Laptop::where('fact', 'LIKE', '%' .$z. '%')->where('gpu', 'LIKE', '%' .$c. '%')->where('ram', 'LIKE', '%' .$v. '%')->where('cpu', 'LIKE', '%' .$x. '%')->where('price', '<=', $laptop_price)->get();
  
   if(count ( $laptop ) > 0 )
   return view('pages.anazitisi')->with('data',$laptop);

   else
return view('pages.anazitisi')->with('error','Δεν βρέθηκε τίποτα. Δοκιμάστε ξανά την αναζήτηση !!!'); 
}


else
return view('pages.anazitisi')->with('error','Δεν βρέθηκε τίποτα. Δοκιμάστε ξανά την αναζήτηση !!!'); 

});



Auth::routes();
Route::group(['middleware' => ['preventbackbutton','auth']], function(){
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{slug}','ProfileController@index');
Route::get('/changePhoto',function(){
    return view('profile.pic');
});
Route::post('/uploadPhoto','ProfileController@uploadPhoto');
Route::get('/editProfile', 'ProfileController@editProfileForm');
Route::post('/updateProfile', 'ProfileController@updateProfile');
Route::get('/delete/{id}', 'ProfileController@delete');
});