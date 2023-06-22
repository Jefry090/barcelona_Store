<?php

namespace App\Http\Controllers;

use App\Models\Accesory;
use Illuminate\Http\Request;

/**
 * Class AccesoryController
 * @package App\Http\Controllers
 */
class AccesoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accesories = Accesory::paginate();

        return view('accesory.index', compact('accesories'))
            ->with('i', (request()->input('page', 1) - 1) * $accesories->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accesory = new Accesory();
        return view('accesory.create', compact('accesory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Accesory::$rules);

        $accesory = Accesory::create($request->all());

        return redirect()->route('accesories.index')
            ->with('success', 'Accesory created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $accesory = Accesory::find($id);

        return view('accesory.show', compact('accesory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accesory = Accesory::find($id);

        return view('accesory.edit', compact('accesory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Accesory $accesory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accesory $accesory)
    {
        request()->validate(Accesory::$rules);

        $accesory->update($request->all());

        return redirect()->route('accesories.index')
            ->with('success', 'Accesory updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $accesory = Accesory::find($id)->delete();

        return redirect()->route('accesories.index')
            ->with('success', 'Accesory deleted successfully');
    }
}
