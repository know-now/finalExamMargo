<?php

$errors = array();
if (empty($_POST['name'])) {
    $errors['name'] = 'Name of the candy is required <br>';
}
if (empty($_POST['price'])) {
    $errors['price'] = 'Price of the candy is required <br>';
}
if (empty($_POST['categ_id'])) {
    $errors['categ_id'] = 'Category of the candy is required <br>';
}

if (count($errors) == 0) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['categ_id'];
    echo "Form is OK <br>";
    $conn = mysqli_connect('localhost', 'root', '', 'candy_shop');
    if ($conn) {
        echo 'Connected successfully<br>';
        $query = "INSERT INTO candy (name, price, categ_id) 
        VALUES ('$name', '$price', $category)";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo 'Successfully inserted in the DB.';
        } else {
            echo 'Problem inserting.';
        }
    }
} else {
    foreach ($errors as $error) {
        echo "Error: " . $error . "\n";
    }
}

