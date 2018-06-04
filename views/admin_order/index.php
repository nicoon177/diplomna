<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row admin-order">

            <br/>

            <div class="admin-menu-list admin-confirm">
                <ul class="menu-admin">
                    <li><a href="/admin">Админпанель</a> --></li>
                    <li>Управління замовленнями</li>
                </ul>
            </div>

            <h4 class="text-center">Список замовлень</h4>

            <br/>


            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID Зомовлення</th>
                    <th>Імя покупця</th>
                    <th>Телефон покупця</th>
                    <th>Дата оформлення</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($ordersList as $order): ?>
                <tr>
                    <td>
                        <a href="/admin/order/view/<?php echo $order['id']; ?>">
                            <?php echo $order['id']; ?>
                        </a>
                    </td>
                    <td><?php echo $order['user_name']; ?></td>
                    <td><?php echo $order['user_phone']; ?></td>
                    <td><?php echo $order['date']; ?></td>
                    <td><?php echo Order::getStatusText($order['status']); ?></td>    
                    <td><a href="/admin/order/view/<?php echo $order['id']; ?>" title="Смотреть"><i class="fa fa-eye"></i></a></td>
                    <td><a href="/admin/order/update/<?php echo $order['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                    <td><a href="/admin/order/delete/<?php echo $order['id']; ?>" title="Удалить"><i class="fa fa-times admin-close"></i></a></td>
                </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

