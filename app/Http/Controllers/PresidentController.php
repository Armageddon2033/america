<?php

namespace App\Http\Controllers;

use App\Http\Requests\PresidentStoreRequest;
use App\Http\Requests\PresidentUpdateRequest;
use App\Party;
use App\President;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PresidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presidents = DB::table('presidents')->paginate(25);

        return view('presidents.index', compact('presidents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::all();
        $parties = Party::all();

        return view('presidents.create', compact('states', 'parties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PresidentStoreRequest $request)
    {
        $president = new President();
        $president->first_name = $request->first_name;
        $president->last_name = $request->last_name;
        $president->birthday = $request->birthday;
        $president->death = $request->death;
        $president->rank = $request->rank;
        $president->image = $request->image;
        $president->audio = $request->audio;
        $president->save();

        $president->states()->attach($request->states);
        $president->parties()->attach($request->parties);

        return redirect()->route('presidents.index')->with('message', 'President added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\President  $president
     * @return \Illuminate\Http\Response
     */
    public function show(President $president)
    {
        return view('presidents.show', compact('president'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\President  $president
     * @return \Illuminate\Http\Response
     */
    public function edit(President $president)
    {
        $states = State::all();
        $parties = Party::all();

        return view('presidents.edit', compact('president', 'states', 'parties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\President  $president
     * @return \Illuminate\Http\Response
     */
    public function update(PresidentUpdateRequest $request, President $president)
    {
        $president->first_name = $request->first_name;
        $president->last_name = $request->last_name;
        $president->birthday = $request->birthday;
        $president->death = $request->death;
        $president->rank = $request->rank;
        $president->image = $request->image;
        $president->audio = $request->audio;
        $president->save();

        $president->states()->sync($request->states);
        $president->parties()->sync($request->parties);

        return redirect()->route('presidents.index')->with('message', 'President updated');
    }

    public function delete(President $president)
    {
        $states = State::all();
        $parties = Party::all();

        return view('presidents.delete', compact('president', 'states', 'parties'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\President  $president
     * @return \Illuminate\Http\Response
     */
    public function destroy(President $president)
    {
        $president->states()->detach('state_id');
        $president->parties()->detach('party_id');

        $president->delete();

        return redirect()->route('presidents.index')->with('message', 'President deleted');
    }
}
