<!DOCTYPE html>
<html>
<body>
    <h1>Gift Selection Form - FINAL EXAM </h1>
    <p>Available Gifts:</p>
    <ul>
        <?php
        // Lista de regalos predefinidos
        $gifts = [
            "Book", "Toy", "Gadget", "Video Game", "Headphones",
            "Smartphone", "Laptop", "Watch", "Shoes", "Wallet",
            "Headset", "Camera", "Drone", "Smart Watch", "Bluetooth Speaker"
        ];
        foreach ($gifts as $index => $gift) {
            echo "<li>$index: $gift</li>";
        }
        ?>
    </ul>
    <form method="GET" action="process.php">
        <label for="indices">Enter gift indices separated by commas:</label>
        <input type="text" id="indices" name="indices" placeholder="e.g., 0,1,2" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
