<?php

/* Контроллер для работы с задачами */

include_once ROOT. '/models/Tasks.php';

class TasksController
{

    //Вывод сраницы добавления задачи

    public function actionIndex()
    {
        $tasksList = array();
        $tasksList = Tasks::getTasksList();

        require_once(ROOT . '/views/tasks/index.php');

        return true;
    }

    //Добавление новой задачи

    public function actionAdd()
    {
        function cwUpload($field_name = '', $target_folder = '', $file_name = '', $thumb = FALSE, $thumb_folder = '', $thumb_width = '', $thumb_height = ''){

            $target_path = $target_folder;
            $thumb_path = $thumb_folder;

            $filename_err = explode(".",$_FILES[$field_name]['name']);
            $filename_err_count = count($filename_err);
            $file_ext = $filename_err[$filename_err_count-1];
            if($file_name != ''){
                $fileName = $file_name.'.'.$file_ext;
            }else{
                $fileName = $_FILES[$field_name]['name'];
            }

            $upload_image = $target_path.basename($fileName);

            if(move_uploaded_file($_FILES[$field_name]['tmp_name'],$upload_image))
            {
                if($thumb == TRUE)
                {
                    $thumbnail = $thumb_path.$fileName;
                    list($width,$height) = getimagesize($upload_image);
                    $thumb_create = imagecreatetruecolor($thumb_width,$thumb_height);
                    switch($file_ext){
                        case 'jpg':
                            $source = imagecreatefromjpeg($upload_image);
                            break;
                        case 'jpeg':
                            $source = imagecreatefromjpeg($upload_image);
                            break;

                        case 'png':
                            $source = imagecreatefrompng($upload_image);
                            break;
                        case 'gif':
                            $source = imagecreatefromgif($upload_image);
                            break;
                        default:
                            $source = imagecreatefromjpeg($upload_image);
                    }

                    imagecopyresized($thumb_create,$source,0,0,0,0,$thumb_width,$thumb_height,$width,$height);
                    switch($file_ext){
                        case 'jpg' || 'jpeg':
                            imagejpeg($thumb_create,$thumbnail,100);
                            break;
                        case 'png':
                            imagepng($thumb_create,$thumbnail,100);
                            break;

                        case 'gif':
                            imagegif($thumb_create,$thumbnail,100);
                            break;
                        default:
                            imagejpeg($thumb_create,$thumbnail,100);
                    }

                }

                return $fileName;
            }
            else
            {
                return false;
            }
        }
        if ($_POST) {
            if(!empty($_FILES['image']['name'])){

                $upload_img = cwUpload('image',ROOT . '/template/images/','',TRUE,ROOT . '/template/images/thumbnails/','320','240');

                $thumb_src = '/template/images/thumbnails/'.$upload_img;

                $message = $upload_img?"<span style='color:#008000;'>Image thumbnail have been created successfully.</span>":"<span style='color:#F00000;'>Some error occurred, please try again.</span>";

            }else{

                $thumb_src = '';
                $message = '';
            }
            $postArr = $_POST;
            Tasks::addNewTask($postArr, $thumb_src);
            header("Location: " . URL);
        }
        return true;

    }



}