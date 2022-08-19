<?php
class Article
{

    /*---------------------------------------------------
                            Attributs
    ---------------------------------------------------*/

    private ?int $id_article;
    private ?string $nom_article;
    private ?float $prix_article;

    /*---------------------------------------------------
                            CONSTRUCTOR
    ---------------------------------------------------*/

    public function __construct(?string $nom, ?float $prix)
    {
        $this->nom_article = $nom;
        $this->prix_article = $prix;
    }

    /*---------------------------------------------------
                        GETTER ET SETTER
    ---------------------------------------------------*/

    public function getIdArt(): ?int
    {
        return $this->id_article;
    }

    public function getNom(): ?string
    {
        return $this->nom_article;
    }
    public function getPrix(): ?float
    {
        return $this->prix_article;
    }
    public function setIdArt(int $id): void
    {
        $this->id_article = $id;
    }
    public function setNom(string $nom): void
    {
        $this->nom_article = $nom;
    }
    public function setPrix(float $prix): void
    {
        $this->prix_article = $prix;
    }
}
