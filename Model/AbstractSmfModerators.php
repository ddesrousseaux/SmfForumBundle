<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfModerators
 */
abstract class AbstractSmfModerators
{
    /**
     * @var integer
     */
    protected $idBoard;

    /**
     * @var integer
     */
    protected $idMember;


    /**
     * Set idBoard
     *
     * @param integer $idBoard
     * @return SmfModerators
     */
    public function setIdBoard($idBoard)
    {
        $this->idBoard = $idBoard;

        return $this;
    }

    /**
     * Get idBoard
     *
     * @return integer 
     */
    public function getIdBoard()
    {
        return $this->idBoard;
    }

    /**
     * Set idMember
     *
     * @param integer $idMember
     * @return SmfModerators
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
}
