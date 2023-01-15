<h3>Inserta Usuarios</h3>

<div>
    <form action="{{route('usuario.store')}}" method="post">
        @csrf
        <div>
            <label for="">Nombre</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label for="">Edad</label>
            <input type="number" name="edad">
        </div>
        <div>
            <input type="submit" name="submit" value="Inserta Usuario">
        </div>
    </form>
</div>
