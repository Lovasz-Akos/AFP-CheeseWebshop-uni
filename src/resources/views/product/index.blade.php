<html>
<head></head>
<body>
    <main>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>type</th>
                    <th>price</th>
                    <th>description</th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->type }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>
