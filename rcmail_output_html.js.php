<?php
// XXX: This file really should not be in the project root, but iniset.php only
// seems to work from there.
require_once 'program/include/iniset.php';
?>
<?= 'var '.rcmail_output::JS_OBJECT_NAME.' = new rcube_webmail();' ?>
