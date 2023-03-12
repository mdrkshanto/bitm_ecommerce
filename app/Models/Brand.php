<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    private static $brand, $image, $imageName, $imageExtension, $imageUrl, $directory;

    private static function getImageUrl($request)
    {
        self::$image            = $request->file('image');
        self::$imageExtension   = self::$image->getClientOriginalExtension();
        self::$imageName        = time().'.'.self::$imageExtension;
        self::$directory        = 'images/brand/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl         = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    protected static function storeBrand($request)
    {
        self::$brand                = new Brand();
        self::$brand->name          = $request->name;
        self::$brand->description   = $request->description;
        self::$brand->image         = self::getImageUrl($request);
        self::$brand->save();
    }

    protected static function brandUpdate($request, $id)
    {
        self::$brand = Brand::find($id);

        if ($request->file('image'))
        {
            if (file_exists(self::$brand->image))
            {
                unlink(self::$brand->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }else{
            self::$imageUrl = self::$brand->image;
        }

        self::$brand->name          = $request->name;
        self::$brand->description   = $request->description;
        self::$brand->image         = self::$imageUrl;
        self::$brand->status     = $request->status;
        self::$brand->save();
    }

    protected static function deleteBrand($id)
    {
        self::$brand = Brand::find($id);
        if (file_exists(self::$brand->image))
        {
            unlink(self::$brand->image);
        }
        self::$brand->delete();
    }
}
