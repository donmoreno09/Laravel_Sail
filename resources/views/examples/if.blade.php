@if($isAdmin)
    <p>You are an admin.</p>
@elseif($isEditor)
    <p>You are an editor.</p>
@else
    <p>You are a regular user.</p>
@endif

@isset($items)
    <p>Number of items: {{count($items)}}</p>
@endisset

@empty($items)
    <p>No items available.</p>
@endempty

@unless($isAdmin)
    <p>You do not have administrative privileges.</p>
@endunless