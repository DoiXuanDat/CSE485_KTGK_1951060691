<?php
    require_once 'config/db.php';
    class model{
        private $mamh, $ten_mh, $sotinchi, $sotiet_lt, $sotiet_bt , $sotiet_thtn, $sogio_tuhoc;
    } 
        function connectDb(){
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
            return $connection;
        }

        function closeDb($connection = null) {
            mysqli_close($connection);
        }

        function getAllUsers(){

            $conn = $this->connectDb();
  
            $sql = "SELECT * FROM 1051060591_univercity";
            $result = mysqli_query($conn,$sql);

            $datas = [];

            if(mysqli_num_rows($result) > 0){

                $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC); 
            }
            $this->closeDb($conn);

            return $arr_users;
        }
        function addUsers($mh, $tinchi, $lt, $bt, $thth, $tuhoc){
            $conn = $this->connectDb();
            $sql = "INSERT INTO 1051060591_univercity(mamh, ten_mh, sotinchi, sotiet_lt, sotiet_bt , sotiet_thtn, sogio_tuhoc) VALUES ('$mh', '$tinchi', '$lt', '$bt', '$thth', '$tuhoc')";
            $result = mysqli_query($conn,$sql);
            $this->closeDb($conn);
            return $result;
        }
        
        function getUser($id){
            $conn = $this->connectDb();

            $sql = "SELECT * FROM 1051060591_univercity WHERE mamh = '$id'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
                $user = mysqli_fetch_assoc($result);
            $this->closeDb($conn);
            return $user;
        }

        function updateUser($id, $mh, $tinchi, $lt, $bt, $thth, $tuhoc){
            $conn = $this->connectDb();

            $sql = "UPDATE 1051060591_univercity SET ten_mh='$mh', sotinchi='$tinchi', sotiet_lt='$lt', sotiet_bt='$bt', sotiet_thtn='$thth', sogio_tuhoc='$tuhoc)' WHERE mamh = '$id'";
            $result = mysqli_query($conn,$sql);

            $this->closeDb($conn);
            return $result;
        }

        function deleteUser($id){
            $conn = $this->connectDb();

            $sql = "DELETE FROM 1051060591_univercity WHERE mamh = '$id'";
            $result = mysqli_query($conn,$sql);

            $this->closeDb($conn);
            return $result;
        }
    
?>