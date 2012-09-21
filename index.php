<?php

require 'config.php';
require 'core/bootstrap.php';
require 'core/url.php';
require 'core/ModuleManager.php';

require 'base/Controller.php';
require 'base/Model.php';

require 'base/View.php';
require 'libs/DB.class.php';
require 'libs/validation.class.php';
require 'libs/Smarty/Smarty.class.php';

$app = new bootstrap();