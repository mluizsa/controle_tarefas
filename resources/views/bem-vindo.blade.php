Site da aplicação

@auth

    <h1>Usuário autenticado</h1>
    <p>{{ Auth::user()->id }}</p>
    <p>{{ Auth::user()->name }}</p>
    <p>{{ Auth::user()->email }}</p>

@endauth


@guest
    <h1>Olá visitante, tudo bem?</h1>

@endguest
