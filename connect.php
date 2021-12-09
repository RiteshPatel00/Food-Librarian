<!-- Connect PHP file to connect to our server's database -->
<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=library', 'librarian', 'password123');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>