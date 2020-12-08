<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogo</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('catalogoauto.index') }}">Catalogo</a></li>
            <li><a href="{{ route('catalogoauto.create') }}">Inserisci Auto</a></li>
            {{-- <li><a href="{{ route('catalogoauto.update') }}">Modifica Auto</a></li> --}}
        </ul>
    </nav>
    <h1>Catalogo Auto</h1>

    <section>
        <div class="container">
            @foreach ($catalogoautos as $auto)
                <div class="value-auto">Nome: {{$auto->nome}}</div>
                <div class="value-auto">Colore: {{$auto->colore}}</div>
                <div class="value-auto">Cilindrata: {{$auto->cilindrata}}</div>
                <div class="value-auto">Potenza: {{$auto->potenza}}</div>
                <div class="value-auto">Misura ruote: {{$auto->misuraruote}}</div>
                <div class="value-auto">Tipologia: {{$auto->tipologia}}</div>
                <div class="value-auto">kmLitro: {{$auto->kmLitro}}</div>
                <br>
                <div class="value-auto"><a href="{{ route('catalogoauto.show', $auto->id) }}">SHOW</a></div>
                <div class="value-auto"><a href="{{ route('catalogoauto.edit', $auto->id) }}">EDIT</a></div>
                <div class="value-auto">
                    <form action="{{ route('catalogoauto.destroy', $auto->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                <br>
                </div>
            @endforeach
        </div>
    </section>
</body>
</html>