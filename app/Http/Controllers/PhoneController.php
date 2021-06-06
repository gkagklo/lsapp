<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Phone;
use DB;

class PhoneController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' =>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::orderby('created_at','desc')->paginate(5);
        return view('phone.index')->with('phone',$phones);
        
    }


 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
      return view('phone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
             
            'fact' => 'required',
            'price' => 'required',
            'ram' => 'required',
            'cpu' => 'required',
            'disc' => 'required',
            'system' => 'required',
            'status' => 'required',
            'cover_image' => 'mimes:jpeg,png,jpg,gif,svg|nullable|max:1999',
            'cover_image1' => 'mimes:jpeg,png,jpg,gif,svg|nullable|max:1999',
            'cover_image2' => 'mimes:jpeg,png,jpg,gif,svg|nullable|max:1999',


        ]);

      // Hanlde File Upload
      if($request->hasFile('cover_image')){

      //get filename with the extension
      $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
      //Get just filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      // Get just ext
      $extension = $request->file('cover_image')->getClientOriginalExtension();
    //File name to Store 
    $fileNameToStore = $filename.'_'.time().'.'.$extension;
    //Upload Image
    $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
      } else {
          $fileNameToStore = 'noimage.jpg';
      }

       // Hanlde File Upload
       if($request->hasFile('cover_image1')){

        //get filename with the extension
        $filenameWithExt = $request->file('cover_image1')->getClientOriginalName();
        //Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('cover_image1')->getClientOriginalExtension();
      //File name to Store 
      $fileNameToStore1 = $filename.'_'.time().'.'.$extension;
      //Upload Image
      $path = $request->file('cover_image1')->storeAs('public/cover_images',$fileNameToStore1);
        } else {
            $fileNameToStore1 = 'noimage.jpg';
        }

         // Hanlde File Upload
      if($request->hasFile('cover_image2')){

        //get filename with the extension
        $filenameWithExt = $request->file('cover_image2')->getClientOriginalName();
        //Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('cover_image2')->getClientOriginalExtension();
      //File name to Store 
      $fileNameToStore2 = $filename.'_'.time().'.'.$extension;
      //Upload Image
      $path = $request->file('cover_image2')->storeAs('public/cover_images',$fileNameToStore2);
        } else {
            $fileNameToStore2 = 'noimage.jpg';
        }

      //Create phone
      $phone=new Phone;
      $phone->system=$request->input('system');
      $phone->body =$request->input('body');
      $phone->price =$request->input('price');
      $phone->ram =$request->input('ram');
      $phone->fact =$request->input('fact');
      $phone->cpu =$request->input('cpu');
      $phone->disc =$request->input('disc');
      $phone->screen =$request->input('screen');
      $phone->status =$request->input('status');
      $phone->battery =$request->input('battery');
      $phone->camera =$request->input('camera');
      $phone->color =$request->input('color');
      $phone->camera2 =$request->input('camera2');
      $phone->user_id = auth()->user()->id;
      $phone->cover_image = $fileNameToStore;
      $phone->cover_image1 = $fileNameToStore1;
      $phone->cover_image2 = $fileNameToStore2;
      $phone->save();

      //Otan ta apothikeusei back stn selida phone.      
      return redirect('/phones')->with('success', 'Η δημοσίευση για το κινητό σας δημιουργήθηκε.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $phone = Phone::find($id);
       
      
       return view('phone.show')->with('phone', $phone);

      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phone = Phone::find($id);
 
      //check for correct user
      if(auth()->user()->id !==$phone->user_id){
        return redirect('/phones')->with('error', 'Unauthorized Page');
      }

        return view('phone.edit')->with('phone', $phone);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'fact' => 'required',
          'price' => 'required',
          'ram' => 'required',
          'cpu' => 'required',
          'disc' => 'required',
          'system' => 'required',
          'status' => 'required',
          'cover_image' => 'mimes:jpeg,png,jpg,gif,svg|nullable|max:1999',
          'cover_image1' => 'mimes:jpeg,png,jpg,gif,svg|nullable|max:1999',
          'cover_image2' => 'mimes:jpeg,png,jpg,gif,svg|nullable|max:1999',
        ]);


        
