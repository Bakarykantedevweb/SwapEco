  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="newCatgory" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title mb-0" id="newCatgoryLabel">Create New Category</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="mb-3 mb-2">
              <label class="form-label" for="title">
                Title
                <span class="text-danger">*</span>
              </label>
              <input type="text" class="form-control" placeholder="Write a Category" id="title" required />
              <small>Field must contain a unique value</small>
              <div class="invalid-feedback">Please enter category.</div>
            </div>
            <div class="mb-3 mb-2">
              <label class="form-label">Slug</label>
              <label for="basic-url" class="form-label">Your vanity URL</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">https://example.com</span>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" />
              </div>

              <small>Field must contain a unique value</small>
            </div>
            <div class="mb-3 mb-2">
              <label class="form-label" for="parent">Parent</label>
              <select class="form-select" data-choices="" id="parent" required>
                <option selected value="">Select</option>
                <option value="Course">Course</option>
                <option value="Tutorial">Tutorial</option>
                <option value="Workshop">Workshop</option>
                <option value="Company">Company</option>
              </select>
            </div>
            <div class="mb-3 mb-3">
              <label class="form-label">Description</label>
              <div id="editor">
                <br />
                <h4>One Ring to Rule Them All</h4>
                <br />
                <p>
                  Three Rings for the
                  <i>Elven-kingsunder</i>
                  the sky,
                  <br />
                  Seven for the
                  <u>Dwarf-lords</u>
                  in halls of stone, Nine for Mortal Men,
                  <br />
                  doomed to die, One for the Dark Lord on his dark throne.
                  <br />
                  In the Land of Mordor where the Shadows lie.
                  <br />
                  <br />
                </p>
              </div>
            </div>
            <div class="mb-2">
              <label class="form-label">Enabled</label>
              <div class="form-check form-switch">
                <input type="checkbox" class="form-check-input" id="customSwitch1" checked />
                <label class="form-check-label" for="customSwitch1"></label>
              </div>
            </div>
            <div>
              <button type="submit" class="btn btn-primary">Add New Category</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>