<?php


//  include("xmlrpc.inc");
//require_once __DIR__.'/../vendor/autoload.php';

require_once '../vendor/autoload.php';
include '../vendor/phpxmlrpc/phpxmlrpc/lib/xmlrpc.inc';
include '../vendor/phpxmlrpc/phpxmlrpc/lib/xmlrpcs.inc';
$GLOBALS['xmlrpc_internalencoding'] = 'UTF-8';
use App\Http\Controllers\CollectorConfig;
use PhpXmlRpc\Value;
use PhpXmlRpc\Request;
use PhpXmlRpc\Client;



  $url= 'https://wired.wubook.net/xrws/';
   $token = "wr_5a964cbd-4678-46ea-81b6-262be1f073f3";
   $lcode = "1515700178";

  $client = new Client($url);
   
  //$args= array(new xmlrpcval($token, 'string'), new xmlrpcval($lcode, 'string'));
  //$response = new xmlrpcmsg('fetch_rooms', $args);

   //$response = $client->send(new Request('method', array(new Value('parameter'))));
  
   $args= array(new \xmlrpcval($token, 'string'), new \xmlrpcval($lcode, 'string'));
   $response = $client->send(new Request("fetch_rooms", $args));
  

   
   var_dump($response);
   
   /*
   foreach($response as $r)
{
   echo "<hr>";
   var_dump($r);  
}
*/


   
   //echo $message;

/*
  $server = new xmlrpc_client($url);
  $args= array(new xmlrpcval($token, 'string'), new xmlrpcval($lcode, 'string'));
  $message = new xmlrpcmsg('fetch_rooms', $args);
  $struct = $server->send($message)->value();
*/



?>


