<?php

//$out = shell_exec('/var/www/html/dsql');

//echo "<pre>$out</pre>";




// echo '<pre>';

// // Outputs all the result of shellcommand "ls", and returns
// // the last output line into $last_line. Stores the return value
// // of the shell command in $retval.
// $last_line = system('/bin/bash /var/www/html/dsql', $retval);

// // Printing additional info
// echo '
// </pre>
// <hr />Last line of the output: ' . $last_line . '
// <hr />Return value: ' . $retval;

$url = $_GET['search'];
$out = shell_exec('
echo " Done by Faisal and Mohammed "    
echo " for demo purpose only " 
python /var/www/html/sql/dsql -u "' . $url . '"
sleep 10
python /var/www/html/sql/dsql  -u "' . $url . '" --dbs 

');

echo "<pre>$out</pre>";

?>
