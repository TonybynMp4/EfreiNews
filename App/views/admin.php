<div x-data="{ title: '', content: ''}">

    <form action="<?php echo CONTROLLER_PATH; ?>AdminController.php" method="post">
        <fieldset style="display:flex; flex-direction:column; width:50%; gap: 1em; margin-inline:auto; margin-bottom: 1em; background: var(--background-secondary); padding: 1em; border-radius: 1em;">
            <legend>Créer un article</legend>
            <label for="title">Titre</label>
            <input type="text" id="title" x-model="title" placeholder="Titre de l'article" required>
            <label for="content">Contenu</label>
            <textarea id="content" x-model="content" rows="10" placeholder="Contenu de l'article" required></textarea>
            <button>Créer un article</button>
        </fieldset>
    </form>

    <fieldset class="article">
        <legend>Prévisualisation de l'article</legend>
        <h2 x-text="title"></h2>
        <p x-text="content"></p>
    </div>
</div>