<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $result = User::getUsers();
        return response()->json($result);
    }
}
