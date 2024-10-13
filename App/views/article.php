<template x-for="article in articles" :key="article.id">
    <div class="article">
        <h2 x-text="article.title"></h2>
        <p x-text="article.content"></p>
        <p>Publié par <span x-text="article.name"></span> le <time x-text="article.created_at" format="YYYY-MM-DD"></time></p>
    </div>
</template>