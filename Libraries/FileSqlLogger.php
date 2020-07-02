<?php
class FileSqlLogger implements Doctrine\DBAL\Logging\SQLLogger {

	public function startQuery($sql, array $params = null, array $types = null) 
	{
                $log_dir =  APPPATH.'logs/Doctrine/queries';
	
		$today =date('d-m-Y');
		$file_name = "{$log_dir}/Query_log_{$today}.sql";

                $handle = fopen($file_name, "a+");                 // Opening file with pointer at the end of the file
                $now = date('H:i:s');
                $sql = "-- {$now} \n{$sql} \n   with parameters " ;
                
                foreach ( $params as $param):
                    if(is_a($param, 'DateTime'))
                         $param = $param->format('Y-m-d H:i:s');
                        
                    $sql .= $param;
                endforeach;
                fwrite($handle, $sql . "\n\n");              // Writing it in the log file
                fclose($handle);    
	}
        public function stopQuery(){
            
        }
}