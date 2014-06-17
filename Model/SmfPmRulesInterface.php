<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfPmRules
 */
interface SmfPmRulesInterface
{
    /**
     * @var integer
     */
    private $idRule;

    /**
     * @var integer
     */
    private $idMember;

    /**
     * @var string
     */
    private $ruleName;

    /**
     * @var string
     */
    private $criteria;

    /**
     * @var string
     */
    private $actions;

    /**
     * @var boolean
     */
    private $deletePm;

    /**
     * @var boolean
     */
    private $isOr;


    /**
     * Get idRule
     *
     * @return integer 
     */
    public function getIdRule()
    {
        return $this->idRule;
    }

    /**
     * Set idMember
     *
     * @param integer $idMember
     * @return SmfPmRules
     */
    public function setIdMember($idMember)
    {
        $this->idMember = $idMember;

        return $this;
    }

    /**
     * Get idMember
     *
     * @return integer 
     */
    public function getIdMember()
    {
        return $this->idMember;
    }

    /**
     * Set ruleName
     *
     * @param string $ruleName
     * @return SmfPmRules
     */
    public function setRuleName($ruleName)
    {
        $this->ruleName = $ruleName;

        return $this;
    }

    /**
     * Get ruleName
     *
     * @return string 
     */
    public function getRuleName()
    {
        return $this->ruleName;
    }

    /**
     * Set criteria
     *
     * @param string $criteria
     * @return SmfPmRules
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;

        return $this;
    }

    /**
     * Get criteria
     *
     * @return string 
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Set actions
     *
     * @param string $actions
     * @return SmfPmRules
     */
    public function setActions($actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * Get actions
     *
     * @return string 
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Set deletePm
     *
     * @param boolean $deletePm
     * @return SmfPmRules
     */
    public function setDeletePm($deletePm)
    {
        $this->deletePm = $deletePm;

        return $this;
    }

    /**
     * Get deletePm
     *
     * @return boolean 
     */
    public function getDeletePm()
    {
        return $this->deletePm;
    }

    /**
     * Set isOr
     *
     * @param boolean $isOr
     * @return SmfPmRules
     */
    public function setIsOr($isOr)
    {
        $this->isOr = $isOr;

        return $this;
    }

    /**
     * Get isOr
     *
     * @return boolean 
     */
    public function getIsOr()
    {
        return $this->isOr;
    }
}
