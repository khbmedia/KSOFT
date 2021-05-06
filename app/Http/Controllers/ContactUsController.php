<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\ContactUs;
use Illuminate\Mail\Mailable;
use App\Mail\RequestQuotation;
use Mail;
use App\Preference;
class ContactUsController extends Controller
{
    public function get_email(){
        $preference=Preference::where('key','Email')->first() ;
        return $preference->value;
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'package'=>'required',
            'name'=>'required',
            'mail'=>'required',
            'phone'=>'required',
            'content'=>'required'
        ]);
        $comment=new ContactUs();
        $comment->package=$request->package;
        $comment->name=$request->name;
        $comment->mail=$request->mail;
        $comment->phone=$request->phone;
        $comment->content=$request->content;
        $comment->save();
        $data=[
            'name'=>$request->name,
            'email'=>$request->mail,
            'message'=>$request->content
        ];
        // Mail::to($this->get_email())->send(new RequestQuotation($data));
        Session::flash('message', 'Your form has been submited successfully'); 
        Session::flash('alert-success', 'success');
        return redirect()->back();
    }
}
