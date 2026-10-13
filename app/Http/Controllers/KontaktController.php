<?php

namespace App\Http\Controllers;

use App\Http\Requests\KontaktRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class KontaktController extends Controller
{
    public function index(): View
    {
        return view('kontakt.index');
    }

    public function store(KontaktRequest $request): RedirectResponse
    {
        return to_route('kontakt')->with('status', 'Hvala! Vaša poruka je poslata, javićemo vam se u najkraćem roku.');
    }
}
