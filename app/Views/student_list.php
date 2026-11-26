<?php
/** @var array $students */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Directory</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <div class="container">

        <div class="header">
            <h1>Student Directory</h1>
        </div>

        <div class="content">

            <p class="description">
                Select a student to view their profile.
            </p>

            <?php foreach ($students as $student): ?>

                <a class="student"
                   href="<?= site_url('students/' . $student['id']) ?>">

                    <strong>
                        <?= esc($student['full_name']) ?>
                    </strong>

                    <br>

                    <small>
                        Student ID: <?= esc($student['id']) ?>
                    </small>

                </a>

            <?php endforeach; ?>

        </div>

    </div>

</body>
</html>