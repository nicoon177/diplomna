<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="admin-menu-list">
                <ul class="menu-admin">
                    <li><a href="/admin">Админпанель</a> --></li>
                    <li><a href="/admin/product">Управління товарами</a> --></li>
                    <li class="">Створити товар</li>
                </ul>
            </div>


            <h4 class="text-center admin-add">Додати новий товар</h4>

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
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Назва товара</p>
                        <input class="input-editor-all" type="text" name="name" placeholder="" value="">

                        <p>Артикул</p>
                        <input class="input-editor-all" type="text" name="code" placeholder="" value="">

                        <p>Вартість, $</p>
                        <input class="input-editor-all" type="text" name="price" placeholder="" value="">

                        <p>Категорія</p>
                        <select class="select-all" name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                            <?php foreach ($categoriesList as $category): ?>
                            <option value="<?php echo $category['id']; ?>">
                                <?php echo $category['name']; ?>
                            </option>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <br/><br/>

                        <p>Виробник</p>
                        <input class="input-editor-all" type="text" name="brand" placeholder="" value="">

                        <p>Картинка товара</p>
                        <input class="input-file" type="file" name="image" placeholder="" value="">

                        <p>Детальний опис</p>
                        <textarea class="input-editor-all" name="description"></textarea>

                        <br/><br/>

                        <p>Наявність на складі</p>
                        <select class="select-all" name="availability">
                            <option value="1" selected="selected">Так</option>
                            <option value="0">Ні</option>
                        </select>

                        <br/><br/>

                        <p>Новинка</p>
                        <select class="select-all" name="is_new">
                            <option value="1" selected="selected">так</option>
                            <option value="0">Ні</option>
                        </select>

                        <br/><br/>

                        <p>Рекомендовані</p>
                        <select class="select-all" name="is_recommended">
                            <option value="1" selected="selected">Так</option>
                            <option value="0">Ні</option>
                        </select>

                        <br/><br/>

                        <p>Статус</p>
                        <select class="select-all" name="status">
                            <option value="1" selected="selected">Відображається</option>
                            <option value="0">Сритий</option>
                        </select>

                        <br/><br/>

                        <input type="submit" name="submit" class="btn-save" value="Додати">

                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

