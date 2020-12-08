<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <nav>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('catalogoauto.index') }}">Catalogo</a></li>
                <li><a href="{{ route('catalogoauto.create') }}">Inserisci Auto</a></li>
            </ul>
        </nav>
    </nav>
    <h1>Inserisci nuova auto nel catalogo</h1>

    <div class="form">
        <form action="{{ route('catalogoauto.store') }}" method="POST">
            @csrf
            @method('POST')
            <div>
                <input type="text" name="nome" placeholder="Nome Auto">
            </div>
            <div>
                <input type="text" name="colore" placeholder="Colore">
            </div>
            <div>
                <input type="number" name="cilindrata" placeholder="Cilindrata">
            </div>
            <div>
                <input type="number" name="potenza" placeholder="Potenza">
            </div>
            <div>
                <input type="number" name="misuraruote" placeholder="Misura ruote">
            </div>
            <div>
                <input type="text" name="tipologia" placeholder="Tipologia">
            </div>
            <div>
                <input type="number" name="kmLitro" placeholder="Km per Litro">
            </div>
            <div>
                <input type="submit" value="CREA">
            </div>
        </form>
    </div>
    
</body>
</html>