@switch($role)
    @case('admin')
        <p>You are an admin.</p>
        @break

    @case('editor')
        <p>You are an editor.</p>
        @break

    @default
        <p>You are a guest.</p>
@endswitch