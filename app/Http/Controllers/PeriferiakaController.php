<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Periferiaka;
use DB;

class PeriferiakaController extends Controller
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
        $periferiakas = Periferiaka::orderby('created_at','desc')->paginate(5);
        return view('periferiaka.index')->with('periferiaka',$periferiakas);
        
    }


 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
      return view('periferiaka.create');
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
            'category' => 'required',
            'price' => 'required',
            'status' => 'required',
            'fact' => 'required',
            'connectivity' => 'required',
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

      //Create periferiaka
      $periferiaka=new Periferiaka;
      $periferiaka->category=$request->input('category');
      $periferiaka->body =$request->input('body');
      $periferiaka->price =$request->input('price');
      $periferiaka->fact =$request->input('fact');
      $periferiaka->connectivity =$request->input('connectivity');
      $periferiaka->status =$request->input('status');
      $periferiaka->color =$request->input('color');
      $periferiaka->usage =$request->input('usage');
      $periferiaka->mech =$request->input('mech');
      $periferiaka->rgb =$request->input('rgb');
      $periferiaka->dpi =$request->input('dpi');
      $periferiaka->pliktra =$request->input('pliktra');
      $periferiaka->volume =$request->input('volume');
      $periferiaka->micro =$request->input('micro');
      $periferiaka->power =$request->input('power');
      $periferiaka->channels =$request->input('channels');
      $periferiaka->resolution =$request->input('resolution');
      $periferiaka->fps =$request->input('fps');
      $periferiaka->mic =$request->input('mic');
      $periferiaka->user_id = auth()->user()->id;
      $periferiaka->cover_image = $fileNameToStore;
      $periferiaka->cover_image1 = $fileNameToStore1;
      $periferiaka->cover_image2 = $fileNameToStore2;
      $periferiaka->save();

      //Otan ta apothikeusei back stn selida periferiaka.      
      return redirect('/periferiaka')->with('success', 'Η δημοσίευση για τα περιφερειακά σας δημιουργήθηκε.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $periferiaka = Periferiaka::find($id);
       
      
       return view('periferiaka.show')->with('periferiaka', $periferiaka);

      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $periferiaka = Periferiaka::find($id);
 
      //check for correct user
      if(auth()->user()->id !==$periferiaka->user_id){
        return redirect('/periferiaka')->with('error', 'Unauthorized Page');
      }

        return view('periferiaka.edit')->with('periferiaka', $periferiaka);
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
       
            'price' => 'required',
            'status' => 'required',
            'fact' => 'required',
            'connectivity' => 'required',
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


      //Create periferiaka
      $periferiaka = Periferiaka::find($id);
      $periferiaka->body =$request->input('body');
      $periferiaka->price =$request->input('price');
      $periferiaka->fact =$request->input('fact');
      $periferiaka->connectivity =$request->input('connectivity');
      $periferiaka->status =$request->input('status');
      $periferiaka->color =$request->input('color');
      $periferiaka->usage =$request->input('usage');
      $periferiaka->mech =$request->input('mech');
      $periferiaka->rgb =$request->input('rgb');
      $periferiaka->dpi =$request->input('dpi');
      $periferiaka->pliktra =$request->input('pliktra');
      $periferiaka->volume =$request->input('volume');
      $periferiaka->micro =$request->input('micro');
      $periferiaka->power =$request->input('power');
      $periferiaka->channels =$request->input('channels');
      $periferiaka->resolution =$request->input('resolution');
      $periferiaka->fps =$request->input('fps');
      $periferiaka->mic =$request->input('mic');
      $periferiaka->user_id = auth()->user()->id;
      if($request->hasFile('cover_image')){
        if ($periferiaka->cover_image != 'noimage.jpg') {
        Storage::delete('public/cover_images/' . $periferiaka->cover_image);
        }
         $periferiaka->cover_image = $fileNameToStore;
      }
      if($request->hasFile('cover_image1')){
        if ($periferiaka->cover_image1 != 'noimage.jpg') {
        Storage::delete('public/cover_images/' . $periferiaka->cover_image1);
        }
         $periferiaka->cover_image1 = $fileNameToStore1;
      }
      if($request->hasFile('cover_image2')){
        if ($periferiaka->cover_image2 != 'noimage.jpg') {
        Storage::delete('public/cover_images/' . $periferiaka->cover_image2);
        }
         $periferiaka->cover_image2 = $fileNameToStore2;
      }
      $periferiaka->save();

      //Otan ta apothikeusei back stn selida periferiaka.      
      return redirect('/periferiaka')->with('success', 'Η δημοσίευση για τα περιφερειακά σας ενημερώθηκε.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $periferiaka = Periferiaka::find($id);

 //check for correct user
 if(auth()->user()->id !==$periferiaka->user_id){
    return redirect('/periferiaka')->with('error', 'Unauthorized Page');
  }

      if($periferiaka->cover_image != 'noimage.jpg'){
         //Delete Image
           Storage::delete('public/cover_images/'.$periferiaka->cover_image);
      }
      
      if($periferiaka->cover_image1 != 'noimage.jpg'){
        //Delete Image
          Storage::delete('public/cover_images/'.$periferiaka->cover_image1);
     }

     if($periferiaka->cover_image2 != 'noimage.jpg'){
        //Delete Image
          Storage::delete('public/cover_images/'.$periferiaka->cover_image2);
     }
      

        $periferiaka->delete();
        return redirect('/periferiaka')->with('success', 'Η δημοσίευση για τα περιφερειακά σας διαγράφτηκε.');
    }
}

