<?php

// This code converts a selection of currencies to USD to calculate how much money some world travellers have left after their trip. 

// Declare variables to hold the amounts in each currency to be exchanged.
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

// Print the amounts to the screen.
echo "Currency to be exchanged:";
echo"\n$riel riel";
echo "\n$kyat kyat";
echo "\n$krones krones";
echo "\n$lek lek";

// Declare variables to hold the exchange rates for each currency.
$riel_rate = 0.00024;
$kyat_rate = 0.00048;
$krones_rate = 0.098;
$lek_rate = 0.0092;

// Convert each amount to USD.
$riel_to_usd = $riel*$riel_rate;
$kyat_to_usd = $kyat*$kyat_rate;
$krones_to_usd = $krones*$krones_rate;
$lek_to_usd = $lek*$lek_rate;

//Print the results to the screen.
echo"\n$riel riel = $$riel_to_usd";
echo "\n$kyat kyat = $$kyat_to_usd";
echo "\n$krones krones = $$krones_to_usd";
echo "\n$lek lek = $$lek_to_usd";

// Calculate the total USD after a $1 per conversion exchange fee has been applied and print the final amount.
$total_usd = $riel_to_usd + $kyat_to_usd + $krones_to_usd + $lek_to_usd - 4;

echo "\nTotal USD (after exchange fee) = $total_usd";

