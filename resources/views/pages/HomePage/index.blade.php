@extends('layout.Structure.index')
<style>
  .border-dashed {
    border-style: dashed !important;
    border: 2px solid #0D6EFD;
  }
</style>
@section('content')

<div class="d-flex justify-content-between align-items-center mb-3 bg-white px-3 py-2 border-bottom shadow-sm">
  <div class="d-flex align-items-center">
    <a href="" class="rounded-circle text-black bg-secondary p-2 me-2"><i class="bi bi-arrow-left text-white"></i></a>
    <div class="ms-3">
      <p class="fw-bold mb-0">Name of the Project</p>
      <span class="fs-6 fw-light">In progress</span>
    </div>
  </div>
  <div>
    <button class="bg-white p-2 border-dashed rounded">Add members</button>
  </div>
</div>
<!-- Todo list -->
<div class="fixed px-3 pt-2">
  <div class="row gx-3">
    <div class="col-lg-3 col-md-6">

      <h5 class="text-xl fw-bold">TO DO</h5>
      <button type="button" class="btn btn-primary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Another Task
      </button>
      <div class="bg-todo rounded ">
        @foreach ($boards as $board)
        @if ($board->progress === "To-Do")
        <div class="bg-white w-full mb-4 p-2 rounded shadow">
          <div class="d-flex justify-content-end mb-0">
            <button class="btn"><i class="bi bi-pencil-square text-muted"></i></button>
            <button type="button" class="btn delete-button" data-id="{{ $board->id }}"><i class="bi bi-trash3-fill text-danger"></i></button>
          </div>
          <p class="fw-bold mb-1">{{ $board->title }}</p>
          <p class="">{{ $board->description }}</p>
        </div>
        @endif
        @endforeach
      </div>

    </div>
    <div class="col-lg-3 col-md-6">
      <h5 class="text-xl fw-bold">In Progress</h5>
      <button type="button" class="btn btn-secondary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalprogress">
        Add Another Task
      </button>
      <div class=" rounded ">
        @foreach ($boards as $board)
        @if ($board->progress === "In Progress")
        <div class="bg-white w-full mb-4 p-2 rounded shadow">
          <div class="d-flex justify-content-end mb-0">
            <button class="btn"><i class="bi bi-pencil-square text-muted"></i></button>
            <button type="button" class="btn delete-button" data-id="{{ $board->id }}"><i class="bi bi-trash3-fill text-danger"></i></button>
          </div>
          <p class="text-gray-700">{{ $board->title }}</p>
        </div>
        @endif
        @endforeach
      </div>

    </div>
    <div class="col-lg-3 col-md-6">
      <h5 class="text-xl fw-bold">In Review</h5>
      <button type="button" class="btn btn-danger w-100 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalreview">
        Add Another Task
      </button>
      <div class="bg-todo p-2 rounded ">
        @foreach ($boards as $board)
        @if ($board->progress === "In Review")
        <div class="bg-white w-full mb-4 p-2 rounded shadow">
          <div class="d-flex justify-content-end mb-0">
            <button class="btn"><i class="bi bi-pencil-square text-muted"></i></button>
            <button type="button" class="btn delete-button" data-id="{{ $board->id }}"><i class="bi bi-trash3-fill text-danger"></i></button>
          </div>
          <p class="text-gray-700">{{ $board->title }}</p>
        </div>
        @endif
        @endforeach
      </div>

    </div>
    <div class="col-lg-3 col-md-6">
      <h5 class="text-xl fw-bold">Done</h5>
      <button type="button" class="btn btn-success w-100 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModaldone">
        Add Another Task
      </button>
      <div class="bg-todo p-2 rounded ">
        @foreach ($boards as $board)
        @if ($board->progress === "Done")
        <div class="bg-white w-full mb-4 p-2 rounded shadow">
          <div class="d-flex justify-content-end mb-0">
            <button class="btn"><i class="bi bi-pencil-square text-muted"></i></button>
            <button type="button" class="btn delete-button" data-id="{{ $board->id }}"><i class="bi bi-trash3-fill text-danger"></i></button>
          </div>
          <p class="text-gray-700">{{ $board->title }}</p>
        </div>
        @endif
        @endforeach
      </div>
    </div>
  </div>
</div>

@include('components.modal.createtask.index')
@include('components.modal.createprogress.index')
@include('components.modal.createreview.index')
@include('components.modal.createdone.index')

<!-- Delete  Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete Task</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this task?
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

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    var deleteModal = $('#deleteModal');
    var deleteForm = $('#deleteForm');
    $('.delete-button').on('click', function() {
      var taskId = $(this).data('id');
      var action = '/boards/delete/' + taskId;
      deleteForm.attr('action', action);
      deleteModal.modal('show');
    });
  });
  
</script>
