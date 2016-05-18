<?php

namespace carono\gitolite;

class User extends Object
{
    
    /**
     * Set Username
     *
     * @param string $username The user name
     *
     * @return User
     */
    public function setName($username)
    {
        $this->name = (string)$username;
        return $this;
    }

    /**
     * Get Username
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}