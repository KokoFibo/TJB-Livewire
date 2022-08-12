
  
  <!-- Modal Delete-->
  <div wire:ignore.self class="modal fade" id="DeleteCustomerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
        </div>
        <form wire:submit.prevent="destroy">
        <div class="modal-body">
         
            <select class="form-select" aria-label="Default select example" wire:model="title_id">
              @foreach ($titles as $t)
             <option  value="{{ $t->id }}">{{ $t->nama }}</option> --}}
              @endforeach
              
            </select>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Name" wire:model="name">
              @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            
            
            <h4>Are you sure to delete this data?</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Yes! Delete</button>
          </div>
        </div>
      </form>
    </div>
  </div>
   <!-- End Modal Delete-->

   