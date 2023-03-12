<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    private static $unit, $units;

    public function create()
    {
        return view('admin.unit.index');
    }

    public function store(Request $request)
    {
        Unit::storeUnit($request);
        return back()->with('message', 'Unit crated successfully.');
    }

    public function manage()
    {
        self::$units = Unit::all();
        return view('admin.unit.manage',[
            'units' => self::$units
        ]);
    }

    public function edit($id)
    {
        self::$unit = Unit::find($id);

        return view('admin.unit.edit',[
            'unit' => self::$unit
        ]);
    }

    public function update(Request $request, $id)
    {
        Unit::unitUpdate($request, $id);
        return redirect(route('unit.manage'))->with('message','Unit Updated Successfully.');
    }

    public function delete($id)
    {
        Unit::deleteUnit($id);
        return back()->with('message', 'Unit deleted successfully.');
    }
}
