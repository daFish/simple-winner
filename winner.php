<?php
/**
 * Simple winner picker from competition
 *
 * @author    Marcus Stöhr <marcus.stoehr@filmmusik-info.de>
 * @copyright 2011 R&S Filmmusik Informations GbR (http://www.filmmusik-info.de)
 */

// add usernames
$participients = array(
    'neo',
    'Andreas',
    'Some other user',
    'Foobar',
    'Heinz'
);

// max. winners
$maxWinners = 3;

// winners
$winners = array();

for ($i=0; $i < $maxWinners; $i++)
{
    $current = rand(0, count($participients)-1);

    $winners[] = $participients[$current];
    unset($participients[$current]);

    sort($participients);
}

echo 'And the winners are:' . PHP_EOL;
foreach ($winners as $winner)
{
    echo "\t" . $winner . PHP_EOL;
}