<ul>
    @foreach($users as $user)
        <li>
            {{ $loop->iteration }} - {{ $user }}
            @if($loop->first)
                - First User
            @endif
            @if($loop->last)
                - Last User
            @endif
        </li>
    @endforeach
</ul>

<hr />
{{-- @if(empty($tasks))
    <p>No tasks available!</p>
@else
    @foreach($tasks as $task)
        <p>{{ $task }}</p>
    @endforeach
@endif --}} 
{{-- instead of the above, you can use @forelse and @empty --}}


@forelse($tasks as $task)
    <p>{{ $task }}</p>
@empty
    <p>No tasks available!</p>
@endforelse

<hr />

<ul>
     @foreach($numbers as $number)
         @if($number % 2 == 0)
            @continue
         @endif
         <li>{{ $number }}</li>

         @if($loop->iteration == 5)
            {{ "Stopping at the fourth odd number." }}
             @break
         @endif
     @endforeach
</ul>