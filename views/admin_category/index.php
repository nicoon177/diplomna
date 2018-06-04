<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row admin-category">

            <br/>

            <div class="admin-menu-list admin-confirm">
                <ul class="menu-admin">
                    <li><a href="/admin">Админпанель</a> --></li>
                    <li>Управління категоріями</li>
                </ul>
            </div>

            <a href="/admin/category/create" class="btn btn-save back admin-add-product"><i class="fa fa-plus"></i> Додати категорію</a>

            <h4 class="text-center">Список категорій</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID категорії</th>
                    <th>Назва категорії</th>
                    <th>Порядковий номер</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($categoriesList as $category): ?>
                <tr>
                    <td><?php echo $category['id']; ?></td>
                    <td><?php echo $category['name']; ?></td>
                    <td><?php echo $category['sort_order']; ?></td>
                    <td><?php echo Category::getStatusText($category['status']); ?></td>  
                    <td><a href="/admin/category/update/<?php echo $category['id']; ?>" title="Редагувати"><i class="fa fa-pencil-square-o"></i></a></td>
                    <td><a href="/admin/category/delete/<?php echo $category['id']; ?>" title="Видалити"><i class="fa fa-times admin-close"></i></a></td>
                </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

