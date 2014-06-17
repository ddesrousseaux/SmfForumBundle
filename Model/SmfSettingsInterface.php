<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfSettings
 */
interface SmfSettingsInterface
{
    /**
     * @var string
     */
    private $variable;

    /**
     * @var string
     */
    private $value;


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
     * @return SmfSettings
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
