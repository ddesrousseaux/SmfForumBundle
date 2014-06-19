<?php

namespace Sima\SmfForumBundle\Model;



/**
 * SmfMembers
 */
abstract class AbstractSmfMembers
{
    /**
     * @var integer
     */
    protected $idMember;

    /**
     * @var string
     */
    protected $memberName;

    /**
     * @var integer
     */
    protected $dateRegistered;

    /**
     * @var integer
     */
    protected $posts;

    /**
     * @var integer
     */
    protected $idGroup;

    /**
     * @var string
     */
    protected $lngfile;

    /**
     * @var integer
     */
    protected $lastLogin;

    /**
     * @var string
     */
    protected $realName;

    /**
     * @var integer
     */
    protected $instantMessages;

    /**
     * @var integer
     */
    protected $unreadMessages;

    /**
     * @var string
     */
    protected $pmIgnoreList;

    /**
     * @var string
     */
    protected $passwd;

    /**
     * @var string
     */
    protected $emailAddress;

    /**
     * @var string
     */
    protected $personalText;

    /**
     * @var boolean
     */
    protected $gender;

    /**
     * @var \DateTime
     */
    protected $birthdate;

    /**
     * @var string
     */
    protected $websiteTitle;

    /**
     * @var string
     */
    protected $websiteUrl;

    /**
     * @var string
     */
    protected $location;

    /**
     * @var string
     */
    protected $icq;

    /**
     * @var string
     */
    protected $aim;

    /**
     * @var string
     */
    protected $yim;

    /**
     * @var string
     */
    protected $msn;

    /**
     * @var boolean
     */
    protected $hideEmail;

    /**
     * @var boolean
     */
    protected $showOnline;

    /**
     * @var string
     */
    protected $timeFormat;

    /**
     * @var string
     */
    protected $signature;

    /**
     * @var float
     */
    protected $timeOffset;

    /**
     * @var string
     */
    protected $avatar;

    /**
     * @var boolean
     */
    protected $pmEmailNotify;

    /**
     * @var integer
     */
    protected $karmaBad;

    /**
     * @var integer
     */
    protected $karmaGood;

    /**
     * @var string
     */
    protected $usertitle;

    /**
     * @var boolean
     */
    protected $notifyAnnouncements;

    /**
     * @var boolean
     */
    protected $notifyRegularity;

    /**
     * @var string
     */
    protected $memberIp;

    /**
     * @var string
     */
    protected $secretQuestion;

    /**
     * @var string
     */
    protected $secretAnswer;

    /**
     * @var boolean
     */
    protected $idTheme;

    /**
     * @var boolean
     */
    protected $isActivated;

    /**
     * @var boolean
     */
    protected $isSpammer;

    /**
     * @var string
     */
    protected $validationCode;

    /**
     * @var integer
     */
    protected $idMsgLastVisit;

    /**
     * @var string
     */
    protected $additionalGroups;

    /**
     * @var string
     */
    protected $smileySet;

    /**
     * @var integer
     */
    protected $idPostGroup;

    /**
     * @var integer
     */
    protected $totalTimeLoggedIn;

    /**
     * @var string
     */
    protected $passwordSalt;

    /**
     * @var string
     */
    protected $messageLabels;

    /**
     * @var string
     */
    protected $buddyList;

    /**
     * @var boolean
     */
    protected $notifySendBody;

    /**
     * @var boolean
     */
    protected $notifyTypes;

    /**
     * @var string
     */
    protected $memberIp2;

    /**
     * @var string
     */
    protected $modPrefs;

    /**
     * @var boolean
     */
    protected $warning;

    /**
     * @var string
     */
    protected $ignoreBoards;

    /**
     * @var string
     */
    protected $passwdFlood;

    /**
     * @var boolean
     */
    protected $newPm;

    /**
     * @var integer
     */
    protected $pmPrefs;

    /**
     * @var string
     */
    protected $openidUri;

