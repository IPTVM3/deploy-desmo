<?php

namespace App\Http\Controllers;

use App\MailList;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;

class MailListController extends Controller
{
    public function index(){
        $maillist = MailList::orderBy('created_at','desc')->paginate(10);
        return view('dashboard.maillist.index',compact('maillist'));
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required',
        ]);

        $local = Lang::locale();

        $mail = MailList::create();
        $mail->email = $request['email'];
        $mail->update();

        

        session()->flash('noty_color', 'success');
        session()->flash('noty_message', 'Thanks');
        return back();

    }


    
}
