<div id="modal-delete" class="fixed inset-0 z-50 hidden overflow-auto bg-gray-800 bg-opacity-50">
  <div class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg">
      <h2 class="text-xl font-semibold mb-4">Delete Task</h2>
      <p class="text-gray-700 mb-4">Are you sure you want to delete this task?</p>
      <div class="flex justify-end">
         <form action="{{ route('board.delete', ['board' => $board->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="bg-red-500 text-white px-4 py-2 rounded mr-2" type="submit">Delete</button>
            <button class="bg-gray-400 text-white px-4 py-2 rounded" onclick="toggleModal('modal-delete')">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>