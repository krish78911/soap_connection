<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
 
$test = 'xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
<soap:Body>
      <com:getBookableComponents soapenv:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
         <in0 xsi:type="mod:Authorization" xmlns:mod="http://model.bookingservice.app.traserv.com">
            <isoLanguage xsi:type="xsd:string">nld</isoLanguage>
            <login xsi:type="xsd:string">XML_StratechTestTest</login>
            <pass xsi:type="xsd:string">stratech_test</pass>
         </in0>
         <in1 xsi:type="mod:BookingOptionsRequest" xmlns:mod="http://model.bookingservice.app.traserv.com">
            <bookCodeString xsi:type="xsd:string">vrs-33798-18816365--20180409-2-2-0-0</bookCodeString>
            <touroperator xsi:type="xsd:string">OA</touroperator>
         </in1>
         <in2 xsi:type="xsd:boolean">true</in2>
      </com:getBookableComponents>

</soap:Body>
</soap:Envelope>';
 
//Change this variables.
$location_URL = 'http://bookingservice.traserv.com/15/ax1?wsdl';
$action_URL = "http://booking.traserv.com/bookservice-15-ax1/services/BookingService";
 
$client = new SoapClient(null, array(
'location' => $location_URL,
'uri'      => "",
'trace'    => 1,
));
 
try{
$order_return = $client->__doRequest($test,$location_URL,$action_URL,1);
//Get response from here
print_r($order_return);
}catch (SoapFault $exception){
var_dump(get_class($exception));
var_dump($exception);
}
 
?>