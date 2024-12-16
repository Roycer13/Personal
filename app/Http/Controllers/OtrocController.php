<?php

namespace App\Http\Controllers;

use App\Models\Otroc;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\OtrocRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OtrocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $otrocs = Otroc::paginate();

        return view('otroc.index', compact('otrocs'))
            ->with('i', ($request->input('page', 1) - 1) * $otrocs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $otroc = new Otroc();

        return view('otroc.create', compact('otroc'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OtrocRequest $request): RedirectResponse
    {
        Otroc::create($request->validated());

        return Redirect::route('otrocs.index')
            ->with('success', 'Otroc created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $otroc = Otroc::find($id);

        return view('otroc.show', compact('otroc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $otroc = Otroc::find($id);

        return view('otroc.edit', compact('otroc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OtrocRequest $request, Otroc $otroc): RedirectResponse
    {
        $otroc->update($request->validated());

        return Redirect::route('otrocs.index')
            ->with('success', 'Otroc updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Otroc::find($id)->delete();

        return Redirect::route('otrocs.index')
            ->with('success', 'Otroc deleted successfully');
    }
}
