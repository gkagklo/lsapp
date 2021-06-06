<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

class PostsController extends Controller

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
        $posts = Post::orderby('created_at','desc')->paginate(5);
        return view('desktops.index')->with('posts',$posts);
        
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
      return view('desktops.create');
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
            'status' => 'required',
            'system' => 'required',
            'cover_image' => 'mimes:jpeg,png,jpg,gif,svg|nullable|max:1999',
            'cover_image1' => 'mimes:jpeg,png,jpg,gif,svg|nullable|max:1999',
            'cover_image2' => 'mimes:jpeg,png,jpg,gif,svg|nullable|max:1999',
        ]);
        

        
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
          }    else {
            $fileNameToStore = 'noimage.jpg';
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

        else {
            $fileNameToStore1 = 'noimage.jpg';
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

      else {
          $fileNameToStore2 = 'noimage.jpg';
      }
      
        

      //Create post
      $post=new Post;
      $post->body =$request->input('body');
      $post->price =$request->input('price');
      $post->ram =$request->input('ram');
      $post->fact =$request->input('fact');
      $post->cpu =$request->input('cpu');
      $post->mboard =$request->input('mboard');
      $post->gpu =$request->input('gpu');
      $post->disc =$request->input('disc');
      $post->status =$request->input('status');
      $post->system =$request->input('system');
      $post->user_id = auth()->user()->id;
      $post->cover_image = $fileNameToStore;
      $post->cover_image1 = $fileNameToStore1;
      $post->cover_image2 = $fileNameToStore2;
    
      $post->save();

      //Otan ta apothikeusei back stn selida post.      
      return redirect('/desktops')->with('success', 'Η δημοσίευση για τον υπολογιστή σας δημιουργήθηκε.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post = Post::find($id);
       
      
       return view('desktops.show')->with('post', $post);

      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
 
      //check for correct user
      if(auth()->user()->id !==$post->user_id){
        return redirect('/desktops')->with('error', 'Unauthorized Page');
      }

        return view('desktops.edit')->with('post', $post);
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
            'cover_image' => 'mimes:jpeg,png,jpg,gif,svg|nullable|max:1999',
            'cover_image1' => 'mimes:jpeg,png,jpg,gif,svg|nullable|max:1999',
            'cover_image2' => 'mimes:jpeg,png,jpg,gif,svg|nullable|max:1999',
            'fact' => 'required',
            'price' => 'required',
            'mboard' => 'required',
            'ram' => 'required',
            'cpu' => 'required',
            'gpu' => 'required',
            'disc' => 'required',
            'status' => 'required',
            'system' => 'required',
 
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



      //Create post
      $post = Post::find($id);
      $post->body =$request->input('body');
      $post->price =$request->input('price');
      $post->ram =$request->input('ram');
      $post->fact =$request->input('fact');
      $post->cpu =$request->input('cpu');
      $post->mboard =$request->input('mboard');
      $post->gpu =$request->input('gpu');
      $post->disc =$request->input('disc');
      $post->status =$request->input('status');
      $post->system =$request->input('system');
      if($request->hasFile('cover_image')){
        if ($post->cover_image != 'noimage.jpg') {
        Storage::delete('public/cover_images/' . $post->cover_image);
        }
         $post->cover_image = $fileNameToStore;
      }
      if($request->hasFile('cover_image1')){
        if ($post->cover_image1 != 'noimage.jpg') {
        Storage::delete('public/cover_images/' . $post->cover_image1);
        }
         $post->cover_image1 = $fileNameToStore1;
      }
      if($request->hasFile('cover_image2')){
        if ($post->cover_image2 != 'noimage.jpg') {
        Storage::delete('public/cover_images/' . $post->cover_image2);
        }
         $post->cover_image2 = $fileNameToStore2;
      }
      $post->save();

      //Otan ta apothikeusei back stn selida post.      
      return redirect('/desktops')->with('success', 'Η δημοσίευση για τον υπολογιστή σας ενημερώθηκε.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

 //check for correct user
 if(auth()->user()->id !==$post->user_id){
    return redirect('/desktops')->with('error', 'Unauthorized Page');
  }

 
      if($post->cover_image != 'noimage.jpg'){
         //Delete Image
           Storage::delete('public/cover_images/'.$post->cover_image);
      }

      if($post->cover_image1 != 'noimage.jpg'){
        //Delete Image
          Storage::delete('public/cover_images/'.$post->cover_image1);
     }
     
     if($post->cover_image2 != 'noimage.jpg'){
      //Delete Image
        Storage::delete('public/cover_images/'.$post->cover_image2);
   }
   

        $post->delete();
        return redirect('/desktops')->with('success', 'Η δημοσίευση για τον υπολογιστή σας διαγράφτηκε.');
    }




}
