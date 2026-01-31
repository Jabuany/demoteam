<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Tam</title>

    <style>
    body {
        margin: 0;
        height: 100vh;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #0f0f0f, #1c1c1c, #3b0f6f);
        background-size: 400% 400%;
        animation: gradientMove 12s ease infinite;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(15px);
        width: 90%;
        max-width: 420px;
        text-align: center;
        padding: 35px;
        border-radius: 30px;
        box-shadow:
            0 0 25px rgba(138, 43, 226, 0.7),
            0 0 60px rgba(0, 255, 255, 0.3);
        animation: cinematicEntry 1.6s ease;
    }

    h1 {
        margin: 0;
        font-size: 2.2rem;
        color: #ffffff;
        text-shadow: 0 0 15px #9b5cff;
        animation: glowPulse 2s infinite alternate;
    }

    h2 {
        margin-top: 8px;
        color: #d6d6ff;
        font-weight: 300;
    }

    h3 {
        margin-top: 25px;
        color: #ffffff;
        letter-spacing: 1px;
    }

    ul {
        list-style: none;
        padding: 0;
        margin-top: 20px;
    }

    li {
        margin: 12px 0;
    }

    a {
        text-decoration: none;
        color: #ffffff;
        font-weight: bold;
        display: block;
        padding: 12px;
        border-radius: 15px;
        background: linear-gradient(135deg, #000000, #2b2b2b, #4b0082);
        box-shadow: 0 0 12px rgba(106, 17, 203, 0.8);
        transition: all 0.35s ease;
    }

    a:hover {
        transform: scale(1.08) rotate(-1deg);
        box-shadow:
            0 0 25px rgba(155, 92, 255, 0.9),
            0 0 50px rgba(0, 0, 0, 0.8);
    }


    @keyframes gradientMove {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    @keyframes cinematicEntry {
        from {
            opacity: 0;
            transform: scale(0.8) translateY(60px);
        }

        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }

    @keyframes glowPulse {
        from {
            text-shadow: 0 0 10px #9b5cff;
        }

        to {
            text-shadow: 0 0 25px #b18cff;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        * {
            animation: none !important;
            transition: none !important;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>¡Bienvenidos!!!!!</h1>
        <h2>Equipo DevSquad</h2>

        <h3>Integrantes</h3>
        <ul>
            <li><a href="./damacedi.docx">Damacedi López Gómez</a></li>
            <li><a href="./rosario.docx">Rosario G. López</a></li>
            <li><a href="./alan.docx">Alan de Jesús</a></li>
            <li><a href="./eduardo.docx">Eduardo Pinto</a></li>
        </ul>
    </div>
</body>

</html>