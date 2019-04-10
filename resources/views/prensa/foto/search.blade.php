<?php

//at the very beginning start output buffereing
ob_start();

// do your logic here

// right before outputting the JSON, clear the buffer.
ob_end_clean();

use App\presses;
echo "hola";
$flight = App\presses::find(33)->update(["status" => 1]);

?>