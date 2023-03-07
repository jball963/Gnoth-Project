<?php

    if(isset($_POST['submit'])){
        $datetime = $_POST["date/time"];
        $attendees = $_POST["attendees"];
        $meetingCost = $_POST["meeting_cost"];
        $futureEvents = $_POST["future_events"];
        $organization_name = $_POST["organization_name"];
        $members = $_Post["current_members"];
                
        $mailto = $_POST["rep"];

        $headers = "Club: ".$organization_name;
        $txt = "You have received a confirmation email for a club form.\n\nClub: ".$organization_name."\nCurrent Members: ".$members."\nAttendees: ".$attendees."\nDate and time: ".$datetime."\nMeeting Cost: ".$meetingCost."\nFuture Events: ".$futureEvents;

        mail($mailto, "form submission", $txt, $headers);
        header("Location: index.php?mailsend");
    }

?>