<div class="container">
    <caption>List of Pokemon:</caption>
    <table>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Level</th>
        </tr>
        @foreach ( $pokemons as $pokemon )
        <tr>
            <td>{{$pokemon->nom}}</td>
            <td>{{$pokemon->type}}</td>
            <td>{{$pokemon->level}}</td>
        </tr>
        @endforeach
    </table>
</div>