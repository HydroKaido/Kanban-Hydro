@extends('layout.Structure.index')
@section('homeContent')

@include('components.Toast.index')

<div class="bg-white p-4">
    <div class="">Dashboard</div>
</div>

<div>
    <div class="d-flex justify-content-between me-3 my-3">
        <div>
            <button class="btn bg-white" id="asc">ASC</button>
            <button class="btn bg-white" id="desc">DESC</button>
        </div>
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">Create Board</button>
    </div>
    @if ($pieceboards->isEmpty())
        <div>No Data</div>
    @else
        <div id="pieceboard-container">
            @foreach ($pieceboards as $pieceboard)
                @if ($pieceboard->user_id == Auth::user()->id)
                    <div class="pieceboard-item" data-title="{{ $pieceboard->piece_title }}">
                        <a href="{{ route('piece.data', $pieceboard->id) }}" class=" mb-1 text-dark text-decoration-none" id="pieceboard">
                            <div class="bg-white mx-3 rounded border mt-2 d-flex justify-content-between p-2">
                                <h6 class="mx-2 fw-bold">{{$pieceboard->piece_title}}</h6>
                                <div>
                                    <span>{{ $pieceboard->created_at->format('Y-m-d') }}</span>
                                    <button type="button" class="btn btn-danger delete-btn mx-2" data-bs-toggle="modal" data-bs-target="#exampledeDeleteModal" data-id="{{ $pieceboard->id }}">Delete</button>
                                    <button type="button" class="btn btn-primary delete-btn mx-2" data-bs-toggle="modal" data-bs-target="#exampledeDeleteModal" data-id="{{ $pieceboard->id }}">Update</button>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    @endif

    <!-- Create Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create Board</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('create.piece') }}" method="POST">
                        @csrf
                        <input type="text" name="piece_title" class="form-control" placeholder="Title">
                        <input type="text" name="piece_description" class="form-control" placeholder="Description">
                        <input type="text" name="piece_progress" class="form-control" placeholder="Progress">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="exampledeDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Board</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this board?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form id="deleteForm" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var deleteModal = $('#exampledeDeleteModal');
        var deleteForm = $('#deleteForm');
        $('.delete-btn').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var Id = $(this).data('id');
            var action = '/board/piece/delete/' + Id;
            deleteForm.attr('action', action);
        });
        $(".toast").toast('show');

        var asc = $('#asc');
        var desc = $('#desc');

        asc.on('click', function() {
            sortPieceboards('asc');
        });

        desc.on('click', function() {
            sortPieceboards('desc');
        });

        function sortPieceboards(order){
            
        }
    });
</script>
@endsection
