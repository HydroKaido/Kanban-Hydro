<div class="modal fade" id="exampleModaldone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create To-Do</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{ route('board.store', ['id' => $id]) }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="" class="fw-bold mb-1">Task Title</label>
                        <input type="text" name="title" placeholder="Enter Title" class="form-control w-full">
                    </div>
                    <div class="mb-2">
                        <label for="" class="fw-bold mb-1">Task Description</label>
                        <input type="text" name="description" placeholder="Enter Description" class="form-control w-full">
                    </div>
                    <input type="hidden" name="progress" value="Done" placeholder="Enter Description" class="form-control w-full">
                    <div class="mb-2">
                        <label for="" class="fw-bold mb-1">Task Date</label>
                        <input type="date" name="date" placeholder="Date" class="form-control w-full">
                    </div>
                    <div class="mb-2">
                        <label for="" class="fw-bold mb-1">Task Tag</label>
                        <input type="text" name="tag" placeholder="Tag" class="form-control w-full">
                    </div>
                    <div class="mb-2">
                        <label for="" class="fw-bold mb-1">Task Person</label>
                        <input type="text" name="task_person" placeholder="Task Person" class="form-control w-full">
                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Insert Button</button>
            </div>
            </form>
        </div>
    </div>
</div>