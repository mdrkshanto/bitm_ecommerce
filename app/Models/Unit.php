<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    private static $unit;
    protected static function storeUnit($request)
    {
        self::$unit                = new Unit();
        self::$unit->name          = ucwords($request->name);
        self::$unit->code          = strtolower($request->code);
        self::$unit->description   = $request->description;
        self::$unit->save();
    }

    protected static function unitUpdate($request, $id)
    {
        self::$unit = Unit::find($id);

        self::$unit->name          = ucwords($request->name);
        self::$unit->code          = strtolower($request->code);
        self::$unit->description   = $request->description;
        self::$unit->status        = $request->status;
        self::$unit->save();
    }

    protected static function deleteUnit($id)
    {
        self::$unit = Unit::find($id);
        self::$unit->delete();
    }
}
