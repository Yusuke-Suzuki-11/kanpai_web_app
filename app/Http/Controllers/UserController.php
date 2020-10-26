<?php

namespace App\Http\Controllers;

use App\User;
use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Psy\debug;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $UserRowset = User::all();
        if (empty($UserRowset)) {
            abort(404);
        }

        $SearchUserRowset = "";
        if (!empty($request->keyWord)) {
            $SearchUserRowset = User::where("name", "like", "%" . $request->keyWord . "%")->get();
        }



        return view("user.index", compact("UserRowset", "SearchUserRowset"));
    }

    public function show($id)
    {
        $UserRow = User::findOrFail($id);
        if (empty($UserRow)) {
            abort(404);
        }

        return view("user.show", compact("UserRow"));
    }

    public function edit(int $id)
    {
        $AuthUserRow = Auth::user();
        if (empty($AuthUserRow)) {
            abort(404);
        }
        return view("user.edit", compact("AuthUserRow"));
    }

    public function user_profile_update(int $id, Request $request)
    {
        $UserRow = Auth::user();
        if ($UserRow != User::find($id)) {
            abort(404);
        }

        $UserRow->name = $request->name;
        $UserRow->email = $request->email;
        $UserRow->save();
        return view("user.show", compact("UserRow"));
    }

    public function member_management(Request $request)
    {
        $UserRow = new User;

        $UserRow->fill([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->email,
            "gender_type" => $request->gender_type,
            "birthday" => $request->birthday,
            "user_type" => 5,
            "transfer_count" => 0,
            "difficulty_point" => $request->difficulty_point,
            "membership_num" => $request->membership_num,
        ]);

        $UserRow->save();

        return view("user.index")->with("UserRowset", User::all());
    }
}
