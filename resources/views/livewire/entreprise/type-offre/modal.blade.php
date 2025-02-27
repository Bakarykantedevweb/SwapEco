  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="newCatgory" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel"
      aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title mb-0" id="newCatgoryLabel">{{ $type_offre_id ? 'Modifier Type Offre' : 'Ajouter Type Offre' }}</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form wire:submit.prevent="saveTypeOffre" class="needs-validation" novalidate>
                      <div class="mb-3 mb-2">
                          <label class="form-label" for="title">
                              Nom Type Offre
                              <span class="text-danger">*</span>
                          </label>
                          <input type="text" class="form-control" wire:model="nom" id="title"
                              required />
                            @error('nom')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                      </div>
                      <div>
                          <button type="submit" class="btn btn-primary">Enregistrer</button>
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
