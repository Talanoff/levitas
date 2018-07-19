<?php

require_once('helpers.php');
require_once('views/base/header.php');

?>

<section class="section">
	<div class="container d-flex justify-content-center">
		<div>
			<?php section_title('Ваше сообщение отправлено','Спасибо!') ?>
			<p class="lead text-center">С Вами свяжется наш менеджер.</p>
			<p class="mt-5 text-center">
				<a href="/" class="btn btn-primary">
					Вернуться на главную
				</a>
			</p>
		</div>
	</div>
</section>

<?php

require_once('views/base/footer.php');