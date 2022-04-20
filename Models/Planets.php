<?php
declare(strict_types=1);

class Planets {
    private int $id;
    private string $nom;
    private string $type;
    private string $diametre;
    private string $gravite;
    private string $lien_nasa;


    public function getId(): int { return $this->id; }
    public function setId(int $id): self { $this->id = $id; return $this; }

    public function getNom(): string { return $this->nom; }
    public function setNom(string $nom): bool {
        if(self::validateNom($nom)){
            $this->nom = $nom;
            return true; 
        }
        return false; 
    }

    // Méthode statique pour valider le nom
    public static function validateNom(string $nom):bool{
        $nomLenght = strlen($nom);
        if ($nomLenght > 1 && $nomLenght <= 7) {
            return TRUE;
        }
        throw new Exception('Le champ nom est incorrect');
        return FALSE;
     }

    public function getType(): string { return $this->type; }
    public function setType(string $type): bool {
        if(self::validateType($type)){
            $this->type = $type;
            return true; 
        }
        return false; 
    }

    // Méthode statique pour valider le type
    public static function validateType(string $type):bool{
        $typeLenght = strlen($type);
        if ($typeLenght > 1 && $typeLenght <= 10) {
            return TRUE;
        }
        throw new Exception('Le champ type est incorrect');
        return FALSE;
    }

    public function getDiametre(): string { return $this->diametre; }
    public function setDiametre(string $diametre): bool {
          if(self::validateDiametre($diametre)){
            $this->diametre = $diametre;
            return true; 
        }
        return false; 
    }

    // Méthode statique pour valider la diametre
    public static function validateDiametre($diametre):bool{
        if ($diametre > 0 && $diametre < 16777215 && is_numeric($diametre)) {
            return TRUE;
        }
        throw new Exception('Le champ diametre est incorrect il doit etre compris entre 0 et 16.777.215');
        return FALSE;
    }

    public function getGravite(): string { return $this->gravite; }
    public function setGravite(string $gravite): bool {
        if(self::validateGravite($gravite)){
            $this->gravite = $gravite;
            return true; 
        }
        return false; 
    }

    public static function validateGravite($gravite):bool{
        if ($gravite > 0 && $gravite < 50 && is_numeric($gravite)) {
            return TRUE;
        }
        throw new Exception('Le champ gravite doit etre compris entre 0 et 50');
        return FALSE;
    }

    public function getLien_nasa(): string { return $this->lien_nasa; }
    public function setLien_nasa($lien_nasa): bool { 
        if(self::validateLien_nasa($lien_nasa)){
            $this->lien_nasa = $lien_nasa;
            return true; 
        }
        return false; 
    }

    // Méthode statique pour valider la lien_nasa
    public static function validateLien_nasa(string $lien_nasa):bool{
        $lien_nasaLenght = strlen($lien_nasa);
        if ($lien_nasaLenght > 1 && $lien_nasaLenght < 180) {
            return TRUE;
        }
        throw new Exception('Le champ lien_nasa doit etre compris entre 1 et 180');
        return FALSE;
    }



    public function hydrate() {

        if (isset($_POST['nom'])) {
        $this->setNom($_POST['nom']);
      }
    
        if (isset($_POST['type'])) {
        $this->setType($_POST['type']);
      }
    
      if (isset($_POST['diametre'])) {
        $this->setDiametre($_POST['diametre']);
      }

      if (isset($_POST['gravite'])) {
        $this->setGravite($_POST['gravite']);
      }

      if (isset($_POST['lien_nasa'])) {
        $this->setLien_nasa($_POST['lien_nasa']);
      }
    }
    

}





