<?php
    if (isset($_POST['date']) && !empty($_POST['date'])) {
        $date = trim($_POST['date']);
    }

    $regex = '/^((([1-2][0-9])|([1-9]))/([2])/[0-9]{4})|((([1-2][0-9])|([1-9])|(3[0-1]))/((1[0-2])|([3-9])|([1]))/[0-9]{4})$/';
    if (preg_match($regex, $date)) {
        $disp_date = $date;

        //update the date in db
        $error = '';
    }
    else {
       $error = 'Invalid date format<br />';

       //get last date from db
       $disp_date = $date_from_db;
    }
    ?>
    <?=$error?>
    <form action="" method="POST">
        <input type="text" value="<?=$disp_date?>" name="date" />
        <input type="submit" value="Submit Date" />
    </form>