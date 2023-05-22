<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    private static $apartment, $image, $imageUrl, $directory, $imageName;

    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = time().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'apartment-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newApartment($request)
    {
        self::saveBasicInfo(new Apartment(), $request, $request->file('image') ? self::getImageUrl($request) : '');
    }

    public static function updateApartment($request)
    {
        self::$apartment = Apartment::find($request->id);
        if ($request->file('image'))
        {
            if (file_exists(self::$apartment->image))
            {
                unlink(self::$apartment->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl =self::$apartment->image;
        }
        self::saveBasicInfo(self::$apartment, $request, self::$imageUrl);

    }
    public static function deleteApartment($id)
    {
        self::$apartment = Apartment::find($id);
        if (file_exists(self::$apartment->image))
        {
            unlink(self::$apartment->image);
        }
        self::$apartment->delete();
    }

    private static function saveBasicInfo($apartment, $request, $imageUrl)
    {
        $apartment->title           = $request->title;

        $apartment->location_id          = $request->location_id;

        if ($request->description)
        {
            $apartment->description    = $request->description;
        }
        $apartment->total_adult          = $request->total_adult;


        $apartment->total_child          = $request->total_child;

        $apartment->image          = $imageUrl;

        $apartment->book_status         = $request->book_status;

        $apartment->status         = $request->status;

        $apartment->save();
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
