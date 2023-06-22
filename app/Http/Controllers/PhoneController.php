<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

/**
 * Class PhoneController
 * @package App\Http\Controllers
 */
class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::paginate();

        return view('phone.index', compact('phones'))
            ->with('i', (request()->input('page', 1) - 1) * $phones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $phone = new Phone();
        return view('phone.create', compact('phone'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Phone::$rules);

        $phone = Phone::create($request->all());

        return redirect()->route('phones.index')
            ->with('success', 'Phone created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phone = Phone::find($id);

        return view('phone.show', compact('phone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phone = Phone::find($id);

        return view('phone.edit', compact('phone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Phone $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phone $phone)
    {
        request()->validate(Phone::$rules);

        $phone->update($request->all());

        return redirect()->route('phones.index')
            ->with('success', 'Phone updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $phone = Phone::find($id)->delete();

        return redirect()->route('phones.index')
            ->with('success', 'Phone deleted successfully');
    }
}
