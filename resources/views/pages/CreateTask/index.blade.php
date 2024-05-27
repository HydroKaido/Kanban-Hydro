
<div id="modal" class="fixed hidden bg-black bg-opacity-60 top-0 left-0 right-0 bottom-0 z-50 flex justify-center items-center">
    <div class="relative w-[600px] max-w-full h-[400px] bg-white rounded-xl p-4 flex flex-col">
        <span class="absolute right-6 top-6 text-3xl text-red-600 cursor-pointer">&times;</span>
        <form action="{{ route('board.store') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Task Title" class="mb-2 p-2 border rounded w-full">
            <input type="text" name="description" placeholder="Description" class="mb-2 p-2 border rounded w-full">
            <input type="text" name="progress" placeholder="Progress" class="mb-2 p-2 border rounded w-full">
            <input type="text" name="date" placeholder="Date" class="mb-2 p-2 border rounded w-full">
            <input type="text" name="tag" placeholder="Tag" class="mb-2 p-2 border rounded w-full">
            <input type="text" name="task_person" placeholder="Task Person" class="mb-2 p-2 border rounded w-full">
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Insert Button</button>
        </form>
    </div>
</div>
