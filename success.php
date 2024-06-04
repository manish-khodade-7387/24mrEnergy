<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <!-- Add your CSS styles here if needed -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank You!</h1>
        
        <p><?php echo $message; ?></p>
        
        
    </div>
    <script>
        // Check if the page was refreshed
        if (window.performance && window.performance.navigation.type === window.performance.navigation.TYPE_RELOAD) {
            // Redirect to the index page
            window.location.href = '<?= base_url() ?>';
        }
    </script>
</body>
</html>
