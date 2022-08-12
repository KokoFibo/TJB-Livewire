
  
  <!-- Modal Add Title-->
  <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddTitleModal">
  Launch demo modal
</button> --}}

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="AddTitleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="">
      <div class="modal-body">
        <div class="mb-3">
          <label for="title" class="form-label">Nama Title</label>
          <input type="text" class="form-control" id="title" placeholder="Nama Title" wire:model="nama">
          <button class="btn btn-primary btn-sm mt-2" wire:click.prevent="storeTitle()">Add</button>
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama Title</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($titles as $t)
                
            <tr>
              <td>{{ $t->id }}</td>
              <td>{{ $t->nama}}</td>
              <td><button class="btn btn-danger btn-sm">Delete</button></td>
              
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
   <!-- End Modal Add Title -->

   