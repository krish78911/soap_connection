<?php 

$simple = '<soapenv:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:com="com.traserv.app.bookingservice" xmlns:soapenc="http://schemas.xmlsoap.org/soap/encoding/">
   <soapenv:Header/>
   <soapenv:Body>
      <com:getPriceInfo soapenv:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
         <in0 xsi:type="mod:Authorization" xmlns:mod="http://model.bookingservice.app.traserv.com">
            <isoLanguage xsi:type="xsd:string">nld</isoLanguage>
            <login xsi:type="xsd:string">XML_StratechTestGT</login>
            <pass xsi:type="xsd:string">stratech_test</pass>
         </in0>
         <in1 xsi:type="mod:BookingServiceRequest" xmlns:mod="http://model.bookingservice.app.traserv.com">
            <bookCodeString xsi:type="xsd:string">vrs-33798-18816365--20180409-2-1-0-0</bookCodeString>
            <parameters xsi:type="com:ArrayOf_tns1_Parameter" soapenc:arrayType="mod:Parameter[]"/>
            <touroperator xsi:type="xsd:string">OA</touroperator>
            <airportHotels xsi:type="com:ArrayOf_tns1_AirportHotel" soapenc:arrayType="mod:AirportHotel[]"/>
            <bookingControl xsi:type="mod:BookingControl">
               <sendMainBookerDataToTouroperator xsi:type="xsd:boolean">false</sendMainBookerDataToTouroperator>
            </bookingControl>
            <carRentalLocations xsi:type="com:ArrayOf_tns1_CarRentalLocation" soapenc:arrayType="mod:CarRentalLocation[]"/>
            <carRentals xsi:type="com:ArrayOf_tns1_CarRental" soapenc:arrayType="mod:CarRental[]"/>
            <couponCodes xsi:type="com:ArrayOf_xsd_string" soapenc:arrayType="xsd:string[]"/>
            <extras xsi:type="com:ArrayOf_tns1_Extra" soapenc:arrayType="mod:Extra[]"/>
            <homeContact xsi:type="mod:HomeContact">
               <address xsi:type="xsd:string">Am alten bach</address>
               <city xsi:type="xsd:string">kaarst</city>
               <country xsi:type="xsd:string">Germany</country>
               <countryCode xsi:type="xsd:string">DE</countryCode>
               <email xsi:type="xsd:string">example@gmail.com</email>
               <firstName xsi:type="xsd:string">test1</firstName>
               <gender xsi:type="xsd:string">M</gender>
               <initials xsi:type="xsd:string">JW</initials>
               <lastName xsi:type="xsd:string">test2</lastName>
               <namePrefix xsi:type="xsd:string">van der</namePrefix>
               <telephone xsi:type="xsd:string">7897897</telephone>
               <zipcode xsi:type="xsd:string">41460</zipcode>
            </homeContact>
            <housing xsi:type="com:ArrayOf_tns1_Housing" soapenc:arrayType="mod:Housing[]">
               <housing xsi:type="ns2:Housing">
                  <arrivalDate xsi:type="xsd:dateTime">2018-04-08T22:00:00.000Z</arrivalDate>
                  <assignments xsi:type="ns2:Assignment" xsi:nil="true"/>
                  <available xsi:type="xsd:int">1</available>
                  <boardCode xsi:type="xsd:string" xsi:nil="true"/>
                  <boards soapenc:arrayType="ns2:Board[1]" xsi:type="soapenc:Array">
                     <boards xsi:type="ns2:Board">
                        <code xsi:type="xsd:string">LG</code>
                        <description xsi:type="xsd:string">Logies</description>
                        <priceNotes xsi:type="xsd:string" xsi:nil="true"/>
                     </boards>
                  </boards>
                  <city xsi:type="xsd:string">Wedde</city>
                  <code xsi:type="xsd:string">2358_1002</code>
                  <country xsi:type="xsd:string">Nederland</country>
                  <departureDate xsi:type="xsd:dateTime">2018-04-10T22:00:00.000Z</departureDate>
                  <errata xsi:type="ns2:Erratum" xsi:nil="true"/>
                  <facilities soapenc:arrayType="ns2:Facility[0]" xsi:type="soapenc:Array"/>
                  <maxOccupation xsi:type="xsd:int">6</maxOccupation>
                  <messages xsi:type="ns2:Message" xsi:nil="true"/>
                  <minOccupation xsi:type="xsd:int">1</minOccupation>
                  <name xsi:type="xsd:string">Camping Wedderbergen</name>
                  <osiCode xsi:type="xsd:string" xsi:nil="true"/>
                  <price xsi:type="xsd:double">189.0</price>
                  <priceNotes xsi:type="xsd:string" xsi:nil="true"/>
                  <pricePer xsi:type="xsd:string" xsi:nil="true"/>
                  <status xsi:type="xsd:string">Available</status>
                  <subType xsi:type="xsd:string" xsi:nil="true"/>
                  <type xsi:type="xsd:string">Chalet</type>
                  <unitCode xsi:type="xsd:string">cha</unitCode>
                  <unitDescription xsi:type="xsd:string">Chalet 6 pers.</unitDescription>
                  <unitId xsi:type="xsd:string">1007</unitId>
                  <units xsi:type="xsd:int">1</units>
               </housing>
            </housing>
            <insurances xsi:type="com:ArrayOf_tns1_Insurance" soapenc:arrayType="mod:Insurance[]"/>
            <mainBooker xsi:type="mod:MainBooker">
               <address xsi:type="xsd:string">Am alten bach</address>
               <city xsi:type="xsd:string">kaarst</city>
               <country xsi:type="xsd:string">Germany</country>
               <countryCode xsi:type="xsd:string">DE</countryCode>
               <email xsi:type="xsd:string">example@gmail.com</email>
               <firstName xsi:type="xsd:string">test1</firstName>
               <gender xsi:type="xsd:string">M</gender>
               <initials xsi:type="xsd:string">JW</initials>
               <lastName xsi:type="xsd:string">test2</lastName>
               <namePrefix xsi:type="xsd:string">van der</namePrefix>
               <telephone xsi:type="xsd:string">7897897</telephone>
               <zipcode xsi:type="xsd:string">41460</zipcode>
            </mainBooker>
            <optionTrackingId xsi:type="xsd:string"></optionTrackingId>
            <parkings xsi:type="com:ArrayOf_tns1_Parking" soapenc:arrayType="mod:Parking[]"/>
            <remoteReservationNumber xsi:type="xsd:string">?</remoteReservationNumber>
            <taxis xsi:type="com:ArrayOf_tns1_Taxi" soapenc:arrayType="mod:Taxi[]"/>
            <transfers xsi:type="com:ArrayOf_tns1_Transfer" soapenc:arrayType="mod:Transfer[]"/>
            <transportRentals xsi:type="com:ArrayOf_tns1_TransportRental" soapenc:arrayType="mod:TransportRental[]"/>
            <transports xsi:type="com:ArrayOf_tns1_Transport" soapenc:arrayType="mod:Transport[]"/>
            <travelers xsi:type="com:ArrayOf_tns1_Traveler" soapenc:arrayType="mod:Traveler[]">
                <traveler xsi:type="mod:Traveler">
               <id xsi:type="xs:integer">1</id>
               <gender xsi:type="xs:string">M</gender>
               <firstName xsi:type="xs:string">Test1</firstName>
               <lastName xsi:type="xs:string">test2</lastName>
               <birthdate xsi:type="xs:date">1975-07-20T22:00:00.000Z</birthdate>
               <mainBooker xsi:type="xs:boolean">TRUE</mainBooker>
               </traveler>
            </travelers>
         </in1>
      </com:getPriceInfo>
   </soapenv:Body>
</soapenv:Envelope>';

$wsdl = new SOAP_WSDL($simple);
$origcode = $wsdl->generateProxyCode();

print "<pre>".$origcode."</pre>";

?>