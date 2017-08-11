<?php
  class SmartyWrapper extends Smarty {
    public function __construct() {
      Smarty::__construct();

      $this->setTemplateDir(TEMPLATE_DIR);

      $this->setCompileDir(COMPILE_DIR);
			$this->addPluginsDir(PLUGINS_DIR);
    }
  }
