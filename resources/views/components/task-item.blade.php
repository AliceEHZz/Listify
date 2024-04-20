<div class="rounded-md bg-pink-50 p-4 w-4/5 sm:w-2/5 mx-auto mb-4" wire:key="{{ $task->id }}">
    <div class="flex">
        <div class="ml-3 mt-1 flex-1 md:flex md:justify-between">
            <p class="text-sm font-bold text-pink-700 hover:text-pink-600">
                {{ $task->name }} / {{Carbon\Carbon::parse($task->created_at)->format('Y-m-d H:i')}}
            </p>
            
            <div class="mt-2 text-md md:ml-6 md:mt-0">
                <button type="button" wire:click="removeTaskItem({{ $task->id }})" class="whitespace-nowrap font-medium text-pink-700 hover:text-pink-600">
                    <span wire:loading.remove wire:target="removeTaskItem({{ $task->id }})"><i class="fa-solid fa-trash"></i> Delete</span>
                    <span wire:loading wire:target="removeTaskItem({{ $task->id }})"> Deleting</span>
                </button>
            </div>
            
        </div>
    </div>
</div>