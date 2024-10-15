<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efrei News</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google+Sans:400,500,600,700|Product+Sans:400&display=swap&lang=en">
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@alpinejs/persist@latest/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('darkMode', {
                on: Alpine.$persist(false).as('darkmode'),

                toggle() {
                    this.on = !this.on
                }
            })
        })
    </script>
</head>

<body x-data x-bind:class="$store.darkMode.on ? 'dark' : ''">
<header style="border-bottom: #1F3A93 5px solid;">
    <a href="home" style="display: flex; align-items: center; gap: 1em; text-decoration: none; color: var(--text-color);">
        <img src="/Mvc/public/images/logo.webp" alt="Logo Efrei News" style="width: 4em; height: 4em;">
        <h1>
            Efrei News
        </h1>
    </a>

    <div>
        <button x-cloak @click="$store.darkMode.toggle()" x-text="$store.darkMode.on ? '☀️' : '🌙'"></button>
        <nav>
            <a class="button" href="/Mvc/public/Home/index">Home</a>
            <?php if (isset($_SESSION['user'])): ?>
                <?php if ($_SESSION['user']['role'] === 'admin'): ?>
                    <a class="button" href="/Mvc/public/Admin/index">Admin</a>
                <?php endif; ?>
                <a class="button" href="/Mvc/public/Account/logout">Logout</a>
            <?php else: ?>
                <a class="button" href="/Mvc/public/Account/login">Login</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
<main>