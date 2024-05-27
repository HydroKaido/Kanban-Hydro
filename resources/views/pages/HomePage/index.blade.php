@extends('layout.Structure.index')

@section('content')
  <div class="fixed w-screen">
    <div class="mx-10 mt-4">
      <div class="mb-5">
        <h2 class="mb-5 text-xl font-semibold">BOARD PAGE</h2>
        <a href="javascript:void(0);" class="bg-blue-500 text-white p-2 rounded" onclick="toggleModal('modal')">Add Task</a>
      </div>
      <div class="flex flex-wrap max-md:justify-center">
        <div class="bg-red-200 w-1/4 p-2 rounded shadow-lg">
          <h2 class="mb-5 text-xl font-semibold">TO DO</h2>
          @foreach ($boards as $board)
            @if ($board->progress === "To-Do")
            <div class="bg-white w-full mb-4 p-2 rounded shadow" onclick="editTask('{{ $board->title }}', '{{ $board->tag }}', '{{ $board->description }}', '{{ $board->date }}', '{{ $board->task_person }}', '{{ $board->progress }}')">
                <p class="text-gray-700">{{ $board->title }}</p>
              </div>
            @endif
          @endforeach
        </div>
        <div class="bg-orange-200 w-1/4 p-2 mx-2 rounded shadow-lg">
          <h2 class="mb-5 text-xl font-semibold">In PROGRESS</h2>
          @foreach ($boards as $board)
            @if ($board->progress === "In Progress")
            <div class="bg-white w-full mb-4 p-2 rounded shadow" onclick="editTask('{{ $board->title }}', '{{ $board->tag }}', '{{ $board->description }}', '{{ $board->date }}', '{{ $board->task_person }}', '{{ $board->progress }}')">
                <p class="text-gray-700">{{ $board->title }}</p>
              </div>
            @endif
          @endforeach
        </div>
        <div class="bg-green-200 w-1/4 p-2 mx-2 rounded shadow-lg">
          <h2 class="mb-5 text-xl font-semibold">DONE</h2>
          @foreach ($boards as $board)
            @if ($board->progress === "Done")
            <div class="bg-white w-full mb-4 p-2 rounded shadow" onclick="editTask('{{ $board->title }}', '{{ $board->tag }}', '{{ $board->description }}', '{{ $board->date }}', '{{ $board->task_person }}', '{{ $board->progress }}')">
                <p class="text-gray-700">{{ $board->title }}</p>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>

  @include('pages.createtask.index')
  @include('pages.edittask.index')
  <!-- Edit Task Modal -->
  

  <script>
    function toggleModal(modalID) {
      const modal = document.getElementById(modalID);
      if (modal.classList.contains('hidden')) {
        modal.classList.remove('hidden');
      } else {
        modal.classList.add('hidden');
      }
    }
    
    function editTask(title, tag, description, date, task_person, progress) {
      document.getElementById('edit-title').value = title;
      document.getElementById('edit-task-tag').value = tag;
      document.getElementById('edit-task-progress').value = progress;
      document.getElementById('edit-task-date').value = date;
      document.getElementById('edit-task-description').value = description;
      document.getElementById('edit-task-task_person').value = task_person;
      toggleModal('modal-edit');
    }
  </script>
@endsection
