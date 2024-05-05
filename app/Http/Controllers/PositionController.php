<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;
use App\Models\Department;

class PositionController extends Controller
{
    public function redirect() {
        $positions = Position::where('is_active', 1)->get();
        $departments = Department::where('is_active', 1)->get();
        return view('admin.position')->with('positions', $positions)->with('departments', $departments);
    }
    public function store(Request $request){
        $request->validate([
            "position_name" => "required|unique:positions",
            "department_id" => "required",
        ]);
        $position = new Position();
        $position->department_id = $request->department_id;
        $position->position_name = $request->position_name;
        do{
            $position_id = rand(00000,99999);
        }while(Position::where('position_id', $position_id)->exists() || Department::where('department_id', $position_id)->exists());

        $position->position_id = $position_id;

        $position->save();
        return redirect()->back()->with("success", "Position Added Successfully");
    }
}

