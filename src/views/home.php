<h1>Категории товаров</h1>
<div class="categories flx">
    <?php foreach($data as $category):?>
    <a href="/shop/<?php echo $category['name'] ?>">
        <div class="product-category">
            <img src="<?php echo $category['image'] ?>" alt="">
            <h2><?php echo $category['name'] ?></h2>
        </div>
    </a>
    <?php endforeach;?>
</div>