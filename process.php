<!DOCTYPE html>
<html>
<body>
    <h1>Gift Selection Results</h1>
    <?php
    if (isset($_GET['indices'])) {
        $indices = escapeshellarg($_GET['indices']);
        $command = "python3 gift_selector.py " . $indices;
        $output = shell_exec($command);
        echo "<pre>$output</pre>";
    } else {
        echo "<p>No indices provided. Please go back and select gifts.</p>";
    }
    ?>
    <br>
    <a href="gift_form.html">Go Back</a>
</body>
</html>
