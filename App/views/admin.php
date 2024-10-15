<div x-data="{
    title: '',
    content: '',
    error: '<?= $data['error'] ?? '' ?>'
}">
    <template x-if="error">
        <div x-text="error" class="alert-error"></div>
    </template>
    <form action="<?= BASE_URL ?>Admin/createArticle" method="post">
        <fieldset style="display:flex; flex-direction:column; width:50%; gap: 1em; margin-inline:auto; margin-bottom: 1em; background: var(--background-tertiary); padding: 1em; border-radius: 1em;">
            <legend>Créer un article</legend>
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" x-model="title" placeholder="Titre de l'article" required>
            <label for="content">Contenu</label>
            <textarea name="content" id="content" rows="10" placeholder="Contenu de l'article" required x-model="content">
            </textarea>
            <button>Créer un article</button>
        </fieldset>
    </form>

    <fieldset class="article">
        <legend>Prévisualisation de l'article</legend>
        <h2 x-text="title" style="margin-top: 0.5em; margin-bottom: 0; font-size:2.5rem;">
        </h2>
        <p style="margin: 0.1em; font-size:small;">Publié par <strong><?= $_SESSION['user'] ?></strong> le <time format="YYYY/MM/DD"><?= date('Y/m/d') ?></time></p></time></p>
        <hr style="margin: 0.1em 0;">
        <div class="article-content" x-html="marked.parse(content)"></div>
    </div>
</div>