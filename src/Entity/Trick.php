<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrickRepository")
 */
class Trick
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $movie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $group;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public  function setPicture(string $picture): self
    {
        $this->picture = $picture;
        return $this;
    }

    public function getMovie(): ?string
    {
        return $this->movie;
    }

    public  function setMovie(string $movie): self
    {
        $this->movie = $movie;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public  function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public  function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getGroup(): ?string
    {
        return $this->group;
    }

    public  function setGroup(string $group): self
    {
        $this->group = $group;
        return $this;
    }
}
