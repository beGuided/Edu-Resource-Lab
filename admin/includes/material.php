<?php

class Material extends Db_object {

    protected static $db_table = "class_material";
    protected static $db_table_field = array( 'material_title', 'material_link','material_dept_id','material_level','material_semester','material_image');
    public $id;
    public $material_title;
    public $material_link;
    public $material_dept_id;
    public $material_level;
    public $material_semester;
  public $material_image;


    public static function create_material($material_dept_id,  $material_title='',$material_link='',  $material_level='',$material_semester='',$material_image=''){
        if(!empty($material_dept_id) && !empty($material_title) && !empty($material_link)&& !empty($material_level)&& !empty($material_semester)&& !empty($material_image)){
            $material = new Material();
            $material->material_dept_id= $material_dept_id;
            $material->material_link =$material_link;
            $material->material_title =$material_title;
            $material->material_level =$material_level;
            $material->material_semester =$material_semester;
            $material->material_image =$material_image;

            return $material;
        }else{
            return false;
        }

    }


    public static function find_the_material_first($material_dept_id, $material_level, $resource_semester)
{
        global $database;
    $sql = "SELECT * FROM class_material 
            WHERE material_dept_id = '$material_dept_id' 
            AND material_level='$material_level' 
            AND material_semester = '{$resource_semester}' " ;


//        $sql = "SELECT * FROM " . self::$db_table;
//        $sql .= " WHERE material_dept_id = " . $database->escape_string($material_dept_id);
//        $sql .= " AND material_level = ". $database->escape_string($material_level);
        return self::find_by_query($sql);

    }

    public static function find_the_material_second($material_dept_id, $material_level, $resource_semester)
    {
        global $database;
        $sql = "SELECT * FROM class_material 
            WHERE material_dept_id = '$material_dept_id' 
            AND material_level='$material_level' 
            AND NOT material_semester = '{$resource_semester}' " ;


        return self::find_by_query($sql);

    }





} //END OF comment CLASS

