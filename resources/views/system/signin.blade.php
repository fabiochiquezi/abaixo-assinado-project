@extends('./system/structure/templateLogin')

@section('content-page')

<main class="content-site content-system-sig-in" action="{{route('system.home')}}">
    <div class="container">
        <div class="row">
            <form class="form-login d-flex flex-column align-items-center">
                <h1 class="mb-4">Faça seu Login</h1>

                <div class="form-group">
                  <label for="exampleInputEmail1">E-mail:</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu e-mail">
                </div>

                <div class="form-group mb-4">
                  <label for="exampleInputPassword1">Senha:</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Insira sua senha">
                </div>

                <a href="{{route('system.home')}}" type="submit" class="btn btn-primary w-50">Entrar</a>
              </form>
        </div>
    </div>
</main>

@endsection