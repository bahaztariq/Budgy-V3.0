<?php



class User{
    private $connect;
    // private $username;
    // private $email;
    // private $password;
    
    

    public function __construct($connect){
        $this->connect = $connect;
    }

    public function Register($username,$email,$password){
        $sql = "SELECT * FROM users WHERE Email = :email OR UserName = :username";
        $result = $this->connect->prepare($sql);
        $result->execute([
            ':email' => $email,
            ':username' => $username
        ]);
        $user = $result->fetch(PDO::FETCH_ASSOC);
        print_r( $user);
        if(!$user){
            $sql = "INSERT INTO users (UserName,Email,password) VALUES (:username,:email,:password)";
            $stmt = $this->connect->prepare($sql);
            $stmt->execute([
                ':username' => $username,
                ':email' => $email,
                ':password' => password_hash($password,PASSWORD_DEFAULT)
            ]);
            $this->login($email,$password);
            return ['status' => true , 'message' => 'User Created'];
        }else{
            return ['status' => false , 'message' => 'User already exists'];
        } 
    }
    public function login($email,$password){

        $sql = "SELECT * FROM users WHERE Email = :identifier or UserName = :identifier";
        $result = $this->connect->prepare($sql);
        $result->execute([
            ':identifier' => $email
        ]);

        $user = $result->fetch(PDO::FETCH_ASSOC);
        
        if($user && password_verify($password,$user['password'])){
            $_SESSION['user_id'] = $user['UserID'];
            $_SESSION['user_name'] = $user['UserName'];
            return ['status' => true , 'message' => 'User logged in'];
        }else{
            return ['status' => false , 'message' => 'Invalid email or password'];
        }    
    }
}