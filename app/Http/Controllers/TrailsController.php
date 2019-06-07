<?php

namespace App\Http\Controllers;


use App\Stop;
use Illuminate\Http\Request;
use App\Trail;
use Image;
use File;

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = request()->validate([
            'name' => ['required'],
            'length' => ['required'],
            'time' => ['required'],

        ]);

        $trail = Trail::create($validated);

        $stops = $request->get('stops');
        foreach ($stops as $stop) {
            $trail->stops()->attach((int)$stop);
        }


        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $filename = time() . '.' . $img->getClientOriginalExtension();
            Image::make($img)->resize(300, 300)->save(public_path('/images/trails/' . $filename));
            $trail->img = $filename;
            $trail->save();
        }
        return redirect('/trails');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stops = Stop::all();
        $trail = Trail::findOrFail($id);
        return view('trails.edit', compact('trail', 'stops'));
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
            'length' => ['required'],
            'time' => ['required'],
        ]);

        $trail = trail::findOrFail($id);
        $trail->name = $request->get('name');
        $trail->length = $request->get('length');
        $trail->time = $request->get('time');

        if ($request->hasFile('img')) {
            if ($trail->img == 'default.jpg') {
                $img = $request->file('img');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                Image::make($img)->resize(300, 300)->save(public_path('/images/trails/' . $filename));
                $trail->img = $filename;
            } else {
                $image = public_path('/images/trails/' . $trail->img);
                File::delete($image);
                $img = $request->file('img');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                Image::make($img)->resize(300, 300)->save(public_path('/images/trails/' . $filename));
                $trail->img = $filename;
            }
        }

        foreach ($trail->stops as $stop) {
            $trail->stops()->detach($stop->id);
        }
        $stops = $request->get('stops');
        foreach ($stops as $stop) {
            $trail->stops()->attach((int)$stop);
        }
        
        $trail->save();
        return redirect('/trails');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trail = Trail::findOrFail($id);
        foreach ($trail->stops as $stop) {
            $trail->stops()->detach($stop->id);
        }


        if ($trail->img != 'default.jpg') {
            $image = public_path('/images/stops/' . $trail->img);
            File::delete($image);
        }

        $trail->delete();
        return redirect('/trails');
    }


    public function apiAll()
    {
        return Trail::all();
    }

    public function apiOne($id)
    {
        return Trail::findOrFail($id);
    }
}
