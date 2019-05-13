<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Trail;

class TrailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trails = Trail::all();
        return view(
            'trails.index', /* the view to see */
            compact('trails') /* send the $manufacturers */
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('trails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = request()->validate([
            'name' => ['required'],
            'length' => ['required'],
            'time' => ['required'],

        ]);

       Trail::create($validated);
        return redirect('/trails');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trail = Trail::findOrFail($id);
     return view('trails.show', compact('trail'));
//        foreach ($trail->stops as $stops) {
//            dd( $stops);
//        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trail = trail::findOrFail($id);
        return view('trails.edit', compact('trail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
            'length' => ['required'],
            'time' => ['required'],
        ]);
        $trail = trail::findOrFail($id);
        $trail->name = $request->get('name');
        $trail->length = $request->get('length');
        $trail->time = $request->get('time');
        $trail->save();

        return redirect('/trails');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trail = Trail::findOrFail($id);
        $trail->delete();
        return redirect('/trails');
    }


}
