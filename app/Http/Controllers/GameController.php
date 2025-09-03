<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = [
            [
                'id' => 1,
                'title' => 'Rhythm Master',
                'genre' => 'Ритм-игра',
                'description' => 'Динамическая игра, где нужно попадать в такт музыке.'
            ],
            [
                'id' => 2,
                'title' => 'Pixel Runner',
                'genre' => 'Раннер',
                'description' => 'Бексонечный бег в пиксельном мире с множеством препятствий.'
            ],
            [
                'id' => 3,
                'title' => 'Jewel Quest',
                'genre' => 'Три в ряд',
                'description' => 'Собирайте кристаллы и решайте головоломки.'
            ],
        ];

        return view('game.index', ['games' => $games]);

    }

}
