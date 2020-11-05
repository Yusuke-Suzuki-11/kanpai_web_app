<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $GroupRowset = Group::all();

        return view("group.index", compact("GroupRowset"));
    }

    public function add()
    {

        return view("group.add");
    }

    public function store(Request $request)
    {
        $GroupRow = new Group;


        $GroupRow->fill([

            "name" => $request->name,
            "grade" => $request->grade,
            "week_day_type" => $request->week_day_type,
            "start_time" => $request->start_time,
            "limit_person" => $request->limit_person,
            "limit_difficulty_point" => $request->limit_difficulty_point,
        ]);

        $GroupRow->save();
        return view("user.show");
    }
}
