<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * saison
 *
 * @ORM\Table(name="saison")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\saisonRepository")
 */
class saison
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
     * @ORM\Column(name="menuSaison", type="string", length=255)
     */
    private $menuSaison;

    /**
     * @var string
     *
     * @ORM\Column(name="nbEpisode", type="string", length=255)
     */
    private $nbEpisode;


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
     * Set menuSaison
     *
     * @param string $menuSaison
     *
     * @return saison
     */
    public function setMenuSaison($menuSaison)
    {
        $this->menuSaison = $menuSaison;

        return $this;
    }

    /**
     * Get menuSaison
     *
     * @return string
     */
    public function getMenuSaison()
    {
        return $this->menuSaison;
    }

    /**
     * Set nbEpisode
     *
     * @param string $nbEpisode
     *
     * @return saison
     */
    public function setNbEpisode($nbEpisode)
    {
        $this->nbEpisode = $nbEpisode;

        return $this;
    }

    /**
     * Get nbEpisode
     *
     * @return string
     */
    public function getNbEpisode()
    {
        return $this->nbEpisode;
    }
}

