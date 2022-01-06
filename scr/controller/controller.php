<?php
    require_once 'model/model.php';
    class controller{
        function index(){
            $model = new model;
            $datas = $model->getAllUsers();
            require_once('view/index.php');
        }

        function add(){
            require_once 'view/add.php';
            if(isset($_POST['txtName'])){
                $ten_mh = $_POST['txtName'];
                $sotinchi = $_POST['intCredits'];
                $sotiet_lt = $_POST['intTheory'];
                $sotiet_bt = $_POST['intExercise'];
                $sotiet_thtn = $_POST['intPractice'];
                $sogio_tuhoc = $_POST['intSelf'];
                $model = new model;
                $result = $model->addUsers($ten_mh, $sotinchi, $sotiet_lt, $sotiet_bt , $sotiet_thtn, $sogio_tuhoc);
                if($result)
                    header("location:index.php");
                else
                    header("error.php");
            }
        }
        function edit(){
            $model = new model;
            $id = $_GET['id'];
            $data = $model->getUser($id);
            require_once('view/edit.php');
            if(isset($_POST['txtName'])){
                $ten_mh = $_POST['txtName'];
                $sotinchi = $_POST['intCredits'];
                $sotiet_lt = $_POST['intTheory'];
                $sotiet_bt = $_POST['intExercise'];
                $sotiet_thtn = $_POST['intPractice'];
                $sogio_tuhoc = $_POST['intSelf'];
                $result = $model->updateUser($id, $ten_mh, $sotinchi, $sotiet_lt, $sotiet_bt , $sotiet_thtn, $sogio_tuhoc);
                if($result)
                    header("location:index.php");
                else
                    header("error.php");
            }
        }

        function delete(){
            $model = new model;
            $id = $_GET['id'];
            $result = $model->deleteUser($id);
            if($result)
                header("location:index.php");
            else
                header("error.php");
        }

        function details(){
            $model = new model;
            $id = $_GET['id'];
            $data = $model->getUser($id);
            if($data)
                header("location:index.php");
                else
                header("error.php");
        }
     }
?>