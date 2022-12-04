<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
class HelloWorld extends Component
{
    public $name = "Imran Qasim";
    public $count = 0;
    protected $listeners= 
    [
        'incrementEmit' => 'increment',
        'decrementEmit' => 'decrement'
    ];

    public function mount()
    {
        
        $this->count = 1;

    }

    public function increment($step = 1)
    {
        $this->count+=$step;
    }
      public function decrement($step = 1)
    {
        $this->count-=$step;
    }
    public function render()
    {
        return view('livewire.hello-world',['name'=> $this->name]);
    }
}
