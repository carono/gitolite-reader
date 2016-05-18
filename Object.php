<?php
/**
 * Created by PhpStorm.
 * User: Карно
 * Date: 14.05.2016
 * Time: 16:52
 */

namespace app\components;


class Object
{
    public $name;
    public $teams = [];

    public function setName($name)
    {
        $this->name = (string)$name;
        return $this;
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