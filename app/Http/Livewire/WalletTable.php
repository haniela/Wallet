<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class WalletTable extends Component
{
    use WithPagination;

    public $perPage = 10;

    public $sortField = "date";

    public $sortAsc = true;

    public function sortBy($field){

        if ($this->sortField === $field)
        {
            $this->sortAsc = ! $this->sortAsc;
        }else {
            $this->sortAsc = true;
        }

        // if active field
        // reverse the sort direction
        //else
        //set the direction to true
        $this->sortField = $field;

    }

    public function render()
    {
        return view('livewire.wallet-table', [
           'wallets' => \App\Wallet::query()
                                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                                ->paginate($this->perPage),
        ]);
    }
}
