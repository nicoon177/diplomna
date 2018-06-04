<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row admin-category-add">

            <br/>

            <div class="admin-menu-list admin-confirm">
                <ul class="menu-admin">
                    <li><a href="/admin">Админпанель</a> --></li>
                    <li><a href="/admin/category">Управління категоріями</a> --></li>
                    <li>Додати категорію</li>
                </ul>
            </div>


            <h4 class="text-center admin-add">Додати нову категорію</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <div class="col-lg-6 col-lg-offset-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Назва</p>
                        <input class="input-editor-all" type="text" name="name" placeholder="" value="">

                        <p>Порядковий номер</p>
                        <input class="input-editor-all" type="text" name="sort_order" placeholder="" value="">

                        <p>Статус</p>
                        <select class="select-all" name="status">
                            <option value="1" selected="selected">Відображається</option>
                            <option value="0">Скрита</option>
                        </select>

                        <br><br>

                        <input type="submit" name="submit" class="btn-save" value="Сохранить">
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

