@extends("layout.app")

@section("title","Home")

@section("main")

@foreach($trains as $train)
<div class="container">
    <div class="row border-black">
        <p> {{ $train-> azienda }} </p>
        <p> {{ $train-> stazione_di_partenza}} </p>
        <p> {{ $train-> stazione_di_arrivo }} </p>
        <p> {{ $train-> orario_di_partenza }} </p>
        <p> {{ $train-> orario_di_arrivo }} </p>
        <p> {{ $train-> codice_treno}} </p>
        <p> {{ $train-> numero_carrozze }} </p>
        <p> {{ $train-> in_orario}} </p>
        <p> {{ $train-> cancellato }} </p>
    </div>
</div>

@endforeach

@endsection