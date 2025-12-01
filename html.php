<?php

$nome = 'cam" /> <script> alert("Teste");</script>';

?>

<input type="text" name="<?php echo addslashes($nome); ?>" >
<input type="text" name="<?php echo htmlentities($nome); ?>" >
