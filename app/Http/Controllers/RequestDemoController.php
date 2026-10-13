<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestDemoRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RequestDemoController extends Controller
{
    public function index(): View
    {
        return view('request-demo.index');
    }

    public function store(RequestDemoRequest $request): RedirectResponse
    {
        return to_route('request-demo')->with('status', 'Hvala! Vaš zahtev za demo je primljen, javićemo vam se da dogovorimo termin.');
    }
}
