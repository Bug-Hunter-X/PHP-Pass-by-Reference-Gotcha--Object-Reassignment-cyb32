In PHP, a common yet subtle error arises when dealing with object references and pass-by-reference.  Consider this scenario:

```php
class MyClass {
    public $value = 10;
}

function modifyObject(MyClass &$obj) {
    $obj = new MyClass(); //This line is the culprit
    $obj->value = 20;
}

$myObj = new MyClass();
echo "Before: " . $myObj->value; //Output: Before: 10
modifyObject($myObj);
echo "After: " . $myObj->value; //Output: Before: 10, not 20 as expected!
```

The intention is to modify the original object's value. However, inside `modifyObject`, reassigning `$obj` creates a new object, breaking the reference to the original `$myObj`.  The original object remains unaffected. 