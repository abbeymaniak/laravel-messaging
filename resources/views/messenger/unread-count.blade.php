<?php $count = Auth::user()->newThreadsCount(); ?>
@if($count > 0)
    <span class=" text-red"><label>{{ $count }}</label> </span>
@endif
