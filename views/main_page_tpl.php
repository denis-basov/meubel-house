<?php require(ROOT.'/views/components/header.php');?>

<section class="banner-section">
	<div class="banner-text">
		<h1>Wood Decor</h1>
        <p>Магазин деревянных изделий ручной работы</p>
	</div>
	<div class="banner-image">
		<img src="/template/images/template/template_images/main-banner.jpeg" alt="main-banner" />
	</div>
</section>

<section class="top-pics">
	<div class="top-pics-text">
		<h2>Популярные товары</h2>
		<p>Найдите яркий идеал на свой вкус с нашим большим выбором подвесных, напольных и настольных светильников.</p>
	</div>
	<div class="top-pics-items">
        <?php foreach ($popularShopProducts as $popularShopProduct):?>
            <div class="top-pics-item top-pics-item-1">
                <a href="#"><img src="<?=$popularShopProduct['image']?>" alt="<?=$popularShopProduct['title']?>" /></a>
                <a href="#"><p><?=$popularShopProduct['title']?></p></a>
                <a href="#"><span><?=$popularShopProduct['price']?></span></a>
            </div>
	    <?php endforeach;?>
	</div>
	<div class="top-pics-link">
		<a href="/catalog">В Каталог</a>
	</div>
</section>

<section class="new-arrivals">
	<div class="new-arrivals-img">
		<img src="/template/images/template/template_images/Asgaard-sofa-1.png" alt="Asgaard-sofa" />
	</div>
	<div class="new-arrivals-text">
		<p>Новинки</p>
		<h2>Asgaard sofa</h2>
		<a href="">Купить сейчас</a>
	</div>
</section>

<section class="our-blogs">
	<div class="our-blogs-heading">
		<h2>Наш блог</h2>
		<p>Найдите яркий идеал на свой вкус с нашим большим выбором</p>
	</div>
	<div class="our-blogs-items">
		<div class="our-blog-item">
			<img src="/template/images/template/template_images/Rectangle-13.png" alt="Rectangle-13" />
			<p>Идти ва-банк с тысячелетним дизайном</p>
			<a href="#">Читать далее...</a>
			<div class="our-blog-item-info">
				<img src="/template/images/template/icons/time-main.svg" alt="time-main" />
				<span class="reding-time">5 минут</span>
				<img src="/template/images/template/icons/date-main.svg" alt="date-main" />
				<span class="add-date">12 Октября 2022</span>
			</div>
		</div>
		<div class="our-blog-item">
			<img src="/template/images/template/template_images/Rectangle-14.png" alt="Rectangle-14" />
			<p>Идти ва-банк с тысячелетним дизайном</p>
			<a href="#">Читать далее...</a>
			<div class="our-blog-item-info">
				<img src="/template/images/template/icons/time-main.svg" alt="time-main" />
				<span class="reding-time">5 минут</span>
				<img src="/template/images/template/icons/date-main.svg" alt="date-main" />
				<span class="add-date">12 Октября 2022</span>
			</div>
		</div>
		<div class="our-blog-item">
			<img src="/template/images/template/template_images/Rectangle-15.png" alt="Rectangle-15" />
			<p>Идти ва-банк с тысячелетним дизайном</p>
			<a href="#">Читать далее...</a>
			<div class="our-blog-item-info">
				<img src="/template/images/template/icons/time-main.svg" alt="time-main" />
				<span class="reding-time">5 минут</span>
				<img src="/template/images/template/icons/date-main.svg" alt="date-main" />
				<span class="add-date">12 Октября 2022</span>
			</div>
		</div>
	</div>
	<div class="our-blog-link">
		<a href="#">Перейти в блог</a>
	</div>
</section>

<section class="our-instagram">
	<div class="our-instagram-text">
		<h2>Наш Instagram</h2>
		<p>Посетите наш магазин в Instagram</p>
		<a href="#">Перейти</a>
	</div>
</section>

<?php require(ROOT.'/views/components/footer.php');?>