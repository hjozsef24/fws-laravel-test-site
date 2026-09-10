<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\ContactMessage;

class ContactController extends Controller
{
	public function store(ContactRequest $request)
	{
		$validated = $request->validated();

		ContactMessage::create($validated);

        // @TODO: Send e-mail for the admin users

		return response()->json([
			'message' => 'Sikeres üzenetküldés.',
		]);
	}
}
