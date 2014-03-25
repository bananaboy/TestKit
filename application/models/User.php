<?php

class User extends Model
{
    public function addUser($email)
    {
        $email = $this->escapeString($email);
        $result = $this->query('SELECT * FROM something WHERE id="'. $id .'"');
        return $result;
    }
}

?>
