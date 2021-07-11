<!DOCTYPE html>
<html lang = "en">

    <head>
            <title>View Booking Page</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="css3.css" />

            <style>
        table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100px;
  height: 100px;
  border: 1px solid #ddd;
        }

        th, td {
  text-align: left;
  padding: 16px;
        }

        tr:nth-child(even) {
  background-color: #f2f2f2;
        }
</style>
    </head>

        <body> 
                <form action=booking.php method="post">

                <div class="container">
                <section id="content">
                <p style="background-image: url('test.jpg');">
                
                <p style="text-align:center"><b>View Booking Page</p></b>
                <p>The following list are the bookings that you recently made:</p>


                <div style="overflow-x:auto;">
                <table>
                        <tr>
                                <th>Ticket Owner</th>
                                <th>Destination</th>
                                <th>Date of Travel</th>
                                <th>Type of Bus</th>
                                <th>Number of Seats</th>
                                <th>Amount Payable</th>
                                <th>Transaction ID</th>
                                
                        </tr>

                        <tr>   
                                <th><?php echo $_POST["fullname"]?></th>
                                <th><?php echo $_POST["destination"]?></th>
                                <th><?php echo $_POST["traveldate"]?></th>
                                <th><?php echo $_POST["typeofbus"]?></th>
                                <th><?php echo $_POST["seats"]?></th>
                                <th><?php echo $_POST["amount"]?></th>
                                <th><?php echo $_POST["codebox"]?></th>

                        </tr>
                </div>                
        </body>


                









<?php

