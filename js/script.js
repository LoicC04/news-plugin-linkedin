News.addArticleAction(function($actionsElement, article) {
    var $li = $('<li>')
        .addClass('article-plugin-linkedin');
    var $button = $('<button>')
        .attr('title', t('news-plugin-linkedin', 'Share on Linkedin'));
    var text = article.title + '\n' + article.intro.substring(0,150) + '...\nThanks to ' + article.author;
    var url = 'https://www.linkedin.com/shareArticle/?mini=true&url='+ '&title=' + encodeURIComponent(text) + encodeURIComponent(article.url);

    $button.click(function (event) {
        window.open(url);
        window.opener = null; // prevent twitter being from able to access the DOM
        event.stopPropagation();  // prevent expanding in compact mode
    });

    $li.append($button);
    $actionsElement.append($li);
});
