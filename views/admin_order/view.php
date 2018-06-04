<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="admin-menu-list">
                <ul class="menu-admin">
                    <li><a href="/admin">Админпанель</a> --></li>
                    <li><a href="/admin/order">Управління замовленнями</a> --></li>
                    <li class="">Перегляд замовлення</li>
                </ul>
            </div>

            <br>

            <h4 class="text-center">Перегляд замовлення #<?php echo $order['id']; ?></h4>
            <br/>




            <h5>Информація про замовлення</h5>
            <table class="table-admin-small table-bordered table-striped table">
                <tr>
                    <td>Номер замовлення</td>
                    <td><?php echo $order['id']; ?></td>
                </tr>
                <tr>
                    <td>Імя кліента</td>
                    <td><?php echo $order['user_name']; ?></td>
                </tr>
                <tr>
                    <td>Телефон кліента</td>
                    <td><?php echo $order['user_phone']; ?></td>
                </tr>
                <tr>
                    <td>Коментар кліента</td>
                    <td><?php echo $order['user_comment']; ?></td>
                </tr>
                <?php if ($order['user_id'] != 0): ?>
                <tr>
                    <td>ID кліента</td>
                    <td><?php echo $order['user_id']; ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td><b>Статус замовлення</b></td>
                    <td><?php echo Order::getStatusText($order['status']); ?></td>
                </tr>
                <tr>
                    <td><b>Дата замовлення</b></td>
                    <td><?php echo $order['date']; ?></td>
                </tr>
            </table>

            <h5>Замовлені товари</h5>

            <table class="table-admin-medium table-bordered table-striped table ">
                <tr>
                    <th>ID товара</th>
                    <th>Артикул товара</th>
                    <th>Назва</th>
                    <th>Ціна</th>
                    <th>Кількість</th>
                </tr>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['code']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td>$<?php echo $product['price']; ?></td>
                    <td><?php echo $productsQuantity[$product['id']]; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>

            <a href="/admin/order/" class="btn btn-save admin-add-product back"><i class="fa fa-arrow-left"></i> Назад</a>
        </div>

    </div>
        </section>

    <?php include ROOT . '/views/layouts/footer_admin.php'; ?>

