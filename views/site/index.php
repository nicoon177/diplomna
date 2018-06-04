<?php include ROOT . '/views/layouts/header.php'; ?>

	<div class="banner">
		<div class="container">
			<div  id="top" class="callbacks_container">	
                <div class="banner-text">
                    <h3>Інтернет-магазин Crowdme</h3>
                    <p>Тут ви знайдети найякісніші товари електроної техніки за найнищою ціною!</p>
                </div>
		</div>

	</div>
	</div>
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>Категорії</h1>
		<div class="grid-in">
		<div class="row">
		<?php foreach($categories as $categoryItem): ?>
		<div class="col-md-4 grid-top">
				<a href="/category/<?php echo $categoryItem['id']; ?>" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive " src="/template/images/category/<?php echo $categoryItem['img']; ?>" alt="">
                    <div class="b-wrapper">
                        <h3 class="b-animate b-from-left    b-delay03 ">
                            <span><?php echo $categoryItem['name']; ?></span>	
                        </h3>
                    </div>
				</a>
			</div>
		<?php endforeach; ?>
		<div class="clearfix"> </div>
		</div>
	</div>
</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>