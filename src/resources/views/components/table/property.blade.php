@php
    /** @var \Illuminate\Database\Eloquent\Model $item */
    $prop = \Illuminate\Support\Str::snake($prop);
@endphp
<td class="{{ $class ?? '' }}">{{ $item->$prop }}</td>
