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
     * Display a listing of the trails
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trails = Trail::paginate(6);
        return view(
            'trails.index', /* the view to see */
            compact('trails') /* send the $manufacturers */
        );
    }

    /**
     * Show the form for creating a new trail
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stops = Stop::all();
        return view('trails.create', compact('stops'));
    }

    /**
     * Store a newly created resource in storage.
     *  add new image to public/images/trail
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = request()->validate([
            'name' => ['required'],
            'length' => ['required'],
            'time' => ['required'],
            'description' =>['required', 'max:255'],
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
     * Display the specified trail
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trail = Trail::findOrFail($id);
        return view('trails.show', compact('trail'));
    }

    /**
     * Show the form for editing the specified trail
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
     * Update the specified trail in database.
     * also if user change the image it will remove old image and add new image to public/images/trails
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
            'description' => ['required' , 'max:255'],
        ]);

        $trail = trail::findOrFail($id);
        $trail->name = $request->get('name');
        $trail->length = $request->get('length');
        $trail->time = $request->get('time');
        $trail->description = $request->get('description');

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
     * Remove the specified trail from database
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

    /**
     * Api for showing all of the trails from the database
     * @return Trail[]|\Illuminate\Database\Eloquent\Collection
     */
    public function apiAll()
    {
        return Trail::all();
    }

    /**
     * Api for showing only one trail from the database
     * @param $id
     * @return mixed
     */
    public function apiOne($id)
    {
        return Trail::findOrFail($id)->stops;
        //return Trail::findOrFail($id);
    }
}
