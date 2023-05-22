<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\Apartment;

class ApartmentController extends Controller
{
    private $apartment, $apartments,$locations;

    public function create(Request $request)
    {
        apartment::newApartment($request);
        return back()->with('message','Apartment Created successfully');
    }

    public function manage()
    {
        $this->apartments = Apartment::all();
        $this->locations = Location::all();

        return view('apartment.manage-apartment.manage',['apartments'=>$this->apartments,'locations'=>$this->locations]);
    }

    public function edit()
    {
        $this->apartment = Apartment::find($_GET['id']);
        $this->locations = Location::all();
        $this->apartment->image = asset($this->apartment->image);
        return response()->json(['apartment'=>$this->apartment,'locations'=>$this->locations]);
    }

    public function update(Request $request)
    {
        if ($request->file('image'))
        {
            $this->validate($request,[
                'image'=>'image',
            ]);
        }
        apartment::updateApartment($request);
        return redirect('/apartment/manage')->with('message', 'Apartment info update successfully.');
    }

    public function delete($id)
    {
        apartment::deleteApartment($id);
        return back()->with('message', 'apartment Successfully Deleted');
    }

}
