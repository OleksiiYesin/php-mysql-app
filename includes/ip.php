<?php
    $myip = shell_exec('echo `curl -sL http://169.254.169.254/latest/meta-data/public-ipv4`');
    echo "<span style='color:black;font-weight:500;font-size:18px;'>$myip</span>";
?>
