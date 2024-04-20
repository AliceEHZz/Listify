<div>
    <h1 class="font-bold tracking-tight text-pink-500 sm:text-3xl text-center">
       Task: {{ $task->name }}
    </h1>
    <div class="mt-10">
    <p class="tracking-tight text-pink-500 sm:text-xl text-center">Created at: {{Carbon\Carbon::parse($task->created_at)->format('Y-m-d H:i')}}</p></div>
</div>
