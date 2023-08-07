<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact.index');
    }

    public function store(Request $request)
    {
        // Insert
        // return $request;
        Contact::create([
            'name'      => $request->name,
            'last_name' => $request->last,
            'email'     => $request->email,
            'web_site'  => $request->web,
            'message'   => $request->area,
        ]);
        return redirect()->back();
    }
}
