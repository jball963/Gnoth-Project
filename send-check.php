<?php

    if(isset($_POST['submit'])){
        $payment = $_POST["payment"];
        $amount = $POST["amount"];
        $reason = $POST["reason"];
        $Individual = $POST["Individual"];
        $organization_name = $POST["organization_name"];
        $when = $POST["when"];
        $date = $POST["date"];
        $Comments = $_POST["Comments"];
                
        $mailto = $_POST["payment"];
        
        $headers = "Club: ".$organization_name;
        $txt = "You have received a confirmation email for a club form.\n\nClub: ".$organization_name."\nPayment: ".$payment."\nAmount: ".$amount."\nReason: ".$reason."\nMember: ".$Individual."\nWhen needed: ".$when."\nDate: ".$date."Comment: ".$comments;

        mail($mailto, "form submission", $txt, $headers);
        header("Location: index.php?mailsend");
    }

?>