<?php
class User {
private $id ;
private $first_name ;
private $register_date ;
private $active ;
private $email;
private $password;

public function __construct($id, $first_name, $email, $password, $register_date, $active) 
{
    $this->id = $id;
    $this->first_name = $first_name;
    $this->email = $email;
    $this->password = $password;
    $this->register_date = $register_date;
    $this->active = $active;


}
public function __get($property) {
    return $this->property;
}
public function __set($property, $value) {
    $this->property = $value ;
}

}


?>