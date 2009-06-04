<?php
class Index {
  public function mangle($input) {
    require_once "Dmz.php";
    $output = Dmz::validateInput($input);
    return $output;
  }
}
