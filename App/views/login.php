<main style="display:flex; flex-direction:column;" x-data="{ error: '<?= $data['error'] ?? '' ?>' }">
    <template x-if="error">
        <div x-text="error" style="color: red; margin: 1em auto;"></div>
    </template>
    <form action="<?= BASE_URL ?>Account/login" method="post">
        <fieldset style="display:flex; flex-direction:column; width:30%; gap: 1em; margin-inline:auto; padding: 1em; border-radius: 1em;">
            <legend>
                Se connecter
            </legend>
            <label for="name">Nom d'utilisateur</label>
            <input type="text" id="username" name="username" required autofocus placeholder="Nom d'utilisateur">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required placeholder="Mot de passe">
            <button>Se connecter</button>
        </fieldset>
    </form>
    <a href="<?= BASE_URL ?>Account/register" style="font-style: italic; text-decoration:none; margin: 1em auto;">
        Pas encore inscrit ?
    </a>
</main>