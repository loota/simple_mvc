<?php
class Dmz {
  public function validateInput($input) {
    $validInput = preg_match("/^[A-Za-z0-9]+$/", $input, $matches);
    $output = $matches[0];
    if (!$validInput) {
      require_once "ErrorHandler.php";
      ErrorHandler::notifyError("Improper input: $input");
      return false;
    } else {
      return $output;
    }
  }
}
