<?php

echo '<h2>vous etes sur la page home</h2>';

?>
<a href="<?= $router->generate('test') ?>">Test</a>
<a href="<?= $router->generate('page') ?>">Page</a>