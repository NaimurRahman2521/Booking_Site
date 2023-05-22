<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    private static $location, $image, $imageUrl, $directory, $imageName;

    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = time().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'location-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newLocation($request)
    {
        self::saveBasicInfo(new Location(), $request, $request->file('image') ? self::getImageUrl($request) : '');
    }

    public static function updateLocation($request)
    {
        self::$location = Location::find($request->id);
        if ($request->file('image'))
        {
            if (file_exists(self::$location->image))
            {
                unlink(self::$location->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl =self::$location->image;
        }
        self::saveBasicInfo(self::$location, $request, self::$imageUrl);

    }
    public static function deleteLocation($id)
    {
        self::$location = Location::find($id);
        if (file_exists(self::$location->image))
        {
            unlink(self::$location->image);
        }
        self::$location->delete();
    }

    private static function saveBasicInfo($location, $request, $imageUrl)
    {
        $location->name           = $request->name;
        if ($request->description)
        {
            $location->description    = $request->description;
        }
        $location->image          = $imageUrl;

        $location->status         = $request->status;

        $location->save();
    }
}
