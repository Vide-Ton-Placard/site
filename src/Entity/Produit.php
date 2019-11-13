<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle_produit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $taille_produit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description_produit;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $prix_produit;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Commande", mappedBy="produit")
     */
    private $commandes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CategorieProduit", inversedBy="produits")
     */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Etat", inversedBy="produits")
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Statut", inversedBy="produits")
     */
    private $statut;

    public function __construct()
    {
        $this->commandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleProduit(): ?string
    {
        return $this->libelle_produit;
    }

    public function setLibelleProduit(string $libelle_produit): self
    {
        $this->libelle_produit = $libelle_produit;

        return $this;
    }

    public function getTailleProduit(): ?string
    {
        return $this->taille_produit;
    }

    public function setTailleProduit(string $taille_produit): self
    {
        $this->taille_produit = $taille_produit;

        return $this;
    }

    public function getDescriptionProduit(): ?string
    {
        return $this->description_produit;
    }

    public function setDescriptionProduit(string $description_produit): self
    {
        $this->description_produit = $description_produit;

        return $this;
    }

    public function getPrixProduit(): ?string
    {
        return $this->prix_produit;
    }

    public function setPrixProduit(string $prix_produit): self
    {
        $this->prix_produit = $prix_produit;

        return $this;
    }

    /**
     * @return Collection|Commande[]
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->setProduit($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->contains($commande)) {
            $this->commandes->removeElement($commande);
            // set the owning side to null (unless already changed)
            if ($commande->getProduit() === $this) {
                $commande->setProduit(null);
            }
        }

        return $this;
    }

    public function getCategorie(): ?CategorieProduit
    {
        return $this->categorie;
    }

    public function setCategorie(?CategorieProduit $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getEtat(): ?Etat
    {
        return $this->etat;
    }

    public function setEtat(?Etat $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getStatut(): ?Statut
    {
        return $this->statut;
    }

    public function setStatut(?Statut $statut): self
    {
        $this->statut = $statut;

        return $this;
    }
}
