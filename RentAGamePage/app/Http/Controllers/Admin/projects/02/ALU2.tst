load ALU2.hdl,
output-file ALU2.out,
compare-to ALU2.cmp,
output-list a%B1.16.1 b%B1.16.1 p%B1.16.1 q%B1.16. sX%B1.2.1 
            sY%B1.2.1 sA%1.1.1 zx%B1.1.1 nx%B1.1.1 zy%B1.1.1 
            ny%B1.1.1 f%B1.1.1 no%B1.1.1 out%B1.16.1 zr%B1.1.1
            ng%B1.1.1;

set a %B0000000000000000,  
set b %B1111111111111111,  
set p %B0000000000000000,
set q %B1111111111111111;

// Compute 0

set sY %B00,  
set sX %B01,
set sA 1,
set zx 1,
set nx 0,
set zy 1,
set ny 0,
set f  1,
set no 0,
eval,
output;

// Compute 1
set selY %B00,  
set selX %B11,
set sA 0,
set zx 1,
set nx 1,
set zy 1,
set ny 1,
set f  1,
set no 1,
eval,
output;

// Compute -1
set sY %B00,  
set sX %B01,
set sA 1,
set zx 1,
set nx 1,
set zy 1,
set ny 0,
set f  1,
set no 0,
eval,
output;

// Compute x
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 0,
set zy 1,
set ny 1,
set f  0,
set no 0,
eval,
output;

// Compute y
set sY %B00,  
set sX %B01,
set sA 1,
set zx 1,
set nx 1,
set zy 0,
set ny 0,
set f  0,
set no 0,
eval,
output;

// Compute !x
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 0,
set zy 1,
set ny 1,
set f  0,
set no 1,
eval,
output;

// Compute !y
set sY %B00,  
set sX %B01,
set sA 1,
set zx 1,
set nx 1,
set zy 0,
set ny 0,
set f  0,
set no 1,
eval,
output;

// Compute -x
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 0,
set zy 1,
set ny 1,
set f  1,
set no 1,
eval,
output;

// Compute -y
set sY %B00,  
set sX %B01,
set sA 1,
set zx 1,
set nx 1,
set zy 0,
set ny 0,
set f  1,
set no 1,
eval,
output;

// Compute x + 1
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 1,
set zy 1,
set ny 1,
set f  1,
set no 1,
eval,
output;

// Compute y + 1
set sY %B00,  
set sX %B01,
set sA 1,
set zx 1,
set nx 1,
set zy 0,
set ny 1,
set f  1,
set no 1,
eval,
output;

// Compute x - 1
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 0,
set zy 1,
set ny 1,
set f  1,
set no 0,
eval,
output;

// Compute y - 1
set sY %B00,  
set sX %B01,
set sA 1,
set zx 1,
set nx 1,
set zy 0,
set ny 0,
set f  1,
set no 0,
eval,
output;

// Compute x + y
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 0,
set zy 0,
set ny 0,
set f  1,
set no 0,
eval,
output;

// Compute x - y
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 1,
set zy 0,
set ny 0,
set f  1,
set no 1,
eval,
output;

// Compute y - x
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 0,
set zy 0,
set ny 1,
set f  1,
set no 1,
eval,
output;

// Compute x & y
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 0,
set zy 0,
set ny 0,
set f  0,
set no 0,
eval,
output;

// Compute x | y
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 1,
set zy 0,
set ny 1,
set f  0,
set no 1,
eval,
output;

set x %B000000000010001,  // x = 17
set y %B000000000000011;  // y =  3

// Compute 0
set sY %B00,  
set sX %B01,
set sA 1,
set zx 1,
set nx 0,
set zy 1,
set ny 0,
set f  1,
set no 0,
eval,
output;

// Compute 1
set sY %B00,  
set sX %B01,
set sA 1,
set zx 1,
set nx 1,
set zy 1,
set ny 1,
set f  1,
set no 1,
eval,
output;

// Compute -1
set sY %B00,  
set sX %B01,
set sA 1,
set zx 1,
set nx 1,
set zy 1,
set ny 0,
set f  1,
set no 0,
eval,
output;

// Compute x
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 0,
set zy 1,
set ny 1,
set f  0,
set no 0,
eval,
output;

// Compute y
set sY %B00,  
set sX %B01,
set sA 1,
set zx 1,
set nx 1,
set zy 0,
set ny 0,
set f  0,
set no 0,
eval,
output;

// Compute !x
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 0,
set zy 1,
set ny 1,
set f  0,
set no 1,
eval,
output;

// Compute !y
set sY %B00,  
set sX %B01,
set sA 1,
set zx 1,
set nx 1,
set zy 0,
set ny 0,
set f  0,
set no 1,
eval,
output;

// Compute -x
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 0,
set zy 1,
set ny 1,
set f  1,
set no 1,
eval,
output;

// Compute -y
set sY %B00,  
set sX %B01,
set sA 1,
set zx 1,
set nx 1,
set zy 0,
set ny 0,
set f  1,
set no 1,
eval,
output;

// Compute x + 1
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 1,
set zy 1,
set ny 1,
set f  1,
set no 1,
eval,
output;

// Compute y + 1
set sY %B00,  
set sX %B01,
set sA 1,
set zx 1,
set nx 1,
set zy 0,
set ny 1,
set f  1,
set no 1,
eval,
output;

// Compute x - 1
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 0,
set zy 1,
set ny 1,
set f  1,
set no 0,
eval,
output;

// Compute y - 1
set sY %B00,  
set sX %B01,
set sA 1,
set zx 1,
set nx 1,
set zy 0,
set ny 0,
set f  1,
set no 0,
eval,
output;

// Compute x + y
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 0,
set zy 0,
set ny 0,
set f  1,
set no 0,
eval,
output;

// Compute x - y
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 1,
set zy 0,
set ny 0,
set f  1,
set no 1,
eval,
output;

// Compute y - x
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 0,
set zy 0,
set ny 1,
set f  1,
set no 1,
eval,
output;

// Compute x & y
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 0,
set zy 0,
set ny 0,
set f  0,
set no 0,
eval,
output;

// Compute x | y
set sY %B00,  
set sX %B01,
set sA 1,
set zx 0,
set nx 1,
set zy 0,
set ny 1,
set f  0,
set no 1,
eval,
output;


