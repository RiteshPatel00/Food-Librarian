<?php   
  // Requiring PHP files
  require('../connect.php');
  require('../vendor/autoload.php');
  $configs = require('../config.php');
  //Starting session
  session_start();

  // Running this code if we have a POST request and doing server side validation, if validation fails, the submission also fails
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Server side validation on name
    if (!isset($_POST['name'])) {
        //name not given
        header("Location: ../submission.php?success=false");
        die();
    }
    // Server side validation on phone number
    if (!isset($_POST['phone_number'])) {
        //phone number not given
        header("Location: ../submission.php?success=false");
        die();
    }
    // Server side validation on address
    if (!isset($_POST['address'])) {
        //address not given
        header("Location: ../submission.php?success=false");
        die();
    }

    // Server side validation on latitude and making sure it's between 90 and -90
    if ($_POST['latitude'] > 90 || $_POST['latitude'] < -90) {
        //invalid latitude
        header("Location: ../submission.php?success=false");
        die();
    }

    // Server side validation on longitude and making sure it's between 180 and -180 
    if ($_POST['longitude'] > 180 || $_POST['longitude'] < -180) {
        //invalid longitude
        header("Location: ../submission.php?success=false");
        die();
    }

    // Server side validation on image and making sure that the user uploads an image
    if (sizeof($_FILES['image']['name']) == 0) {
        //image not given
        header("Location: ../submission.php?success=false");
        die();
    }
    // Connecting to our S3 Bucket 
    try { 
        $s3 = new Aws\S3\S3Client([
            'region'  => 'us-east-2',
            'version' => 'latest',
            'credentials' => [
                'key'    => "AKIA3P72AD5DLRLFTKWS",
                'secret' => $configs['awsSecret'],
            ]
        ]);
            // Uploading image to the S3 Bucket
            $upload = $s3->putObject([
                'Bucket' => 'food-librarian',
                'Key'    => $_FILES['image']['name'],
                'SourceFile' => $_FILES['image']['tmp_name']
            ]);
    } catch (Exception $e) {
        //error uploading image
        header("Location: ../submission.php?success=false");
    }
    
    // Inserting the restaurant into our database with required fields
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