<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Placement Calendar</title>
    <!-- Include FullCalendar CSS -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css' rel='stylesheet' />
    <style>
        /* Style for buttons */
        button[type="submit"],
        button[type="button"] {
            background-color: #007bff; /* Blue */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        /* Style for datepickers */
        input[type="date"] {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 20%;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        /* Style for the event title input */
        #title {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 20%;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        /* Style for the calendar container */
        #calendar {
            max-width: 800px;
            margin: 0 auto;
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Style for today button */
        .fc-today-button {
            background-color: #28a745; /* Green */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 16px;
            margin-right: 10px;
            cursor: pointer;
        }

        /* Style for navigation arrows */
        .fc-prev-button, .fc-next-button {
            background-color: #ffc107; /* Yellow */
            color: black;
            border: none;
            border-radius: 50%;
            padding: 8px;
            margin-right: 10px;
            cursor: pointer;
        }

        
    </style>
</head>
<body>
    
    <!-- Calendar container -->
    <div id='calendar'></div>

    <!-- Event form -->
    <form id="eventForm">
        <label for="title">Event Title:</label>
        <input type="text" id="title" name="title"><br>
        <label for="start">Start Date:</label>
        <input type="date" id="start" name="start"><br>
        <label for="end">End Date:</label>
        <input type="date" id="end" name="end"><br>
        <button type="submit" name="submit">Add Event</button>
    </form>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
            // Initialize FullCalendar
            $('#calendar').fullCalendar({
                // Calendar options
            });

            // Event submission
            $('#eventForm').submit(function(e) {
                e.preventDefault();
                // Get event details from the form
                var eventData = {
                    title: $('#title').val(),
                    start: $('#start').val(),
                    end: $('#end').val()
                };
                // Add event to the calendar
                $('#calendar').fullCalendar('renderEvent', eventData, true);
                // Reset form fields
                $('#eventForm')[0].reset();
            });
        });
    </script>
</body>
</html>
<?php
include "config.php";


if (isset($_POST['submit'])) 
{
// Fetch events from the database

$add = mysqli_query($conn, "insert into events (title,start,end)
values ('$title','$start','$end')") or die(mysqli_error($conn));

// Add event to the database
if ($add) {
    echo "<script>;";
    echo "window.alert('Data insert successfully....!');";
    echo 'window.location.href = "index.php";';
    echo "</script>";
} else {
    echo "<script>;";
    echo "window.alert('Data error....!');";
    echo "</script>";
}

// Update event in the database

}
?>

