<?php

namespace carono\gitolite;

/**
 * Class Acl
 *
 * @package carono\gitolite
 * @property string permission
 * @property string refexes
 */
class Acl extends Object
{
//    private $allowedPermissions
//        = array(
//            'R',
//            'RW',
//            'RW+',
//            '-',
//            'RWC',
//            'RW+C',
//            'RWD',
//            'RW+D',
//            'RWCD',
//            'RW+CD',
//            'RWDC',
//            'RW+DC',
//        );
    protected $_permission = null;
    protected $_refexes = '';
    protected $users = array();

    /**
     * Set Permission
     *
     * Valids: R, RW, RW+, -, RWC, RW+C, RWD, RW+D, RWCD, RW+CD, RWDC, RW+DC
     *
     * @param string $permission A permission
     *
     * @return Acl
     */
    public function setPermission($permission)
    {
//        $permission = (string)$permission;
//        if (!in_array($permission, $this->allowedPermissions)) {
//            throw new \Exception("Unknow permission '{$permission}'");
//        }
        $this->_permission = $permission;
    }

    /**
     * Get Permission
     *
     * @return string
     */
    public function getPermission()
    {
        return $this->_permission;
    }

    /**
     * Set Refexes
     *
     * @param string $refexes A refex
     *
     * @return Acl
     */
    public function setRefexes($refexes)
    {
        $this->_refexes = $refexes;
    }

    /**
     * Get Refexes
     *
     * @return string
     */
    public function getRefexes()
    {
        return $this->_refexes;
    }


    /**
     * Set Users
     *
     * @param array $users An array of user objects
     *
     * @return Acl
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
     * @param User $user A user object
     *
     * @return Acl
     */
    public function addUser(User $user)
    {
        $this->users[$user->name] = $user;
        return $this;
    }

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
     * Add Team
     *
     * @param Team $team A team object
     *
     * @return Acl
     */
//    public function addTeam(Team $team)
//    {
//        if ($team->type != Team::USER) {
//            GitoliteException::throwWrongTeamType($team, Team::USER);
//        }
//        foreach ($team->items as $item) {
//            $this->addUser($item);
//        }
//        return $this;
//    }

    /**
     * Returns acl line
     *
     * Format: <permission> <zero or more refexes> = <one or more users/user teams>
     *
     * @param string $nl Include a new line (default true)
     *
     * @return string
     */
//    public function render($nl = true)
//    {
//        if (null === $this->permission) {
//            throw new \Exception("Permission not defined");
//        }
//
//        if (count($this->teams) == 0 && count($this->users) == 0) {
//            throw new \Exception("No users neither teams defined");
//        }
//
//        $teams = array();
//        foreach ($this->getTeams() as $team) {
//            $teams[] = $team->getFormatedName();
//        }
//
//        $users = array();
//        foreach ($this->getUsers() as $user) {
//            $users[] = $user->getUsername();
//        }
//
//        $refexes = (!empty($this->refexes)) ? $this->refexes . ' ' : '';
//
//        return $this->permission . ' ' . $refexes . '= ' . implode(' ', $users) . ' ' . implode(' ', $teams) . ($nl
//            ? PHP_EOL : '');
//    }

}