<?php

namespace App\Http\Livewire\Admin;
use App\Models\message;

use Livewire\Component;

class MessageIndex extends Component
{

    public $sort = 'created_at';

    public function render()
    {
        $messages = Message::where('status','A')
        ->orderBy($this->sort, 'desc')
        ->get();

        return view('livewire.admin.message-index',compact('messages'));
    }
}
