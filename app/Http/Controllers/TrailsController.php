<?php

namespace App\Http\Controllers;


use App\Stop;
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
        $stops = Stop::all();
         return view('trails.create', compact('stops'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->get('stops'));
      $validated = request()->validate([
            'name' => ['required'],
            'length' => ['required'],
            'time' => ['required'],

       ]);
//      dd($request);
      Trail::create($validated);


      $trail = Trail::where('name', $request->get('name'))->get();
//      $trail->stops()->attach($request->get('stops'));
//        dd($trail);
        $trail->stops()->get()->attach(1);
//        $stops=$request->get('stops');
//        dd($stops);
//        foreach ($stops as $stop)
//        {
////          dd((int)$stop);
//            $trail->stops()->sync((int)$stop);
//        }
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trail = Trail::findOrFail($id);
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
        $trail->stops()->detach($id);
        $trail->delete();

        return redirect('/trails');
    }


}
