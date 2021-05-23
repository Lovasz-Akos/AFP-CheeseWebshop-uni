<table class="{{ $class ?? '' }}" id="{{ $id ?? '' }}">
    <x-table.header :fields="$as" :operations="$operations ?? true" />
{{--    Note: In x-table.header there is a thead, tr, th. You can specify css class for each of them:--}}
{{--    <x-table.header --}}
{{--        theadClass="some-css-class"--}}
{{--        trClass="some-css-class"--}}
{{--        thClass="some-css-class"--}}
{{--        :fields="$as"--}}
{{--    />--}}
    <tbody>
    @foreach($for as $item)
        <tr>
            @foreach($as as $prop)
                <x-table.property :item="$item" :prop="$prop" />
            @endforeach
            @if($operations ?? true)
                    <x-table.operations :item="$item" :route="$route" :view="$view ?? false" :edit="$edit ?? false" :delete="$delete ?? false" />
            @endisset
        </tr>
    @endforeach
    </tbody>
</table>

@isset($id)
    <script>
        $(document).ready( function () {
            $('#{{ $id ?? '' }}').DataTable();
        } );
    </script>
@endisset
