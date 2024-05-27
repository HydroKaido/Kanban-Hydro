 <!-- Edit Task Modal -->
 <div id="modal-edit" class="fixed hidden bg-black bg-opacity-60 top-0 left-0 right-0 bottom-0 z-50 flex justify-center items-center">
    <div class="relative w-[600px] max-w-full h-[400px] bg-white rounded-xl p-4 flex flex-col">
        <span onclick="toggleModal('modal-edit')" class="absolute right-6 top-6 text-3xl text-red-600 cursor-pointer">&times;</span>
        <form action="{{ route('board.update', ['board' => $board->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" id="edit-id" name="id" value="{{ $board->id }}">
            <input type="text" id="edit-title" name="title" placeholder="Task Title" class="mb-2 p-2 border rounded w-full">
            <input type="text" id="edit-task-description" name="description" placeholder="Description" class="mb-2 p-2 border rounded w-full">
            <select name="progress" id="edit-task-progress" class="mb-2 p-2 border rounded w-full">
                <option value="To-Do">To-Do</option>
                <option value="In Progress">In Progress</option>
                <option value="Done">Done</option>
            </select>
            <input type="text" name="date" id="edit-task-date" placeholder="Date" class="mb-2 p-2 border rounded w-full">
            <input type="text" id="edit-task-tag" name="tag" placeholder="Tag" class="mb-2 p-2 border rounded w-full">
            <input type="text" id="edit-task-task_person" name="task_person" placeholder="Task Person" class="mb-2 p-2 border rounded w-full">
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Save Changes</button>
        </form>
    </div>
  </div>