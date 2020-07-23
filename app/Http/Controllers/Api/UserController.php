<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use User;

class UserController extends Controller
{
    public function index(): Response
    {
        $result = User::getUsers();
        return response()->success($result);
    }
}
