<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>
<form action="/search">
    <input type="text" name="name" value="default search term" />
    <input type="submit" value="Search" />
</form>



@extends('./layouts/app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">List of Game of Thrones Characters</div>
                <table class="table">
                    <tr>
                        <th>Character</th>
                        <th>Real Name</th>
                    </tr>
                    @foreach($characters as $character)
                        <tr>
                            <td>{{ $character->name }}</td>
                            <td>{{ $character->actor }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection