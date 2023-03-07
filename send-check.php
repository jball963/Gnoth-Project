<?php

    if(isset($_POST['submit'])){
        $payment = $_Post["payment"];
        $amount = $_Post["amount"];
        $reason = $_Post["reason"];
        $Individual = $_Post["Individual"];
        $organization_name = $_Post["organization_name"];
        $when = $_Post["when"];
        $date = $_Post["date"];
        $Comments = $_Post["Comments"];
                
        $mailto = $_POST["payment"];
        
        $headers = "Club: ".$organization_name;
        $txt = "You have received a confirmation email for a club form.\n\nClub: ".$organization_name."\nPayment: ".$payment."\nAmount: ".$amount."\nReason: ".$reason."\nMember: ".$Individual."\nWhen needed: ".$when."\nDate: ".$date."Comment: ".$comments;

        mail($mailto, "form submission", $txt, $headers);
        header("Location: index.php?mailsend");
    }

?>