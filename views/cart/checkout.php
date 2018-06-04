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
                    <h2 class="title-cart text-center">Корзина</h2>


                    <?php if ($result): ?>
                        <p>Замовлення оформлене. Ми вам передзвонимо протягом 30хв.</p>
                    <?php else: ?>

                    <p class="text-center">Вибрано товарів: <?php echo $totalQuantity; ?>, на суму: <?php echo $totalPrice; ?>, $</p><br/>

                    <?php if (!$result): ?>                        

                    <div class="col-sm-6 col-sm-offset-2">
                        <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>

                        <p>Для оформлення замовлення заповніть дану форму. Наш менеджер подзвонить вам протягом наступних 30хв.</p> <br>

                        <div class="login-form">
                            <form action="#" method="post">

                                <p>Ваше імя</p>
                                <input class="input-editor-all" type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"/>

                                <p>Номер телефона</p>
                                <input class="input-editor-all" type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"/>

                                <p>Ваші побажання</p>
                                <input class="input-editor-all" type="text" name="userComment" placeholder="Повідомлення" value="<?php echo $userComment; ?>"/>

                                <br/>
                                <input type="submit" name="submit" class="btn-save btn-padding" value="Відправити" />
                            </form>
                        </div>
                    </div>

                    <?php endif; ?>

                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>