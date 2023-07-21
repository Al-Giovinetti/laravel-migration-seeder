@extends("layout.app")

@section("title","Home")

@section("main")

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">Orario partenza</th>
                <th scope="col">Orario arrivo</th>
                <th scope="col">Codice treno</th>
                <th scope="col">Numero carrozze</th>
                <th scope="col">In Orario</th>
                <th scope="col">Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
                <tr>
                    <th scope="row"> - </th>
                    <td>{{ $train-> azienda }}</td>
                    <td> {{ $train-> stazione_di_partenza}} </td>
                    <td> {{ $train-> stazione_di_arrivo }} </td>
                    <td> {{ $train-> orario_di_partenza }} </td>
                    <td> {{ $train-> orario_di_arrivo }} </td>
                    <td> {{ $train-> codice_treno}} </td>
                    <td> {{ $train-> numero_carrozze }} </td>
                    <td> {{ $train-> in_orario}} </td>
                    <td> {{ $train-> cancellato }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection