<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail; 
use Session;  

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

   

    public function services(){
        return view('pages.services');
    }

    public function getContact(){
        return view('pages.contact');
    }

    public function postContact(Request $request)
    {
        $this->validate($request,[
        'email' => 'required|email',
        'subject' => 'min:3',
        'msg' => 'min:10' ]);

    $data = array(
       'email' => $request->email,
        'subject' => $request->subject,
        'bodymsg' => $request->msg
    );

    Mail::send('emails.contact', $data, function($message) use ($data){
        $message->from($data['email']);
        $message->to('procomputerades@gmail.com');
        $message->subject($data['subject']);
    });

    Session::flash('success' , 'Το email σας στάλθηκε με επιτυχία.');
    return redirect('/contact');

}



}