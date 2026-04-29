<?php 
// Created by gohilmitrajsinh
include 'questions.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Simple Quiz Application</h2>
<p style="text-align:center;">Developed by gohilmitrajsinh</p>

<form action="result.php" method="post">
    <?php foreach ($questions as $index => $q): ?>
        
        <div class="question-box">
            <p><strong><?php echo ($index + 1) . ". " . $q["question"]; ?></strong></p>

            <?php foreach ($q["options"] as $option): ?>
                <label>
                    <input type="radio" name="answer<?php echo $index; ?>" value="<?php echo $option; ?>" required>
                    <?php echo $option; ?>
                </label><br>
            <?php endforeach; ?>
        </div>

    <?php endforeach; ?>

    <br>
    <input type="submit" value="Submit Quiz">
</form>

</body>
</html>
