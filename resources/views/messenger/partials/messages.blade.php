<div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4 my-3">
    <a class="shrink-0" href="#">
        <img class="h-9 w-9" src="//www.gravatar.com/avatar/{{ md5($message->user->email) }} ?s=64"
             alt="{{ $message->user->name }}" class="rounded">
    </a>
    <div class="">
        <h5 class="text-xl font-medium text-black">{{ $message->user->name }}</h5>
        <p>{{ $message->body }}</p>
        <div class="text-slate-500">
            <small>Posted {{ $message->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>