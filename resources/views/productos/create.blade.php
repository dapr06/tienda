<x-base>

    <x-slot:tituloHead>Crear producto</x-slot:tituloHead>


    <form action='{{ route('productos.store') }}' method='post'>
        @method('post')
        @csrf

        <x-productos_campos :proveedores="$proveedores"/>

        <br><br>

        <input class='button' type='submit' name='crear' value='Crear producto' />
    </form><br/>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href='{{ route('productos.index') }}'>Volver al listado</a>

</x-base>

