<!-- Connect PHP file to connect to our server's database -->
<?php
try {
    // For SQL injection prevention, all of our database queries were done using PDO parameterized queries
    $db = new PDO('mysql:host=localhost;dbname=library', 'librarian', 'password123');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>