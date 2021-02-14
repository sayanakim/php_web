
<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
    <p class="h5 my-0 me-md-auto fw-normal">Logo company</p>
    <nav class="my-2 my-md-0 me-md-3">
        <a class="p-2 text-dark" href="#">Главная</a>
        <a class="p-2 text-dark" href="#">Контакты</a>
    </nav>

    <?php
        if($_COOKIE['user'] == 'Да'):
    ?>
    <a class="btn btn-outline-primary" href="/auth.php">Кабинет пользователя</a>
    <?php else: ?>
    <a class="btn btn-outline-primary" href="/auth.php">Войти</a>
    <?php endif; ?>
</header>