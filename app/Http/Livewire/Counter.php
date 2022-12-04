<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Counter extends Component
{
    public $counter;
    public $step;
    


    protected $listeners = 
    [
        'incrementButtonEmit'=>'increment',
        'decrementButtonEmit'=>'decrement',
        'incrementEmit'=>'increment',
        'decrementEmit'=>'decrement'
    ];
   
    public function mount()
    {
        $this->counter = 0;
        $this->step = 1;

    }


    public function increment($step)
    {
        $this->counter+=$step;
    }

    public function decrement($step)
    {
        $this->counter-=$step;
    }
    public function updatedStep($val)
    {
        $this->emit('refreshButton',$val);
    }



    // public function increment()
    // {
    //     $this->emit('incrementEmit');
    // }
    // public function decrement()
    // {
    //     $this->emit('decrementEmit');
    // }
 

}
