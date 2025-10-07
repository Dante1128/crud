<h1>Nuevo Producto</h1>
<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    Nombre: <input type="text" name="nombre"><br>
    Descripción: <input type="text" name="descripcion"><br>
    Precio: <input type="number" step="0.01" name="precio"><br>
    Stock: <input type="number" name="stock"><br>
    <button type="submit">Guardar</button>
</form>
<a href="{{ route('productos.index') }}">⬅ Volver</a>
