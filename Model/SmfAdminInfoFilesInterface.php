<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfAdminInfoFiles
 */
interface SmfAdminInfoFilesInterface
{
    /**
     * @var boolean
     */
    private $idFile;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $parameters;

    /**
     * @var string
     */
    private $data;

    /**
     * @var string
     */
    private $filetype;


    /**
     * Get idFile
     *
     * @return boolean 
     */
    public function getIdFile()
    {
        return $this->idFile;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return SmfAdminInfoFiles
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return SmfAdminInfoFiles
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set parameters
     *
     * @param string $parameters
     * @return SmfAdminInfoFiles
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Get parameters
     *
     * @return string 
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return SmfAdminInfoFiles
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set filetype
     *
     * @param string $filetype
     * @return SmfAdminInfoFiles
     */
    public function setFiletype($filetype)
    {
        $this->filetype = $filetype;

        return $this;
    }

    /**
     * Get filetype
     *
     * @return string 
     */
    public function getFiletype()
    {
        return $this->filetype;
    }
}
