<div class="text-center">

   <p>Counter: {{$counter}}</p>
   

   <input type="text" wire:model.lazy="step">
   <br>
   <input type="text" wire:model.lazy="stepButton">
   <br>
   <div style="display: flex; justify-content: center;">
      @livewire('button',['title'=>'increment','action'=>'incrementButtonEmit','step'=>$step])
      @livewire('button',['title'=>'decrement','action'=>'decrementButtonEmit','step'=>$step])
      

      
   </div>


   <p><button wire:click="$emitTo('hello-world','incrementEmit',{{$step}})">+</button> || <button wire:click="$emitTo('hello-world','decrementEmit',{{$step}})">-</button></p>
   
   <p><button wire:click="$emit('incrementEmit',{{$step}})">Plus</button> || <button wire:click="$emit('decrementEmit',{{$step}})">Minus</button></p>
   


 
   @livewire('hello-world')
   

</div>
