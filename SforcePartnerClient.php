define("USERNAME", "pkkumar01994@gmail.com");
define("PASSWORD", "pankaj067");
define("SECURITY_TOKEN", "uA8dkGTXYY0PL2Krof6p3uYL");

require_once ('soapclient/SforcePartnerClient.php');

$mySforceConnection = new SforcePartnerClient();
$mySforceConnection->createConnection("PartnerWSDL.xml");
$mySforceConnection->login(USERNAME, PASSWORD.SECURITY_TOKEN);

$query = "SELECT Id, FirstName, LastName, Phone from Contact";
$response = $mySforceConnection->query($query);

foreach ($response->records as $record)
{
echo '<tr>
	<td>'.$record->Id.'</td>
	<td>'.$record->fields->FirstName.'</td>
	<td>'.$record->fields->LastName.'</td>
	<td>'.$record->fields->Phone.'</td>
	 </tr>';
 }
