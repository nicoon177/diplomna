<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
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

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title-products text-center">Список товарів</h2>

                    <?php foreach($latestProducts as $product): ?>
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
                </div>


            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function(){
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function(data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

<?php include ROOT . '/views/layouts/footer.php'; ?>