<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('board.store') }}" method="POST">
                    @csrf
                    <input type="text" name="title" placeholder="Task Title" class="form-control w-full">
                    <input type="text" name="description" placeholder="Description" class="form-control w-full">
                    <select name="progress" id="" class="form-control w-full">
                        <option value="To-Do">To-Do</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Done">Done</option>
                    </select>
                    <input type="text" name="date" placeholder="Date" class="form-control w-full">
                    <input type="text" name="tag" placeholder="Tag" class="form-control w-full">
                    <input type="text" name="task_person" placeholder="Task Person" class="form-control w-full">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Insert Button</button>
            </div>
            </form>
        </div>
    </div>
</div>