<?php
  function smarty_function_load_presentation_object($params, $smarty) {
    $className = ucfirst($params['filename']);
    $fileName = $params['filename'] . ".php";

    require CONTROLLERS_DIR . "/" . $fileName;

    $obj = new $className();

    $smarty->assign($params['assign'], $obj);
  }
