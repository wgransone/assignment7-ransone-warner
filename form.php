<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'warnerransone.com/assignment5-ransone-warner/' // Put you mail domain here
  ,
  "Warner's Macarons" // Put your site name / form name here
  ,
  'wgransone@me.com' // Where will the form notification be sent?
  ,
  'noreply@wgransone.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
