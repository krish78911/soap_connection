<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <link rel="stylesheet" href="main.css" type="text/css" />
            <link rel="stylesheet" href="couleur_typo.css" type="text/css" />
    </head>
    <body>

        <?php
        $sh = new SecureHolidayApi();
        $sh->LoadEstablishments();
        ?>
    </body>
</html>

<?php

class SecureHolidayApi {

    private $_wsdlUrl = "http://bookingservice.traserv.com/15/ax1?wsdl";

    function LoadEstablishments() {
        $client = new SoapClient($this->_wsdlUrl, array('trace' => 1, 'soap_version' => SOAP_1_1, 'connection_timeout' => 600));
        $showAllFunctions = $client->__getFunctions();

        $in0 = array(
            'isoLanguage' => 'nld',
            'login' => 'XML_StratechTestGT',
            'pass' => 'stratech_test',
        );

        $in1 = array(
            'bookCodeString' => 'vrs-33798-18816365--20180409-2-1-0-0',
            'touroperator' => 'OA',
            'bookingControl' => array(
                'sendMainBookerDataToTouroperator' => 'false',
            ),
			'extras' => array(),
            'homeContact' => array(
                'address' => 'Am alten bach',
                'city' => 'kaarst',
                'country' => 'Germany',
                'countryCode' => 'DE',
                'email' => 'example@gmail.com',
                'firstName' => 'test1',
                'gender' => 'M',
                'initials' => 'JW',
                'lastName' => 'test2',
                'namePrefix' => 'van der',
                'telephone' => '7987897',
                'zipcode' => '41460',
            ),
            'housing' => array(
                '0' => array(
                    'arrivalDate' => '2018-04-09T22:00:00.000Z',
                    'available' => '1',
                    'boards' => array(
                        '0' => array(
                            'code' => 'LG',
                            'description' => 'Logies',
                        ),
                    ),
                    'city' => 'Wedde',
                    'code' => '2358_1002',
                    'country' => 'Netherlands',
                    'departureDate' => '2018-04-10T22:00:00.000Z',
                    'maxOccupation' => '6',
                    'minOccupation' => '1',
                    'name' => 'Camping Wedderbergen',
                    'price' => '189.0',
                    'status' => 'Available',
                    'type' => 'Chalet',
                    'unitCode' => 'cha',
                    'unitDescription' => 'Chalet 6 pers.',
                    'unitId' => '1007',
                    'units' => '1',
                ),
            ),
            'mainBooker' => array(
                'address' => 'Am alten bach',
                'city' => 'kaarst',
                'country' => 'Germany',
                'countryCode' => 'DE',
                'email' => 'example@gmail.com',
                'firstName' => 'test1',
                'gender' => 'M',
                'initials' => 'JW',
                'lastName' => 'test2',
                'namePrefix' => 'van der',
                'telephone' => '7987897',
                'zipcode' => '41460',
            ),
            'travelers' => array(
                '0' => array(
                    'id' => '1',
                    'gender' => 'M',
                    'firstName' => 'Test1',
                    'lastName' => 'Test2',
                    'birthdate' => '1975-07-20T22:00:00.000Z',
                    'mainBooker' => 'TRUE',
                ),
            ),
        );

		$in2 = "true";


        $getData = $client->createBooking($in0, $in1, $in2);
        $array1 = json_decode(json_encode($getData), True);


        echo "<pre>";
        print_r($array1);
        echo "</pre>";
    }

    //$xml = new SimpleXMLElement($client->__getLastResponse());
}
?>