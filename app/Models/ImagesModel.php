<?php
    namespace app\Models;
    use CodeIgniter\Model;

    class ImagesModel extends Model {
        protected $table = "images";
        protected $primaryKey = "id";
        protected $allowedFields = ['user_id','name','img_dir'];
        
        public function findAllWhere(int $id)
        {
            $All = $this->findAll();
            $resultats = [];
            $j = 0;
            for($i = 0; $i < count($All); $i++){
                if ($All[$i]['user_id'] == $id) {
                    $resultats[$j] = $All[$i];
                    $j++;
                }
            }
            return $resultats;
        }
    }
