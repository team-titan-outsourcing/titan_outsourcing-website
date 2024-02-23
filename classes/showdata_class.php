<?php
include 'dbh_class.php';

class Showdata extends Dbh{

    public function show_all_data(){
        try {
            $sql = "SELECT * FROM client_tb;";
            $stml = $this->connect()->query($sql);
            $data = array();
            while($row = $stml->fetch()){
                $data[] = array("fname"=>$row['fname'], "lname"=>$row['lname'], "email"=>$row['email'], "contact_number"=>$row['contact_number'], "type_va"=>$row['type_va'], "crm_tool"=>$row['crm_tool'], "working_hours"=>$row['working_hours'], "task"=>$row['task'], "time_tracker"=>$row['time_tracker']);
            }
            return $data;
        } catch (\Throwable $th) {
            echo $th;
        }
    }

}