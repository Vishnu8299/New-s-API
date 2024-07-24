<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tesla News Articles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 20px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        h2 {
            margin: 0;
            font-size: 1.5em;
        }
        p {
            margin: 10px 0;
        }
        a {
            color: #1a0dab;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
    $api_url = 'https://newsapi.org/v2/everything?q=tesla&from=2024-06-22&sortBy=publishedAt&apiKey=83f7a716186b459f8cb9d1c6af4ca8ef';

    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'User-Agent: MyNewsApp/1.0'
    ));

    // Execute cURL request and fetch response
    $response = curl_exec($ch);

    // Close cURL session
    curl_close($ch);

    // Decode JSON data
    $news_data = json_decode($response, true);

    if (isset($news_data['articles']) && !empty($news_data['articles'])) {
        // Display the news articles
        echo '<h1>Tesla News Articles</h1>';
        echo '<ul>';
        foreach ($news_data['articles'] as $article) {
            echo '<li>';
            echo '<h2>' . htmlspecialchars($article['title']) . '</h2>';
            echo '<p>' . htmlspecialchars($article['description']) . '</p>';
            echo '<a href="' . htmlspecialchars($article['url']) . '" target="_blank">Read more</a>';
            echo '</li>';
        }
        echo '</ul>';
    } else {
        if (isset($news_data['status']) && $news_data['status'] === 'error') {
            echo 'Error: ' . htmlspecialchars($news_data['message']);
        } else {
            echo 'No articles found.';
        }
    }
    ?>
</body>
</html>
