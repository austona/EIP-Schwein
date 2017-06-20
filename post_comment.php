<?php
require('Persistence.php');

$db = new Persistence();
$added = $db->add_comment($_POST);

if($added) {
  header( 'Location: modellbetrieb_1.php' );
}
else {
  header( 'Location: modellbetrieb_1.php?error=Your comment was not posted due to errors in your form submission' );
}
?>