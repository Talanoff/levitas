<section class="section">
    <div class="container">
		<?php
		section_title('Для кого этот семинар');

		$items = [
			'Для владельцев малых и средних бизнесов',
			'Для менеджеров по рекламе и маркетингу',
			'Для руководителей отделов продаж',
			'Для всех, кто хочет добиться успеха в бизнесе'
		];

		echo '<div class="row pt-5">';

		foreach ($items as $key => $item) {
			echo '<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center for-who">'
			     . '<p class="mb-5"><img src="images/icon-who--' . ($key + 1) . '.png"></p>'
			     . $item
			     . '</div>';
		}

		echo '</div>';
		?>
    </div>
</section>