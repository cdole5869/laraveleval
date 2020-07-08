<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <title>@yield('title')</title>
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li> <a href="/"> Home </a> </li>
                    <li> <a href="/list"> List Animals </a> </li>
                    <li> <a href="/listspecies"> List Species </a> </li>
                    <li> <a href="/addnewanimal"> Add new Animal </a> </li>
                    <li> <a href="/addnewspecies"> Add new Specie </a> </li>
                </ul>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <p>Contacts</p>
            <p>Join us</p>
        </footer>
    </body>
</html>
