<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Authentication ke liye
use Illuminate\Support\Facades\Hash; // Password hashing ke liye

class AdminController extends Controller
{
    // Dashboard View
    public function dashboard() {
        return view('admin.deshboard');
    }

    // Login Form Show Karna
    public function showLogin(){
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    // Login Logic
    public function login(Request $request){
        $credentials = $request->validate([
             'email' => 'required|email',
             'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
             $request->session()->regenerate();
             return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid Credentials']);
    }

    // Logout Logic
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    // Services Management
    public function createService() {
        return view('admin.add-service');
    }

    public function storeService(Request $request) {
        $request->validate([
            'category' => 'required',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric'
        ]);

        Service::create($request->all());

        return redirect()->route('admin.services.manage')->with('success', 'New service added successfully!');
    }

    public function manageServices() {
        $services = Service::all();
        return view('admin.manage-service', compact('services'));
    }

    public function deleteService($id) {
        $service = Service::find($id);
        if($service) {
            $service->delete();
            return redirect()->back()->with('success', 'Service deleted!');
        }
        return redirect()->back()->with('error', 'Service not found!');
    }

    // Bookings Management
    public function manageBookings() {
        $bookings = Appointment::orderBy('created_at', 'desc')->get();
        return view('admin.manage-bookings', compact('bookings'));
    }

    // Edit form dikhane ke liye
public function editService($id) {
    $service = Service::findOrFail($id);
    return view('admin.edit-service', compact('service'));
}

// Data update karne ke liye
public function updateService(Request $request, $id) {
    $request->validate([
        'category' => 'required',
        'name' => 'required',
        'price' => 'required|numeric'
    ]);

    $service = Service::findOrFail($id);
    $service->update($request->all());

    return redirect()->route('admin.services.manage')->with('success', 'Service updated successfully!');
}


// Messages ki list dikhana
public function adminMessages()
{
    // Latest messages sabse upar ayenge
    $messages = Contact::latest()->get();
    return view('admin.messages', compact('messages'));
}

// Message delete karna
public function deleteMessage($id)
{
    $message = Contact::findOrFail($id);
    $message->delete();

    return back()->with('success', 'Message deleted successfully!');
}
}
