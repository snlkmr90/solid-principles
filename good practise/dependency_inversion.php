<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

interface loggerinterface{
    //service class or interface
    public function log_error(string $error);
}
class Logger implements loggerinterface{
    public function log_error($error) :string 
    {
        return $error;
    }

}
class DatabaseLogger{
    public function sendmail(loggerinterface $log){
        // try{

        // }catch(Exception $e){
          return $log->log_error('db logged').'</br>';
        //}
    }
}
class FileLogger{
    public function sendmail(loggerinterface $log){
        // try{

        // }catch(Exception $e){
          return $log->log_error('file logged').'</br>';
        //}
    }
}
$Logger = new Logger;
$DatabaseLogger = new DatabaseLogger();
$FileLogger = new FileLogger();
echo $DatabaseLogger->sendmail($Logger);
echo $FileLogger->sendmail($Logger);