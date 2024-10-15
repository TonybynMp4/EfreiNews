    <?php require_once 'header.php'; ?>
    <?php if (!isset($_SESSION['user'])) : ?>
        <div x-data="{show: true}" x-show="show" class="alert">
            N'oubliez pas de vous connecter pour accéder à l'administration!
            <button class="primary" @click="show = false">Cacher</button>
        </div>
    <?php endif; ?>
    <h1>Articles récents</h1>
    <div class="articles" x-cloak x-data="{ articles: <?php echo htmlspecialchars(json_encode($articles)); ?> }">
        <?php require 'article.php'; ?>
        <template x-if="!articles.length">
            <p>Aucun article.</p>
        </template>
    </div>