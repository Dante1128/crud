<!DOCTYPE html>
<html>
<head>
    <title>Lista de productos</title>
</head>
<body>
    <h1>Productos</h1>
    <a href="{{ route('productos.create') }}">➕ Nuevo producto</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th><th>Nombre</th><th>Precio</th><th>Stock</th><th>Acciones</th>
        </tr>
        @foreach($productos as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->nombre }}</td>
            <td>{{ $p->precio }}</td>
            <td>{{ $p->stock }}</td>
            <td>
                <a href="{{ route('productos.edit', $p) }}">✏️</a>
                <form action="{{ route('productos.destroy', $p) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑️</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
