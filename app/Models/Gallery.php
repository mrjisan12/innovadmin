<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Gallery extends Model
{
    use HasFactory;


    private static $gallery, $image,$imageExtension, $imageURL, $imageName, $directory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageExtension = self::$image->getClientOriginalExtension(); //png
        self::$imageName = time().'.'.self::$imageExtension; // 23234627384.png
        self::$directory = 'gallery-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageURL = self::$directory.self::$imageName;
        return self::$imageURL;
    }


    public static function newGallery($request)
    {
        self::$gallery = new Gallery();
        self::$gallery->caption              = $request->caption;
        self::$gallery->description          = $request->description;
        self::$gallery->position             = $request->position;
        self::$gallery->image                = self::getImageUrl($request);
        self::$gallery->save();
    }
    public static function updateGallery($request , $id)
    {
        self::$gallery = Gallery::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$gallery->image))
            {
                unlink(self::$gallery->image);
            }
            self::$imageURL = self::getImageUrl($request);
        }
        else
        {
            self::$imageURL = self::$gallery->image;
        }
        self::$gallery->caption              = $request->caption;
        self::$gallery->description       = $request->description;
        self::$gallery->position       = $request->position;
        self::$gallery->image               = self::$imageURL;
        self::$gallery->save();
    }
    public static function deleteGallery($id)
    {
        self::$gallery = Gallery::find($id);
        if(file_exists(self::$gallery->image))
        {
            unlink(self::$gallery->image); // remove image from that folder
        }
        self::$gallery->delete();
    }
}
