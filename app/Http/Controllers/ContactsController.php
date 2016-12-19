<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactsController extends Controller
{
    public function index() {
    	$contacts = Contact::paginate(10);
    	return view('contact', compact('contacts'));
    }
}
