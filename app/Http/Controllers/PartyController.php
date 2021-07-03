<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartyStoreRequest;
use App\Http\Requests\PartyUpdateRequest;
use App\Party;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parties = DB::table('parties')->paginate(25);

        return view('parties.index', compact('parties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parties = Party::all();

        return view('parties.create', compact('parties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartyStoreRequest $request)
    {
        $party = new Party();
        $party->name = $request->name;
        $party->founder = $request->founder;
        $party->logo = $request->logo;
        $party->save();

        return redirect()->route('parties.index')->with('message', 'Party added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function show(Party $party)
    {
        return view('parties.show', compact('party'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function edit(Party $party)
    {
        return view('parties.edit', compact('party'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function update(PartyUpdateRequest $request, Party $party)
    {
        $party->name = $request->name;
        $party->founder = $request->founder;
        $party->logo = $request->logo;
        $party->save();

        return redirect()->route('parties.index')->with('message', 'Party updated');
    }

    public function delete(Party $party)
    {
        return view('parties.delete', compact('party'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function destroy(Party $party)
    {
        $party->delete();
        return redirect()->route('parties.index')->with('message', 'Party deleted');
    }
}
