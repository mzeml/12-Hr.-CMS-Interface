<?php

class acmecms {
 var $host;
 var $username;
 var $password;
 var $table;

public function display_public(){

}
public function display_admin(){
}
public function write(){
}
public function connect(){
	echo "attempt to connect!";
   mysql_connect($this->host,$this->username,$this->password) or die("Could not connect. " . mysql_error());
   mysql_select_db($this->table) or die("Could not select datatable. " . mysql_error());

   return $this->buildDB();
}
private function buildDB() {
    $sql = <<<MySQL_QUERY

    MySQL_QUERY;
    return mysql_query($sql);
}

}

?>
