@extends('layout.Structure.index')

<style>
  .border-dashed {
    border-style: dashed !important;
    border: 2px solid #0D6EFD;
  }
  #loading-spinner {
  margin-top: 20px;
}
</style>
@section('homeContent')
@include('components.Toast.index')
<div class="d-flex justify-content-between align-items-center mb-3 bg-white px-3 py-2 border-bottom shadow-sm">
  <div class="d-flex align-items-center">
    <a href="{{'/board'}}" class="rounded-circle text-black bg-secondary p-2 me-2"><i class="bi bi-arrow-left text-white"></i></a>
    <div class="ms-3">
      <p class="fw-bold mb-0">Name of the Project</p>
      <span class="fs-6 fw-light">In progress</span>
    </div>
  </div>
</div>
<!-- Todo list -->
<div class="fixed px-3 pt-2">
  <div class="row gx-3">
    <div class=" col-lg-3">

      <h5 class="text-xl fw-bold">TO DO</h5>
      <button type="button" class="btn btn-primary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Another Task
      </button>
      <div class="bg-todo rounded ">
        @foreach ($boards as $board)
        @if ($board->progress === "To-Do")
        <div class="bg-white w-full mb-4 p-2 rounded shadow">
          <div class="d-flex justify-content-end mb-0" >
            <button type="button" class="btn updateButton"  data-id="{{ $board->id}}", data-description="{{$board->description}}", data-title="{{$board->title}}", data-progress="{{$board->progress}}" data-date="{{$board->date}}" data-tag="{{$board->tag}}" data-task_person="{{$board->task_person}}"><i class="bi bi-pencil-square text-muted"></i></button>
            <button type="button" class="btn deleteButton"  data-id="{{ $board->id }}"><i class="bi bi-trash3-fill text-danger"></i></button>
          </div>
          <p class="fw-bold mb-1">{{ $board->title }}</p>
          <p class="">{{ $board->description }}</p>
        </div>
        @endif
        @endforeach
      </div>

    </div>
    <div class=" col-lg-3">
      <h5 class="text-xl fw-bold">In Progress</h5>
      <button type="button" class="btn btn-secondary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalprogress">
        Add Another Task
      </button>
      <div class=" rounded ">
        @foreach ($boards as $board)
        @if ($board->progress === "In Progress")
        <div class="bg-white w-full mb-4 p-2 rounded shadow">
          <div class="d-flex justify-content-end mb-0">
          <button type="button" class="btn updateButton"  data-id="{{ $board->id}}", data-description="{{$board->description}}", data-title="{{$board->title}}", data-progress="{{$board->progress}}",  data-date="{{$board->date}}", data-tag="{{$board->tag}}", data-task_person="{{$board->task_person}}"><i class="bi bi-pencil-square text-muted"></i></button>
          <button type="button" class="btn deleteButton"  data-id="{{ $board->id }}"><i class="bi bi-trash3-fill text-danger"></i></button>
          </div>
          <p class="text-gray-700">{{ $board->title }}</p>
        </div>
        @endif
        @endforeach
      </div>

    </div>
    <div class=" col-lg-3">
      <h5 class="text-xl fw-bold">In Review</h5>
      <button type="button" class="btn btn-danger w-100 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalreview">
        Add Another Task
      </button>
      <div class="bg-todo p-2 rounded ">
        @foreach ($boards as $board)
        @if ($board->progress === "In Review")
        <div class="bg-white w-full mb-4 p-2 rounded shadow">
          <div class="d-flex justify-content-end mb-0">
          <button type="button" class="btn updateButton"  data-id="{{ $board->id}}", data-description="{{$board->description}}", data-title="{{$board->title}}", data-progress="{{$board->progress}}" data-date="{{$board->date}}" data-tag="{{$board->tag}}" data-task_person="{{$board->task_person}}"><i class="bi bi-pencil-square text-muted"></i></button>
          <button type="button" class="btn deleteButton"  data-id="{{ $board->id }}"><i class="bi bi-trash3-fill text-danger"></i></button>
          </div>
          <p class="text-gray-700">{{ $board->title }}</p>
        </div>
        @endif
        @endforeach
      </div>

    </div>
    <div class=" col-lg-3">
      <h5 class="text-xl fw-bold">Done</h5>
      <button type="button" class="btn btn-success w-100 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModaldone">
        Add Another Task
      </button>
      <div class="bg-todo p-2 rounded ">
        @foreach ($boards as $board)
        @if ($board->progress === "Done")
        <div class="bg-white w-full mb-4 p-2 rounded shadow">
          <div class="d-flex justify-content-end mb-0">
          <button type="button" class="btn updateButton"  data-id="{{ $board->id}}", data-description="{{$board->description}}", data-title="{{$board->title}}", data-progress="{{$board->progress}}" data-date="{{$board->date}}" data-tag="{{$board->tag}}" data-task_person="{{$board->task_person}}"><i class="bi bi-pencil-square text-muted"></i></button>
          <button type="button" class="btn deleteButton"  data-id="{{ $board->id }}"><i class="bi bi-trash3-fill text-danger"></i></button>
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
@include('components.modal.updatemodal.index')
@include('components.modal.deletemodal.index')

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    var deleteModal = $('#deleteModal');
    var deleteForm = $('#deleteForm');
    var updateModal = $('#updateModal');
    var updateForm = $('#updateForm');

    $('.deleteButton').on('click', function() {
      var taskId = $(this).data('id');
      var action = '/boards/delete/' + taskId;
      deleteForm.attr('action', action);
      deleteModal.modal('show');
    });

    $('.updateButton').on('click', function() {
      var taskId = $(this).data('id');
      var title = $(this).data('title');
      var description = $(this).data('description');
      var progress = $(this).data('progress');
      var date = $(this).data('date');
      var tag = $(this).data('tag');
      var taskPerson = $(this).data('task_person');
      $('#taskTitle').val(title);
      $('#taskDescription').val(description);
      $('#taskProgress').val(progress);
      $('#taskDate1').val(date);
      $('#taskTag').val(tag);
      $('#taskPerson').val(taskPerson);

      var action = '/boards/update/' + taskId;
      updateForm.attr('action', action);
      updateModal.modal('show');
    });
    flatpickr('#taskDate1', {
      dateFormat: "Y-m-d",
    });
    updateForm.on('submit', function() {
      $('#form-fields').hide();
      $('#loading-spinner').show();
    })
    $(".toast").toast('show');
  });


</script>