// Hanlde File Upload
if($request->hasFile('cover_image')){

    //get filename with the extension
    $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
    //Get just filename
    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    // Get just ext
    $extension = $request->file('cover_image')->getClientOriginalExtension();
  //File name to Store 
  $fileNameToStore = $filename.'_'.time().'.'.$extension;
  //Upload Image
  $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
    } 

            
// Hanlde File Upload
if($request->hasFile('cover_image1')){

  //get filename with the extension
  $filenameWithExt = $request->file('cover_image1')->getClientOriginalName();
  //Get just filename
  $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
  // Get just ext
  $extension = $request->file('cover_image1')->getClientOriginalExtension();
//File name to Store 
$fileNameToStore1 = $filename.'_'.time().'.'.$extension;
//Upload Image
$path = $request->file('cover_image1')->storeAs('public/cover_images',$fileNameToStore1);
  } 

          
// Hanlde File Upload
if($request->hasFile('cover_image2')){

  //get filename with the extension
  $filenameWithExt = $request->file('cover_image2')->getClientOriginalName();
  //Get just filename
  $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
  // Get just ext
  $extension = $request->file('cover_image2')->getClientOriginalExtension();
//File name to Store 
$fileNameToStore2 = $filename.'_'.time().'.'.$extension;
//Upload Image
$path = $request->file('cover_image2')->storeAs('public/cover_images',$fileNameToStore2);
  } 



      //Create phone
      $phone = Phone::find($id);
      $phone->system=$request->input('system');
      $phone->body =$request->input('body');
      $phone->price =$request->input('price');
      $phone->ram =$request->input('ram');
      $phone->fact =$request->input('fact');
      $phone->cpu =$request->input('cpu');
      $phone->disc =$request->input('disc');
      $phone->screen =$request->input('screen');
      $phone->status =$request->input('status');
      $phone->battery =$request->input('battery');
      $phone->camera =$request->input('camera');
      $phone->color =$request->input('color');
      $phone->camera2 =$request->input('camera2');
      if($request->hasFile('cover_image')){
        if ($phone->cover_image != 'noimage.jpg') {
        Storage::delete('public/cover_images/' . $phone->cover_image);
        }
         $phone->cover_image = $fileNameToStore;
      }
      if($request->hasFile('cover_image1')){
        if ($phone->cover_image1 != 'noimage.jpg') {
        Storage::delete('public/cover_images/' . $phone->cover_image1);
        }
         $phone->cover_image1 = $fileNameToStore1;
      }
      if($request->hasFile('cover_image2')){
        if ($phone->cover_image2 != 'noimage.jpg') {
        Storage::delete('public/cover_images/' . $phone->cover_image2);
        }
         $phone->cover_image2 = $fileNameToStore2;
      }
      $phone->save();

      //Otan ta apothikeusei back stn selida phone.      
      return redirect('/phones')->with('success', 'Η δημοσίευση για το κινητό σας ενημερώθηκε.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phone = Phone::find($id);

 //check for correct user
 if(auth()->user()->id !==$phone->user_id){
    return redirect('/phones')->with('error', 'Unauthorized Page');
  }

      if($phone->cover_image != 'noimage.jpg'){
         //Delete Image
           Storage::delete('public/cover_images/'.$phone->cover_image);
      }
      
      if($phone->cover_image1 != 'noimage.jpg'){
        //Delete Image
          Storage::delete('public/cover_images/'.$phone->cover_image1);
     }

     if($phone->cover_image2 != 'noimage.jpg'){
      //Delete Image
        Storage::delete('public/cover_images/'.$phone->cover_image2);
   }

        $phone->delete();
        return redirect('/phones')->with('success', 'Η δημοσίευση για το κινητό σας διαγράφτηκε.');
    }
}

