<?php include ROOT . '/views/layouts/header.php'; ?>


<div class=" container">
<div class=" register">
        <?php if ($result): ?>
                  <p>Регістрація пройшла успішно</p>
              <?php else: ?>      
               
               <?php if (isset($errors) && is_array($errors)): ?>
                   <ul>
                       <?php foreach ($errors as $error): ?>
                           <li><?php echo $error; ?></li>
                        <?php endforeach; ?>   
                   </ul>
        <?php endif; ?> 

	<h1>Регістація</h1>
		  	  <form action="#" method="post"> 
				 <div class="col-md-6 register-top-grid">
					<h3>Персональна інформація</h3>
					 <div>
						<span>Імя</span>
						<input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>"> 
					 </div>
					 <div>
						 <span>Email</span>
						 <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>"> 
					 </div>
					 </div>
				     <div class="col-md-6 register-bottom-grid">
						    <h3>Конфіденційна інформація</h3>
							 <div>
								<span>Password</span>
								<input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
							 </div>
							 <input type="submit" value="Відправити" name="submit">
							
					 </div>
					 <div class="clearfix"> </div>
                </form>
<?php endif; ?>
			</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>