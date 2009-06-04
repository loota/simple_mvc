<?php
$input = $argv[1];
require_once "../model/Index.php";
$viewVariables['output'] = Index::mangle($input);
require_once "../view/main.php";

require_once "../model/ErrorHandler.php";
$viewVariables['errors'] = ErrorHandler::getErrors();
