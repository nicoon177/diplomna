<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">

                        <?php foreach($categories as $categoryItem): ?>
                            <ul class="menu">
                                <li class="item1 category-list">
                                    <a class="product-category-list <?php if ($categoryId == $categoryItem['id']) echo 'category-active'; ?>" href="/category/<?php echo $categoryItem['id']; ?>">
                                        <?php echo $categoryItem['name']; ?>
                                    </a>
                                </li>
                            </ul>
                        <?php endforeach; ?>

                    </div>

                </div>
            </div>
            

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title-products text-center">Список товарів</h2>

                    <?php foreach($categoryProducts as $product): ?>
                    <div class="col-sm-4 product-div">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img class="product-img" src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                    <h2 class="product-price"><?php echo $product['price'] . "$"; ?> </h2>
                                    <p>
                                        <a class="product-name" href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a>
                                    </p>
                                    <a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>">В корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <?php echo $pagination->get(); ?>
                        </div>
                    </div>
                   


                </div>



            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>