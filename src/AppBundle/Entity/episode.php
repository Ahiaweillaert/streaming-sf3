<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * episode
 *
 * @ORM\Table(name="episode")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\episodeRepository")
 */
class episode
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
     * @ORM\Column(name="menuEpisode", type="string", length=255)
     */
    private $menuEpisode;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255)
     */
    private $duree;


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
     * Set menuEpisode
     *
     * @param string $menuEpisode
     *
     * @return episode
     */
    public function setMenuEpisode($menuEpisode)
    {
        $this->menuEpisode = $menuEpisode;

        return $this;
    }

    /**
     * Get menuEpisode
     *
     * @return string
     */
    public function getMenuEpisode()
    {
        return $this->menuEpisode;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return episode
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }
}

