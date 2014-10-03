<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <div class="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href="http://127.0.0.1/CodeIgniter-project/index.php/news/view/<?php echo $news_item['slug'] ?>">View article</a></p>

<?php endforeach ?>