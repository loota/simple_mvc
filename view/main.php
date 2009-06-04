<?php
printf("view.");
printf("output: %s\n", $viewVariables['output']);
printf("errors:\n");
if (is_array($viewVariables['errors'])) {
  foreach($viewVariables['errors'] as $error) {
    printf("error: %s\n", $error);
  }
}
