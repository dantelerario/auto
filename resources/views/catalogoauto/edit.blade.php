<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('catalogoauto.index') }}">Catalogo</a></li>
        <li><a href="{{ route('catalogoauto.create') }}">Inserisci Auto</a></li>
    </ul>
    <h1>Modifica catalogo auto</h1>
    <form action="{{ route('catalogoauto.update', $catalogoauto->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div>
            <input type="text" name="nome" value="{{ $catalogoauto->nome }}">
        </div>
        <div>
            <input type="text" name="colore" value="{{ $catalogoauto->colore }}">
        </div>
        <div>
            <input type="number" name="cilindrata" value="{{ $catalogoauto->cilindrata }}">
        </div>
        <div>
            <input type="number" name="potenza" value="{{ $catalogoauto->potenza }}">
        </div>
        <div>
            <input type="number" name="misuraruote" value="{{ $catalogoauto->misuraruote }}">
        </div>
        <div>
            <input type="text" name="tipologia" value="{{ $catalogoauto->tipologia }}">
        </div>
        <div>
            <input type="number" name="kmLitro" value="{{ $catalogoauto->kmLitro }}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
    
</body>
</html>