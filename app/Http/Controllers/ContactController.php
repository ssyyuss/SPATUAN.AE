<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest; // Add this import
use App\Models\Contact;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Log; // Add this import
use Illuminate\Support\Facades\DB; // Add this import

class ContactController extends Controller
{
    public function makeAdmin()
    {
        // Cari user dengan ID 1
        $user = User::find(3);

        // Cek apakah role admin sudah ada, jika belum buat
        $role = Role::firstOrCreate(['name' => 'admin']);

        // Assign role admin ke user
        $user->assignRole($role);

        return "User telah menjadi admin.";
    }

    // Show the contact form
    public function showForm()
    {
        return view('dashboard'); 
    }

    // Enhanced store method with transaction and logging
    public function store(ContactRequest $request)
    {
        // Begin database transaction for added security
        DB::beginTransaction();

        try {
            // Validate input (already done by ContactRequest)
            $validatedData = $request->validated();

            // Additional security: Log the contact submission
            Log::info('Contact form submission', [
                'user_id' => auth()->id(),
                'email' => $validatedData['email']
            ]);

            // Create contact with validated data
            $contact = Contact::create($validatedData);

            // Commit transaction
            DB::commit();

            // Redirect with success message
            return redirect()->route('dashboard')->with('success', 'Your message has been sent successfully!');

        } catch (\Exception $e) {
            // Rollback transaction on error
            DB::rollBack();

            // Log the error
            Log::error('Contact submission failed: ' . $e->getMessage());

            // Redirect back with error
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function index()
    {
        // Fetch all contacts from the database
        $contacts = Contact::all();

        // Pass the contacts data to the view
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:15',
                'message' => 'required|string',
            ]);

            $contact = Contact::findOrFail($id);
            $contact->update($validated);

            // Log the update action
            Log::info('Contact updated', [
                'user_id' => auth()->id(),
                'contact_id' => $contact->id
            ]);

            DB::commit();

            return redirect()->route('contacts.index')->with('success', 'Contact updated successfully!');

        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Contact update failed: ' . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while updating the contact.');
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            $contact = Contact::findOrFail($id);
            
            // Log the delete action before deletion
            Log::info('Contact deletion', [
                'user_id' => auth()->id(),
                'contact_id' => $contact->id,
                'email' => $contact->email
            ]);

            $contact->delete();

            DB::commit();

            return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully!');

        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Contact deletion failed: ' . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while deleting the contact.');
        }
    }
}