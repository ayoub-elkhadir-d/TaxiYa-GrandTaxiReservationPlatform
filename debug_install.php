<?php
try {
    passthru('php artisan breeze:install blade --no-interaction', $returnVar);
    if ($returnVar !== 0) {
        echo "\nCommand failed with exit code $returnVar\n";
    }
} catch (Exception $e) {
    echo "Caught exception: ",  $e->getMessage(), "\n";
    echo $e->getTraceAsString(), "\n";
}
