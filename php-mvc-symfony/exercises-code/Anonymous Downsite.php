<?php

/*
 * *You will receive 2 input lines – each containing an integer.
•	The first is N – the number of websites which are down.
•	The second is the security key.
On the next N lines you will receive data about websites in the following format:
{siteName} {siteVisits} {siteCommercialPricePerVisit}
You must calculate the site loss by the following formula: siteVisits * siteCommercialPricePerVisit
Input
3
8
www.google.com 122300 94.23233
www.abv.bg 2333 11
www.kefche.com 12322 23.3222

Output:
www.google.com
www.abv.bg
www.kefche.com
Total Loss: 11837653.10740000000000000000
Security Token: 512


 */

$n = fgets(STDIN);
$key = fgets(STDIN);


for ($i = 0; $i<$n; $i++){
    $data[] = array_filter(explode(' ', fgets(STDIN)));
    print($data[$i][0].PHP_EOL);
    $siteVisits[] = $data[$i][1] * $data[$i][2];
}

$totalLoss = array_sum($siteVisits);


$totalLoss = floatval($totalLoss);
$totalLossP = round($totalLoss, 4);



print("Total Loss: " . number_format(doubleval($totalLossP), 20, ".", "")).PHP_EOL;

print("Security Token: " . pow($key, $n));




