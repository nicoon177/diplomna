<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="admin-menu-list">
                <ul class="menu-admin">
                    <li><a href="/admin">Админпанель</a> --></li>
                    <li>Управління товарами</li>
                </ul>
            </div>

            <a href="/admin/product/create" class="btn btn-save back admin-add-product"><i class="fa fa-plus"></i> Додати товар</a>

            <h4 class="text-center">Список товарів</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID товара</th>
                    <th>Артикул</th>
                    <th>Назва товара</th>
                    <th>Ціна</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($productsList as $product): ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['code']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price']; ?></td>  
                    <td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редагувати"><i class="fa fa-pencil-square-o"></i></a></td>
                    <td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Видалити"><i class="fa fa-times admin-close"></i></a></td>
                </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

