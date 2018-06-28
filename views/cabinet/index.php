<?php include ROOT . '/views/layouts/header.php'; ?>


<section>
    <div class="container">
        <div class="row">
            
            <h1 class="cabinet">Мій кабінет</h1>
            <div class="admin-container">
                <h3 class="presentation">Вітаю <?php echo $user['name'];?> у інтернет магазині Crowdme</h3>
                <?php if($user['role'] == 'admin'): ?>
                <p><a class="btn-save" href="/admin">Управління сайтом</a></p>
                <?php else: ?>
                <p></p>
                <?php endif; ?>
            </div>
            
            
            <ul class="user-posibilites">
                <li><a href="/cabinet/edit">Редагувати дані</a></li>
                <li><a href="/catalog/">Подивитися на товари</a></li>
            </ul>
            
        </div>
    </div>
</section>



<?php include ROOT . '/views/layouts/footer.php'; ?>