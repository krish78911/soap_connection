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
            'isoLanguage' => 'en',
            'login' => 'XML_StratechTestGT',
            'pass' => 'stratech_test',
        );

        $in1 = array(
            'bookCodeString' => 'vrs-33798-18816365--20180409-2-2-0-0',
            'touroperator' => 'OA',
        );

        $in2 = 'true';



        $getData = $client->getBookableComponents($in0, $in1, $in2);
        $array1 = json_decode(json_encode($getData), True);

        $noofextras = count($array1['extras']);

        echo "no of extras " . $noofextras . "<br><br>";


        for ($i = 0; $i < $noofextras; $i++) {
            //$array1['extras'][$i][''];
            $extraname = $array1['extras'][$i]['description'];
            $extraprice = $array1['extras'][$i]['price'];
            $extraid = $array1['extras'][$i]['extraId'];
            $extrasstatus = $array1['extras'][$i]['status'];



            if ($extrasstatus == "Optional") {

                $extrasmaxcount = $array1['extras'][$i]['maxQuantity'];

                if (!empty($extrasmaxcount)) {
                    echo "<label>" . $extraname . "</label>";
                    echo "<select name='extrasids[]'>";
                    for ($k = 0; $k < $extrasmaxcount; $k++) {
                        echo "<option value='" . $extraid . "'>" . $k . " (" . $k * $extraprice . ")</option>";
                    }
                    echo "</select>";
                    echo "<br>";
                }
            } else {
                $extrasmincount = $array1['extras'][$i]['minQuantity'];
				if (!empty($extrasmincount)) {
                    echo "<label>" . $extraname . "</label>";
                    echo "<select name='extrasids[]'>";
                    for ($k = 1; $k <= $extrasmincount; $k++) {
                        echo "<option value='" . $extraid . "'>" . $k . " (" . $k * $extraprice . ")</option>";
                    }
                    echo "</select>";
                    echo "<br>";
                }
            }
        }

        echo "<pre>";
        print_r($array1);
        echo "</pre>";
    }

    //$xml = new SimpleXMLElement($client->__getLastResponse());
}
?>