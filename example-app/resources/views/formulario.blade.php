<h1>Formulario</h1>
<div class="container">
    <form action="{{route('validation.form')}}" method="post">
        @csrf
        <div>
            <label for="">Nombre</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label for="">Edad</label>
            <input type="text" name="edad">
        </div>
        <div>
            <input type="submit" value="Envía" name="envia">
        </div>
    </form>
</div>
