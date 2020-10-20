@if(isset($equipas))
    <h1>Lista de equipas</h1>
    @foreach ($equipas as $equipas)
        <h2>{{$equipas}}</h2>
    @endforeach
    <p>Esta tudo!</p>
@else
    <h1>So uma equipa</h1>
    {{$equipa}}
@endif