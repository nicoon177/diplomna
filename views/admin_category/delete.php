<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row admin-page-delete">

            <br/>

            <div class="admin-menu-list admin-confirm">
                <ul class="menu-admin">
                    <li><a href="/admin">Админпанель</a> --></li>
                    <li><a href="/admin/category">Управління категоріями</a> --></li>
                    <li>Видалити категорію</li>
                </ul>
            </div>


            <h4 class="admin-product-delete">Видалити категорію #<?php echo $id; ?></h4>


            <p>Вм дійсно хочети видалити цю категорію?</p>

            <form method="post">
                <input class="btn-save product-delete product-btn" type="submit" name="submit" value="Видалити" />
            </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

