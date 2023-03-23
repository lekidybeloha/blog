<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>{{ env('APP_NAME') }} - Adminitrations</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-auto">
            <div class="card p-3">
                <div class="card-body">
                    <h5 class="card-title">Administration - Se connecter</h5>
                    <form method="POST" class="mt-5">
                        <input type="text" name="username" placeholder="Nom d'utilisateur" class="form-control" required>
                        <input type="password" name="password" placeholder="Mot de passe" class="form-control mt-3" required>
                        <input type="checkbox" class="form-check-input mt-2" id="remember">
                        <label class="form-check-label mt-2" for="remember">Se souvenir de moi</label>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-3">Se connecter</button>
                        </div>

                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
