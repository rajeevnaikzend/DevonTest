<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Team; 

/**
 * @ORM\Table(name="app_player")
 * @ORM\Entity()
 */
class Player 
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
     * @ORM\Column(name="firstName", type="string")
     */
    private $firstName;
    
    /**
     * @var string|null
     * 
     * @ORM\Column(name="lastName", type="string")
     */
    private $lastName;
    
    /**
     * @var string|null
     * 
     * @ORM\Column(name="playerimageURI", type="string")
     */
    private $playerimageURI;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Team", inversedBy="players")
     */
    private $team;

    public function getTeam(): ?Team
    {
        return $this->team;
    }

    public function setTeam(?Team $team): self
    {
        $this->team = $team;
        return $this;
    }   
    
    
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
    function getFirstName(): ?string {
        return $this->firstName;
    }
    
    /**
     * 
     * @return string|null
     */
    function getLastName(): ?string {
        return $this->lastName;
    }
    
    /**
     * 
     * @return string|null
     */
    function getPlayerimageURI(): ?string {
        return $this->playerimageURI;
    }
    
    /**
     * 
     * @param string|null $firstName
     * @return void
     */
    function setFirstName(?string $firstName): void {
        $this->firstName = $firstName;
    }
    
    /**
     * 
     * @param string|null $lastName
     * @return void
     */
    function setLastName(?string $lastName): void {
        $this->lastName = $lastName;
    }

    /**
     * 
     * @param string|null $playerimageURI
     * @return void
     */
    function setPlayerimageURI(?string $playerimageURI): void {
        $this->playerimageURI = $playerimageURI;
    }


}
