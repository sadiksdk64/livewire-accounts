<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Accounts extends Component
{
    public $accounts = [];
    public $count = 0;

    public function mount()
    {
        $this->accounts[$this->count]['account_no'] = ''; 
        $this->accounts[$this->count]['ifsc'] = '';
        $this->accounts[$this->count]['branch'] = '';
        $this->count = $this->count + 1;
    }

    public function add()
    {
        $this->accounts[$this->count]['account_no'] = ''; 
        $this->accounts[$this->count]['ifsc'] = '';
        $this->accounts[$this->count]['branch'] = '';
        $this->count = $this->count + 1;
    }

    public function delete($index)
    {
        unset($this->accounts[$index]); 
        $this->count = $this->count - 1;
    }

    public function render()
    {
        return view('livewire.accounts');
    }
}
