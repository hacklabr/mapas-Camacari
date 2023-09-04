<?php

return [
    'app.offline' => env('MAPAS_OFFLINE', false),
    'app.offlineUrl' => '/files/offline.jpg',
    'app.offlineBypassFunction' => function () {
        $pass = $_GET['bypass'] ?? $_SESSION['bypass'] ?? false;

        if ($pass == env('MAPAS_OFFLINE', false)) {
            $_SESSION['bypass'] = $pass;
            return true;
        }
    }
];
