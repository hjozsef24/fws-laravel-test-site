<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\ContactMessage;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        $validated = $request->validated();

        ContactMessage::create($validated);

        $admins = User::query()->get();

        foreach ($admins as $admin) {
            Mail::to($admin->email)
                ->send(new ContactMail($validated));
        }

        return response()->json([
            'message' => 'Sikeres üzenetküldés.',
        ]);
    }
}
