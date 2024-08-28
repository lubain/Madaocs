<?php
    namespace app\Models;
    use CodeIgniter\Model;

    class ProduitModel extends Model {
        protected $table = "produit";
        protected $primaryKey = "id";
        protected $allowedFields = [
            'marque','model','photo','nom',
            'annee','km','carburant','transmission',
            'prix','proprietaire','clee','place',
            'couleur','carrousel','favorie'
        ];

        public function findAllWhere(int $id)
        {
            return $this->findAll()[$id];
        }
    }
