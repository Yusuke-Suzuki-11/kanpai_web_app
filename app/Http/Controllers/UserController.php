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

        if ($request->name) {
            $UserRow->name = $request->name;
        }
        if ($request->name) {
            $UserRow->email = $request->email;
        }
        $UserRow->save();

        return view("user.show", compact("UserRow"));
    }
}
