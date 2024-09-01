# base converter in (cli) php

requires php installed (duh)

to run

- `php bc.php number base [-r]`

number has to consist of only `"0123456789ABCDEFabcdef."` (only one `.`) and >= 0
base has to be an integer between 2 and 16 (inclusive)
-r specifies if its reverse
if its reverse, base refers to the base of number and will return the decimal