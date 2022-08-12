<?php

namespace App\Http\Livewire;

use App\Models\Hargapond;
use Livewire\Component;



class Hargaponds extends Component
{

    public $label_harga;
    public $harga;
    public $harga_pond_id;


    public function resetInputFields()
    {
        $this->label_harga = '';
        $this->harga = '';
    }
    public function closeModal()
    {
        $this->resetInputFields();
    }
    protected function rules()
    {
        return [
            'label_harga' => 'required',
            'harga' => 'required|numeric',
        ];
    }
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function store()
    {

        $validatedData = $this->validate();
        Hargapond::create($validatedData);

        $this->resetInputFields();
        //$this->resetValidation();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function delete($harga_pond_id)
    {
        $this->harga_pond_id = $harga_pond_id;
    }

    public function destroy()
    {

        $hargapond = Hargapond::find($this->harga_pond_id)->delete();

        $this->resetInputFields();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        $hargaponds = Hargapond::orderBy('id', 'ASC')->get();
        return view('livewire.hargaponds', ['hargaponds' => $hargaponds]);
    }
}
