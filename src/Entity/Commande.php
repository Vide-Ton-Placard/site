<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommandeRepository")
 */
class Commande
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
    private $libelle_commande;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_commande;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Paiement", inversedBy="commandes")
     */
    private $paiement;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Produit", inversedBy="commandes")
     */
    private $produit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleCommande(): ?string
    {
        return $this->libelle_commande;
    }

    public function setLibelleCommande(string $libelle_commande): self
    {
        $this->libelle_commande = $libelle_commande;

        return $this;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->date_commande;
    }

    public function setDateCommande(\DateTimeInterface $date_commande): self
    {
        $this->date_commande = $date_commande;

        return $this;
    }

    public function getPaiement(): ?Paiement
    {
        return $this->paiement;
    }

    public function setPaiement(?Paiement $paiement): self
    {
        $this->paiement = $paiement;

        return $this;
    }

    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    public function setProduit(?Produit $produit): self
    {
        $this->produit = $produit;

        return $this;
    }
}
