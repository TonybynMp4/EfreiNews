<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efrei News</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
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
<header style="border-bottom: #1F3A93 5px solid; padding-block: 1em;">
    <a href="<?= BASE_URL ?>Home/index" style="display: flex; align-items: center; gap: 1em; text-decoration: none; color: var(--text-color);">
        <img src="<?= BASE_URL ?>images/logo.webp" alt="Logo Efrei News" style="width: 3.5em; height: 3.5em;">
        <h1 style="margin: 0;">
            Efrei News
        </h1>
    </a>

    <div>
        <button x-cloak @click="$store.darkMode.toggle()" x-text="$store.darkMode.on ? '☀️' : '🌙'"></button>
        <nav>
            <a class="button" href="<?= BASE_URL ?>Home/index">Home</a>
            <?php if (isset($_SESSION['user'])): ?>
                <?php if ($_SESSION['role'] === 'admin'): ?>
                    <a class="button" href="<?= BASE_URL ?>Admin/index">Admin</a>
                <?php endif; ?>
                <a class="button" href="<?= BASE_URL ?>Account/logout">Logout</a>
            <?php else: ?>
                <a class="button" href="<?= BASE_URL ?>Account/login">Login</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
<main>