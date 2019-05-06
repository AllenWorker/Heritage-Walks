<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stop;

class StopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stops = Stop::all();
        return view(
            'stops.index', /* the view to see */
            compact('stops') /* send the $manufacturers */
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validated = request()->validate([
            'name' => ['required'],
            'short_desc' => ['required'],
            'full_desc' => ['required'],
            'coord_x' => ['required', 'numeric'],
            'coord_y' => ['required', 'numeric']
        ]);

        Stop::create($validated);
        return redirect('/stops');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stop = Stop::findOrFail($id);
        return view('stops.show', compact('stop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stop = Stop::findOrFail($id);
        return view('stops.edit', compact('stop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
            'short_desc' => ['required'],
            'full_desc' => ['required'],
            'coord_x' => ['required', 'numeric'],
            'coord_y' => ['required', 'numeric']
        ]);
        $stop = Stop::find($id);
        $stop->name = $request->get('name');
        $stop->short_desc = $request->get('short_desc');
        $stop->full_desc = $request->get('full_desc');
        $stop->coord_x = $request->get('coord_x');
        $stop->coord_y = $request->get('coord_y');
        $stop->save();

        return redirect('/stops');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stop = Stop::findOrFail($id);
        $stop->delete();
        return redirect('/stops');
    }

    public function apiAll()
    {
        return Stop::all();
    }

    public function apiOne($id)
    {
            return Stop::findOrFail($id);
    }


}

