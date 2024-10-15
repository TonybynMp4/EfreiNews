<main style="display:flex; flex-direction:column;" x-data="{ error: '<?= $data['error'] ?? '' ?>' }">
    <template x-if="error">
        <div x-text="error" style="color: red; margin: 1em auto;"></div>
    </template>
    <form action="<?= BASE_URL ?>Account/register" method="post">
        <fieldset style="display:flex; flex-direction:column; width:30%; gap: 1em; margin-inline:auto; padding: 1em; border-radius: 1em;">
            <legend>
                Créer un compte
            </legend>
            <label for="name">Nom d'utilisateur</label>
            <input type="text" id="username" name="username" required autofocus placeholder="Nom d'utilisateur">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required placeholder="Mot de passe">
            <?php if(DEBUG): ?>
            <label for="role">[DEBUG] Rôle</label>
            <select id="role" name="role">
                <option value="user">Utilisateur</option>
                <option value="admin">Administrateur</option>
            </select>
            <?php endif; ?>
            <button>Créer un compte</button>
        </fieldset>
    </form>
    <a href="<?= BASE_URL ?>Account/login" style="font-style: italic; text-decoration:none; margin: 1em auto;">
        Déjà inscrit ?
    </a>
</main>