<?php

$cond_1 = 0 == 'Test';  // true  because converting string will return 0
// == is not checking the type only the value and it will convert to the first match...

$cond_2 = 0 === 'Test'; // false not matching the type
// === is first checking the type then the value. 

$cond_3 = true and false; / it won't work act as new line
// always use () to seperate the conditions.



