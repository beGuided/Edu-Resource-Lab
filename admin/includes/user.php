
<?php 

class User extends Db_object {

      
        protected static $db_table = "users";
        protected static $db_table_field = array( 'password', 'first_name','last_name','user_role','user_department');
        public $id;
        public $first_name;
        public $last_name;
        public $username;
        public $password;
        public $user_role;
        public $user_department;


    
        public static function verify_user($username, $password){
            global $database;
            $username = $database->escape_string($username);
            $password = $database->escape_string($password);
    
            $sql = "SELECT * FROM " .self::$db_table." WHERE ";
            $sql .= "username = '{$username}'";
            $sql .= " AND password = '{$password}'";
           // $sql .= "LIMIT 1";
    
            $the_result_array = self:: find_by_query($sql);
            return !empty($the_result_array) ? array_shift($the_result_array) : false;
        }
    
    
    
    
    } //END OF USER CLASS
    
    




?>