<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row admin-order-update">

            <br/>

            <div class="admin-menu-list">
                <ul class="menu-admin">
                    <li><a href="/admin">Админпанель</a> --></li>
                    <li><a href="/admin/category">Управління замовленнями</a> --></li>
                    <li class="">Редагувати замовлення</li>
                </ul>
            </div>

            <br>
           
            <h4 class="text-center">Редагувати замовлення #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-6 col-lg-offset-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Імя клієнта</p>
                        <input class="input-editor-all" type="text" name="userName" placeholder="" value="<?php echo $order['user_name']; ?>">

                        <p>Телефон клієнта</p>
                        <input class="input-editor-all" type="text" name="userPhone" placeholder="" value="<?php echo $order['user_phone']; ?>">

                        <p>Коментар клієнта</p>
                        <input class="input-editor-all" type="text" name="userComment" placeholder="" value="<?php echo $order['user_comment']; ?>">

                        <p>Дата оформления замовлення</p>
                        <input class="input-editor-all" type="text" name="date" placeholder="" value="<?php echo $order['date']; ?>">

                        <p>Статус</p>
                        <select class="select-all" name="status">
                            <option value="1" <?php if ($order['status'] == 1) echo ' selected="selected"'; ?>>Нове Замовлення</option>
                            <option value="2" <?php if ($order['status'] == 2) echo ' selected="selected"'; ?>>В опрацюванні</option>
                            <option value="3" <?php if ($order['status'] == 3) echo ' selected="selected"'; ?>>Доставляется</option>
                            <option value="4" <?php if ($order['status'] == 4) echo ' selected="selected"'; ?>>Закрито</option>
                        </select>
                        <br>
                        <br>
                        <input type="submit" name="submit" class="btn-save" value="Зберегти">
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

