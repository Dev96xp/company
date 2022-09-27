<?php

namespace App\Http\Livewire\Message;

use App\Models\message;
use Livewire\Component;

class CreateMessage extends Component
{

    public $company, $message = "...";
    public $address, $city, $state, $zip, $phone;
    
    protected $rules = [
        'company' => 'required|max:5',
        'address' => 'required',
        'city' => 'required',
        'state' => 'required|max:2',
        'zip' => 'required|max:5',
        'phone' => 'required',
        'message' => 'required'
    ];


    public function render()
    {
        return view('livewire.message.create-message');
    }



    public function create()
    {
        // $love = "love is love";
        // dd($love);

        
        // Validar los datos
       // $this->validate();


        // H) Crea un nuevo registro en la tabla:Tuxedos
        Message::create([
            'user_id' => auth()->user()->id,  // El ( id ) que biene de la tabla: Users            
            'company' => $this->company,   // El ( cus_id ) que biene de la tabla: Users
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'zip' => $this->zip,
            'phone' => $this->phone,
            'message' => $this->message,
            'status' => 'A'
        ]);

        // b) una vez usadas la porpiedades, limpia las propiedades (reset)
        //    y cierra el MODAL tambien
        $this->reset(['company', 'address', 'city', 'state', 'zip', 'phone', 'message']);

    }

}
