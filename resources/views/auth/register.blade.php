<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscription</title>
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
            background: linear-gradient(135deg, #e0e7ff, #f5d0fe, #ffe4e6);
        }

        .register-box {
            width: 100%;
            max-width: 420px;
            background: #ffffff;
            padding: 2.5rem;
            border-radius: 14px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo {
            width: 64px;
            height: 64px;
            margin: 0 auto 1rem;
            background: #4f46e5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
        }

        h1 {
            margin: 0;
            font-size: 1.8rem;
            color: #111827;
        }

        .subtitle {
            font-size: 0.9rem;
            color: #6b7280;
            margin-top: 0.3rem;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        label {
            display: block;
            margin-bottom: 0.4rem;
            font-size: 0.9rem;
            font-weight: 600;
            color: #374151;
        }

        input {
            width: 100%;
            padding: 0.7rem 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 0.95rem;
        }

        input:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.2);
        }

        button {
            width: 100%;
            margin-top: 1.5rem;
            padding: 0.8rem;
            background: #4f46e5;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.15s ease, background 0.15s ease;
        }

        button:hover {
            background: #4338ca;
            transform: scale(1.02);
        }

        .divider {
            position: relative;
            margin: 2rem 0 1.5rem;
            text-align: center;
            font-size: 0.85rem;
            color: #6b7280;
        }

        .divider::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 1px;
            background: #e5e7eb;
            z-index: 0;
        }

        .divider span {
            position: relative;
            background: #fff;
            padding: 0 0.6rem;
            z-index: 1;
        }

        .login-link {
            text-align: center;
        }

        .login-link a {
            font-size: 0.9rem;
            color: #4f46e5;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .footer {
            margin-top: 2rem;
            text-align: center;
            font-size: 0.75rem;
            color: #9ca3af;
        }
    </style>
</head>
<body>
    <div class="register-box">
        <div class="header">
            <div class="logo">+</div>
            <h1>Créer un compte</h1>
            <p class="subtitle">Rejoignez-nous dès aujourd'hui</p>
        </div>

        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" placeholder="John Doe" required />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="vous@exemple.com" required />
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required />
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmer le mot de passe</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••" required />
            </div>

            <button type="submit">S'inscrire</button>
        </form>

        <div class="divider">
            <span>Déjà un compte ?</span>
        </div>

        <div class="login-link">
            <a href="#">Se connecter</a>
        </div>

        <div class="footer">
            © 2026 — Tous droits réservés
        </div>
    </div>
</body>
</html>
