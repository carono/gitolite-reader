<?php

namespace carono\gitolite;
/**
 * Class Team
 *
 * @package carono\gitolite
 * @property string type
 * @property string clearName
 */
class Team extends Object
{
    const USER = 'users';
    const REPO = 'repo';
    const REF = 'ref';
    const OPTION = 'option';
    /**
     * @var Object[]
     */
    public $items = [];
    protected $_type;

    public function getClearName()
    {
        return $this->_name;
    }

    public function getName()
    {
        return "@" . $this->_name;
    }

    public function setName($name)
    {
        $this->_name = trim($name, "@ ");
    }

    public function getType()
    {
        return $this->_type;
    }

    public function setType($value)
    {
        $this->_type = $value;
    }

    public function addObject($item)
    {
        if ($item instanceof User && $this->type != self::USER) {
            GitoliteException::throwWrongTeamType($item->name, self::USER);
        } elseif ($item instanceof Repo && $this->type != self::REPO) {
            GitoliteException::throwWrongTeamType($item->name, self::REPO);
        }
        $item->addTeam($this);
        $this->items[] = $item;
    }

    public function addObjects($items)
    {
        foreach ($items as $item) {
            $this->addObject($item);
        }
    }

    /**
     * Set Name
     *
     * @param string $name The team name
     *
     * @return Team
     */
//    public function setName($name)
//    {
//        $this->name = (string)$name;
//        return $this;
//    }

    /**
     * Get Name
     *
     * @return string
     */
//    public function getName()
//    {
//        return $this->name;
//    }

    /**
     * Get Formated Name (as @team)
     *
     * @return string
     */
//    public function getFormatedName()
//    {
//        return '@' . $this->name;
//    }

    /**
     * Set Users
     *
     * @param array $users An array of user objects
     *
     * @return Team
     */
//    public function setUsers(array $users)
//    {
//        $this->users = array();
//        foreach ($users as $user) {
//            $this->addUser($user);
//        }
//        return $this;
//    }

    /**
     * Get Users
     *
     * @return array of Users
     */
//    public function getUsers()
//    {
//        return $this->users;
//    }

    /**
     * Add user
     *
     * @param User $user An user object
     *
     * @return Team
     */
//    public function addUser(User $user)
//    {
//        $this->users[] = $user;
//        return $this;
//    }

    /**
     * Set Teams
     *
     * @param array $teams An array of team objects
     *
     * @return Acl
     */
//    public function setTeams(array $teams)
//    {
//        $this->teams = array();
//        foreach ($teams as $team) {
//            $this->addTeam($team);
//        }
//        return $this;
//    }

    /**
     * Get Teams
     *
     * @return array of Teams
     */
//    public function getTeams()
//    {
//        return $this->teams;
//    }

    /**
     * Add Team
     *
     * @param Team $team A team object
     *
     * @return Acl
     */
//    public function addTeam(Team $team)
//    {
//        $this->teams[] = $team;
//        return $this;
//    }

    /**
     * Returns team group line
     *
     * Format: @<team_name> = <user 1> <user 2> <user 3> <user 'n'>
     *
     * @param string $nl Include a new line (default true)
     *
     * @return string
     */
//    public function render($nl = true)
//    {
//        $users = array();
//        foreach ($this->getUsers() as $user) {
//            $users[] = $user->getUsername();
//        }
//
//        $teams = array();
//        foreach ($this->getTeams() as $team) {
//            $teams[] = $team->getFormatedName();
//        }
//
//        return $this->getFormatedName() . ' = ' . implode(' ', $users) . ' ' . implode(' ', $teams) . ($nl ? PHP_EOL
//            : '');
//    }

}