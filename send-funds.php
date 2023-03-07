<?php

    if(isset($_POST['submit'])){
        $organization_name = $_Post["organization_name"];
        $date = $_POST["date"];
        $description = $_POST["description"];
        $location = $_POST["Location"];
        $funds = $_POST["funds"];
        
        $contact = $_POST["contact"];

        $headers = "Club: ".$organization_name;
        $txt = "You have received a confirmation email for a club form.\n\nClub: ".$organization_name."\nFunds Requested: ".$funds."\nDescription: ".$description."\nLocation: ".$location."\nDate: ".$date;

        mail($mailto, "form submission", $txt, $headers);
        header("Location: index.php?mailsend");
    }

?>