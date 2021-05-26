@php
    use \Illuminate\Support\Str;
    use \Illuminate\Database\Eloquent\Model;
    /** @var Model $item */

    if(is_string($prop)){
        $prop = $prop === 'ID' ? 'id' : Str::snake($prop); //Handle the ID field
    }else{
        $key = $key === 'ID' ? 'id' : Str::snake($key); //Handle the ID field
    }
@endphp
@if (!is_numeric($key))
    @php
        try {
            $remappedValue = $prop($item);
        } catch (TypeError $_){
            $remappedValue = $prop($item->$key);
        }
    @endphp
    <td class="{{ $class ?? '' }}">{{ $remappedValue }}</td>
@else
    <td class="{{ $class ?? '' }}">{{ $item->$prop }}</td>
@endif
