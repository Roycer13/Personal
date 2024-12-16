<?php

namespace App\Http\Controllers;

use App\Models\Especialc;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EspecialcRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EspecialcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $especialcs = Especialc::paginate();

        return view('especialc.index', compact('especialcs'))
            ->with('i', ($request->input('page', 1) - 1) * $especialcs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $especialc = new Especialc();

        return view('especialc.create', compact('especialc'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EspecialcRequest $request): RedirectResponse
    {
        Especialc::create($request->validated());

        return Redirect::route('especialcs.index')
            ->with('success', 'Especialc created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $especialc = Especialc::find($id);

        return view('especialc.show', compact('especialc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $especialc = Especialc::find($id);

        return view('especialc.edit', compact('especialc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EspecialcRequest $request, Especialc $especialc): RedirectResponse
    {
        $especialc->update($request->validated());

        return Redirect::route('especialcs.index')
            ->with('success', 'Especialc updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Especialc::find($id)->delete();

        return Redirect::route('especialcs.index')
            ->with('success', 'Especialc deleted successfully');
    }
}
