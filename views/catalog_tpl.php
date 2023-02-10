<?php require(ROOT.'/views/components/header.php');?>

<section class="second-banner">
	<img src="/template/images/template/icons/Meubel-House_Logos-05.svg" alt="logo" />
	<h1>Каталог</h1>
	<div class="banner-breadcrumbs">
		<a href="/">Главная</a>
		<img src="/template/images/template/icons/breadcrumbs-separator.svg" alt="breadcrumbs-separator" />
		<a href="/catalog">Каталог</a>
	</div>
</section>

<section class="products-manager">
	<div class="manager-nav">
		<div class="filter">
			<img src="/template/images/template/icons/filter-icon.svg" alt="filter-icon" />
			<span>Фильтр</span>
		</div>
		<div class="view">
			<img src="/template/images/template/icons/tile-icon.svg" alt="tile-icon" />
			<img src="/template/images/template/icons/list-icon.svg" alt="list-icon" />
		</div>
		<div class="show-count">
			<p class="show-count-text">Показано 1–16 из 32 товаров</p>
		</div>
	</div>

	<div class="sort">
		<label for="sort">Сортировать</label>
		<select name="sort" id="sort">
			<option value="low-price">Дешевле</option>
			<option value="hight-price">Дороже</option>
			<option value="new">Более новые</option>
			<option value="old">Более старые</option>
		</select>
	</div>
</section>

<section class="shop-products">
	<div class="shop-prodicts-items">

		<!-- first row -->
        <?php foreach($shopProducts as $shopProduct):?>
            <div class="shop-products-item">
                <div class="item-image">
                    <a href="single-product.html" class="item-image-link">
                        <img src="<?=$shopProduct['image']?>" alt="<?=$shopProduct['title']?>" />
                    </a>
                </div>
                <div class="item-title">
                    <a href="single-product.html">
                        <p><?=$shopProduct['title']?></p>
                    </a>
                </div>
                <div class="item-price">
                    <a href="single-product.html">
                        <span><?=$shopProduct['price']?> RUB</span>
                    </a>
                </div>
            </div>
        <?php endforeach;?>


	</div>

	<div class="more-products-items">
		<button class="add-products-items">View More</button>
	</div>
</section>

<section class="features">
	<div class="feature">
		<h3>Free Delivery</h3>
		<p>For all oders over $50, consectetur adipim scing elit.</p>
	</div>
	<div class="feature">
		<h3>90 Days Return</h3>
		<p>If goods have problems, consectetur adipim scing elit.</p>
	</div>
	<div class="feature">
		<h3>Secure Payment</h3>
		<p>100% secure payment, consectetur adipim scing elit.</p>
	</div>
</section>

<?php require(ROOT.'/views/components/footer.php');?>