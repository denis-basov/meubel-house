<?php require(ROOT.'/views/components/header.php');?>

<section class="breadcrumbs">
	<a href="/">Главная</a>
	<img src="/template/images/template/icons/breadcrumbs-separator.svg" alt="breadcrumbs-separator" />
	<a href="/catalog">Каталог</a>
	<img src="/template/images/template/icons/breadcrumbs-separator.svg" alt="breadcrumbs-separator" />
	<span><?=$shopProduct['title']?></span>
</section>

<section class="single-product">
	<div class="single-product-info">
		<div class="single-product-gallery">
			<div class="previews">
				<img src="/template/images/template/template_images/Maya-sofa-three-seater-1-prev.png" alt="Maya-sofa-three-seater" />
				<img src="/template/images/template/template_images/Outdoor-sofa-set_2-1.png" alt="Outdoor-sofa-set_2-1" />
				<img src="/template/images/template/template_images/Outdoor-sofa-set-2.png" alt="Outdoor-sofa-set-2" />
				<img src="/template/images/template/template_images/Stuart-sofa-1.png" alt="Stuart-sofa-1" />
			</div>
			<div class="main-picture">
				<img src="/template/images/template/template_images/Asgaard-sof-3.png" alt="Asgaard-sof-3" />
			</div>
		</div>
		<div class="single-product-main-properties">
			<h1 class="main-title"><?=$shopProduct['title']?></h1>
			<p class="main-price"><?=$shopProduct['price']?> RUB</p>
			<div class="rating">
            <span class="rating-stars">
              <img src="/template/images/template/icons/star-full.svg" alt="star-full" />
              <img src="/template/images/template/icons/star-full.svg" alt="star-full" />
              <img src="/template/images/template/icons/star-full.svg" alt="star-full" />
              <img src="/template/images/template/icons/star-full.svg" alt="star-full" />
              <img src="/template/images/template/icons/star-part.svg" alt="star-part" />
            </span>
				<span class="rating-count">5 Customer Review</span>
			</div>
			<p class="main-description"><?=$shopProduct['short_description']?></p>
			<div class="main-size">
				<p>Size</p>
				<div class="main-size-items">
					<span class="main-size-item size-active">L</span>
					<span class="main-size-item">XL</span>
					<span class="main-size-item">XS</span>
				</div>
			</div>
			<div class="main-color">
				<p>Color</p>
				<div class="main-color-items">
					<span style="background-color: #816dfa" class="main-color-item"></span>
					<span style="background-color: #000000" class="main-color-item"></span>
					<span style="background-color: #cdba7b" class="main-color-item"></span>
				</div>
			</div>
			<form class="add-to-cart">
				<div class="quantity-to-add">
					<button class="decrease">-</button>
					<input class="input-quantity" type="text" value="1" />
					<button class="increase">+</button>
				</div>
				<input class="input-add-to-cart" type="submit" value="Add To Cart" />
			</form>
			<div class="additional-info">
				<div class="additional-info-key">SKU</div>
				<div class="additional-info-value">:&nbsp;&nbsp; SS001</div>
				<div class="additional-info-key">Category</div>
				<div class="additional-info-value">:&nbsp;&nbsp; Sofas</div>
				<div class="additional-info-key">Tags</div>
				<div class="additional-info-value">:&nbsp;&nbsp; Sofa, Chair, Home, Shop</div>
				<div class="additional-info-key">Share</div>
				<div class="additional-info-value">
					<div class="social-icons">
						<span>:</span>
						<a href="#"><img src="/template/images/template/icons/social-facebook.svg" alt="social-facebook" /></a>
						<a href="#"><img src="/template/images/template/icons/social-in.svg" alt="social-in" /></a>
						<a href="#"><img src="/template/images/template/icons/social-twitter.svg" alt="social-twitter" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="single-product-tabbed-info">
		<div class="tabbed-headers">
			<h3 class="tabbed-header tabbed-header-active">Description</h3>
			<h3 class="tabbed-header">Additional information</h3>
			<h3 class="tabbed-header">Reviews [5]</h3>
		</div>
		<div class="tabbed-content tab-content-active tab-description">
			<p class="tabbed-content-text"><?=$shopProduct['description']?></p>
			<div class="tabbed-content-gallery">
				<div class="tabbed-content-gallery-img">
					<img src="/template/images/template/template_images/Cloud-sofa-three seater-ottoman_2-1.png" alt="Cloud-sofa-three seater-ottoman_2-1" />
				</div>
				<div class="tabbed-content-gallery-img">
					<img src="/template/images/template/template_images/Cloud-sofa-three-seater-ottoman_1-1.png" alt="Cloud-sofa-three-seater-ottoman_1-1" />
				</div>
			</div>
		</div>
		<div class="tabbed-content tab-additional-info"></div>
		<div class="tabbed-content tab-reviews"></div>
	</div>
</section>

<!--  -->
<section class="related-products">
	<div class="related-products-text">
		<h2>Relared Products</h2>
	</div>
	<div class="related-products-items">
		<div class="related-products-item">
			<img src="/template/images/template/template_images/Trenton-modular-sofa_3-1.png" alt="Trenton-modular-sofa" />
			<p>Trenton modular sofa_3</p>
			<span>Rs. 25,000.00</span>
		</div>
		<div class="related-products-item">
			<img src="/template/images/template/template_images/Granite-dining-table-with-dining-chair-1.png" alt="Granite-dining-table-with-dining-chair" />
			<p>Granite dining table with dining chair</p>
			<span>Rs. 25,000.00</span>
		</div>
		<div class="related-products-item">
			<img src="/template/images/template/template_images/Outdoor-bar-table-and-stool-1.png" alt="Outdoor-bar-table-and-stool" />
			<p>Outdoor bar table and stool</p>
			<span>Rs. 25,000.00</span>
		</div>
		<div class="related-products-item">
			<img src="/template/images/template/template_images/Plain-console-with-teak-mirror-1.png" alt="Plain-console-with-teak-mirror" />
			<p>Plain console with teak mirror</p>
			<span>Rs. 25,000.00</span>
		</div>
	</div>
	<div class="related-products-link">
		<a href="#">View More</a>
	</div>
</section>
<!--  -->

<?php require(ROOT.'/views/components/footer.php');?>