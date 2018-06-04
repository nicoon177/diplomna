<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
    <div class="account">
        <h1>Вхід</h1>
        <div class="account-pass">

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                    <?php endforeach; ?>   
                </ul>
            <?php endif; ?> 

            <div class="col-md-8 account-top">
                <form action="#" method="post">
                <div> 	
                    <span>Email</span>
                    <input type="text" name="email"> 
                </div>
                <div> 
                    <span >Password</span>
                    <input type="password" name="password">
                </div>				
                    <input type="submit" value="Login" name="submit"> 
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
	</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>