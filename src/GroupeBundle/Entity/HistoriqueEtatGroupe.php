<?php

namespace GroupeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoriqueEtatGroupe
 *
 * @ORM\Table(name="historique_etat_groupe")
 * @ORM\Entity(repositoryClass="GroupeBundle\Repository\HistoriqueEtatGroupeRepository")
 */
class HistoriqueEtatGroupe
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    //---------------------------  RELATION  -------------------------------

    /**
     * @ORM\ManyToOne(targetEntity="GroupeBundle\Entity\Groupe")
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    private $groupe;

    /**
     * @ORM\ManyToOne(targetEntity="GroupeBundle\Entity\ListeEtatGroupe")
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    private $etat;

    //-----------------------------/// RELATION ///-----------------------------


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return HistoriqueEtatGroupe
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set groupe
     *
     * @param \GroupeBundle\Entity\Groupe $groupe
     *
     * @return HistoriqueEtatGroupe
     */
    public function setGroupe(\GroupeBundle\Entity\Groupe $groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return \GroupeBundle\Entity\Groupe
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set etat
     *
     * @param \GroupeBundle\Entity\ListeEtatGroupe $etat
     *
     * @return HistoriqueEtatGroupe
     */
    public function setEtat(\GroupeBundle\Entity\ListeEtatGroupe $etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return \GroupeBundle\Entity\ListeEtatGroupe
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
