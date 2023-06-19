<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <script src="https://kit.fontawesome.com/7c69adda45.js" crossorigin="anonymous"></script>
    <title>Page de connection</title>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1>Bienvenue</h1>
            <form method="POST" action="{{ route('login') }}" class="form">
                @csrf
                <div class="input-group">

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <x-text-input id="matricule" type="text" name="Matricule_scrt" :value="old('Matricule_scrt')" required autofocus autocomplete="username" placeholder="matricule" />

                    </div>
                    <x-input-error :messages="$errors->get('Matricule_scrt')" class="mt-2" />

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <x-text-input id="password"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="mot de passe"/>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="btn-field">
                    <a href="index.html">
                        <x-primary-button>
                            {{ __('Log in') }}
                        </x-primary-button>
                    </a>

                </div>
            </form>
        </div>

    </div>

</body>
</html>
