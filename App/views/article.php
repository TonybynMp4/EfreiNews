<template x-for="article in articles" :key="article.id">
    <div class="article">
        <h2 x-text="article.title" style="margin-top: 0.5em; margin-bottom: 0; font-size:2.5rem;">
        </h2>
        <p style="margin: 0.1em; font-size:small;">Publié par <strong x-text="article.username"></strong> le <time x-text="article.created_at" format="YYYY-MM-DD"></time></p>
        <hr style="margin: 0.1em 0;">
        <div class="article-content" x-html="marked.parse(article.content)"></div>
    </div>
</template>