<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminContact()
    {
        $contacts = Contact::all();

        return view('admin.contact.index')
            ->with('contacts', $contacts);
    }

    public function adminAddContact()
    {
        return view('admin.contact.create');
    }

    public function adminStoreContact(Request $request)
    {
        Contact::insert([
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('admin.contact')
            ->with('success', 'Contact Inserted Successfully');
    }

    public function contact()
    {
        $contacts = DB::table('contacts')->first();

        return view('pages.contact')
            ->with('contacts', $contacts);
    }

    public function contactForm(Request $request)
    {
        ContactForm::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('contact')
            ->with('success', 'Your Message Send Successfully');
    }
}
