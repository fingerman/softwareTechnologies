<?php
/*
Pesho <:> Red <:> 2000
Tosho <:> Blue <:> 1000
Gosho <:> Green <:> 1000
Sasho <:> Yellow <:> 4500
Prakasho <:> Stamat <:> 1000
time
*/



do {
    $input = trim(fgets(STDIN));
    $tokens[] = explode(PHP_EOL, $input);

}
while ($input != 'time');

print_r($tokens[0]);



