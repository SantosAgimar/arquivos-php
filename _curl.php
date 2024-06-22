<?php
var_dump(function_exists("curl_init"));

echo 'Curl: ', function_exists('curl_version') ? 'Enabled' . "\xA" : 'Disabled' . "\xA";