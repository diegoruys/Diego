<?php
 
namespace Diego\Bapi\Api;
 
interface HelloInterface
{
    /**
     * Returns greeting message to user
     *
     * @api
     * @param string $name Users name.
     * @return string Greeting message with users name.
     */
    
    public function name($name);
}

?>