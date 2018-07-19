<section class="section section-enroll" id="enroll">
	<div class="container">
		<?php section_title('Запишитесь на семинар сегодня!', 'Зачем тянуть') ?>

		<form action="<?= $_SERVER['HTTP_REFERER'] ?>/send.php">
			<input type="hidden" name="format">

			<div class="row">
				<div class="col-md mb-3 mb-md-0">
					<div class="form-group mb-0">
						<label for="enroll-name">Ваше имя</label>
						<input type="text" name="user_name" id="enroll-name" class="form-control">
					</div>
				</div>
				<div class="col-md mb-3 mb-md-0">
					<div class="form-group mb-0">
						<label for="enroll-email">Ваш e-mail</label>
						<input type="email" name="user_email" id="enroll-email" class="form-control">
					</div>
				</div>
				<div class="col-md">
					<div class="form-group mb-0">
						<label for="enroll-phone">Ваш телефон</label>
						<input type="tel" name="user_phone" id="enroll-phone" class="form-control">
					</div>
				</div>
			</div>

            <div class="mt-5 text-center">
                <button class="btn btn-dark btn-arrow-right">
                    Записаться
                    <svg width="25" height="20"><use xlink:href="#rarr"></use></svg>
                </button>
            </div>
		</form>
	</div>
</section>