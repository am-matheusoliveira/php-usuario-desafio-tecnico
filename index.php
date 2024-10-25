<?php

// COMPOSER - AUTOLOAD
require __DIR__.'/vendor/autoload.php';

use \App\Session\Login;

// OBRIGA O USUÁRIO A ESTAR LOGADO
Login::requireLogin();

// HEADER
include __DIR__.'/includes/header.php';

// CONTENT
include __DIR__.'/includes/content.php';

// FOOTER
include __DIR__.'/includes/footer.php';