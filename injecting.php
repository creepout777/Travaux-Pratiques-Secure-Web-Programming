<?php
ini_set('max_execution_time', 0);
$cmd = "find / -type d -path '*/DVWA/vulnerabilities/xss_r' 2>/dev/null";
$output = shell_exec($cmd);
echo "<pre>" . ($output === null ? "Command returned null" : htmlentities($output)) . "</pre>";

