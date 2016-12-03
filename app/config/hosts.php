<?php
/*  !#$%&\'*+.^_`\|~0-9A-Z-  */

$RouterHost
    ->router('micro')->host('*')          ->list([MICRO_DIR.'/app/routes.php']/*, 'notSafe'*/)
    ->router('blog') ->host('laravel.loc')->list([MICRO_DIR.'/app/routes.php'], 'notSafe')
    ->router('shop') ->host('yii.loc')    ->list([MICRO_DIR.'/app/routes.php'], 'notSafe');