<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
</head>
<body>
    <h1>Activity4-Preview</h1>
    <?php
    if (empty($_POST['name'])) {
        echo "Name: Not Provided <br>";
    } else {
        echo "Name: " . $_POST['name'] . "<br>";
    }

    if (empty($_POST['surname'])) {
        echo "Surname: Not Provided <br>";
    } else {
        echo "Surname: " . $_POST['surname'] . "<br>";
    }

    if (empty($_POST['password'])) {
        echo "Password: Not Provided <br>";
    } else {
        echo "Password: " . $_POST['password'] . "<br>";
    }

    if (empty($_POST['address'])) {
        echo "Address: Not Provided <br>";
    } else {
        echo "Address: " . $_POST['address'] . "<br>";
    }

    if ($_POST['country'] == "Please select a country" || empty($_POST['country'])) {
        echo "Country: Not Provided <br>";
    } else {
        echo "Country: " . $_POST['country'] . "<br>";
    }


    if (empty($_POST['zip_code'])) {
        echo "Zip Code: Not Provided <br>";
    } else {
        echo "Zip Code: " . $_POST['zip_code'] . "<br>";
    }


    if (empty($_POST['e-mail'])) {
        echo "Email: Not Provided <br>";
    } else {
        echo "Email: " . $_POST['e-mail'] . "<br>";
    }

    if (empty($_POST['sex'])) {
        echo "Sex: Not Provided <br>";
    } else {
        echo "Sex: " . $_POST['sex'] . "<br>";
    }


    if (empty($_POST['language'])) {
        echo "Language: Not Provided <br>";
    } else {
        echo "Language: ";
        foreach ($_POST['language'] as $lang) {
            echo $lang . " ";
        }
        echo "<br>";
    }


    if (empty($_POST['about'])) {
        echo "About: Not Provided <br>";
    } else {
        echo "About: " . $_POST['about'] . "<br>";
    }
    ?>
</body>
</html>