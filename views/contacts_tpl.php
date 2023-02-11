<?php require(ROOT.'/views/components/header.php');?>

<section class="second-banner">
	<img src="/template/images/template/icons/Meubel-House_Logos-05.svg" alt="logo" />
	<h1>Контакты</h1>
	<div class="banner-breadcrumbs">
		<a href="/">Главная</a>
		<img src="/template/images/template/icons/breadcrumbs-separator.svg" alt="breadcrumbs-separator" />
		<a href="/contacts">Контакты</a>
	</div>
</section>

<section class="contacts-container">
	<div class="contacts-heading">
		<h2>Свяжись с нами</h2>
		<p>Для получения дополнительной информации о наших продуктах и услугах. Пожалуйста, не стесняйтесь, напишите
            нам по электронной почте. Наши сотрудники всегда будут рядом, чтобы помочь вам. Не стесняйтесь!</p>
	</div>
	<div class="contacts-body">
		<div class="contacts-info">
			<div class="contacts-address">
				<div class="contacts-address-icon">
					<img src="/template/images/template/icons/contacts-address-icon.svg" alt="contacts-address-icon" />
				</div>
				<div class="contacts-address-text">
					<h3>Адрес</h3>
					<p>236 5th SE Avenue, New York NY10000, United States</p>
				</div>
			</div>
			<div class="contacts-phone">
				<div class="contacts-phone-icon">
					<img src="/template/images/template/icons/contacts-phone-icon.svg" alt="contacts-phone-icon" />
				</div>
				<div class="contacts-phone-text">
					<h3>Телефон</h3>
					<p>Mobile: +(84) 546-6789</p>
					<p>Hotline: +(84) 456-6789</p>
				</div>
			</div>
			<div class="contacts-working-time">
				<div class="contacts-working-time-icon">
					<img src="/template/images/template/icons/contacts-clock-icon.svg" alt="contacts-clock-icon" />
				</div>
				<div class="contacts-working-time-text">
					<h3>Рабочее время</h3>
					<p>Monday-Friday: 9:00 - 22:00</p>
					<p>Saturday-Sunday: 9:00 - 21:00</p>
				</div>
			</div>
		</div>
		<form class="contacts-form">
			<div class="form-field">
				<label for="user-name">Your name</label>
				<input type="text" id="user-name" placeholder="Abcd" />
			</div>
			<div class="form-field">
				<label for="user-email">Email address</label>
				<input type="text" id="user-email" placeholder="Abcd@def.com" />
			</div>
			<div class="form-field">
				<label for="user-subject">Subject</label>
				<input type="text" id="user-subject" placeholder="This is an optional" />
			</div>
			<div class="form-field">
				<label for="user-message">Message</label>
				<textarea id="user-message" cols="30" rows="10">Hi, i`d like to ask about...</textarea>
			</div>

			<input type="submit" value="Submit" />
		</form>
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