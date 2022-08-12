<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\Title;
use Livewire\Component;
use Livewire\WithPagination;


class Customers extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';

    public $title_id;
    public $name;
    public $address;
    public $city;
    public $phone;
    public $mobile;
    public $email;
    public $customer_id;




    public function resetInputFields()
    {
        $this->id = '';
        $this->name = '';
        $this->address = '';
        $this->city = '';
        $this->phone = '';
        $this->mobile = '';
        $this->email = '';
    }

    protected function rules()
    {
        return [
            'title_id' => 'required|numeric',
            'name' => 'required',
            'address' => 'nullable',
            'city' => 'required',
            'phone' => 'nullable',
            'mobile' => 'nullable',

            // 'phone' => 'numeric|digits:min=9,max=12',
            // 'mobile' => 'numeric|digits:min=10,max=12',
            'email' => 'email|nullable',
        ];
    }
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function closeModal()
    {
        $this->resetInputFields();
    }

    public function store()
    {
        $validatedData = $this->validate();
        Customer::create($validatedData);
        session()->flash('message', 'New Customer Data Created Succesfully');
        $this->resetInputFields();
        //$this->resetValidation();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function edit($customer_id)
    {
        $customer = Customer::find($customer_id);

        if ($customer) {
            $this->customer_id = $customer->id;
            $this->title_id = $customer->title_id;
            $this->name = $customer->name;
            $this->address = $customer->address;
            $this->city = $customer->city;
            $this->phone = $customer->phone;
            $this->mobile = $customer->mobile;
            $this->email = $customer->email;
        } else {

            return redirect()->to('/customers');
        }
    }

    public function update()
    {
        $validatedData = $this->validate();
        Customer::where('id', $this->customer_id)->update([
            'title_id' => $validatedData['title_id'],
            'name' => $validatedData['name'],
            'address' => $validatedData['address'],
            'city' => $validatedData['city'],
            'phone' => $validatedData['phone'],
            'mobile' => $validatedData['mobile'],
            'email' => $validatedData['email']

        ]);
        session()->flash('message', 'Customer Data updated succesfully');
        $this->resetInputFields();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function delete($customer_id)
    {
        $customer = Customer::find($customer_id);
        if ($customer) {
            $this->customer_id = $customer->id;
            $this->title_id = $customer->title_id;
            $this->name = $customer->name;
            $this->address = $customer->address;
            $this->city = $customer->city;
            $this->phone = $customer->phone;
            $this->mobile = $customer->mobile;
            $this->email = $customer->email;
        } else {

            return redirect()->to('/customers');
        }
    }
    public function destroy()
    {
        Customer::find($this->customer_id)->delete();
        session()->flash('message', 'Customer Data deleted succesfully');
        $this->resetInputFields();
        $this->dispatchBrowserEvent('close-modal');
    }

    // public function storeTitle()
    // {

    //     dd($this->nama);
    //     Title::create();
    //     session()->flash('message', 'New Customer Data Created Succesfully');
    //     $this->resetInputFields();
    //     //$this->resetValidation();
    //     $this->dispatchBrowserEvent('close-modal');
    // }





    public function render()
    {
        $customers = Customer::where('name', 'like', '%' . $this->search . '%')->orderBy('id', 'DESC')->paginate(10);
        $titles = Title::orderBy('id', 'ASC')->get();
        return view('livewire.customers', ['customers' => $customers, 'titles' => $titles]);
    }
}
