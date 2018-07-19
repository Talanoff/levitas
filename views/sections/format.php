<section class="section section-format">
	<div class="container">
		<h2 class="mb-5">ФОРМАТЫ УЧАСТИЯ</h2>
		<?php palisade(6); ?>

        <table class="table table-borderless">
            <thead>
            <tr>
                <th></th>
                <th class="format-decorated text-center">
                    Стандарт
                </th>
                <th class="format-decorated text-center">
                    Бизнес
                </th>
                <th class="format-decorated text-center">
                    VIP
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($format as $item) {
                echo '<tr>';
                foreach ($item as $key => $value) {
                    echo '<td' . ($key > 0 ? ' class="format-decorated text-center"' : '' ) . '>';

                    if ($value === '+') {
                        echo '<span class="format-icon format-icon__positive">+</span>';
                    } elseif ($value === '-') {
                        echo '<span class="format-icon format-icon__negative">&ndash;</span>';
                    } else {
                        echo $value;
                    }

                    echo '</td>';
                }
                echo '</tr>';
            }
            ?>
            <tr>
                <td></td>
                <td class="format-decorated text-center">
                    <a href="#enroll" class="btn btn-dark text-uppercase" data-format="Стандарт">
                        Выбрать
                        <svg><use xlink:href="#rarr"></use></svg>
                    </a>
                </td>
                <td class="format-decorated text-center">
                    <a href="#enroll" class="btn btn-dark text-uppercase" data-format="Бизнес">
                        Выбрать
                        <svg><use xlink:href="#rarr"></use></svg>
                    </a>
                </td>
                <td class="format-decorated text-center">
                    <a href="#enroll" class="btn btn-dark text-uppercase" data-format="VIP">
                        Выбрать
                        <svg><use xlink:href="#rarr"></use></svg>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>

        <div class="mt-5 text-center">
            <strong>* Спешите!</strong> Количество мест ограничено!
        </div>
	</div>
</section>