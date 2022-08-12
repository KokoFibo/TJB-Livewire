
  
  <!-- Modal Add-->
  <div wire:ignore.self  class="modal fade" id="AddNewCustomerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
        </div>
        <div class="modal-body">
          {{-- <button class="btn btn-primary btn-sm mb-2">Add Title</button> --}}
          <button type="button" class="btn btn-primary  mb-3" data-bs-toggle="modal" data-bs-target="#AddTitleModal">Add Title</button>
          <form action="">
            <select class="form-select" aria-label="Default select example" wire:model="title_id">
              <option selected>Silakan pilih title</option>
              @foreach ($titles as $t)
              <option value="{{ $t->id }}">{{ $t->nama }}</option>
              @endforeach
              
            </select>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Name" wire:model="name">
              @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">address</label>
              <input type="text" class="form-control" id="address" placeholder="Address" wire:model="address">
              @error('address') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" id="city" placeholder="City" wire:model="city">
              @error('city') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <input type="text" class="form-control" id="phone" placeholder="Phone" wire:model="phone">
              @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="mobile" class="form-label">Mobile</label>
              <input type="text" class="form-control" id="mobile" placeholder="Mobile" wire:model="mobile">
              @error('mobile') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" placeholder="Email" wire:model="email">
              @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Close</button>
          <button type="button" class="btn btn-primary" wire:click.prevent="store()">Save changes</button>
        </div>
      </div>
    </div>
  </div>
   <!-- End Modal Add-->

   <!-- Modal Edit/Update-->
  <div wire:ignore.self class="modal fade" id="editCustomerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
        </div>
        <div class="modal-body">
         
          <form action="">
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
            <div class="mb-3">
              <label for="address" class="form-label">address</label>
              <input type="text" class="form-control" id="address" placeholder="Address" wire:model="address">
              @error('address') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" id="city" placeholder="City" wire:model="city">
              @error('city') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <input type="text" class="form-control" id="phone" placeholder="Phone" wire:model="phone">
              @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="mobile" class="form-label">Mobile</label>
              <input type="text" class="form-control" id="mobile" placeholder="Mobile" wire:model="mobile">
              @error('mobile') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" placeholder="Email" wire:model="email">
              @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModal">Close</button>
          <button type="button" class="btn btn-primary" wire:click.prevent="update()">Save changes</button>
        </div>
      </div>
    </div>
  </div>
   <!-- End Modal Edit/Update-->

   
  
  <!-- Modal Delete-->
  <div wire:ignore.self class="modal fade" id="DeleteCustomerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Customer</h5>
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

   

   