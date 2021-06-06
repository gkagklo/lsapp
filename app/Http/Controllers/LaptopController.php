<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Laptop;
use DB;

class LaptopController extends Controller
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
        $laptops = Laptop::orderby('created_at','desc')->paginate(5);
        return view('laptop.index')->with('laptop',$laptops);
        
    }


 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
      return view('laptop.create');
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
            'mboard' => 'required',
            'ram' => 'required',
            'cpu' => 'required',
            'gpu' => 'required',
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
  

      //Create laptop
      $laptop=new Laptop;
      $laptop->body =$request->input('body');
      $laptop->price =$request->input('price');
      $laptop->mboard =$request->input('mboard');
      $laptop->ram =$request->input('ram');
      $laptop->fact =$request->input('fact');
      $laptop->cpu =$request->input('cpu');
      $laptop->gpu =$request->input('gpu');
      $laptop->disc =$request->input('disc');
      $laptop->screen =$request->input('screen');
      $laptop->status =$request->input('status');
      $laptop->system =$request->input('system');
      $laptop->user_id = auth()->user()->id;
      $laptop->cover_image = $fileNameToStore;
      $laptop->cover_image1 = $fileNameToStore1;
      $laptop->cover_image2 = $fileNameToStore2;
      $laptop->save();

      //Otan ta apothikeusei back stn selida laptop.      
      return redirect('/laptops')->with('success', 'Η δημοσίευση για το laptop σας δημιουργήθηκε.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $laptop = Laptop::find($id);
       
      
       return view('laptop.show')->with('laptop', $laptop);

      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laptop = Laptop::find($id);
 
      //check for correct user
      if(auth()->user()->id !==$laptop->user_id){
        return redirect('/laptops')->with('error', 'Unauthorized Page');
      }

        return view('laptop.edit')->with('laptop', $laptop);
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
          'mboard' => 'required',
          'ram' => 'required',
          'cpu' => 'required',
          'gpu' => 'required',
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
$path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore2);
  } 



      //Create laptop
      $laptop = Laptop::find($id);
      $laptop->body =$request->input('body');
      $laptop->price =$request->input('price');
      $laptop->ram =$request->input('ram');
      $laptop->mboard =$request->input('mboard');
      $laptop->fact =$request->input('fact');
      $laptop->cpu =$request->input('cpu');
      $laptop->gpu =$request->input('gpu');
      $laptop->disc =$request->input('disc');
      $laptop->screen =$request->input('screen');
      $laptop->status =$request->input('status');
      $laptop->system =$request->input('system');
      if($request->hasFile('cover_image')){
        if ($laptop->cover_image != 'noimage.jpg') {
        Storage::delete('public/cover_images/' . $laptop->cover_image);
        }
         $laptop->cover_image = $fileNameToStore;
      }
      if($request->hasFile('cover_image1')){
        if ($laptop->cover_image1 != 'noimage.jpg') {
        Storage::delete('public/cover_images/' . $laptop->cover_image1);
        }
         $laptop->cover_image1 = $fileNameToStore1;
      }
      if($request->hasFile('cover_image2')){
        if ($laptop->cover_image2 != 'noimage.jpg') {
        Storage::delete('public/cover_images/' . $laptop->cover_image2);
        }
         $laptop->cover_image2 = $fileNameToStore2;
      }
      $laptop->save();

      //Otan ta apothikeusei back stn selida laptop.      
      return redirect('/laptops')->with('success', 'Η δημοσίευση για το laptop σας ενημερώθηκε.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laptop = Laptop::find($id);

 //check for correct user
 if(auth()->user()->id !==$laptop->user_id){
    return redirect('/laptops')->with('error', 'Unauthorized Page');
  }

      if($laptop->cover_image != 'noimage.jpg'){
         //Delete Image
           Storage::delete('public/cover_images/'.$laptop->cover_image);
      }
      if($laptop->cover_image1 != 'noimage.jpg'){
        //Delete Image
          Storage::delete('public/cover_images/'.$laptop->cover_image1);
     }
     if($laptop->cover_image2 != 'noimage.jpg'){
      //Delete Image
        Storage::delete('public/cover_images/'.$laptop->cover_image2);
   }
   
      

        $laptop->delete();
        return redirect('/laptops')->with('success', 'Η δημοσίευση για το laptop σας διαγράφτηκε.');
    }
}

