# PHP Pass-by-Reference Bug

This repository demonstrates a common and subtle bug in PHP related to pass-by-reference and object reassignment. The bug showcases how reassigning an object within a function that accepts a reference to an object breaks the reference, leading to unexpected behavior. The solution shows how to properly modify the original object without breaking the reference.

## Bug Description
When passing objects by reference in PHP, reassigning the object within the function will break the reference to the original object. Any modifications made to the reassigned object will not affect the original object.

## How to Reproduce
1. Clone this repository.
2. Run the `bug.php` script.  Observe the unexpected output.
3. Compare the output with the expected output described in the comments of `bug.php`.

## Solution
The solution is provided in `bugSolution.php`.  It demonstrates the correct way to modify an object passed by reference without breaking the reference.