<?php

$title="single Post";

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="content">

<h1><?=$title?></h1>



    <div class="shelf">

        <div class="book_cover">

            <img src="images/covers/<?=esc_attr($book['image'])?>" alt="<?=esc_attr($book['title'])?>" />

        </div><!-- /.book_cover -->

        <div class="book_details">
            <!-- <?php dd($_GET) ?> -->
            <h3><?=esc_attr($book['title'])?></h3>

            <ul>
                <li><strong>Title</strong>: <?=esc_attr($book['title'])?></li>
                <li><strong>Author</strong>: <?=esc_attr($book['author'])?></li>
                <li><strong>Genre</strong>: <?=esc_attr($book['genre'])?></li>
                <li><strong>Format</strong>: <?=esc_attr($book['format'])?></li>
                <li><strong>Number of Pages</strong>: <?=esc_attr($book['num_pages'])?></li>
                <li><strong>Year Published</strong>: <?=esc_attr($book['year_published'])?></li>
                <li><strong>In Print</strong>: <?=($book['in_print'] == 1) ? 'Yes' : 'No' ?></li>
                <li><strong>Price</strong>: <?=esc_attr($book['price'])?></li>
                <li><strong>Publisher</strong>: <?=esc_attr($book['publisher'])?></li>
                <li><strong>Publisher City</strong>: <?=esc_attr($book['publisher_city'])?></li>
                <li>
                    <form action="/" method="post">
                        <input type="hidden" name="cart" value="1" />
                        <input type="hidden" name="book_id" value="<?=esc_attr($book['book_id'])?>" />
                        <button type="submit">Add to Cart</button>
                    </form>
                </li>
            </ul>

        </div><!-- /.book_details -->

        <div class="book_author">

            <h4>Meet the author...</h4>

            <h5><?=esc_attr($book['author'])?></h5>

            <img src="images/authors/<?=esc_attr( str_replace(' ', '_', strtolower( $book['author'] ) ) )?>.jpg" alt="<?=esc_attr($book['author'])?>" />

            <p><?=esc_attr($book['author'])?>.  Country: <?=esc_attr($book['author_country'])?></p>

            <img src="images/countries/<?=esc_attr( str_replace(' ', '_', strtolower( $book['author_country'] ) ) )?>" alt="<?=esc_attr(str_lower($book['author_country']))?> Flag" />

            <p>View <a href="books.html">other books by this author</a>.</p>

        </div><!-- /.book_author -->

        <div class="book_description">
                        <h4>Description</h4>
                        <?=$book['description']?>

            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

        </div>

        <div class="book_publisher">

            <h3>Other books by this publisher</h3>

                        <div class="book_item">
                <a href="book_detail.html"><img src="images/covers/dune.jpg" alt="Dune" /></a>
            </div>
                    <div class="book_item">
                <a href="book_detail.html"><img src="images/covers/under_the_dome.jpg" alt="Under the Dome" /></a>
            </div>
                    <div class="book_item">
                <a href="book_detail.html"><img src="images/covers/carrie.jpg" alt="Carrie" /></a>
            </div>
        
        </div>

        

    </div><!-- /.shelf -->

</div><!-- /content -->

</div><!-- /.container -->
</body>
</html>