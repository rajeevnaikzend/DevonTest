<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Table(name="app_team")
 * @ORM\Entity()
 */
class Team 
{
    /**
     * @var int|null
     * 
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue()
     */
    private $id;
    
    /**
     * @var string|null
     * 
     * @ORM\Column(name="name", type="string")
     */
    private $name;
    
    /**
     * @var string|null
     * 
     * @ORM\Column(name="logoURI", type="string")
     */
    private $logoURI;
    
    
     
    
    /**
     * 
     * @return int|null
     */
    function getId(): ?int {
        return $this->id;
    }
    
    /**
     * 
     * @return string|null
     */
    function getName(): ?string {
        return $this->name;
    }
    
    /**
     * 
     * @return string|null
     */
    function getLogoURI(): ?string {
        return $this->logoURI;
    }
    
    /**
     * 
     * @param string|null $name
     * @return void
     */
    function setName(?string $name): void {
        $this->name = $name;
    }

    /**
     * 
     * @param string|null $logoURI
     * @return void
     */
    function setLogoURI(?string $logoURI): void {
        $this->logoURI = $logoURI;
    }


}
