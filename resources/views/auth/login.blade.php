<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f4f6f8;
        }

        .login-box {
            width: 100%;
            max-width: 360px;
            background: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .login-box h1 {
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.4rem;
            font-size: 0.9rem;
            color: #555;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.6rem 0.7rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 0.95rem;
        }

        input:focus {
            outline: none;
            border-color: #4f46e5;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
        }

        .actions a {
            font-size: 0.85rem;
            color: #4f46e5;
            text-decoration: none;
        }

        .actions a:hover {
            text-decoration: underline;
        }

        button {
            width: 100%;
            margin-top: 1.5rem;
            padding: 0.7rem;
            background: #4f46e5;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
        }

        button:hover {
            background: #4338ca;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h1>Connexion</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required />
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required />
            </div>

            <div class="actions">
                <label>
                    <input type="checkbox" name="remember" /> Se souvenir de moi
                </label>
                <a href="#">Mot de passe oublié ?</a>
            </div>

            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>
