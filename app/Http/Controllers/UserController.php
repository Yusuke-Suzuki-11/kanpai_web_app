<?php

namespace App\Http\Controllers;

use App\User;
use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Http\Request;

use function Psy\debug;

class UserController extends Controller
{
    public function index()
    {
        $UserRowset = User::all();
        if (empty($UserRowset)) {
            abort(404);
        }

        return view("user.index", compact("UserRowset"));
    }

    public function show($id)
    {
        $UserRow = User::findOrFail($id);
        if (empty($UserRow)) {
            abort(404);
        }

        return view("user.show", compact("UserRow"));
    }
}
