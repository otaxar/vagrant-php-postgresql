#!/usr/local/bin/php

<?php
//Check whether the form has been submitted
if (array_key_exists('check_submit', $_POST))
{
    echo "<div style=\"background-color: #eee; padding: 2rem; font-family: sans-serif;\">";

    //Converts \n in Comments box into HTML line breaks (the<br />tag)
    $_POST['body'] = nl2br($_POST['body']);
    $_POST['subject'] = htmlentities($_POST['subject']);



    //Let's now print out the received values in the browser
    echo "<h3>Review and confirm</h3><br /><br />";
    echo "<b>Your SFU computing ID:</b> {$_POST['userid']} <br /><br />";
    echo "<b>Your email address:</b> {$_POST['email']} <br /><br />";
    echo "<b>Subject:</b> {$_POST['subject']}<br /><br />  ";
    echo "<b>Message:</b> <br /> {$_POST['body']}<br /><br />";
    echo("<a href='mailto:470cmpt@gmail.com?cc={$_POST['userid']}@sfu.ca&subject=CMPT 470: {$_POST['subject']}&body=<html><body>{$_POST['body']}<p>{$_POST['email']}</p></body></html>' target='_top'>Send email to <span class='code'>cmpt-470-help</span></a>");
    exit('<p><a href=\"http://www.cs.sfu.ca/CourseCentral/470/lisat/\">Cancel email and return to CMPT 470 homepage</a></p>');
    echo '</div>';
} else {
    echo "You can't view this page properly without submitting the form.";
}
?>