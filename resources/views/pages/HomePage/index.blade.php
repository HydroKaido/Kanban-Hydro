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
          <div class="bg-white w-full mb-4 p-2 rounded shadow">
            <p class="text-gray-700">Task 1</p>
          </div>
        </div>
        <div class="bg-orange-200 w-1/4 p-2 mx-2 rounded shadow-lg">
          <h2 class="mb-5 text-xl font-semibold">In PROGRESS</h2>
          <div class="bg-white w-full mb-4 p-2 rounded shadow">
            <p class="text-gray-700">Task 1</p>
          </div>
        </div>
        <div class="bg-green-200 w-1/4 p-2 rounded shadow-lg">
          <h2 class="mb-5 text-xl font-semibold">DONE</h2>
          <div class="bg-white w-full mb-4 p-2 rounded shadow">
            <p class="text-gray-700">Task 1</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('components.modal.modalcreate.index')

  <script>
    function toggleModal(modalID) {
      const modal = document.getElementById(modalID);
      if (modal.classList.contains('hidden')) {
        modal.classList.remove('hidden');
      } else {
        modal.classList.add('hidden');
      }
    }
  </script>
@endsection
