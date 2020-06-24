<?php

class MJcode{

    private static $instance;

    const USERNAME = 'u309351609_mjcode';
    const PASSWORD = '0061995@xp';

    private static function getConnection()
    {
        $DB_NAME = 'u309351609_mjcode';
        $SERTVER_NAME = 'localhost';

        if(!isset(self::$instance)){
            self::$instance = new PDO("mysql:host=$SERTVER_NAME;dbname=$DB_NAME", self::USERNAME, self::PASSWORD);
        }
        return self::$instance;
    }

    public function insertContact($name, $email, $message, $phone, $clock)
    {
        $query = "INSERT INTO contact(name, email, message, phone, clock) VALUES (?,?,?,?,?)";
        $stmt = MJcode::getConnection()->prepare($query);
        $stmt->bindValue(1,$name);
        $stmt->bindValue(2,$email);
        $stmt->bindValue(3,$message);
        $stmt->bindValue(4,$phone);
        $stmt->bindValue(5,$clock);
        $Capcha = new Captcha();
        return $stmt->execute();
    }

    public function selectUser($dados)
    {
        $email = $dados['email'];
        $pswd = md5($dados['password']);
        $query = "SELECT name, email, password FROM users WHERE email = '$email' AND  password = '$pswd'";
        $stmt = MJcode::getConnection()->prepare($query);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['name'] = $row[0]['name'];
            header('Location: adm.php');
        }
        else{
            echo "<script>alert('Login not found')</script>";
            header("Location: index.php");
        }
    }

    private function selectContacts($query)
    {
        $stmt = MJcode::getConnection()->prepare($query);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
        return [];
    }

    public function getContacts()
    {
        $number_of_result = count($this->selectContacts("SELECT * FROM contact"));
        $each_page = 8;
        $page_total = ceil($number_of_result / $each_page);

        $i = $_GET['page'];
        if(!isset($_GET['page'])){
            $i = 1;
        }

        $first_page = ($i - 1) * $each_page;

        $ORDER = "ORDER BY id ASC";
        if(isset($_GET['order']) && isset($_GET['sort'])){
            $ORDER = "ORDER BY {$_GET['order']} {$_GET['sort']}";
        }

        $resSQL = $this->selectContacts("SELECT * FROM contact ".$ORDER." LIMIT " .$first_page. ','.$each_page);
        return [$resSQL, $page_total];
    }

    public function deleteContact($id)
    {
        $query = "delete from contact where id = {$id}";
        $stmt = MJcode::getConnection()->prepare($query);
        if($stmt->execute()){
            header('location: clients.php');
        }
    }


}