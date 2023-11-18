<h1>Товары</h1>
<div class="categories flx">
    <?php foreach($data as $product):?>
    <a href="/shop/<?php echo $product['name'] ?>">
        <div class="product-category">
            <img src="<?php echo $product['image'] ?>" alt="">
            <h2><?php echo $product['name'] ?></h2>
        </div>
    </a>
    <?php endforeach;?>
</div>