<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
    <body>  
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('catalogoauto.index') }}">Catalogo</a></li>
            <li><a href="{{ route('catalogoauto.create') }}">Inserisci Auto</a></li>
            {{-- <li><a href="{{ route('catalogoauto.update') }}">Modifica Auto</a></li> --}}
        </ul>
        <div class="value-auto">Nome: {{$catalogoauto->nome}}</div>
        <div class="value-auto">Colore: {{$catalogoauto->colore}}</div>
        <div class="value-auto">Cilindrata: {{$catalogoauto->cilindrata}}</div>
        <div class="value-auto">Potenza: {{$catalogoauto->potenza}}</div>
        <div class="value-auto">Misura ruote: {{$catalogoauto->misuraruote}}</div>
        <div class="value-auto">Tipologia: {{$catalogoauto->tipologia}}</div>
        <div class="value-auto">kmLitro: {{$catalogoauto->kmLitro}}</div>
    </body>
</html>