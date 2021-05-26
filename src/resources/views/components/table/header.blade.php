<thead class="{{ $theadClass ?? '' }}">
<tr class="{{ $trClass ?? '' }}">
    @foreach($fields as $key => $field)
        @if(!is_numeric($key))
            <th class="{{ $thClass ?? '' }}" scope="col">{{ $key }}</th>
        @else
            <th class="{{ $thClass ?? '' }}" scope="col">{{ $field }}</th>
        @endif
    @endforeach
    <th class="{{ $thClass ?? '' }}" scope="col">Operations</th>
</tr>
</thead>
