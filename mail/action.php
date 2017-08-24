<?php
 
    // Put your MailChimp API and List ID hehe
    $api_key = 'bc1aabfe89c3cd8703900e135aec9454-us7';
    $list_id = '944c549f98';
 
    // Let's start by including the MailChimp API wrapper
    include('MailChimp.php');
    // Then call/use the class
    use \DrewM\MailChimp\MailChimp;
    $MailChimp = new MailChimp($api_key);
 
    // Submit subscriber data to MailChimp
    // For parameters doc, refer to: http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
    // For wrapper's doc, visit: https://github.com/drewm/mailchimp-api
    $result = $MailChimp->post("lists/$list_id/members", [
                            'email_address' => $_POST["email"],
                            'merge_fields'  => ['FNAME'=>$_POST["fname"], 'LNAME'=>" "],
                            'status'        => 'subscribed',
                        ]);
 
    if ($MailChimp->success()) {
        // Success message
        echo "<h4>Thank you, you have been added to our mailing list.</h4>";
    } else {
        // Display error
        echo $MailChimp->getLastError();
        // Alternatively you can use a generic error message like:
        // echo "<h4>Please try again.</h4>";
    }
?>