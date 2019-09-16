<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\BlogMsyaifulEmail;
use Illuminate\Support\Facades\Mail;
use Auth;

class BlogMsyaifulController extends Controller
{
    public function send(Request $req){
        $data = array(
            "email" => $req->email,
            "content" => $req->content
        );
        Mail::to($data['email'])->send(new BlogMsyaifulEmail($data));
        return back();
    }
}
