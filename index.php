<?php
// Enable error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Function to execute shell commands and return the output
function executeCommand($command) {
    $output = shell_exec($command);
    return $output;
}

// Get system information
$load = explode(' ', executeCommand('uptime'));
$memory = explode("\n", executeCommand('free -h'));
$disk = explode("\n", executeCommand('df -h'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>System Monitor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            max-width: 20px; /* Adjust this value to your preference */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>System Monitor</h1>
        <h2>Load Average</h2>
        <p><?php echo implode(', ', $load); ?></p>

        <h2>Memory Usage</h2>
        <table>
            <?php foreach ($memory as $line): 
                $parts = preg_split('/\s+/', $line);
                if (count($parts) > 1) { ?>
                    <tr>
                        <th><?php echo $parts[0]; ?></th>
                        <td><?php echo $parts[1]; ?></td>
                    </tr>
                <?php } ?>
            <?php endforeach; ?>
        </table>

        <h2>Disk Usage</h2>
        <table>
            <?php foreach ($disk as $line): 
                $parts = preg_split('/\s+/', $line);
                if (count($parts) > 1) { ?>
                    <tr>
                        <th><?php echo $parts[0]; ?></th>
                        <td><?php echo $parts[1]; ?></td>
                    </tr>
                <?php } ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
