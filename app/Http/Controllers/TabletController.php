<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Tablet;
use DB;

class TabletController extends Controller
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
        $tablets = Tablet::orderby('created_at','desc')->paginate(5);
        return view('tablet.index')->with('tablet',$tablets);
        
    }


 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
      return view('tablet.create');
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
  

      //Create tablet
      $tablet=new Tablet;
      $tablet->system=$request->input('system');
      $tablet->body =$request->input('body');
      $tablet->price =$request->input('price');
      $tablet->ram =$request->input('ram');
      $tablet->fact =$request->input('fact');
      $tablet->cpu =$request->input('cpu');
      $tablet->disc =$request->input('disc');
      $tablet->screen =$request->input('screen');
      $tablet->status =$request->input('status');
      $tablet->battery =$request->input('battery');
      $tablet->camera =$request->input('camera');
      $tablet->color =$request->input('color');
      $tablet->camera2 =$request->input('camera2');
      $tablet->user_id = auth()->user()->id;
      $tablet->cover_image = $fileNameToStore;
      $tablet->cover_image1 = $fileNameToStore1;
      $tablet->cover_image2 = $fileNameToStore2;
      $tablet->save();

      //Otan ta apothikeusei back stn selida tablet.      
      return redirect('/tablets')->with('success', 'Η δημοσίευση για το tablet σας δημιουργήθηκε.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $tablet = Tablet::find($id);
       
      
       return view('tablet.show')->with('tablet', $tablet);

      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tablet = Tablet::find($id);
 
      //check for correct user
      if(auth()->user()->id !==$tablet->user_id){
        return redirect('/tablets')->with('error', 'Unauthorized Page');
      }

        return view('tablet.edit')->with('tablet', $tablet);
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
    



      //Create tablet
      $tablet = Tablet::find($id);
      $tablet->system=$request->input('system');
      $tablet->body =$request->input('body');
      $tablet->price =$request->input('price');
      $tablet->ram =$request->input('ram');
      $tablet->fact =$request->input('fact');
      $tablet->cpu =$request->input('cpu');
      $tablet->disc =$request->input('disc');
      $tablet->screen =$request->input('screen');
      $tablet->status =$request->input('status');
      $tablet->battery =$request->input('battery');
      $tablet->camera =$request->input('camera');
      $tablet->color =$request->input('color');
      $tablet->camera2 =$request->input('camera2');
      if($request->hasFile('cover_image')){
        if ($tablet->cover_image != 'noimage.jpg') {
        Storage::delete('public/cover_images/' . $tablet->cover_image);
        }
         $tablet->cover_image = $fileNameToStore;
      }
      if($request->hasFile('cover_image1')){
        if ($tablet->cover_image1 != 'noimage.jpg') {
        Storage::delete('public/cover_images/' . $tablet->cover_image1);
        }
         $tablet->cover_image1 = $fileNameToStore1;
      }
      if($request->hasFile('cover_image2')){
        if ($tablet->cover_image2 != 'noimage.jpg') {
        Storage::delete('public/cover_images/' . $tablet->cover_image2);
        }
         $tablet->cover_image2 = $fileNameToStore2;
      }
      $tablet->save();

      //Otan ta apothikeusei back stn selida tablet.      
      return redirect('/tablets')->with('success', 'Η δημοσίευση για το tablet σας ενημερώθηκε.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tablet = Tablet::find($id);

 //check for correct user
 if(auth()->user()->id !==$tablet->user_id){
    return redirect('/tablets')->with('error', 'Unauthorized Page');
  }

      if($tablet->cover_image != 'noimage.jpg'){
         //Delete Image
           Storage::delete('public/cover_images/'.$tablet->cover_image);
      }
      
      if($tablet->cover_image1 != 'noimage.jpg'){
        //Delete Image
          Storage::delete('public/cover_images/'.$tablet->cover_image1);
     }
     
     if($tablet->cover_image2 != 'noimage.jpg'){
      //Delete Image
        Storage::delete('public/cover_images/'.$tablet->cover_image2);
   }
   
      

        $tablet->delete();
        return redirect('/tablets')->with('success', 'Η δημοσίευση για το tablet σας διαγράφτηκε.');
    }
}

