<?php

class Department extends Db_object {

    protected static $db_table = "department";
    protected static $db_table_field = array( 'dept_title');
    public $id;
    public $dept_title;


    public static function create_department(  $dept_title=''){

        if(!empty($dept_title)){
            $department = new Department();
//            $department->id= (int)$id;
            $department->dept_title =$dept_title;
            return $department;
        }else{
            return false;
        }

    }

    public static function find_the_department($id=0){
        global $database;
        $sql = "SELECT * FROM " . self::$db_table;
        $sql .= " WHERE photo_id = " . $database->escape_string($id);
        $sql .= " ORDER BY photo_id ASC";

        return self::find_by_query($sql);


    }





} //END OF comment CLASS

