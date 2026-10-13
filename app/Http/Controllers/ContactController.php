<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact.index');
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        return to_route('contact')->with('status', 'Hvala! Vaša poruka je poslata, javićemo vam se u najkraćem roku.');
    }
}
