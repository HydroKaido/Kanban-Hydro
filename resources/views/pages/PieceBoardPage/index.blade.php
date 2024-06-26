@extends('layout.Structure.index')
@section('homeContent')
    <div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
        </button>

        @foreach ($pieceboards as $pieceboard)
            <a href="{{ route('piece.data', ['id' => $pieceboard->id]) }}" class="fw-bold mb-1">{{ $pieceboard->piece_title }}</a>
        @endforeach

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('create.piece') }}" method="POST">
                        @csrf
                        @method('POST')
                        <input type="text" name="piece_title" class="form-control">
                        <input type="text" name="piece_description" class="form-control">
                        <input type="text" name="piece_progress" class="form-control">
                        <input type="hidden" name="user_id" value="asdfasdf" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
