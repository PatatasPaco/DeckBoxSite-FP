<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeckBoxSite</title>
    <style>
        /* Modern Design System & Reset */
        :root {
            --primary: #6366f1; /* Indigo 500 */
            --primary-dark: #4f46e5; /* Indigo 600 */
            --bg-dark: #0f172a; /* Slate 900 */
            --bg-card: #1e293b; /* Slate 800 */
            --text-main: #f8fafc; /* Slate 50 */
            --text-muted: #94a3b8; /* Slate 400 */
            --accent: #10b981; /* Emerald 500 */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header & Navigation */
        header {
            background-color: rgba(30, 41, 59, 0.8);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: color 0.3s ease;
        }

        .logo:hover {
            color: var(--primary-dark);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-link {
            text-decoration: none;
            color: var(--text-muted);
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            color: var(--text-main);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: var(--primary);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Main Content Container */
        main {
            flex: 1;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            width: 100%;
        }

        /* Utility Classes for content */
        .container {
            background-color: var(--bg-card);
            padding: 2rem;
            border-radius: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, var(--text-main), var(--primary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="index.php" class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.12 6.4-6.05-4.06a2 2 0 0 0-2.17-.05L2.9 8.12a2 2 0 0 0-.66 2.74l2.96 4.43c.3.45.7.59 1.52.59h10.55c.83 0 1.22-.17 1.53-.61l2.94-4.4a2 2 0 0 0-.62-2.73Z"/><path d="M9 16.2V22"/><path d="M15 16.2V22"/></svg>
                <span>DeckBoxSite</span>
            </a>
            <ul class="nav-links">
                <li><a href="index.php" class="nav-link">Inicio</a></li>
                <li><a href="cartas.php" class="nav-link">Cartas</a></li>
                <li><a href="decks.php" class="nav-link">Decks</a></li>
                <li><a href="login.php" class="nav-link">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
