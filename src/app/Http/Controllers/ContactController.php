<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name1', 'name2', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address1', 'address2', 'content1', 'content2']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name1', 'name2', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address1', 'address2', 'content1', 'content2']);
        Contact::create($contact);
        return view('thanks');
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }
}