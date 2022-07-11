<?php

echo '<h2>vous etes sur la page home</h2>';
echo '<h2>guigui aka thanos</h2>';
?>
<a href="<?= $router->generate('test') ?>">Test</a>
<a href="<?= $router->generate('page') ?>">Page</a>