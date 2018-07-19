<footer class="footer-section">
    <div class="container">
		<?php section_title('Задайте их нам и мы ответим в кратчайший срок!', 'Остались вопросы?') ?>

        <form action="" method="post" class="contact-form">
            <div class="row align-items-end">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user-name">Ваше имя</label>
                        <input type="text" name="user_name" id="user-name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="user-email">Ваш e-mail</label>
                        <input type="email" name="user_email" id="user-email" class="form-control" required>
                    </div>
                    <div class="form-group mb-0">
                        <label for="user-phone">Ваш телефон</label>
                        <input type="tel" name="user_phone" id="user-phone" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-0">
                        <label for="user-message">Введите сообщение</label>
                        <textarea name="user_message" id="user-message" rows="5" class="form-control"></textarea>
                    </div>
                </div>
            </div>

            <div class="text-right mt-4">
                <button class="btn btn-transparent btn-arrow-right">
                    Отправить
                    <svg width="25" height="20"><use xlink:href="#rarr"></use></svg>
                </button>
            </div>
        </form>

        <div class="copyright d-flex justify-content-center justify-content-md-between">
            <div>
                &copy; <?= date('Y') . ' ' . $app_title ?>
            </div>
            <div>
                Разработано в impression.<strong>Bureau</strong>
            </div>
        </div>
    </div>
</footer>

<script src="dist/app.js"></script>
</body>
</html>