    /**
     * @var boolean
     */
    protected $pmReceiveFrom;


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
     * Set memberName
     *
     * @param string $memberName
     * @return SmfMembers
     */
    public function setMemberName($memberName)
    {
        $this->memberName = $memberName;

        return $this;
    }

    /**
     * Get memberName
     *
     * @return string 
     */
    public function getMemberName()
    {
        return $this->memberName;
    }

    /**
     * Set dateRegistered
     *
     * @param integer $dateRegistered
     * @return SmfMembers
     */
    public function setDateRegistered($dateRegistered)
    {
        $this->dateRegistered = $dateRegistered;

        return $this;
    }

    /**
     * Get dateRegistered
     *
     * @return integer 
     */
    public function getDateRegistered()
    {
        return $this->dateRegistered;
    }

    /**
     * Set posts
     *
     * @param integer $posts
     * @return SmfMembers
     */
    public function setPosts($posts)
    {
        $this->posts = $posts;

        return $this;
    }

    /**
     * Get posts
     *
     * @return integer 
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * Set idGroup
     *
     * @param integer $idGroup
     * @return SmfMembers
     */
    public function setIdGroup($idGroup)
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    /**
     * Get idGroup
     *
     * @return integer 
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }

    /**
     * Set lngfile
     *
     * @param string $lngfile
     * @return SmfMembers
     */
    public function setLngfile($lngfile)
    {
        $this->lngfile = $lngfile;

        return $this;
    }

    /**
     * Get lngfile
     *
     * @return string 
     */
    public function getLngfile()
    {
        return $this->lngfile;
    }

    /**
     * Set lastLogin
     *
     * @param integer $lastLogin
     * @return SmfMembers
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return integer 
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set realName
     *
     * @param string $realName
     * @return SmfMembers
     */
    public function setRealName($realName)
    {
        $this->realName = $realName;

        return $this;
    }

    /**
     * Get realName
     *
     * @return string 
     */
    public function getRealName()
    {
        return $this->realName;
    }

    /**
     * Set instantMessages
     *
     * @param integer $instantMessages
     * @return SmfMembers
     */
    public function setInstantMessages($instantMessages)
    {
        $this->instantMessages = $instantMessages;

        return $this;
    }

    /**
     * Get instantMessages
     *
     * @return integer 
     */
    public function getInstantMessages()
    {
        return $this->instantMessages;
    }

    /**
     * Set unreadMessages
     *
     * @param integer $unreadMessages
     * @return SmfMembers
     */
    public function setUnreadMessages($unreadMessages)
    {
        $this->unreadMessages = $unreadMessages;

        return $this;
    }

    /**
     * Get unreadMessages
     *
     * @return integer 
     */
    public function getUnreadMessages()
    {
        return $this->unreadMessages;
    }

    /**
     * Set pmIgnoreList
     *
     * @param string $pmIgnoreList
     * @return SmfMembers
     */
    public function setPmIgnoreList($pmIgnoreList)
    {
        $this->pmIgnoreList = $pmIgnoreList;

        return $this;
    }

    /**
     * Get pmIgnoreList
     *
     * @return string 
     */
    public function getPmIgnoreList()
    {
        return $this->pmIgnoreList;
    }

    /**
     * Set passwd
     *
     * @param string $passwd
     * @return SmfMembers
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd
     *
     * @return string 
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     * @return SmfMembers
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string 
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set personalText
     *
     * @param string $personalText
     * @return SmfMembers
     */
    public function setPersonalText($personalText)
    {
        $this->personalText = $personalText;

        return $this;
    }

    /**
     * Get personalText
     *
     * @return string 
     */
    public function getPersonalText()
    {
        return $this->personalText;
    }

    /**
     * Set gender
     *
     * @param boolean $gender
     * @return SmfMembers
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return SmfMembers
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set websiteTitle
     *
     * @param string $websiteTitle
     * @return SmfMembers
     */
    public function setWebsiteTitle($websiteTitle)
    {
        $this->websiteTitle = $websiteTitle;

        return $this;
    }

