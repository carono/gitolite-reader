<?php

namespace carono\gitolite;


class Object
{
    public $name;
    public $teams = [];

    public function setName($name)
    {
        $this->name = (string)$name;
        return $this;
    }

    public static function className()
    {
        return get_called_class();
    }
    
    /**
     * Get Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function addTeam(Team $team)
    {
        $this->teams[$team->name] = $team;
    }

    public function __get($name)
    {
        $getter = 'get' . $name;
        if (method_exists($this, $getter)) {
            return $this->$getter();
        } elseif (method_exists($this, 'set' . $name)) {
            throw new \Exception('Getting write-only property: ' . get_class($this) . '::' . $name);
        } else {
            throw new \Exception('Getting unknown property: ' . get_class($this) . '::' . $name);
        }
    }
}