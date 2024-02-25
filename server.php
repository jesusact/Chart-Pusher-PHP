<?php
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
    "5c3bcef6949e13de7f9e",
    "3bb6e2c3c2f0c9a2f6c9",
    "1760107",
    array(
        'cluster' => 'eu'
    )
);

//while (true){}
for ($i = 0; $i <= 15; $i++) {
    $newValues = [
        rand(3000, 4000),
        rand(2500, 3500),
        rand(2000, 2400),
        rand(1900, 2200),
        rand(1800, 2100),
        rand(1700, 2000)
    ];

    $pusher->trigger('market-cap', 'new-price', array(
        'values' => $newValues,
    ));

    sleep(3);
}
?>
