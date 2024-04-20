<div>
    <div class="text-center pb-10">
      <x-alert />
         <input
            class="rounded-md w-1/5 border-0 p-2 text-gray-900 placeholder:text-gray-400 sm:text-sm sm:leading-6"
            placeholder="add a new task"
            type="text"
            wire:model="name"
        />

        <span class="absolute -ml-6"></span>
      <x-button :button="$button" :click="'save'" />
      <div class="text-yellow-500">
        @error('name') 
            <span>
             !   {{ $message }} 
            </span>
        @enderror
      </div>
    </div>
    @foreach($tasks as $task)
    <a href="/tasks/{{$task->id}}" class="list-group-item list-group-item-action">
        <x-task-item :task="$task" />
      </a>

    @endforeach

</div>