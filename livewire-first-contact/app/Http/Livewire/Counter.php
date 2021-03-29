<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public function render()
    {
        return view('livewire.counter',['counter'=>$this->count]);
    }
    public function increment(){  
        $this->count++;
    }
    public function decrement(){
        if($this->count == 0){
            
        } 
        else{
            $this->count--;
        }
    }
}
