<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auto Laravel</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('catalogoauto.index') }}">Catalogo</a></li>
            <li><a href="{{ route('catalogoauto.create') }}">Inserisci Auto</a></li>
            {{-- <li><a href="{{ route('catalogoauto.edit') }}">Modifica Auto</a></li> --}}
        </ul>
    </nav>
    <h1>Home</h1>
    <div class="container">
        @foreach ($autos as $auto)
            <div class="value-auto">Nome: {{$auto->nome}}</div>
            <div class="value-auto">Colore: {{$auto->colore}}</div>
            <div class="value-auto">Cilindrata: {{$auto->cilindrata}}</div>
            <div class="value-auto">Potenza: {{$auto->potenza}}</div>
            <div class="value-auto">Misura ruote: {{$auto->misuraruote}}</div>
            <div class="value-auto">Tipologia: {{$auto->tipologia}}</div>
            <div class="value-auto">kmLitro: {{$auto->kmLitro}}</div>
            <br>
        @endforeach
    </div>
</body>
</html>