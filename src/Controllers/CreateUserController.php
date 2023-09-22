<?php

namespace Nirajkavishka\Randuser\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class CreateUserController extends Controller
{
    public function show()
    {
        $response = Http::get('https://randomuser.me/api/');
        $user = json_decode($response->body(), true);
        $user = $user['results'][0];
        // dd($user);
        return view('randuser::show', compact('user'));
    }
}
