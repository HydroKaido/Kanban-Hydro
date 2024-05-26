<!-- Modal Structure -->
<div id="modal" class="hidden fixed bg-black bg-opacity-60 top-0 left-0 right-0 bottom-0 z-50 flex justify-center items-center">
    <div class="relative w-[600px] max-w-full h-[400px] bg-white rounded-xl p-4 flex flex-col">
      <span onclick="toggleModal('modal')" class="absolute right-6 top-6 text-3xl text-red-600 cursor-pointer">&times;</span>
      <form>
        <input type="text" placeholder="Task Title" class="mb-2 p-2 border rounded w-full">
        <div class="flex justify-start items-center gap-x-2 mb-2">
          <span class="text-red-300 text-2xl">📖</span>
          <input type="text" placeholder="Detail 1" class="p-2 border rounded w-full">
        </div>
        <div class="flex justify-start items-center gap-x-2 mb-2">
          <span class="text-red-300 text-2xl">👤</span>
          <input type="text" placeholder="Detail 2" class="p-2 border rounded w-full">
        </div>
        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Insert Button</button>
      </form>
    </div>
  </div>