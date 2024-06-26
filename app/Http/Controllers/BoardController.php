<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    public function board($id){
        $board = Board::all();
        return view('pages.homepage.index',  ['id' => $id], ['boards' => $board]);
    }

    public function createboard(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'progress' => 'required|string',
            'date' => 'required|string',
            'tag' => 'required|string',
            'task_person' => 'required|string',
        ]);
        $data['piece_id'] = $id;
        Board::create($data);
        return redirect()->route('pages.homepage.index',  ['id' => $id]);
    }

    public function updateboard(Request $request, $id){
        $board = Board::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'progress' => 'required|string',
            'date' => 'required|string',
            'tag' => 'required|string',
            'task_person' => 'required|string',
        ]);
        $board->update($data);
        return redirect()->route('pages.homepage.index', ['id' => $board->piece_id]);
    }
    
    

    public function deleteboard($id){
        $board = Board::findOrFail($id); 
        $board->delete();
        return redirect()->route('pages.homepage.index', ['id' => $board->piece_id]);
    }
    
}

