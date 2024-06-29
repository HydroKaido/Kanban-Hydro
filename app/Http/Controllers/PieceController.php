<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PieceBoard;
use App\Models\Board;

class PieceController extends Controller
{
    public function piece(){
        $pieceboard = PieceBoard::all();
        return view('pages.pieceboardpage.index', ['pieceboards' => $pieceboard]);
    }

    public function showPiece($id)
    {
        $boards = Board::where('piece_id', $id)->get();
        return view('pages.homepage.index', ['boards' => $boards, 'id' => $id]);
    }
    public function createpiece(Request $request)
    {
        $data = $request->validate([
            'piece_title' => 'required|string',
            'piece_description' => 'required|string',
            'piece_progress' => 'required|string',
            'user_id' => 'required|string'
        ]);

        PieceBoard::create($data);
        return redirect()->route('pages.pieceboardpage.index')->with('success', 'Piece is now Created');
    }
    public function deletePiece($id)
    {
        $pieceboard = PieceBoard::findOrFail($id);
        $boards = Board::where('piece_id', $id);
        $pieceboard->delete();
        $boards->delete();
        return redirect()->route('pages.pieceboardpage.index')->with('deleted', 'Piece deleted successfully');
    }
}
