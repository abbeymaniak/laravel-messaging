<?php $class = $thread->isUnread(Auth::id()) ? 'bg-blue' : ''; ?>

<div class="mt-4 p-6 max-w-sm mx-auto bg-white rounded-xl shadow-lg flex flex-col items-center space-x-4 {{ $class }}">
    <h4 class="text-xl font-medium text-black">
        <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)</h4>
    <p class="text-slate-500">
        {{ $thread->latestMessage->body }}
    </p>
    <p>
        <small><strong>Creator:</strong> {{ $thread->creator()->name }}</small>
    </p>
    <p>
        <small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id()) }}</small>
    </p>
</div>