<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\PersonalBlogEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index(){
 
		Mail::to("fajarj393@gmail.com")->send(new PersonalBlogEmail());
        return redirect('/');
 
	}
}
