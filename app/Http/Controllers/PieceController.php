<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PieceBoard;
use App\Models\Board;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;


class PieceController extends Controller
{
    public function piece(){
        $pieceboards = PieceBoard::where('user_id', Auth::user()->id)->paginate(8);
        return view('pages.pieceboardpage.index', ['pieceboards' => $pieceboards],  ['activePage' => 'board']);
    }

    public function showPiece($id)
    {
        $boards = Board::where('piece_id', $id);
        $pieceboard = PieceBoard::where('id', $id);
        return view('pages.boardpage.index', ['boards' => $boards, 'id' => $id, 'pieceboards' => $pieceboard],  ['activePage' => 'board']);
    }
    public function createpiece(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate([
            'piece_title' => 'required|string',
            'piece_description' => 'required|string',
            'piece_progress' => 'required|string',
        ]);
        
        PieceBoard::create([
            'piece_title' => $request->piece_title,
            'piece_description' => $request->piece_description,
            'piece_progress' => $request->piece_progress,
            'user_id' => $id
        ]);
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
