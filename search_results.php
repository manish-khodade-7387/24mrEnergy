<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
    <?php include 'Header.php'; ?>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Search Results</h2>
            <?php if (!empty($searchResults)): ?>
                <ul>
                    <?php foreach ($searchResults as $result): ?>
                        <li>
                            <h3><?= esc($result['report_title']) ?></h3>
                            <p>Publish Date: <?= esc($result['publishdate']) ?></p>
                            <p>Overview: <?= esc($result['overview']) ?></p> <!-- Print the overview here -->

                            <!-- Add other details you want to display -->
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No results found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include 'Footer.php'; ?>

</body>
</html>
