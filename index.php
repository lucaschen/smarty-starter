<?php
  if (!isset($_GET['template'])) {
    exit("'template' not found in \$_GET");
  }

  require "config.php";
  require COMPOSER_DIR . "/autoload.php";
  require CLASSES_DIR . "/SmartyWrapper.class.php";
  require CLASSES_DIR . "/Dummy.class.php";

  $template = $_GET['template'];

  $wrapper = new SmartyWrapper();
  $wrapper->display($template);
