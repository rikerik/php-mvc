<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ads</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Advertisements</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ads as $ad): ?>
                <tr>
                    <td><?php echo htmlspecialchars($ad['id']); ?></td>
                    <td><?php echo htmlspecialchars($ad['userid']); ?></td>
                    <td><?php echo htmlspecialchars($ad['title']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="/php-mvc/">Back to Index</a>
</body>
</html>
