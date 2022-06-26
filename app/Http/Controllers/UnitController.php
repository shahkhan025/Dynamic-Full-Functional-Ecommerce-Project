<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    private $units;
    private $unit;

    public function add()
    {
        return view('admin.unit.add');
    }

    public function create(Request $request)
    {
        Unit::createNewUnit($request);
        return redirect('/add-unit')->with('message', 'Unit Created Successfully');
    }

    public function manage()
    {
        $this->units = Unit::orderBy('id', 'desc')->get();
        return view('admin.unit.manage',['units' => $this->units]);
    }

    public function edit($id)
    {
        $this->unit = Unit::find($id);
        return view('admin.unit.edit', ['unit' => $this->unit]);
    }
    public function update(Request $request, $id)
    {
        Unit::updateUnit($request, $id);
        return redirect('/manage-unit')->with('message', 'Unit Updated Successfully');
    }
    public function delete($id)
    {
        $this->unit = Unit::find($id);

        if (file_exists($this->unit->image))
        {
            unlink($this->unit->image);
        }

        $this->unit->delete();
        return redirect()->back()->with('message', 'Unit Deleted Successfully');
    }

}
