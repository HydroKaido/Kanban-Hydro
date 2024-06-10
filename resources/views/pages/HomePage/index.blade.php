@extends('layout.Structure.index')

@section('content')
  <div class="fixed w-screen">
    <div class="mx-10 mt-4">
      <div class="mb-5">
        <h2 class="mb-5 text-xl font-semibold">BOARD PAGE</h2>
        <a>Add Task</a>
      </div>
      <div class="flex flex-wrap max-md:justify-center">
        <div class="bg-red-200 w-1/4 p-2 rounded shadow-lg">
          <h2 class="mb-5 text-xl font-semibold">TO DO</h2>
          @foreach ($boards as $board)
            @if ($board->progress === "To-Do")
            <div class="bg-white w-full mb-4 p-2 rounded shadow">
                <p class="text-gray-700">{{ $board->title }}</p>
              </div>
            @endif
          @endforeach
        </div>
        <div class="bg-orange-200 w-1/4 p-2 mx-2 rounded shadow-lg">
          <h2 class="mb-5 text-xl font-semibold">In PROGRESS</h2>
          @foreach ($boards as $board)
            @if ($board->progress === "In Progress")
            <div class="bg-white w-full mb-4 p-2 rounded shadow">
              <p class="text-gray-700">{{ $board->title }}</p>
            </div>
            
            @endif
          @endforeach
        </div>
        <div class="bg-green-200 w-1/4 p-2 mx-2 rounded shadow-lg">
          <h2 class="mb-5 text-xl font-semibold">DONE</h2>
          @foreach ($boards as $board)
            @if ($board->progress === "Done")
            <div class="bg-white w-full mb-4 p-2 rounded shadow">
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
  
@endsection
