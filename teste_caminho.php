<?php
echo "Pasta atual: " . __DIR__;
echo "<br>Arquivo: " . __FILE__;
echo "<br><br>Connection.php exixte? " .(file_exists(__DIR__ . '/config/connection.php') ? 'SIM' : 'NÃO');
?>
