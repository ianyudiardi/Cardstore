<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    //
    public function index()
    {
        $cards = Card::all();
        return view('home', ['cards' => $cards]);
    }

    public function show($id)
    {
        $card = Card::where('id', $id)
            ->firstOrFail();
        return view('card.show', ['card' => $card]);
    }
}
