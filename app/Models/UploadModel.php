<?php
    namespace app\Models;
    use CodeIgniter\Model;

    class UploadModel extends Model {
        protected $table = "images";
        protected $primaryKey = "id";
        protected $allowedFields = ['user_id','name','img_dir'];

        public function uploadFile($user_id) {
            $phpFileUploadErrors = array(
                0 => 'There is no error, the file upload with succes',
                1 => 'the upload file excceds the upload_maxfilesize directive in php.ini',
                2 => 'the upload file excceds the MAX_FILE_SIZE directive that was specified in the HTML form',
                3 => 'the upload file excceds only partially uploaded',
                4 => 'on file was uploaded',
                6 => 'missing a temporary folder',
                7 => 'failed to write file to disk',
                8 => 'a php extesion stopped the file upload.',
            );
            if (isset($_FILES['userfile'])){
                $file_array = $this->reArrayFiles($_FILES['userfile']);
                for ($i=0;$i<count($file_array);$i++){
                    if ($file_array[$i]['error']){
                        echo $file_array[$i]['name'].' - '.$phpFileUploadErrors[$file_array[$i]['error']];
                    }else{
                        $extensions = array('jpg','png','gif','jpeg','webp','PNG');
    
                        $file_ext = explode('.',$file_array[$i]['name']);
                        $name = $file_ext[0];
                        $file_ext = end($file_ext);
    
                        if (!in_array($file_ext,$extensions)){
                            echo "{$file_array[$i]['name']} - invalid file extension!";
                        }else{
                            $img_dir = 'local/'.$file_array[$i]['name'];
                            move_uploaded_file($file_array[$i]['tmp_name'],$img_dir);
                            $data = [
                                'user_id'=>$user_id,
                                'name'=>$name,
                                'img_dir'=>$img_dir
                            ];
                            $this->insert($data);
                        }
                    }
                }
            }
        }
    
        public function reArrayFiles(&$file_post){
            $file_ary = array();
            $file_count = count($file_post['name']);
            $file_keys = array_keys($file_post);
            for ($i=0;$i<$file_count;$i++){
                foreach ($file_keys as $key){
                    $file_ary[$i][$key] = $file_post[$key][$i];
                }
            }
            return $file_ary;
        }
    }
