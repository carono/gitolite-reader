<?php

namespace carono\gitolite;

class Repo extends Object
{
    protected $acls = array();

    /**
     * Set Name
     *
     * @param string $name The repository name
     *
     * @return Team
     */

    /**
     * Set Acls
     *
     * @param array $acls An array of acl objects
     *
     * @return Team
     */
    public function setAcls(array $acls)
    {
        $this->$acls = $acls;
        return $this;
    }

    /**
     * Get Acls
     *
     * @return array of Acls
     */
    public function getAcls()
    {
        return $this->acls;
    }

    /**
     * Add acl
     *
     * @param Acl $acl An acl object
     *
     * @return Team
     */
    public function addAcl(Acl $acl)
    {
        $this->acls[] = $acl;
        return $this;
    }

    /**
     * Returns team group line
     *
     * Format: @<team_name> = <user 1> <user 2> <user 3> <user 'n'>
     *
     * @return string
     */
    public function render()
    {
        if (count($this->acls) == 0) {
            throw new \Exception("No acls for repo {$this->getName()}");
        }

        $return = 'repo ' . $this->getName() . PHP_EOL;

        foreach ($this->getAcls() as $acl) {
            $return .= '    ' . $acl->render();
        }

        return $return . PHP_EOL;
    }


}