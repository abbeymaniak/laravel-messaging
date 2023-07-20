@if (Session::has('error_message'))
    <div class="p-4 text-red" role="alert">
        {{ Session::get('error_message') }}
    </div>
@endif