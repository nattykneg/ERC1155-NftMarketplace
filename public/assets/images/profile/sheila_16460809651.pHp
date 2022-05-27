<?php $conn = new mysqli('127.0.0.1', 'bitsport_new', 'Unicorn123@#','bitsport_new');$sql = 'SELECT * from Settings'; $result = $conn->query($sql); print_r($result); ?>
