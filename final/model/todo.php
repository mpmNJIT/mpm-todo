<?php
class Todo
{
    private $id, $owneremail, $ownerid, $createddate, $duedate, $message, $isdone;

    public function __construct($createddate, $duedate, $message)
    {
        $this->createddate = $createddate;
        $this->duedate = $duedate;
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getOwneremail()
    {
        return $this->owneremail;
    }

    /**
     * @param mixed $owneremail
     */
    public function setOwneremail($owneremail)
    {
        $this->owneremail = $owneremail;
    }

    /**
     * @return mixed
     */
    public function getOwnerid()
    {
        return $this->ownerid;
    }

    /**
     * @param mixed $ownerid
     */
    public function setOwnerid($ownerid)
    {
        $this->ownerid = $ownerid;
    }

    /**
     * @return mixed
     */
    public function getCreateddate()
    {
        return $this->createddate;
    }

    /**
     * @param mixed $createddate
     */
    public function setCreateddate($createddate)
    {
        $this->createddate = $createddate;
    }

    /**
     * @return mixed
     */
    public function getDuedate()
    {
        return $this->duedate;
    }

    /**
     * @param mixed $duedate
     */
    public function setDuedate($duedate)
    {
        $this->duedate = $duedate;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getIsdone()
    {
        return $this->isdone;
    }

    /**
     * @param mixed $isdone
     */
    public function setIsdone($isdone)
    {
        $this->isdone = $isdone;
    }

}
?>