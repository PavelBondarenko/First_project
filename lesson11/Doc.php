<?php
header('Content-type: application/pdf');

header('Content-Disposition: attachment; filename="downloaded.pdf"');

readfile('Doc1.pdf');
?>