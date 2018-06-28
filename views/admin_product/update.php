<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="admin-menu-list">
                <ul class="menu-admin">
                    <li><a href="/admin">Админпанель</a> --></li>
                    <li><a href="/admin/product">Управління товарами</a> --></li>
                    <li class="">Редагувати товар</li>
                </ul>
            </div>


            <h4 class="text-center admin-add">Редагувати товар id = #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-6 col-lg-offset-4">
                <div class="login-form">
                    <form action="/admin/product/update/<?php echo $product['id']; ?>" method="post" enctype="multipart/form-data">

                        <p>Назвва товара</p>
                        <input class="input-editor-all" type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>">

                        <p>Артикул</p>
                        <input class="input-editor-all" type="text" name="code" placeholder="" value="<?php echo $product['code']; ?>">

                        <p>Вартість, $</p>
                        <input class="input-editor-all" type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>">

                        <p>Категорія</p>
                        <select class="select-all" name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                            <?php foreach ($categoriesList as $category): ?>
                            <option value="<?php echo $category['id']; ?>" 
                                    <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                <?php echo $category['name']; ?>
                            </option>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <br/><br/>

                        <p>Виробник</p>
                        <input class="input-editor-all" type="text" name="brand" placeholder="" value="<?php echo $product['brand']; ?>">

                        <p>Картинка товара</p>
                        <br>
                        <img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt="" />
                        <input type="file" name="image" placeholder="" value="<?php echo $product['image']; ?>"> <br>

                        <p>Детальний опис</p>
                        <textarea class="input-editor-all" name="description"><?php echo $product['description']; ?></textarea>

                        <br/><br/>

                        <p>Наявність на складі</p>
                        <select class="select-all" name="availability">
                            <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Так</option>
                            <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Ні</option>
                        </select>

                        <br/><br/>

                        <p>Новинка</p>
                        <select class="select-all" name="is_new">
                            <option value="1" <?php if ($product['is_new'] == 1) echo ' selected="selected"'; ?>>Так</option>
                            <option value="0" <?php if ($product['is_new'] == 0) echo ' selected="selected"'; ?>>Ні</option>
                        </select>

                        <br/><br/>

                        <p>Рекомендовані</p>
                        <select class="select-all" name="is_recommended">
                            <option value="1" <?php if ($product['is_recommended'] == 1) echo ' selected="selected"'; ?>>Так</option>
                            <option value="0" <?php if ($product['is_recommended'] == 0) echo ' selected="selected"'; ?>>Ні</option>
                        </select>

                        <br/><br/>

                        <p>Статус</p>
                        <select class="select-all" name="status">
                            <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"'; ?>>Відображається</option>
                            <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"'; ?>>Скритий</option>
                        </select>

                        <br/><br/>

                        <input type="submit" name="submit" class="btn-save" value="Зберегти">

                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

