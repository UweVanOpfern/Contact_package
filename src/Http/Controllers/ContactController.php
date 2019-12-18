<?php

namespace Uweaimevan\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Uweaimevan\Contact\Mail\ContactMailable;
use Uweaimevan\Contact\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     **/
    public function index()
    {
        return view('contact::index');
    }

    /**
     * This function is used to create new admin(user)
     * @param Request $request
     * @return array
     */
    public function sendEmail(Request $request)
    {
//        Contact::create($request->all());
        Mail::to('uweaime@gmail.com')->send(new ContactMailable($request->message));
        return redirect(route('contact.get'));
    }
}
