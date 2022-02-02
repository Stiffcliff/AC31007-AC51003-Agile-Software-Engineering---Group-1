<html>
<h2>Make a suggestion of a sustainable example in Dundee!</h2>
<form action "contact.php" method = "post">

<p><label>Name of Place:</label><input name = "name" type="text" /></p>
<p><label>Location:</label><input name = "location" type = "text" /></p>
<p><label>Contact Email of Location:</label><input name = "contactEmail" type = "text" /></p>
<p><label>Phone Number of Location:</label><input name = "contactPhoneNumber" type = "text" /></p>
<p><label>Website:</label><input name = "website" type = "text" /></p>
<p><label>Description: </label><textarea name = "description"></textarea></p>

<p><input type = "submit" value = "Send" /></p>
</form>

<?php
$name = $_POST('name');
$location = $_POST('location');
$contactEmail = $_POST('contactEmail');
$contactPhoneNumber = $_POST('contactPhoneNumber');
$website = $_POST('website');
$description = $_POST('description');

require_once __DIR__ . 'sendgrid-php/sendgrid-php.php>';

$email = new \SendGrid\Mail\Mail();
$email->setFrom("group1sustainabledundee@gmail.com","Sustainable Dundee");
$email->setSubject("Example in Dundee");
$email->addTo("group1sustainabledundee@gmail.com","Sustainable Dundee");
$email->addContent("text/html","Name of place: $name");
$email->addContent("text/html","Location: $location");
$email->addContent("text/html","Contact Email of Location: $contactEmail");
$email->addContent("text/html","Phone Number of Location: $contactPhoneNumber");
$email->addContent("text/html","Website: $website");
$email->addContent("text/html","Description: $description");

$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
try{
    $response = $sendgrid->send($email);
    print $response->statusCode(). "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch(Exception $e){
    echo 'Caught exception: '. $e->getMessage()."\n";
}
?>
</html>
