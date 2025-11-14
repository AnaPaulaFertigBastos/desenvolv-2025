<?php 
  require_once 'htmlelement.php';

  class htmlForm extends htmlElement {
    public function _construc($action = '', $method = 'POST') {
      $this->action = $action;
      $this->method = $method;
    }
  }
?>
