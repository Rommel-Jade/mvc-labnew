<?php
/** @var array $student */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <div class="container">

        <div class="header">
            <h1>Student Profile</h1>
        </div>

        <div class="content">

            <div class="profile">

                <p>
                    <strong>Name:</strong>
                    <?= esc($student['full_name']) ?>
                </p>

                <p>
                    <strong>Course:</strong>
                    <?= esc($student['course']) ?>
                </p>

            </div>

            <a class="btn" href="<?= site_url('students') ?>">
                Back to Student List
            </a>

        </div>

    </div>

</body>
</html>