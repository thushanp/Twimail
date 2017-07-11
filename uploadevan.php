<?php
    if ((($_FILES["file"]["type"] == "audio/mpeg")
    || ($_FILES["file"]["type"] == "audio/mpeg3")
    || ($_FILES["file"]["type"] == "audio/x-mpeg-3")
    || ($_FILES["file"]["type"] == "video/x-mpeg")
    || ($_FILES["file"]["type"] == "video/mpeg")
    || ($_FILES["file"]["type"] == "audio/x-mpeg3")
    || ($_FILES["file"]["type"] == "audio/wav")
    || ($_FILES["file"]["type"] == "audio/m4a")
    || ($_FILES["file"]["type"] == "audio/mp3")
    || ($_FILES["file"]["type"] == "audio/x-mpeg-3")
    || ($_FILES["file"]["type"] == "audio/x-m4a"))
    && ($_FILES["file"]["size"] < 900000000000))
    {
        if ($_FILES["file"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
            session_start();
        }
        else
        {
            echo "Upload: " . $_FILES["file"]["name"] . "<br />";
            echo "Type: " . $_FILES["file"]["type"] . "<br />";
            echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
            echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

            if (file_exists("upload/" . $_FILES["file"]["name"]))
            {
                echo $_FILES["file"]["name"] . " already exists. ";
                $var_value = "upload/" . $_FILES["file"]["name"];

                $var = "http://ec2-13-59-179-35.us-east-2.compute.amazonaws.com/upload/" . $_FILES["file"]["name"];
                $_SESSION['url'] = $var;
            }
            else
            {
                move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
                echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
                echo "\nSuccess!";
                $var_value = "upload/" . $_FILES["file"]["name"];

                $var = "http://ec2-13-59-179-35.us-east-2.compute.amazonaws.com/upload/" . $_FILES["file"]["name"];
                $_SESSION['url'] = $var;
                // $url = 'http://ec2-13-59-179-35.us-east-2.compute.amazonaws.com/upload.php';
                // $myvars = "upload/" . $_FILES["file"]["name"];

                // $ch = curl_init( $url );
                // curl_setopt( $ch, CURLOPT_POST, 1);
                // curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
                // curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
                // curl_setopt( $ch, CURLOPT_HEADER, 0);
                // curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
                // $response = curl_exec( $ch );
            }
        }
    }
    else
    {
        echo "Invalid or nonexistent file" ." - " . $_FILES["file"]["size"] . " - " . $_FILES["file"]["type"];
    }
?>

<form method="get" action="evan.php">
    <input type="hidden" name="varname" value= <?php echo "http://ec2-13-59-179-35.us-east-2.compute.amazonaws.com/upload/" . $_FILES["file"]["name"] ?>>
    <input type="submit" value="Return">
</form>
<!-- <html>
Click <a href="parth.php?varname=<?php echo $var_value ?>">here</a> to go back to your landing page.
</html> -->

