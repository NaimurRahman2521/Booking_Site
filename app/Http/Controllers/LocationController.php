<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    private $location, $locations;

    public function create(Request $request)
    {
        Location::newLocation($request);
        return back()->with('message','location Created successfully');
    }

    public function manage()
    {
        $this->locations = Location::all();

        return view('location.manage',['locations'=>$this->locations]);
    }

    public function edit()
    {
        $this->location = Location::find($_GET['id']);
        $this->location->image = asset($this->location->image);
        return response()->json($this->location);
    }

    public function update(Request $request)
    {
        if ($request->file('image'))
        {
            $this->validate($request,[
                'image'=>'image',
            ]);
        }
        location::updateLocation($request);
        return redirect('/location/manage')->with('message', 'Location info update successfully.');
    }

    public function delete($id)
    {
        location::deleteLocation($id);
        return back()->with('message', 'Location Successfully Deleted');
    }
}
