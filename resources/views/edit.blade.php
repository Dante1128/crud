<h1>Editar Producto</h1>
<form action="{{ route('productos.update', $producto) }}" method="POST">
    @csrf
    @method('PUT')
    Nombre: <input type="text" name="nombre" value="{{ $producto->nombre }}"><br>
    Descripción: <input type="text" name="descripcion" value="{{ $producto->descripcion }}"><br>
    Precio: <input type="number" step="0.01" name="precio" value="{{ $producto->precio }}"><br>
    Stock: <input type="number" name="stock" value="{{ $producto->stock }}"><br>
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('productos.index') }}">⬅ Volver</a>
