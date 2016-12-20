<?php
/**
 * Created by PhpStorm.
 * User: Thomv
 * Date: 12/19/2016
 * Time: 1:24 PM
 */

require_once ('connect.php');

//$date_month = "2017-02-01";
//
//echo date('w', strtotime($date_month));
//
//echo '<br/>';
//
//$days_before = date('w', strtotime($date_month)) - 1;
//
//echo $days_before;
//
//echo '<br/>';
//
//$days_after = 7 - date('w', strtotime(date("Y-m-t", strtotime($date_month))));
//
//echo $days_after;
//
//echo '<br/>';

?>

<link href="style.css" rel="stylesheet" type="text/css">

<div id="feb">
    <table>
        <tr>
            <th colspan="7">February</th>
        </tr>
        <tr>
            <td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td><td>Sa</td><td>Su</td>
        </tr>
        <tr>
            <?php
            $first_month_date = '2017-02-01';
            $days_before = date('w', strtotime($first_month_date)) - 1;
//            for($i = 0; $i < $days_before; $i++) {
//                echo '<td>&nbsp</td>';
//            }
            $days_after = 7 - date('w', strtotime(date("Y-m-t", strtotime($first_month_date))));
            $stmt = $conn->prepare('SELECT * FROM calender');
            if ($stmt->execute()){
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $id = $row['id'];
                    $day = date('j', strtotime($row['date']));
                    $month = date('n', strtotime($row['date']));
                    $status = $row['status'];

                    if ($month == substr($first_month_date, 5, 2) OR $month == 1) {
                        echo '<td><a href="reg.php?id='.$id.'">'.$day.'</a></td>';
                        if (date('w', strtotime($row['date'])) == 0) {
                            echo '</tr><tr>';

                        }
                    }
                }
            }
            for($i = 0; $i < $days_after; $i++) {
                echo '<td>&nbsp</td>';
            }

            ?>
        </tr>
    </table>
</div>

<div id="mar">
    <table>
        <tr>
            <th colspan="7">March</th>
        </tr>
        <tr>
            <td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td><td>Sa</td><td>Su</td>
        </tr>
        <tr>
            <?php
            $first_month_date = '2017-03-01';
            $days_before = date('w', strtotime($first_month_date)) - 1;
            for($i = 0; $i < $days_before; $i++) {
                echo '<td>&nbsp</td>';
            }
            $days_after = 7 - date('w', strtotime(date("Y-m-t", strtotime($first_month_date))));
            $stmt = $conn->prepare('SELECT * FROM calender');
            if ($stmt->execute()){
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $id = $row['id'];
                    $day = date('j', strtotime($row['date']));
                    $month = date('n', strtotime($row['date']));
                    $status = $row['status'];

                    if ($month == substr($first_month_date, 5, 2)) {
                        echo '<td><a href="reg.php?id='.$id.'">'.$day.'</a></td>';
                        if (date('w', strtotime($row['date'])) == 0) {
                            echo '</tr><tr>';

                        }
                    }
                }
            }
            for($i = 0; $i < $days_after; $i++) {
                echo '<td>&nbsp</td>';
            }

            ?>
        </tr>
    </table>
</div>

<div id="apr">
    <table>
        <tr>
            <th colspan="7">April</th>
        </tr>
        <tr>
            <td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td><td>Sa</td><td>Su</td>
        </tr>
        <tr>
            <?php
            $first_month_date = '2017-04-01';
            $days_before = date('w', strtotime($first_month_date)) - 1;
            for($i = 0; $i < $days_before; $i++) {
                echo '<td>&nbsp</td>';
            }
            $days_after = 0; //- date('w', strtotime(date("Y-m-t", strtotime($first_month_date))));
            $stmt = $conn->prepare('SELECT * FROM calender');
            if ($stmt->execute()){
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $id = $row['id'];
                    $day = date('j', strtotime($row['date']));
                    $month = date('n', strtotime($row['date']));
                    $status = $row['status'];

                    if ($month == substr($first_month_date, 5, 2)) {
                        echo '<td><a href="reg.php?id='.$id.'">'.$day.'</a></td>';
                        if (date('w', strtotime($row['date'])) == 0) {
                            echo '</tr><tr>';

                        }
                    }
                }
            }
            for($i = 0; $i < $days_after; $i++) {
                echo '<td>&nbsp</td>';
            }

            ?>
        </tr>
    </table>
</div>

<div id="may">
    <table>
        <tr>
            <th colspan="7">May</th>
        </tr>
        <tr>
            <td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td><td>Sa</td><td>Su</td>
        </tr>
        <tr>
            <?php
            $first_month_date = '2017-05-01';
            $days_before = date('w', strtotime($first_month_date)) - 1;
            for($i = 0; $i < $days_before; $i++) {
                echo '<td>&nbsp</td>';
            }
            $days_after = 7 - date('w', strtotime(date("Y-m-t", strtotime($first_month_date))));
            $stmt = $conn->prepare('SELECT * FROM calender');
            if ($stmt->execute()){
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $id = $row['id'];
                    $day = date('j', strtotime($row['date']));
                    $month = date('n', strtotime($row['date']));
                    $status = $row['status'];

                    if ($month == substr($first_month_date, 5, 2)) {
                        echo '<td><a href="reg.php?id='.$id.'">'.$day.'</a></td>';
                        if (date('w', strtotime($row['date'])) == 0) {
                            echo '</tr><tr>';

                        }
                    }
                }
            }
            for($i = 0; $i < $days_after; $i++) {
                echo '<td>&nbsp</td>';
            }

            ?>
        </tr>
    </table>
</div>

<div id="jun">
    <table>
        <tr>
            <th colspan="7">June</th>
        </tr>
        <tr>
            <td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td><td>Sa</td><td>Su</td>
        </tr>
        <tr>
            <?php
            $first_month_date = '2017-06-01';
            $days_before = date('w', strtotime($first_month_date)) - 1;
            for($i = 0; $i < $days_before; $i++) {
                echo '<td>&nbsp</td>';
            }
            $days_after = 7 - date('w', strtotime(date("Y-m-t", strtotime($first_month_date))));
            $stmt = $conn->prepare('SELECT * FROM calender');
            if ($stmt->execute()){
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $id = $row['id'];
                    $day = date('j', strtotime($row['date']));
                    $month = date('n', strtotime($row['date']));
                    $status = $row['status'];

                    if ($month == substr($first_month_date, 5, 2)) {
                        echo '<td><a href="reg.php?id='.$id.'">'.$day.'</a></td>';
                        if (date('w', strtotime($row['date'])) == 0) {
                            echo '</tr><tr>';

                        }
                    }
                }
            }
            for($i = 0; $i < $days_after; $i++) {
                echo '<td>&nbsp</td>';
            }

            ?>
        </tr>
    </table>
</div>
