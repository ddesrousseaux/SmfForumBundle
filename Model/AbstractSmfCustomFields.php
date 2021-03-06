<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfCustomFields
 */
abstract class AbstractSmfCustomFields
{
    /**
     * @var integer
     */
    protected $idField;

    /**
     * @var string
     */
    protected $colName;

    /**
     * @var string
     */
    protected $fieldName;

    /**
     * @var string
     */
    protected $fieldDesc;

    /**
     * @var string
     */
    protected $fieldType;

    /**
     * @var integer
     */
    protected $fieldLength;

    /**
     * @var string
     */
    protected $fieldOptions;

    /**
     * @var string
     */
    protected $mask;

    /**
     * @var boolean
     */
    protected $showReg;

    /**
     * @var boolean
     */
    protected $showDisplay;

    /**
     * @var string
     */
    protected $showProfile;

    /**
     * @var boolean
     */
    protected $protected;

    /**
     * @var boolean
     */
    protected $active;

    /**
     * @var boolean
     */
    protected $bbc;

    /**
     * @var boolean
     */
    protected $canSearch;

    /**
     * @var string
     */
    protected $defaultValue;

    /**
     * @var string
     */
    protected $enclose;

    /**
     * @var boolean
     */
    protected $placement;


    /**
     * Get idField
     *
     * @return integer 
     */
    public function getIdField()
    {
        return $this->idField;
    }

    /**
     * Set colName
     *
     * @param string $colName
     * @return SmfCustomFields
     */
    public function setColName($colName)
    {
        $this->colName = $colName;

        return $this;
    }

    /**
     * Get colName
     *
     * @return string 
     */
    public function getColName()
    {
        return $this->colName;
    }

    /**
     * Set fieldName
     *
     * @param string $fieldName
     * @return SmfCustomFields
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * Get fieldName
     *
     * @return string 
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Set fieldDesc
     *
     * @param string $fieldDesc
     * @return SmfCustomFields
     */
    public function setFieldDesc($fieldDesc)
    {
        $this->fieldDesc = $fieldDesc;

        return $this;
    }

    /**
     * Get fieldDesc
     *
     * @return string 
     */
    public function getFieldDesc()
    {
        return $this->fieldDesc;
    }

    /**
     * Set fieldType
     *
     * @param string $fieldType
     * @return SmfCustomFields
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;

        return $this;
    }

    /**
     * Get fieldType
     *
     * @return string 
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * Set fieldLength
     *
     * @param integer $fieldLength
     * @return SmfCustomFields
     */
    public function setFieldLength($fieldLength)
    {
        $this->fieldLength = $fieldLength;

        return $this;
    }

    /**
     * Get fieldLength
     *
     * @return integer 
     */
    public function getFieldLength()
    {
        return $this->fieldLength;
    }

    /**
     * Set fieldOptions
     *
     * @param string $fieldOptions
     * @return SmfCustomFields
     */
    public function setFieldOptions($fieldOptions)
    {
        $this->fieldOptions = $fieldOptions;

        return $this;
    }

    /**
     * Get fieldOptions
     *
     * @return string 
     */
    public function getFieldOptions()
    {
        return $this->fieldOptions;
    }

    /**
     * Set mask
     *
     * @param string $mask
     * @return SmfCustomFields
     */
    public function setMask($mask)
    {
        $this->mask = $mask;

        return $this;
    }

    /**
     * Get mask
     *
     * @return string 
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * Set showReg
     *
     * @param boolean $showReg
     * @return SmfCustomFields
     */
    public function setShowReg($showReg)
    {
        $this->showReg = $showReg;

        return $this;
    }

    /**
     * Get showReg
     *
     * @return boolean 
     */
    public function getShowReg()
    {
        return $this->showReg;
    }

    /**
     * Set showDisplay
     *
     * @param boolean $showDisplay
     * @return SmfCustomFields
     */
    public function setShowDisplay($showDisplay)
    {
        $this->showDisplay = $showDisplay;

        return $this;
    }

    /**
     * Get showDisplay
     *
     * @return boolean 
     */
    public function getShowDisplay()
    {
        return $this->showDisplay;
    }

    /**
     * Set showProfile
     *
     * @param string $showProfile
     * @return SmfCustomFields
     */
    public function setShowProfile($showProfile)
    {
        $this->showProfile = $showProfile;

        return $this;
    }

    /**
     * Get showProfile
     *
     * @return string 
     */
    public function getShowProfile()
    {
        return $this->showProfile;
    }

    /**
     * Set protected
     *
     * @param boolean $protected
     * @return SmfCustomFields
     */
    public function setprotected($protected)
    {
        $this->protected = $protected;

        return $this;
    }

    /**
     * Get protected
     *
     * @return boolean 
     */
    public function getprotected()
    {
        return $this->protected;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return SmfCustomFields
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set bbc
     *
     * @param boolean $bbc
     * @return SmfCustomFields
     */
    public function setBbc($bbc)
    {
        $this->bbc = $bbc;

        return $this;
    }

    /**
     * Get bbc
     *
     * @return boolean 
     */
    public function getBbc()
    {
        return $this->bbc;
    }

    /**
     * Set canSearch
     *
     * @param boolean $canSearch
     * @return SmfCustomFields
     */
    public function setCanSearch($canSearch)
    {
        $this->canSearch = $canSearch;

        return $this;
    }

    /**
     * Get canSearch
     *
     * @return boolean 
     */
    public function getCanSearch()
    {
        return $this->canSearch;
    }

    /**
     * Set defaultValue
     *
     * @param string $defaultValue
     * @return SmfCustomFields
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

    /**
     * Get defaultValue
     *
     * @return string 
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Set enclose
     *
     * @param string $enclose
     * @return SmfCustomFields
     */
    public function setEnclose($enclose)
    {
        $this->enclose = $enclose;

        return $this;
    }

    /**
     * Get enclose
     *
     * @return string 
     */
    public function getEnclose()
    {
        return $this->enclose;
    }

    /**
     * Set placement
     *
     * @param boolean $placement
     * @return SmfCustomFields
     */
    public function setPlacement($placement)
    {
        $this->placement = $placement;

        return $this;
    }

    /**
     * Get placement
     *
     * @return boolean 
     */
    public function getPlacement()
    {
        return $this->placement;
    }
}
