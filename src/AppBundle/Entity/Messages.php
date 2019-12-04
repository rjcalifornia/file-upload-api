<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="messages")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MessagesRepository")
 */
class Messages
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

        
    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=50000, nullable=true)
     */
    private $filename;
 

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateadded", type="datetime", nullable=true)
     */
    private $dateadded;
    
    
 



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

   

     

 

    /**
     * Set dateadded
     *
     * @param \DateTime $dateadded
     *
     * @return Messages
     */
    public function setDateadded($dateadded)
    {
        $this->dateadded = $dateadded;

        return $this;
    }

    /**
     * Get dateadded
     *
     * @return \DateTime
     */
    public function getDateadded()
    {
        return $this->dateadded;
    }
    
    
    
 
    
    
  
    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return Messages
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
}

