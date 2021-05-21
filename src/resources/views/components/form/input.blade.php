<div class="form-floating {{ $class ?? '' }}">
    @switch($type ?? 'text')
    @case('select')
    <input list="{{ \Illuminate\Support\Str::plural($name) }}"
           class="form-control {{ $inputClass ?? '' }} @error($name) is-invalid @enderror"
           name="{{ $name }}" id="{{ $id ?? $name }}"
           value="{{ $value ?? '' }}"
           @isset($required) required @endisset()
           @isset($disabled) disabled @endisset()/>

        <datalist id="{{ \Illuminate\Support\Str::plural($name) }}">
            @foreach($options as $value)
                <option value="{{ $value }}"></option>
            @endforeach
        </datalist>
        @break
    @case('textarea')
        <textarea class="form-control {{ $inputClass ?? '' }} @error($name) is-invalid @enderror"
                  name="{{ $name }}" id="{{ $id ?? $name }}"
                  placeholder="{{ $placeholder ?? '' }}"
                  @isset($required) required @endisset()
                  @isset($disabled) disabled @endisset()>{{ $value ?? '' }}</textarea>
        {{--  Text area does includes any spaces or tabs between tags, so watch out  --}}
        @break
    @default
        <input type="{{ $type ?? 'text' }}"
               class="form-control {{ $inputClass ?? '' }} @error($name) is-invalid @enderror"
               name="{{ $name }}" id="{{ $id ?? $name }}"
               placeholder="{{ $placeholder ?? '' }}"
               value="{{ $value ?? '' }}"
               @isset($required) required @endisset()
               @isset($disabled) disabled @endisset()/>
    @endswitch
    <label for="{{ $id ?? $name }}">{{ $slot ?? '' }}</label>
    @error($name)
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
