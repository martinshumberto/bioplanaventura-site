<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{asset('public'.elixir('css/backend/'.Route::currentRouteName().'.css'))}}">
        <title>Painel - Bioplan Aventura</title>
    </head>
    <body>
        <div class="auth-wrapper d-flex align-items-center justify-content-center">
            <div class="auth-box bg-white border border-1 p-30 pt-50 rounded text-center fadeInDown animated">

                <div class="text-size-22 font-weight-normal mt-20">Entrar</div>
                <div class="mt-5">Faça o login inserindo as informações abaixo.</div>
                @include('backend.layout._alerts')
                <form class="mt-30" autocomplete="off" action="{!!route('backend-authenticate')!!}" method="post">

                  {{ csrf_field() }}
                    <div class="form-input">
                        <input type="text" name="username" class="form-control py-22" placeholder="E-mail / Usuário">
                        <input type="password" name="password" class="form-control py-22" placeholder="Senha">
                    </div>
                    <div class="d-flex mt-10 justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" name="remember" type="checkbox" id="remember-me">
                            <label class="form-check-label" for="remember-me">Lembrar me</label>
                        </div>
                        <a href="">Esqueceu a senha?</a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-25 py-11">Sign In</button>
                    {{-- <div class="mt-20">Não possui uma conta? <a class="text-primary" href="">Criar nova conta</a></div> --}}
                </form>
            </div>
          </div>
    </body>
    <script src="{{asset('public'.elixir('js/backend/backend-app.js'))}}" async></script>
</html>
