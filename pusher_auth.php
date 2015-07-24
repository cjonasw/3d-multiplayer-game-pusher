<?php
include_once 'Pusher.php';

$pusher = new Pusher(
  'XXXXXXXXXXXX', // APP KEY
  'YYYYYYYYYYYY', // APP SECRET
  'ZZZZZZZZZZZZ' // APP ID
);

$id = time();

$presence_data = array(
  'id' => $id
);

echo $pusher->presence_auth(
  $_POST['channel_name'],
  $_POST['socket_id'],
  $id,
  $presence_data
);

exit();
?>
