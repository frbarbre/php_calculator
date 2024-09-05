<?php
$result = $_GET['result'] ?? null;
$num1 = $_GET['num1'] ?? null;
$num2 = $_GET['num2'] ?? null;
$operator = $_GET['operator'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2 class="title">Calculator</h2>
        <form method="post" action="backend.php" class="calculator-form">
            <div class="input-group">
                <?php
                echo '<input value="' . $num1 . '" type="text" name="num1" placeholder="Number 1" class="input">';
                echo '<input value="' . $num2 . '" type="text" name="num2" placeholder="Number 2" class="input">';
                ?>
            </div>
            <label for="operator">Operator
                <?php
                echo '
                    <select name="operator" class="select">
                        <option ' . ($operator === "None" ? "selected" : "") . '>None</option>
                        <option ' . ($operator === "Add" ? "selected" : "") . '>Add</option>
                        <option ' . ($operator === "Subtract" ? "selected" : "") . '>Subtract</option>
                        <option ' . ($operator === "Multiply" ? "selected" : "") . '>Multiply</option>
                        <option ' . ($operator === "Divide" ? "selected" : "") . '>Divide</option>
                    </select>
                    ';
                ?>
            </label>
            <button type="submit" name="submit" value="submit" class="button">Calculate</button>
        </form>

        <?php if ($result): ?>
            <div class="result-container">
                <h3 class="result-text">Result: <span class="result-value"><?php echo $result; ?></span></h3>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>