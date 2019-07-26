<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stop;
use Image;
use File;
class StopsController extends Controller
{
    /**
     * Display a listing of the stops.
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
     * Show the form for creating a stop.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stops.create');
    }

    /**
     * Store a newly created stop into database.
     * Stores a image in the public/images/stops
     * returns to Display a listing of the stops.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = request()->validate([
            'name' => ['required'],
            'street_location' => ['required'],
            'short_desc' => ['required'],
            'full_desc' => ['required'],
            'coord_x' => ['required', 'numeric'],
            'coord_y' => ['required', 'numeric'],
        ]);
        $stop = Stop::create($validated);

        if($request->hasFile('img')) {
            $img = $request->file('img');
            $filename = time() . '.' . $img->getClientOriginalExtension();
            Image::make($img)->resize(300, 300)->save(public_path('/images/stops/' . $filename));
            $stop->img = $filename;
            $stop->save();
        }


        return redirect('/stops');
    }

    /**
     * Display the specified stop
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stop = Stop::findOrFail($id);
        return view('stops.show', compact('stop'));
    }

    /**
     * Show the form for editing the specified stop
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
     * also if user change the image it will remove old image and add new image to public/images/stops
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
            'short_desc' => ['required' , 'max:150'],
            'full_desc' => ['required', 'max:255'],
            'coord_x' => ['required', 'numeric'],
            'coord_y' => ['required', 'numeric']
        ]);
        $stop = Stop::find($id);
        $stop->name = $request->get('name');
        $stop->short_desc = $request->get('short_desc');
        $stop->full_desc = $request->get('full_desc');
        $stop->coord_x = $request->get('coord_x');
        $stop->coord_y = $request->get('coord_y');


        if($request->hasFile('img')) {
            if($stop->img == 'default.jpg') {
                $img = $request->file('img');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                Image::make($img)->resize(300, 300)->save(public_path('/images/stops/' . $filename));
                $stop->img = $filename;
            }else{
                $image = public_path('/images/stops/' .  $stop->img);
                File::delete($image);
                $img = $request->file('img');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                Image::make($img)->resize(300, 300)->save(public_path('/images/stops/' . $filename));
                $stop->img = $filename;
            }
        }


        $stop->save();
        return redirect('/stops');
    }

    /**
     * Remove the specified stop from database.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stop = Stop::findOrFail($id);
        $stop->trails()->detach($id);
        $stop->delete();
        if($stop->img == 'default.jpg') {
            return redirect('/stops');
        }
        else {
            $image = public_path('/images/stops/' .  $stop->img);
            File::delete($image);
            return redirect('/stops');
        }



    }

    /**
     * Api for showing all of the stops
     * @return Stop[]|\Illuminate\Database\Eloquent\Collection
     */
    public function apiAll()
    {
        return Stop::all();
    }

    /**
     * Api for showing only one stop
     * @param $id
     * @return mixed
     */
    public function apiOne($id)
    {
            return Stop::findOrFail($id);
    }


}

