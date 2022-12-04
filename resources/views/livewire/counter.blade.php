<div class="text-center">

   <p>Counter: {{$counter}}</p>
   

   <input type="text" wire:model.lazy="step">
   <br>
   <div style="display: flex; justify-content: center;">
      @livewire('button',['title'=>'increment','action'=>'incrementEmit','step'=>$step])
      @livewire('button',['title'=>'decrement','action'=>'decrementEmit','step'=>$step])
      

      
   </div>


   <button wire:click="$emit('incrementEmit',{{$step}})">+</button> || <button wire:click="$emit('decrementEmit',{{$step}})">-</button>


 
   @livewire('hello-world')
   

</div>
