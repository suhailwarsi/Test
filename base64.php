<?php
$output = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['input'] ?? '';
    $output = base64_encode($input);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Base64 Encoder</title>
</head>
<body>
    <h2>Base64 Encoder</h2>
    <form method="post">
        <label for="input">Input:</label><br>
        <input type="text" id="input" name="input" required><br><br>
        <input type="submit" value="Encode">
    </form>
    <?php if ($output !== ''): ?>
    <p>Encoded output: <?php echo htmlspecialchars($output); ?></p>
    <?php endif; ?>
</body>
</html>
