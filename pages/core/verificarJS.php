<?php
// Verifica si JavaScript está habilitado
echo '<script type="text/javascript">document.cookie="jsenabled=true";</script>';
echo '<noscript>';
echo '<meta http-equiv="refresh" content="0;url=./core/jsna.php">';
echo '</noscript>';
?>