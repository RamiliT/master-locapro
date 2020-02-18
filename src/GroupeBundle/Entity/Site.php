<?php

namespace GroupeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table(name="site")
 * @ORM\Entity(repositoryClass="GroupeBundle\Repository\SiteRepository")
 */
class Site
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
     * @ORM\Column(name="emplacement", type="string", length=100)
     */
    private $emplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=255, nullable=true)
     */
    private $couleur;

    /**
     * @var array
     *
     * @ORM\Column(name="coords", type="array")
     */
    private $coords;

//------------------------------------------

    /**
     * @ORM\OneToMany(targetEntity="GroupeBundle\Entity\Groupe", mappedBy="site")
     */
    private $groupes; // Notez le « s », un stocks est liée à plusieurs ligne

    /**
     * @ORM\OneToMany(targetEntity="ProduitBundle\Entity\HistoriqueImmo", mappedBy="site")
     */
    private $historiqueImmos; // Notez le « s », il y a plusieur historique

    /**
     * @ORM\OneToMany(targetEntity="ProduitBundle\Entity\Immo", mappedBy="site")
     */
    private $immos; // Notez le « s », il y a plusieur historique

//------------------------------------------

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
     * Set emplacement
     *
     * @param string $emplacement
     *
     * @return Site
     */
    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    /**
     * Get emplacement
     *
     * @return string
     */
    public function getEmplacement()
    {
        return $this->emplacement;
    }

    /**
     * Set coords
     *
     * @param array $coords
     *
     * @return Site
     */
    public function setCoords($coords)
    {
        $this->coords = $coords;

        return $this;
    }

    /**
     * Get coords
     *
     * @return array
     */
    public function getCoords()
    {
        return $this->coords;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groupes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add groupe
     *
     * @param \GroupeBundle\Entity\Groupe $groupe
     *
     * @return Site
     */
    public function addGroupe(\GroupeBundle\Entity\Groupe $groupe)
    {
        $this->groupes[] = $groupe;

        return $this;
    }

    /**
     * Remove groupe
     *
     * @param \GroupeBundle\Entity\Groupe $groupe
     */
    public function removeGroupe(\GroupeBundle\Entity\Groupe $groupe)
    {
        $this->groupes->removeElement($groupe);
    }

    /**
     * Get groupes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroupes()
    {
        return $this->groupes;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Site
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Add historiqueImmo
     *
     * @param \ProduitBundle\Entity\HistoriqueImmo $historiqueImmo
     *
     * @return Site
     */
    public function addHistoriqueImmo(\ProduitBundle\Entity\HistoriqueImmo $historiqueImmo)
    {
        $this->historiqueImmos[] = $historiqueImmo;

        return $this;
    }

    /**
     * Remove historiqueImmo
     *
     * @param \ProduitBundle\Entity\HistoriqueImmo $historiqueImmo
     */
    public function removeHistoriqueImmo(\ProduitBundle\Entity\HistoriqueImmo $historiqueImmo)
    {
        $this->historiqueImmos->removeElement($historiqueImmo);
    }

    /**
     * Get historiqueImmos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHistoriqueImmos()
    {
        return $this->historiqueImmos;
    }

    /**
     * Add immo
     *
     * @param \ProduitBundle\Entity\Immo $immo
     *
     * @return Site
     */
    public function addImmo(\ProduitBundle\Entity\Immo $immo)
    {
        $this->immos[] = $immo;

        return $this;
    }

    /**
     * Remove immo
     *
     * @param \ProduitBundle\Entity\Immo $immo
     */
    public function removeImmo(\ProduitBundle\Entity\Immo $immo)
    {
        $this->immos->removeElement($immo);
    }

    /**
     * Get immos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImmos()
    {
        return $this->immos;
    }
}
