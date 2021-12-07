<?php   
  ini_set('display_errors', 1);
  require('../connect.php');
  require('../vendor/autoload.php');
  $configs = require('../config.php');
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['name'])) {
        //name not given
        header("Location: ../submission.php?success=false");
        die();
    }
    if (!isset($_POST['phone_number'])) {
        //phone number not given
        header("Location: ../submission.php?success=false");
        die();
    }
    if (!isset($_POST['address'])) {
        //address not given
        header("Location: ../submission.php?success=false");
        die();
    }
    if (!isset($_POST['latitude'])) {
        //latitude not given
        header("Location: ../submission.php?success=false");
        die();
    }
    if (!isset($_POST['longitude'])) {
        //longitude not given
        header("Location: ../submission.php?success=false");
        die();
    }
    if (!isset($_FILES['image'])) {
        var_dump($_FILES);
        //image not given
        header("Location: ../submission.php?success=false");
        die();
        
    }
    try { 
        $s3 = new Aws\S3\S3Client([
            'region'  => 'us-east-2',
            'version' => 'latest',
            'credentials' => [
                'key'    => "AKIA3P72AD5DLRLFTKWS",
                'secret' => $configs['awsSecret'],
            ]
        ]);
            $upload = $s3->putObject([
                'Bucket' => 'food-librarian',
                'Key'    => $_FILES['image']['name'],
                'SourceFile' => $_FILES['image']['tmp_name']
            ]);
    } catch (Exception $e) {
        //error uploading image
        header("Location: ../submission.php?success=false");
    }

    $sql = "INSERT INTO restaurants (name, phone_number, address, latitude, longitude, image) VALUES (?, ?, ?, ?, ?, ?)";
    try {
        $db->prepare($sql)->execute([$_POST['name'], $_POST['phone_number'], $_POST['address'], $_POST['latitude'], $_POST['longitude'], $upload['ObjectURL']]);
        $id = $db->lastInsertId();
        header("Location: ../restaurant.php?id=" . $id);
    } catch (Exception $e) {
        header("Location: ../submission.php?success=false");
    }
  }
?>