<?php

namespace App\Http\Controllers;

use App\Exports\ContactsExport;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contacts::orderBy('created_at', 'desc')->get();
        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'phone_num' => 'required|digits:11',
            'message' => 'required|string|max:1000',
        ]);

        Contacts::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone_num' => $validated['phone_num'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ]);
        return redirect()->back()->with('Success', 'Your contact has been submitted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacts $contact)
    {
        $contact->delete();
        return redirect()->back()->with('success', 'Contact Deleted Successfully');
    }


    public function export()
    {
        return Excel::download(new ContactsExport, 'contacts.xlsx');
    }
}
