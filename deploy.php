<?php
/*Quick script to execute Magento 2 deployment tasks. Must update vars with path to bin and static files. Create folder for the script and log file. Make sure to secure this on your server via ip restrictions */

$COMPLETE = "deployment complete".date("F j, Y, g:i a");
$BIN = "/path-to-bin"
$STATIC = "/path-to-static-theme-files"


    shell_exec("cd {$BIN} && rm -rf {$STATIC} && rm -rf ../var/cache/ && rm -rf ../var/generation/ && rm -rf ../var/page_cache/ && rm -rf ../var/view_preprocessed/ && php magento c:f && php magento set:st:d && php magento c:f && echo '{$COMPLETE}' >> ../shell/deploy.log");



    exit("done " . mktime());

?>
