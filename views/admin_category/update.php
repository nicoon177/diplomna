<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row admin-category-update">

            <br/>

            <div class="admin-menu-list">
                <ul class="menu-admin">
                    <li><a href="/admin">Админпанель</a> --></li>
                    <li><a href="/admin/category">Управління категоріями</a> --></li>
                    <li class="">Редагувати категорію</li>
                </ul>
            </div>


            <h4 class="text-center admin-add">Редагувати категорію "<?php echo $category['name']; ?>"</h4>

            <br/>

            <div class="col-lg-6 col-lg-offset-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Название</p>
                        <input class="input-editor-all" type="text" name="name" placeholder="" value="<?php echo $category['name']; ?>">

                        <p>Порядковый номер</p>
                        <input class="input-editor-all" type="text" name="sort_order" placeholder="" value="<?php echo $category['sort_order']; ?>">

                        <p>Статус</p>
                        <select class="select-all" name="status">
                            <option value="1" <?php if ($category['status'] == 1) echo ' selected="selected"'; ?>>Відображається</option>
                            <option value="0" <?php if ($category['status'] == 0) echo ' selected="selected"'; ?>>Скрита</option>
                        </select>

                        <br><br>

                        <input type="submit" name="submit" class="btn-save" value="Зберегти">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

