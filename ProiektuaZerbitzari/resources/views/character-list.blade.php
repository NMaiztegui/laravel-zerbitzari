


@extends('./layouts/app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">List of Game of Thrones Characters</div>
                @if(Auth::check())

                    <table class="table">
                        <tr>
                            <th>Character</th>
                            <th>Real Name</th>
                        </tr>
                        @foreach($characters as $character)
                            <tr>
                                <td>{{ $character->name }}</td>
                                <td>{{ $character->actor }}</td>
                                <!--borrar un personaje-->
                                <td><form action="{{ route('character.delete', $character->id) }}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning" onclick="return confirm('¿Estás seguro de eliminar este personaje?')">Eliminar</button>
                                </form></td>
                                <!--editar un personaje-->
                                <td><a href="{{ route('character.edit', $character->id) }}"  class="btn btn-info">Editar</a></td>
                                
                                
                                
                            </tr>
                        @endforeach
                    </table>
                    <a href="/laravel-zerbitzari/ProiektuaZerbitzari/public/submit" class="btn btn-info"> Sartu berria >></a> 😜😜
                @endif
            </div>
            @if(Auth::guest())
                <a href="/laravel-zerbitzari/ProiektuaZerbitzari/public/login" class="btn btn-info"> You need to login to  see the list >></a> 😜😜
            @endif

        </div>
    </div>
</div>
@endsection