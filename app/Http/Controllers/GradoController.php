<?php

namespace App\Http\Controllers;

use App\Models\Grado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\GradoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $grados = Grado::paginate();

        return view('grado.index', compact('grados'))
            ->with('i', ($request->input('page', 1) - 1) * $grados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $grado = new Grado();

        return view('grado.create', compact('grado'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GradoRequest $request): RedirectResponse
    {
        Grado::create($request->validated());

        return Redirect::route('grados.index')
            ->with('success', 'Grado created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $grado = Grado::find($id);

        return view('grado.show', compact('grado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $grado = Grado::find($id);

        return view('grado.edit', compact('grado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GradoRequest $request, Grado $grado): RedirectResponse
    {
        $grado->update($request->validated());

        return Redirect::route('grados.index')
            ->with('success', 'Grado updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Grado::find($id)->delete();

        return Redirect::route('grados.index')
            ->with('success', 'Grado deleted successfully');
    }
}
