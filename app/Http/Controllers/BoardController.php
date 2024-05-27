<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    public function board(){
        $board = Board::all();
        return view('pages.homepage.index', ['boards' => $board]);
    }
    public function createboard(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'progress' => 'required|string',
            'date' => 'required|string',
            'tag' => 'required|string',
            'task_person' => 'required|string',
        ]);

        Board::create($data);
        return redirect()->route('pages.homepage.index');
    }

    public function updateboard(Board $board, Request $request){
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'progress' => 'required|string',
            'date' => 'required|string',
            'tag' => 'required|string',
            'task_person' => 'required|string',
            ]);
            $board->update($data);
            return redirect()->route('pages.homepage.index');
    }
}

