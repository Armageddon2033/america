<?php

namespace App\Http\Controllers;

use App\Http\Requests\StateStoreRequest;
use App\Http\Requests\StateUpdateRequest;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = DB::table('states')->paginate(25);

        return view('states.index', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('states.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StateStoreRequest $request)
    {
        $state = new State();
        $state->name = $request->name;
        $state->birthday = $request->birthday;
        $state->flag = $request->flag;
        $state->capital = $request->capital;
        $state->largest = $request->largest;
        $state->save();

        return redirect()->route('states.index')->with('message', 'State added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        return view('states.show', compact('state'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        return view('states.edit', compact('state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(StateUpdateRequest $request, State $state)
    {
        $state->name = $request->name;
        $state->birthday = $request->birthday;
        $state->flag = $request->flag;
        $state->capital = $request->capital;
        $state->largest = $request->largest;
        $state->save();

        return redirect()->route('states.index')->with('message', 'State updated');
    }

    public function delete(State $state)
    {
        return view('states.delete', compact('state'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        $state->delete();
        return redirect()->route('states.index')->with('message', 'State deleted');
    }
}
