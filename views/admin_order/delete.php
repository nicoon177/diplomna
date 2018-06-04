<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row admin-page-delete">

            <br/>

            <div class="admin-menu-list admin-confirm">
                <ul class="menu-admin">
                    <li><a href="/admin">Админпанель</a> --></li>
                    <li><a href="/admin/order">Управління замовленнями</a> --></li>
                    <li>Видалити замовлення</li>
                </ul>
            </div>


            <h4 class="admin-product-delete">Видалити замовлення #<?php echo $id; ?></h4>


            <p>Ви справді хочете видалити це замовлення?</p>

            <form action="#" method="post">
                <input class="product-delete product-btn" type="submit" name="submit" value="Видалити" />
            </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

