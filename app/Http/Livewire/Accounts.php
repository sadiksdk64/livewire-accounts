<?php

namespace App\Http\Livewire;

use App\Models\Account;
use Livewire\Component;

class Accounts extends Component
{
    public $accounts = [];
    public $count = 0;

    public function mount()
    {
        $accounts = Account::all();
        foreach($accounts as $account)
        {
            $this->accounts[$this->count]['account_no'] = $account['account_no']; 
            $this->accounts[$this->count]['ifsc'] = $account['ifsc'];
            $this->accounts[$this->count]['branch'] = $account['branch'];
            $this->count = $this->count + 1;
        }
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
        Account::where($this->accounts[$index])->delete();
        unset($this->accounts[$index]); 
        $this->count = $this->count - 1;
    }

    public function save($index)
    {
        $data = $this->accounts[$index];
        Account::create($data);
    }

    public function render()
    {
        return view('livewire.accounts');
    }
}
