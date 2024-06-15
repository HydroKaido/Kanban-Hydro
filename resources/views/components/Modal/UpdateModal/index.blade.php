<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">Update Task</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="updateForm" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="taskTitle" class="form-label">Title</label>
            <input type="text" class="form-control" id="taskTitle" name="title" required>
          </div>
          <div class="mb-3">
            <label for="taskDescription" class="form-label">Description</label>
            <textarea class="form-control" id="taskDescription" name="description" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="taskProgress" class="form-label">Progress</label>
            <select class="form-select" id="taskProgress" name="progress" required>
              <option value="To-Do">To-Do</option>
              <option value="In Progress">In Progress</option>
              <option value="In Review">In Review</option>
              <option value="Done">Done</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="taskDate" class="form-label">Date</label>
            <input type="text" class="form-control" id="taskDate" name="date" required>
          </div>
          <div class="mb-3">
            <label for="taskTag" class="form-label">Tag</label>
            <input type="text" class="form-control" id="taskTag" name="tag" required>
          </div>
          <div class="mb-3">
            <label for="taskPerson" class="form-label">Task Person</label>
            <input type="text" class="form-control" id="taskPerson" name="task_person" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>