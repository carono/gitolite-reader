<?php

namespace app\components;

/**
 * Gitolite User Class
 *
 * Project:   gitolite-php
 * File:      src/Gitolite/User.php
 *
 * Copyright (C) 2012 Rafael Goulart
 *
 * This program is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by  the Free
 * Software Foundation; either version 2 of the License, or (at your option)
 * any later version.
 *
 * @author  Rafael Goulart <rafaelgou@gmail.com>
 * @license GNU Lesser General Public License
 * @link    https://github.com/rafaelgou/gitolite-php
 * see CHANGELOG
 */
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