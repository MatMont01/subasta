<?php

class SQLServer {
    
    public static $dbcon;
    
    function __construct() {
        self::$dbcon=null;
    }
    
	
    public static function connection() {
        if(self::$dbcon==null)
            self::$dbcon = sqlsrv_connect("(local)",array("Database"=>"APP_B2B", "UID"=>"vista", "PWD"=>"Panzerss33")); 
        return self::$dbcon;
    }
    
    public static function query($sql) {

		//$sql = self::sanitize($sql,'');
        $sqlquery = sqlsrv_query(self::connection(),$sql);
        $res=array();
        while ($row = sqlsrv_fetch_array($sqlquery,SQLSRV_FETCH_ASSOC)) { //ASSOC NUMERIC
            array_push($res,$row);
        }
        sqlsrv_free_stmt($sqlquery);
        return $res;
    }
	
	private static function clean_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data = mysql_real_escape_string($data);
		$data = preg_replace('/(\/|-|_)/','',$data);
		$data = escapeshellcmd($data);
		return $data;
	}
	
	private static function sanitize($var, $type)
	{
        switch($type) {
                case 'html':
                        $safe = htmlspecialchars($var);
                        break;
                case 'sql':
                        $safe = mysql_real_escape_string($var);
                        break;
                case 'file':
                        $safe = preg_replace('/(\/|-|_)/','',$var);
                        break;
                case 'shell':
                        $safe = escapeshellcmd($var);
                        break;
                default:
                        $safe = stripslashes($var);
        }
        return $safe;
	}
	
	public function mssql_escape($data) {
		if(is_numeric($data))
			return $data;
		$unpacked = unpack('H*hex', $data);
		return '0x' . $unpacked['hex'];
	}
	
	function mssql_escape_2($str) {
		if(get_magic_quotes_gpc())
		{
			$str = stripslashes($str);
		}
		return str_replace("'", "''", $str);
	}
	
	public function ms_escape_string($data) { 
	
		if ( !isset($data) or empty($data) ) return ''; 
		
		if ( is_numeric($data) ) return $data; 
		
		$non_displayables = array( '/%0[0-8bcef]/', // url encoded 00-08, 11, 12, 14, 15 
									'/%1[0-9a-f]/', // url encoded 16-31 
									'/[\x00-\x08]/', // 00-08 
									'/\x0b/', // 11 
									'/\x0c/', // 12 
									'/[\x0e-\x1f]/' // 14-31
									); 
									
		foreach ( $non_displayables as $regex ) 
			$data = preg_replace( $regex, '', $data ); 
			
		$data = str_replace("'", "''", $data ); 
		return $data; 
	}

}
