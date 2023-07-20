@extends('layouts.master')

@section('content')
<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto">


    <h1 class="text-xl mb-4">Create a new message</h1>
    <form action="{{ route('messages.store') }}" method="post" class="">
        {{ csrf_field() }}
        <div class="mb-6 max-w-sm">
            <!-- Subject Form Input -->
            <div class="mb-6">
    <label for="subject" class="block mb-2 text-sm font-medium text-black dark:text-blue">Subject</label>
    <input type="text" id="subject" name="subject" placeholder="Subject" value="{{ old('subject') }}" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
</div>
            

            <!-- Message Form Input -->
<div class="mb-3">

    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
    <textarea id="message" name="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here...">{{ old('message') }}</textarea>
</div>
    
    

          


<div class="mb-4">
<ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    @if($users->count() > 0)
    @foreach ($users as $user )
        
    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="{{ $user->name }}" type="checkbox"  name="recipients[]" value="{{ $user->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="{{ $user->name }}" title="{{ $user->name }}" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{!!$user->name!!}</label>
        </div>
    </li>
     @endforeach
    @endif
   
</ul>
</div>
    
          
   <x-button>Send Message</x-button>
            
        </div>
    </form>
    </div>
@stop
