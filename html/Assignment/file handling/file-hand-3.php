<?php
 
 $filename = 'http://www.gutenberg.org/cache/epub/1228/pg1228.txt';
 
urlencode ('$filename');


 echo $_SERVER['REQUEST_URI']; 

 file_get_contents ( string $filename [, bool $use_include_path = FALSE 
 [, resource $context [, int $offset = 0 [, int $maxlen ]]]] ) : string|false

?>