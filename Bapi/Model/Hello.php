<?php
namespace Diego\Bapi\Model;
 
use Diego\Bapi\Api\HelloInterface;
 
class Hello implements HelloInterface
{
 
    public function name($name) {
        return "Hello, " . $name;
    }
}