<h1>Listado de usuarios</h1>
<ul>
<li><a href="usuario/create">Inserta usuario</a></li>

</ul>


<ul>
    @foreach($usuarios as $usuario){
    <li>
        <a href="usuario/{{$usuario->id}}">Información Usuario: {{$usuario->id}}</a>
        <form action="{{ route('usuario.destroy', $usuario->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>

    </li>

    }
    @endforeach
</ul>

{{--<ul>--}}
{{--    @foreach($usuarios as $usuario){--}}
{{--    <li>{{$usuario->nombre}} . {{$usuario->edad}}</li>--}}
{{--    }--}}
{{--    @endforeach--}}
{{--</ul>--}}
