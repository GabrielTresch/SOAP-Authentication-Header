<?php

$clientSoap = new SoapClient(   
    "URL" ,array("trace" => 1, "exceptions" => 0)   
);

$username = "YOUR_USERNAME"; // username
$password = base64_encode(sha1("YOUR_PASSWORD",TRUE)); // password

$securityHeader ='<wsse:Security xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
					<wsse:UsernameToken>
						<wsse:Username>'.$username.'</wsse:Username>
						<wsse:Password>'.$password.'</wsse:Password>
					</wsse:UsernameToken>
                </wsse:Security>';
                
$authvalues = new SoapVar($securityHeader,XSD_ANYXML);
$header = new SoapHeader("http://www.gesmag.com/","Security",$authvalues);
$clientSoap->__setSoapHeaders($header);

$param->codeClient = 25;

$return = $clientSoap->PARAMETER;

echo"<pre>";
var_dump($return);
echo"</pre>";

?>
