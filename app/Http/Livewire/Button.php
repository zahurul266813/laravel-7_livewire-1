<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button extends Component
{

    public $title = 'Button';
    public $action = '';
    public $step = 1;
    
    protected $listeners =
    ['refreshButton'];
    public function mount($title,$action,$step)
    {
        $this->title = $title;
        $this->action = $action;
        $this->step =$step;
    }

    public function refreshButton ($val)
    {
        $this->step = $val;
    }
    
    public function render()
    {
        return view('livewire.button');
    }
}
