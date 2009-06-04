<?php
class ErrorHandler {
  var $errors = array();
  public static function notifyError($error) {
    $self->errors[] = $error;
  }
  public static function getErrors() {
    return $self->errors;
  }
}