    /**
     * Get websiteTitle
     *
     * @return string 
     */
    public function getWebsiteTitle()
    {
        return $this->websiteTitle;
    }

    /**
     * Set websiteUrl
     *
     * @param string $websiteUrl
     * @return SmfMembers
     */
    public function setWebsiteUrl($websiteUrl)
    {
        $this->websiteUrl = $websiteUrl;

        return $this;
    }

    /**
     * Get websiteUrl
     *
     * @return string 
     */
    public function getWebsiteUrl()
    {
        return $this->websiteUrl;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return SmfMembers
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set icq
     *
     * @param string $icq
     * @return SmfMembers
     */
    public function setIcq($icq)
    {
        $this->icq = $icq;

        return $this;
    }

    /**
     * Get icq
     *
     * @return string 
     */
    public function getIcq()
    {
        return $this->icq;
    }

    /**
     * Set aim
     *
     * @param string $aim
     * @return SmfMembers
     */
    public function setAim($aim)
    {
        $this->aim = $aim;

        return $this;
    }

    /**
     * Get aim
     *
     * @return string 
     */
    public function getAim()
    {
        return $this->aim;
    }

    /**
     * Set yim
     *
     * @param string $yim
     * @return SmfMembers
     */
    public function setYim($yim)
    {
        $this->yim = $yim;

        return $this;
    }

    /**
     * Get yim
     *
     * @return string 
     */
    public function getYim()
    {
        return $this->yim;
    }

    /**
     * Set msn
     *
     * @param string $msn
     * @return SmfMembers
     */
    public function setMsn($msn)
    {
        $this->msn = $msn;

        return $this;
    }

    /**
     * Get msn
     *
     * @return string 
     */
    public function getMsn()
    {
        return $this->msn;
    }

    /**
     * Set hideEmail
     *
     * @param boolean $hideEmail
     * @return SmfMembers
     */
    public function setHideEmail($hideEmail)
    {
        $this->hideEmail = $hideEmail;

        return $this;
    }

    /**
     * Get hideEmail
     *
     * @return boolean 
     */
    public function getHideEmail()
    {
        return $this->hideEmail;
    }

    /**
     * Set showOnline
     *
     * @param boolean $showOnline
     * @return SmfMembers
     */
    public function setShowOnline($showOnline)
    {
        $this->showOnline = $showOnline;

        return $this;
    }

    /**
     * Get showOnline
     *
     * @return boolean 
     */
    public function getShowOnline()
    {
        return $this->showOnline;
    }

    /**
     * Set timeFormat
     *
     * @param string $timeFormat
     * @return SmfMembers
     */
    public function setTimeFormat($timeFormat)
    {
        $this->timeFormat = $timeFormat;

        return $this;
    }

    /**
     * Get timeFormat
     *
     * @return string 
     */
    public function getTimeFormat()
    {
        return $this->timeFormat;
    }

    /**
     * Set signature
     *
     * @param string $signature
     * @return SmfMembers
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Get signature
     *
     * @return string 
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Set timeOffset
     *
     * @param float $timeOffset
     * @return SmfMembers
     */
    public function setTimeOffset($timeOffset)
    {
        $this->timeOffset = $timeOffset;

        return $this;
    }

    /**
     * Get timeOffset
     *
     * @return float 
     */
    public function getTimeOffset()
    {
        return $this->timeOffset;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return SmfMembers
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set pmEmailNotify
     *
     * @param boolean $pmEmailNotify
     * @return SmfMembers
     */
    public function setPmEmailNotify($pmEmailNotify)
    {
        $this->pmEmailNotify = $pmEmailNotify;

        return $this;
    }

    /**
     * Get pmEmailNotify
     *
     * @return boolean 
     */
    public function getPmEmailNotify()
    {
        return $this->pmEmailNotify;
    }

    /**
     * Set karmaBad
     *
     * @param integer $karmaBad
     * @return SmfMembers
     */
    public function setKarmaBad($karmaBad)
    {
        $this->karmaBad = $karmaBad;

        return $this;
    }

    /**
     * Get karmaBad
     *
     * @return integer 
     */
    public function getKarmaBad()
    {
        return $this->karmaBad;
    }

    /**
     * Set karmaGood
     *
     * @param integer $karmaGood
     * @return SmfMembers
     */
    public function setKarmaGood($karmaGood)
    {
        $this->karmaGood = $karmaGood;

        return $this;
    }

    /**
     * Get karmaGood
     *
     * @return integer 
     */
    public function getKarmaGood()
    {
        return $this->karmaGood;
    }

    /**
     * Set usertitle
     *
     * @param string $usertitle
     * @return SmfMembers
     */
    public function setUsertitle($usertitle)
    {
        $this->usertitle = $usertitle;

        return $this;
    }

    /**
     * Get usertitle
     *
     * @return string 
     */
    public function getUsertitle()
    {
        return $this->usertitle;
    }

    /**
     * Set notifyAnnouncements
     *
     * @param boolean $notifyAnnouncements
     * @return SmfMembers
     */
    public function setNotifyAnnouncements($notifyAnnouncements)
    {
        $this->notifyAnnouncements = $notifyAnnouncements;

        return $this;
    }

    /**
     * Get notifyAnnouncements
     *
     * @return boolean 
     */
    public function getNotifyAnnouncements()
    {
        return $this->notifyAnnouncements;
    }

    /**
     * Set notifyRegularity
     *
     * @param boolean $notifyRegularity
     * @return SmfMembers
     */
    public function setNotifyRegularity($notifyRegularity)
    {
        $this->notifyRegularity = $notifyRegularity;

        return $this;
    }

    /**
     * Get notifyRegularity
     *
     * @return boolean 
     */
    public function getNotifyRegularity()
    {
        return $this->notifyRegularity;
    }

    /**
     * Set memberIp
     *
     * @param string $memberIp
     * @return SmfMembers
     */
    public function setMemberIp($memberIp)
    {
        $this->memberIp = $memberIp;

        return $this;
    }

    /**
     * Get memberIp
     *
     * @return string 
     */
    public function getMemberIp()
    {
        return $this->memberIp;
    }

    /**
     * Set secretQuestion
     *
     * @param string $secretQuestion
     * @return SmfMembers
     */
    public function setSecretQuestion($secretQuestion)
    {
        $this->secretQuestion = $secretQuestion;

        return $this;
    }

    /**
     * Get secretQuestion
     *
     * @return string 
     */
    public function getSecretQuestion()
    {
        return $this->secretQuestion;
    }

    /**
     * Set secretAnswer
     *
     * @param string $secretAnswer
     * @return SmfMembers
     */
    public function setSecretAnswer($secretAnswer)
    {
        $this->secretAnswer = $secretAnswer;

        return $this;
    }

    /**
     * Get secretAnswer
     *
     * @return string 
     */
    public function getSecretAnswer()
    {
        return $this->secretAnswer;
    }

    /**
     * Set idTheme
     *
     * @param boolean $idTheme
     * @return SmfMembers
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
     * Set isActivated
     *
     * @param boolean $isActivated
     * @return SmfMembers
     */
    public function setIsActivated($isActivated)
    {
        $this->isActivated = $isActivated;

        return $this;
    }

    /**
     * Get isActivated
     *
     * @return boolean 
     */
    public function getIsActivated()
    {
        return $this->isActivated;
    }

    /**
     * Set isSpammer
     *
     * @param boolean $isSpammer
     * @return SmfMembers
     */
    public function setIsSpammer($isSpammer)
    {
        $this->isSpammer = $isSpammer;

        return $this;
    }

    /**
     * Get isSpammer
     *
     * @return boolean 
     */
    public function getIsSpammer()
    {
        return $this->isSpammer;
    }

    /**
     * Set validationCode
     *
     * @param string $validationCode
     * @return SmfMembers
     */
    public function setValidationCode($validationCode)
    {
        $this->validationCode = $validationCode;

        return $this;
    }

    /**
     * Get validationCode
     *
     * @return string 
     */
    public function getValidationCode()
    {
        return $this->validationCode;
    }

    /**
     * Set idMsgLastVisit
     *
     * @param integer $idMsgLastVisit
     * @return SmfMembers
     */
    public function setIdMsgLastVisit($idMsgLastVisit)
    {
        $this->idMsgLastVisit = $idMsgLastVisit;

        return $this;
    }

    /**
     * Get idMsgLastVisit
     *
     * @return integer 
     */
    public function getIdMsgLastVisit()
    {
        return $this->idMsgLastVisit;
    }

    /**
     * Set additionalGroups
     *
     * @param string $additionalGroups
     * @return SmfMembers
     */
    public function setAdditionalGroups($additionalGroups)
    {
        $this->additionalGroups = $additionalGroups;

        return $this;
    }

    /**
     * Get additionalGroups
     *
     * @return string 
     */
    public function getAdditionalGroups()
    {
        return $this->additionalGroups;
    }

    /**
     * Set smileySet
     *
     * @param string $smileySet
     * @return SmfMembers
     */
    public function setSmileySet($smileySet)
    {
        $this->smileySet = $smileySet;

        return $this;
    }

    /**
     * Get smileySet
     *
     * @return string 
     */
    public function getSmileySet()
    {
        return $this->smileySet;
    }

    /**
     * Set idPostGroup
     *
     * @param integer $idPostGroup
     * @return SmfMembers
     */
    public function setIdPostGroup($idPostGroup)
    {
        $this->idPostGroup = $idPostGroup;

        return $this;
    }

    /**
     * Get idPostGroup
     *
     * @return integer 
     */
    public function getIdPostGroup()
    {
        return $this->idPostGroup;
    }

    /**
     * Set totalTimeLoggedIn
     *
     * @param integer $totalTimeLoggedIn
     * @return SmfMembers
     */
    public function setTotalTimeLoggedIn($totalTimeLoggedIn)
    {
        $this->totalTimeLoggedIn = $totalTimeLoggedIn;

        return $this;
    }

    /**
     * Get totalTimeLoggedIn
     *
     * @return integer 
     */
    public function getTotalTimeLoggedIn()
    {
        return $this->totalTimeLoggedIn;
    }

    /**
     * Set passwordSalt
     *
     * @param string $passwordSalt
     * @return SmfMembers
     */
    public function setPasswordSalt($passwordSalt)
    {
        $this->passwordSalt = $passwordSalt;

        return $this;
    }

    /**
     * Get passwordSalt
     *
     * @return string 
     */
    public function getPasswordSalt()
    {
        return $this->passwordSalt;
    }

    /**
     * Set messageLabels
     *
     * @param string $messageLabels
     * @return SmfMembers
     */
    public function setMessageLabels($messageLabels)
    {
        $this->messageLabels = $messageLabels;

        return $this;
    }

    /**
     * Get messageLabels
     *
     * @return string 
     */
    public function getMessageLabels()
    {
        return $this->messageLabels;
    }

    /**
     * Set buddyList
     *
     * @param string $buddyList
     * @return SmfMembers
     */
    public function setBuddyList($buddyList)
    {
        $this->buddyList = $buddyList;

        return $this;
    }

    /**
     * Get buddyList
     *
     * @return string 
     */
    public function getBuddyList()
    {
        return $this->buddyList;
    }

    /**
     * Set notifySendBody
     *
     * @param boolean $notifySendBody
     * @return SmfMembers
     */
    public function setNotifySendBody($notifySendBody)
    {
        $this->notifySendBody = $notifySendBody;

        return $this;
    }

    /**
     * Get notifySendBody
     *
     * @return boolean 
     */
    public function getNotifySendBody()
    {
        return $this->notifySendBody;
    }

    /**
     * Set notifyTypes
     *
     * @param boolean $notifyTypes
     * @return SmfMembers
     */
    public function setNotifyTypes($notifyTypes)
    {
        $this->notifyTypes = $notifyTypes;

        return $this;
    }

    /**
     * Get notifyTypes
     *
     * @return boolean 
     */
    public function getNotifyTypes()
    {
        return $this->notifyTypes;
    }

    /**
     * Set memberIp2
     *
     * @param string $memberIp2
     * @return SmfMembers
     */
    public function setMemberIp2($memberIp2)
    {
        $this->memberIp2 = $memberIp2;

        return $this;
    }

    /**
     * Get memberIp2
     *
     * @return string 
     */
    public function getMemberIp2()
    {
        return $this->memberIp2;
    }

    /**
     * Set modPrefs
     *
     * @param string $modPrefs
     * @return SmfMembers
     */
    public function setModPrefs($modPrefs)
    {
        $this->modPrefs = $modPrefs;

        return $this;
    }

    /**
     * Get modPrefs
     *
     * @return string 
     */
    public function getModPrefs()
    {
        return $this->modPrefs;
    }

    /**
     * Set warning
     *
     * @param boolean $warning
     * @return SmfMembers
     */
    public function setWarning($warning)
    {
        $this->warning = $warning;

        return $this;
    }

    /**
     * Get warning
     *
     * @return boolean 
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * Set ignoreBoards
     *
     * @param string $ignoreBoards
     * @return SmfMembers
     */
    public function setIgnoreBoards($ignoreBoards)
    {
        $this->ignoreBoards = $ignoreBoards;

        return $this;
    }

    /**
     * Get ignoreBoards
     *
     * @return string 
     */
    public function getIgnoreBoards()
    {
        return $this->ignoreBoards;
    }

    /**
     * Set passwdFlood
     *
     * @param string $passwdFlood
     * @return SmfMembers
     */
    public function setPasswdFlood($passwdFlood)
    {
        $this->passwdFlood = $passwdFlood;

        return $this;
    }

    /**
     * Get passwdFlood
     *
     * @return string 
     */
    public function getPasswdFlood()
    {
        return $this->passwdFlood;
    }

    /**
     * Set newPm
     *
     * @param boolean $newPm
     * @return SmfMembers
     */
    public function setNewPm($newPm)
    {
        $this->newPm = $newPm;

        return $this;
    }

    /**
     * Get newPm
     *
     * @return boolean 
     */
    public function getNewPm()
    {
        return $this->newPm;
    }

    /**
     * Set pmPrefs
     *
     * @param integer $pmPrefs
     * @return SmfMembers
     */
    public function setPmPrefs($pmPrefs)
    {
        $this->pmPrefs = $pmPrefs;

        return $this;
    }

    /**
     * Get pmPrefs
     *
     * @return integer 
     */
    public function getPmPrefs()
    {
        return $this->pmPrefs;
    }

    /**
     * Set openidUri
     *
     * @param string $openidUri
     * @return SmfMembers
     */
    public function setOpenidUri($openidUri)
    {
        $this->openidUri = $openidUri;

        return $this;
    }

    /**
     * Get openidUri
     *
     * @return string 
     */
    public function getOpenidUri()
    {
        return $this->openidUri;
    }

    /**
     * Set pmReceiveFrom
     *
     * @param boolean $pmReceiveFrom
     * @return SmfMembers
     */
    public function setPmReceiveFrom($pmReceiveFrom)
    {
        $this->pmReceiveFrom = $pmReceiveFrom;

        return $this;
    }

    /**
     * Get pmReceiveFrom
     *
     * @return boolean 
     */
    public function getPmReceiveFrom()
    {
        return $this->pmReceiveFrom;
    }
}
