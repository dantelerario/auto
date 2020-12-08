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
    <p>Collegare il database tramite file .env, fare le migrazioni e poi inserire e modificare le auto</p>
</body>
</html>