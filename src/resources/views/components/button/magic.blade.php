<form class="d-inline" action="{{ $route }}" method="post" @isset($confirm) onsubmit="return confirm('{{ $confirm }}')" @endisset>
@csrf
@method($method)
    @isset($parameters)
        @foreach($parameters as $key => $value)
            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
        @endforeach
    @endisset
<input type="submit" class="{{ $class ?? '' }}" value="{{ $slot ?? '' }}">
</form>
