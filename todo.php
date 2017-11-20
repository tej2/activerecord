<?php
class todo extends formmodel {
    public $id;
    public $owneremail;
    public $ownerid;
    public $createddate;
    public $duedate;
    public $message;
    public $isdone;
    public $isdone;
    
    public static function getTablename(){
        $tableName='todos';
        return $tableName;
}
}
?>

