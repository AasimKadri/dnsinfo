<?php
$command = 'dig google.com'; // Replace this with the Linux command you want to run

// Execute the command and capture the output
$output = [];
$returnValue = null;
exec($command, $output, $returnValue);

// Output the result
echo "Command: $command<br>";
echo "Return value: $returnValue<br>";
echo "Output:<br>";
foreach ($output as $line) {
    echo "$line<br>";
}
?>