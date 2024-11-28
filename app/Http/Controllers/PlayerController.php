<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::with('section')->paginate(10);
        return view('players.index', compact('players'));
    }
}
