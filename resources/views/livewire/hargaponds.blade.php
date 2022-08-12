<div class="container">
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-2">
                <div class="card-header">
                    <h3>Harga Pond</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Label Harga </th>
                                <th>Harga (Rp.)</th>
                                <th>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#AddModal">Add</button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($hargaponds as $h)
                                <tr>
                                    <td>{{ $h->label_harga }}</td>
                                    <td>{{ number_format($h->harga) }}</td>
                                    <td>
                                    <button class="btn btn-danger btn-sm" wire:click="delete({{ $h->id }})" data-bs-toggle="modal" data-bs-target="#DeleteModal">Delete</button>
                                    </td>
                                </tr>
                            @empty
                            <h3>No Data Found!</h3>
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


{{-- Modal Add --}}

  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Harga</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="">
        <div class="modal-body">
            <div class="mb-3">
                <label for="labelharga" class="form-label">Label Harga</label>
                <input type="text" class="form-control" id="labelharga" placeholder="Label Harga" wire:model="label_harga">
                @error('label_harga') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" placeholder="Harga"  wire:model="harga">
                @error('harga') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        </form>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Close</button>
            <button type="button" class="btn btn-primary" wire:click.prevent="store()">Save</button>
        </div>
      </div>
    </div>
  </div>

{{--End of Modal Add --}}

{{-- Modal Delete --}}

  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Harga</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      <form wire:submit.prevent="destroy">
      <div class="modal-body">
        <h4>Are you sure to delete this data?</h4>
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Yes! Delete</button>
            </div>
      </form>
     </div>
  </div>
</div>

{{--End of Modal Delete --}}



</div>