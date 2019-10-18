    <?php
    require_once'entities/User.class.php';
    class UserDB extends Model{
        function construct(){
            parent::__construct();
        }
        //fonction de connection
    public function login($login,$password){
    $sql="SELECT *FROM user WHERE login='$login' AND pasword='$password'";
    return  $this->db->query($sql)->fetchAll();

    }
    }
    ?>