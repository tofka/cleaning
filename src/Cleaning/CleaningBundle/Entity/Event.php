<?php

namespace Cleaning\CleaningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="event")
 */
class Event
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $timestamp;

    /**
     * @ORM\ManyToOne(targetEntity="Task", inversedBy="event")
     * @ORM\JoinColumn(name="task_id", referencedColumnName="id")
     */
    protected $task;

     /**
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="event")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */
    protected $person;
    
     /**
     * @ORM\ManyToOne(targetEntity="Room", inversedBy="event")
     * @ORM\JoinColumn(name="room_id", referencedColumnName="id")
     */
    protected $room;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return Event
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->task = new \Doctrine\Common\Collections\ArrayCollection();
        $this->person = new \Doctrine\Common\Collections\ArrayCollection();
        $this->room = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add task
     *
     * @param \Cleaning\CleaningBundle\Entity\Task $task
     * @return Event
     */
    public function addTask(\Cleaning\CleaningBundle\Entity\Task $task)
    {
        $this->task[] = $task;
    
        return $this;
    }

    /**
     * Remove task
     *
     * @param \Cleaning\CleaningBundle\Entity\Task $task
     */
    public function removeTask(\Cleaning\CleaningBundle\Entity\Task $task)
    {
        $this->task->removeElement($task);
    }

    /**
     * Get task
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Add person
     *
     * @param \Cleaning\CleaningBundle\Entity\Person $person
     * @return Event
     */
    public function addPerson(\Cleaning\CleaningBundle\Entity\Person $person)
    {
        $this->person[] = $person;
    
        return $this;
    }

    /**
     * Remove person
     *
     * @param \Cleaning\CleaningBundle\Entity\Person $person
     */
    public function removePerson(\Cleaning\CleaningBundle\Entity\Person $person)
    {
        $this->person->removeElement($person);
    }

    /**
     * Get person
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Add room
     *
     * @param \Cleaning\CleaningBundle\Entity\Room $room
     * @return Event
     */
    public function addRoom(\Cleaning\CleaningBundle\Entity\Room $room)
    {
        $this->room[] = $room;
    
        return $this;
    }

    /**
     * Remove room
     *
     * @param \Cleaning\CleaningBundle\Entity\Room $room
     */
    public function removeRoom(\Cleaning\CleaningBundle\Entity\Room $room)
    {
        $this->room->removeElement($room);
    }

    /**
     * Get room
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoom()
    {
        return $this->room;
    }
}