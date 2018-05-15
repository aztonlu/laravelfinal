<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\User_newsletters;
use Image;
use App\Http\Requests\TestimonialsRequest;
use App\Http\Requests\UsersRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin;

class NewslettersControllerPublic extends Controller
{
     public function store(Request $request){
        switch($request->language){
            case 'fr':
                $language = 'french';
                break;
            case 'de':
                $language = 'german';
                break;
            case 'es':
                $language = 'spanish';
                break;
            case 'en':
                $language = 'english';
                break;
            case 'it':
                $language = 'italian';
                break;
        }
        $usernewsletter = new User_newsletters();
        $usernewsletter->email = $request->email;
         $usernewsletter->save();
        flash('Se registró tu email satisfactoriamente', 'success')->important();
        return redirect('/'.$request->language . '#contact');
    }
}