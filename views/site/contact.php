<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="contact">
	<div class="container">
		<h1>Контакти</h1>
			<div class="contact-form">
				<div class="col-md-8 contact-grid">
                    <?php if ($result): ?>
                        <p>Повідомлення надіслано! Чекайте на відповідь на вказаному email</p>
                    <?php else: ?>      

                    <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>   
                    </ul>
                    <?php endif; ?>

					<form action="#" method="post">	
						<input type="text" placeholder="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}" name="userEmail" value="<?php echo $userEmail?>">
						<textarea cols="77" rows="6" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}" name="userText" value="<?php echo $userText?>">Повідомлення</textarea>
						<div class="send">
							<input type="submit" value="Відправити">
						</div>
					</form>

                    <?php endif; ?>
				</div>
				<div class="col-md-4 contact-in">
						<div class="address-more">
                            <h4>Адрес</h4>
                            <p>Crowdme</p>
                            <p>м.Тернопіль</p>
						</div>
						<div class="address-more">
						<h4>Контакти</h4>
							<p>Tel:380972637524</p>
							<p>Email:<a href="mailto:nicoon177@gmail.com"> nicoon177@gmail.com</a></p>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20710.67209349333!2d25.549778759003143!3d49.54428482906195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473036c46bc1b87b%3A0x6eac9da0f31a7be6!2z0JTRgNGD0LbQsdCwLCDQotC10YDQvdC-0L_RltC70YwsINCi0LXRgNC90L7Qv9GW0LvRjNGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCA0NjAwMA!5e0!3m2!1suk!2sua!4v1527679629628" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>