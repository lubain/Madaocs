<?php
    namespace app\Models;
    use CodeIgniter\Model;

    class ImagesModel extends Model {
        protected $table = "images";
        protected $primaryKey = "id";
        protected $allowedFields = ['user_id','name','img_dir'];
    }

?>