public static function createClientID($apiName) {
       Artisan::call('passport:client',['--name'=>$apiName]);
       $consoleString = Artisan::output();
       $consoleString = explode('Client ID:',$consoleString);
       $consoleString = explode('Client secret:',($consoleString[1]??''));
       return [
       'client_id'     => (int)trim($consoleString[0]??''),
       'client_secret' => trim(trim($consoleString[1],'|'))
       ];
      }
