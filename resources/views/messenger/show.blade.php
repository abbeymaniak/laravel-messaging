@extends('layouts.master')

@section('content')
    <div class="p-6 mx-auto bg-white rounded-xl shadow-lg flex flex-col items-center space-x-4">
        <h1>{{ $thread->subject }}</h1>
        @each('messenger.partials.messages', $thread->messages, 'message')

        @include('messenger.partials.form-message')
    </div>
@stop
