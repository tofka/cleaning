<?php

namespace Cleaning\CleaningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="person")
 */

class Person
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */

    protected $name;

 /**
     * @ORM\OneToMany(targetEntity="Event", mappedBy="person")
     */

    protected $event;

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
     * Set name
     *
     * @param string $name
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    public function __toString()
    {
        return $this->name;
    }
    /**
     * Set event
     *
     * @param \Cleaning\CleaningBundle\Entity\Event $event
     * @return Person
     */
    public function setEvent(\Cleaning\CleaningBundle\Entity\Event $event = null)
    {
        $this->event = $event;
    
        return $this;
    }

    /**
     * Get event
     *
     * @return \Cleaning\CleaningBundle\Entity\Event 
     */
    public function getEvent()
    {
        return $this->event;
    }
}