<?php

namespace App\Http\Controllers;

use App\Models\Identidad;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\IdentidadRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class IdentidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $identidads = Identidad::paginate();

        return view('identidad.index', compact('identidads'))
            ->with('i', ($request->input('page', 1) - 1) * $identidads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $identidad = new Identidad();

        return view('identidad.create', compact('identidad'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IdentidadRequest $request): RedirectResponse
    {
        Identidad::create($request->validated());

        return Redirect::route('identidads.index')
            ->with('success', 'Identidad created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $identidad = Identidad::find($id);

        return view('identidad.show', compact('identidad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $identidad = Identidad::find($id);

        return view('identidad.edit', compact('identidad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IdentidadRequest $request, Identidad $identidad): RedirectResponse
    {
        $identidad->update($request->validated());

        return Redirect::route('identidads.index')
            ->with('success', 'Identidad updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Identidad::find($id)->delete();

        return Redirect::route('identidads.index')
            ->with('success', 'Identidad deleted successfully');
    }
}
