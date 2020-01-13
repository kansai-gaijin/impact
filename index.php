<?php

namespace Impact\Theme\Index;

/*
|------------------------------------------------------------------
| Index Controller
|------------------------------------------------------------------
|
| Think about theme template files as some sort of controllers
| from MVC design pattern. They should link application
| logic with your theme view templates files.
|
*/

use function Impact\Theme\App\template;

/**
 * Renders index page.
 *
 * @see resources/templates/index.tpl.php
 */
template('index');
