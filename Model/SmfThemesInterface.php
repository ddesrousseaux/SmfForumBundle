<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfThemes
 */
interface SmfThemesInterface
{
    /**
     * @var boolean
     */
    private $idTheme;

    /**
     * @var integer
     */
    private $idMember;

    /**
     * @var string
     */
    private $variable;

    /**
     * @var string
     */
    private $value;


    /**
     * Set idTheme
     *
     * @param boolean $idTheme
     * @return SmfThemes
     */
    public function setIdTheme($idTheme)
    {
        $this->idTheme = $idTheme;

        return $this;
    }

    /**
     * Get idTheme
     *
     * @return boolean 
     */
    public function getIdTheme()
    {
        return $this->idTheme;
    }

    /**
     * Set idMember
     *
     * @param integer $idMember
     * @return SmfThemes
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
     * Set variable
     *
     * @param string $variable
     * @return SmfThemes
     */
    public function setVariable($variable)
    {
        $this->variable = $variable;

        return $this;
    }

    /**
     * Get variable
     *
     * @return string 
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return SmfThemes
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
}
