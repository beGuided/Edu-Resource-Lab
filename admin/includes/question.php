<?php

class Question extends Db_object {

    protected static $db_table = "past_question";
    protected static $db_table_field = array( 'question_title', 'question_link','question_dept_id','question_level','question_type','question_semester','question_school','question_image');
    public $id;
    public $question_title;
    public $question_link;
    public $question_dept_id;
    public $question_level;
    public $question_type;
    public $question_semester;
    public $question_school;
  public $question_image;


    public static function create_question($question_dept_id,  $question_title='',$question_link='',  $question_level='',$question_type='',$question_semester='',$question_school='',$question_image=''){
        if(!empty($question_dept_id) && !empty($question_title)&& !empty($question_school) && !empty($question_link)&& !empty($question_level)&& !empty($question_type)&& !empty($question_semester)&& !empty($question_image)){
            $question = new Question();
            $question->question_dept_id= $question_dept_id;
            $question->question_link =$question_link;
            $question->question_title =$question_title;
            $question->question_level =$question_level;
            $question->question_type =$question_type;
            $question->question_semester =$question_semester;
            $question->question_school =$question_school;
            $question->question_image =$question_image;

            return $question;
        }else{
            return false;
        }

    }


    public static function first_semester($question_dept_id, $question_level, $question_type,$question_semester){
        global $database;
        $sql = "SELECT * FROM past_question
                WHERE question_dept_id = '$question_dept_id'
                AND question_level='$question_level'
                AND question_type='$question_type'
                AND question_semester='$question_semester' ";


//        $sql = "SELECT * FROM " . self::$db_table;
//        $sql .= " WHERE question_dept_id = " . $database->escape_string('{$question_dept_id}') ;
//        $sql .= " AND question_level = " . $database->escape_string('$question_level');
//        $sql .= " AND question_type = " . $database->escape_string($question_type);
//        $sql .= " AND question_semester = ". $database->escape_string($question_semester) ;
        return self::find_by_query($sql);

    }

    public static function second_semester($question_dept_id, $question_level,$question_type,$question_semester){
        global $database;
        $sql = "SELECT * FROM past_question 
                WHERE question_dept_id = '$question_dept_id'
                AND question_level='$question_level' 
                AND question_type='$question_type' 
                AND NOT question_semester='$question_semester' ";
        return self::find_by_query($sql);

    }


    public static function question_by_Test($question_dept_id, $question_level,$question_type,$question_semester){
        global $database;
        $sql = "SELECT * FROM past_question 
                WHERE question_dept_id = '$question_dept_id'
                AND question_level='$question_level' 
                AND question_type='$question_type' 
                AND question_semester='$question_semester'  ";
        return self::find_by_query($sql);

    }

    public static function question_by_Test_second($question_dept_id, $question_level,$question_type,$question_semester){
        global $database;
        $sql = "SELECT * FROM past_question 
                WHERE question_dept_id = '$question_dept_id'
                AND question_level='$question_level' 
                AND question_type='$question_type' 
                AND NOT question_semester='$question_semester'  ";
        return self::find_by_query($sql);

    }



    public static function find_nce_school($question_school)
    {
        global $database;

        $sql = "SELECT * FROM past_question 
            WHERE question_school = '$question_school'" ;

        return self::find_by_query($sql);

    }
    public static function find_degree_school($question_school)
    {
        global $database;
        $sql = "SELECT * FROM past_question 
            WHERE question_school = '$question_school'" ;

        return self::find_by_query($sql);

    }

} //END OF comment CLASS

