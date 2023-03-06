<?php

    if(isset($_POST['submit'])){
        $datetime = $_POST["date/time"];
        $attendees = $_Post["attendees"];
        $meetingCost = $_Post["meeting_cost"];
        $futureEvents = $_Post["future_events"];
        $organization_name = $_Post["organization_name"];
        $members = $_Post["current_members"];
                
        $mailto = "josphball963@gmail.com";

        $headers = "Club: ".$organization_name;
        $txt = "You have received a confirmation email for a club form.\n\nClub: ".$organization_name."\nCurrent Members: ".$members."\nAttendees: ".$attendees."\nDate and time: ".$datetime."\nMeeting Cost: ".$meetingCost."\nFuture Events: ".$futureEvents;

        mail($mailto, "form submission", $txt, $headers);
        header("Location: index.php?mailsend");
    }

?>