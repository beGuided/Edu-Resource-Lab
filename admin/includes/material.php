<?php

class Material extends Db_object {

    protected static $db_table = "class_material";
    protected static $db_table_field = array( 'id','material_title', 'material_link','material_dept_id','material_level');
    public $id;
    public $material_title;
    public $material_link;
    public $material_dept_id;
    public $material_level;
    public $material_semester;
    public $material_image;


    public static function create_material($material_dept_id,  $material_title='',$material_link='',  $material_level='',$material_semester=''){
        if(!empty($material_dept_id) && !empty($material_title) && !empty($material_link)&& !empty($material_level)&& !empty($material_semester)){
            $material = new Material();
            $material->material_dept_id= (int)$material_dept_id;
            $material->material_link =$material_link;
            $material->material_title =$material_title;
            $material->material_level =$material_level;
            $material->material_semester =$material_semester;

            return $material;
        }else{
            return false;
        }

    }


    public static function find_the_Material($material_dept_id=0){
        global $database;
        $sql = "SELECT * FROM " . self::$db_table;
        $sql .= " WHERE material_dept_id = " . $database->escape_string($material_dept_id);
        $sql .= " ORDER BY material_dept_id ASC";

        return self::find_by_query($sql);


    }





} //END OF comment CLASS

