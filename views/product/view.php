<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="of-left">
                <h3 class="product-category">Категорії</h3>
            </div>

            <?php foreach($categories as $categoryItem): ?>
            <ul class="menu">
                <li class="item1 category-list">
                    <a class="product-category-list" href="/category/<?php echo $categoryItem['id']; ?>">
                        <?php echo $categoryItem['name']; ?>
                    </a>
                </li>
            </ul>
            <?php endforeach; ?>
        </div>

        <div class="col-sm-9 product-singl">
            <div class="product-details">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img class="img-responsive" src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information">
                            <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                            <h2 class="product-singl-name"><?php echo $product['name']; ?></h2>
                            <p>Код товара: <?php echo $product['code']; ?></p>
                            <span>
                                <span class="product-price">Ціна: $<?php echo $product['price']; ?></span>
                                <a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-default add-to-cart product-sing-price" data-id="<?php echo $product['id']; ?>">Купити</a>
                            </span>
                            <p class="product-p-price"><b>Наявність:</b> <?php echo Product::getAvailabilyText($product['availability']); ?></p>
                            <p><b>Виробник:</b> <?php echo $product['brand']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">                                
                    <div class="col-sm-12">
                        <h3 class="product-description">Опис товара</h3>
                        <?php echo $product['description']; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>