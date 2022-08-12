<div>
    @include('livewire.customer_modal')
     {{-- @include('livewire.customer_delete')  --}}
   <section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
                <div class="card">
                    <div class="card-header">
                        <h3>Customers
                            <input type="search" wire:model="search" class="form-control float-end mx-2" style="width:230px" placeholder="search...">
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#AddNewCustomerModal">
                                Add New Customer
                              </button>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Phone</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($customers as $customer)
                                <tr> 
                                    <td>{{ $customer->title->nama}}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td>{{ $customer->city }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->mobile }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>
                                    <div class="btn-group btn-group-sm " role="group" aria-label="Small button group">
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editCustomerModal" wire:click="edit({{ $customer->id  }})" >Edit</button>
                                        <button class="btn btn-danger" wire:click="delete({{ $customer->id }})" data-bs-toggle="modal" data-bs-target="#DeleteCustomerModal">Delete</button>
                                    </div>
                                </td>
                                </tr>
                                    
                                @empty
                                <h3>No Data Found!</h3>
                                    
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                    {{ $customers->links() }}
                </div>
            </div>
        </div>
    </div>
   </section>
</div>
