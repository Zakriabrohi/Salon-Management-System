<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment; // Database model connect karne ke liye
use App\Models\Contact;
use App\Models\Service;

class FrontendController extends Controller
{
    // Home Page dikhane ke liye
    public function index()
    {
        return view('frontend.home');
    }

    // Booking Form wala page dikhane ke liye
    public function booking()
    {
        return view('frontend.booking');
    }

    // Form ka data Database mein save karne ke liye (Security included)
public function storeBooking(Request $request) {
    $request->validate([
        'name'    => 'required',
        'phone'   => 'required',
        'service' => 'required',
        'date'    => 'required',
        'time'    => 'required', // Yeh lazmi hai
    ]);

    // Default status 'pending' table khud hi laga dega
    Appointment::create($request->all());

    return redirect()->back()->with('success', 'Booking successful!');
}

    // Services page dikhane ke liye


    // Gallery page dikhane ke liye
    public function gallery()
    {
        return view('frontend.gallery');
    }

public function services()
    {
        // 1. Database se saari services uthayein
        $services = Service::all();

        // 2. Variable ko view ke sath bhejein
        return view('frontend.services', compact('services'));
    }


    public function about(){
        return view('frontend.about');
    }

 // app/Http/Controllers/FrontendController.php

public function contact()
{
    // Check karein ke file ka naam 'contact.blade.php' hi hai
    return view('frontend.contact');
}
// use Illuminate\Http\Request;

public function contactSend(Request $request)
    {
        // 1. Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

       Contact::create([
           'name' => $request->name,
           'email' => $request->email,
           'message' => $request->message
       ]);
        return back()->with('success', 'Thanks.');
    }
}
