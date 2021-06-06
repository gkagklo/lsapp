<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Profile;
use App\User;
use App\Post;

class ProfileController extends Controller
{
   public function index($slug){
       return view('profile.index')->with('data', Auth::user()->profile);
   }
       
 
   public function uploadPhoto(Request $request){
    $this->validate($request, [
    'pic' => 'mimes:jpeg,png,jpg,gif,svg|required|max:1999',
    ]);
     $file = $request->file('pic');
     $filename = $file->getClientOriginalName();
     $path = 'storage/img';
     $file->move($path, $filename);
     $user_id = Auth::user()->id;

     if ($request->hasFile('pic')) {
      if(Auth::user()->pic != 'profil.png') {
      Storage::delete('public/img/' . Auth::user()->pic);
     }
      Auth::user()->pic = $filename;
    }

     DB::table('users')->where('id',$user_id)->update(['pic' => $filename]);
     return redirect('/editProfile')->withSuccess('Η εικόνα σας ανέβηκε με επιτυχία.');  
  }
  


   public function editProfileForm(){
    $data = DB::table('users')->leftJoin('profiles', 'profiles.user_id','users.id')->where('users.id', Auth::user()->id)->get();
    return view('profile.editProfile')->with('data', $data);
   }



   public function updateProfile(Request $request){
     $user_id = Auth::user()->id;
     $this->validate($request, [
      'name' => 'required|string|max:25|min:3|alpha',
      'lastname' => 'required|string|max:25|min:3|alpha', 
      'username' => 'required|max:25|min:3|alpha_dash|unique:users,username,'.Auth::user()->id,
      'email' => 'required|string|email|max:55|unique:users,email,'.Auth::user()->id,
      'country' => 'required|min:3|alpha|max:30',
      'city' => 'required|min:3|alpha|max:30',
      'thl1' => 'required|numeric|regex:/[0-9]{10}/',
      'thl2' => 'numeric|nullable|regex:/[0-9]{10}/',
     ]);
     DB::table('profiles')->leftJoin('users', 'profiles.user_id','users.id')->where('user_id', $user_id)->update($request->except('_token'));
    
     return back()->withSuccess('Τα στοιχεία σας καταχωρήθηκαν επιτυχώς.');
   }




   function delete($id){
    $user = User::find($id);
    
    if($user->pic != 'profil.png') {
      Storage::delete('public/img/' . $user->pic);
     } 
    Storage::delete('public/img/' . $user->pic);


    $user->profile()->delete();
    $user->posts()->delete();
    $user->laptops()->delete();
    $user->phones()->delete();
    $user->tablets()->delete();
    $user->periferiakas()->delete();
    $user->delete();
    return redirect('/login')->withSuccess('Ο λογαριασμός σας διαγράφτηκε.');
   }
}
