<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <div class="features_items">
                <h2 class="title-cart text-center">Корзина</h2>

                <?php if ($productsInCart): ?>
                <p class="selected_cart">Вибрані товари:</p>
                <table class="table-bordered table-striped table">
                    <tr>
                        <th>Назва</th>
                        <th>Ціна</th>
                        <th>Кількість, шт</th>
                        <th>Видалити</th>
                    </tr>
                    <?php foreach ($products as $product): ?>
                    <tr>
                        <td>
                            <a href="/product/<?php echo $product['id'];?>">
                                <?php echo $product['name'];?>
                            </a>
                        </td>
                        <td><?php echo $product['price'];?></td>
                        <td><?php echo $productsInCart[$product['id']];?></td> 
                        <td>
                            <a href="/cart/delete/<?php echo $product['id'];?>">
                                X
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3">Загальна сума покупки:</td>
                        <td><?php echo $totalPrice;?>$</td>
                    </tr>

                </table>

                <a class="btn btn-default cart-chechout" href="/cart/checkout">Оформити Замовлення</a>
                <?php else: ?>
                <p class="cart-empty">Корзина пуста</p>

                <a class="btn btn-default cart-home" href="/">Повернутися на головну</a>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>