<label for='id'>Id</label>
<input type='text' id='id' name='id' value='{{ $producto->id ?? '' }}' />
<br><br>
<label for='nombre'>Nombre</label>
<input type='text' id='nombre' name='nombre' value='{{ $producto->nombre ?? '' }}' />
<br><br>
<label for='marca'>Marca</label>
<input type='text' id='marca' name='marca' value='{{ $producto->marca ?? '' }}' />
<br><br>
<label for='modelo'>Modelo</label>
<input type='text' id='modelo' name='modelo' value='{{ $producto->modelo ?? '' }}' />
<br><br>
<label for='descripcion'>Descripcion</label>
<input type='text' id='descripcion' name='descripcion' value='{{ $producto->descripcion ?? '' }}' />
<br><br>
<label for='precio'>Precio</label>
<input type='text' id='precio' name='precio' value='{{ $producto->precio ?? '' }}' />
<br><br>
<label for='stock'>stock</label>
<input type='text' id='stock' name='stock' value='{{ $producto->stock ?? '' }}' />
<br><br>