<section class="section-testimonials">
    <div class="container testimonials-title">
        <h2 class="text-uppercase">Отзывы</h2>
        <p>наших участников</p>
		<?php palisade(10) ?>
    </div>

    <div class="testimonials">
        <?php foreach ($testimonials as $key => $testimonial) : ?>
        <div class="testimonials-item"
             style="background-image: url('/images/testimonial-<?= $key + 1 ?>.jpg');">
            <div class="container">
                <div class="testimonials-item__body">
                    <p><?= $testimonial['body'] ?></p>
                    <div class="cite"><?= $testimonial['cite'] ?></div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="testimonials-controls container">
        <div class="row align-items-end">
            <div class="col-md-3">
                <svg class="btn-prev"><use xlink:href="#slider-rarr"></use></svg>
                <svg class="btn-next"><use xlink:href="#slider-rarr"></use></svg>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
</section>