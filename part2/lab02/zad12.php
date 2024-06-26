<?php
//Zad 2.12

setlocale(LC_TIME, 'pl_PL');
date_default_timezone_set("Europe/Warsaw");

print date('l d-m-Y')."\n";
print date("Y-F-d G:i")."\n";

$now = new DateTimeImmutable(date('d-m-Y'));
$target = new DateTimeImmutable('12-03-2023');
$interval = $target->diff($now);
echo "Minęło: " . $interval->format('%R%a') . " dni";

$start = new DateTime();
$end = new DateTime(date('Y-m-d') . ' 07:00:00');
$interval = $start->diff($end);
echo "\nLiczba godzin i minut do godziny 7:00 dzisiaj: " . $interval->h . " godzin i " . $interval->i . " minut\n";

$start = new DateTime(date('Y-m-d H:i:s'));
$end = new DateTime(date('Y-m-d') . ' 07:00:00');
$interval = $start->diff($end);
echo "Liczba godzin i minut do godziny 7:00 dzisiaj: " . $interval->h . " godzin i " . $interval->i . " minut\n";

$today = new DateTime();
$april_first_2023 = new DateTime('2023-04-01');
if ($today < $april_first_2023) {
    echo "Dzisiaj jest wcześniejsza od 1 kwietnia 2023 roku.\n";
} elseif ($today > $april_first_2023) {
    echo "1 kwietnia 2023 roku jest wcześniejsza od dzisiaj.\n";
} else {
    echo "Dzisiaj i 1 kwietnia 2023 roku są takie same daty.\n";
}

// <?php
// Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
// Mountain Standard Time (MST) Time Zone
// $today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
// $today = date("m.d.y");                         // 03.10.01
// $today = date("j, n, Y");                       // 10, 3, 2001
// $today = date("Ymd");                           // 20010310
// $today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
// $today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
// $today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
// $today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
// $today = date("H:i:s");                         // 17:16:18
// $today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)
// ?>