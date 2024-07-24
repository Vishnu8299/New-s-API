# New-s-API


# Tesla News Articles

This project is a simple web application that fetches and displays the latest news articles about Tesla using the NewsAPI.

## Description

The application uses PHP to make a cURL request to the NewsAPI and retrieve news articles about Tesla. The articles are then displayed on a webpage with their titles, descriptions, and links to read more.

## Installation

### Prerequisites

- A web server with PHP installed (e.g., Apache, Nginx, XAMPP, WAMP)
- An API key from [NewsAPI](https://newsapi.org/)


## Video-Output :-

https://github.com/user-attachments/assets/b86e3013-893d-43d2-b1a9-7ad7525f42d2







This HTML document is a simple web page that displays news articles related to "apple" fetched from an external news API. Here's a breakdown of the code:

## HTML Structure :
<!DOCTYPE html>: Declares the document type and version of HTML.
<html lang="en">: Root element of the document, specifying the language as English.
<head>: Contains meta-information about the document.
<meta charset="UTF-8">: Sets the character encoding to UTF-8.
<meta name="viewport" content="width=device-width, initial-scale=1.0">: Ensures the page is responsive and scales properly on different devices.
<title>: Sets the title of the web page as seen in the browser tab.
<style>: Contains CSS styles for the page, including font, margins, padding, and link styling.

  
## PHP Code :
<?php ... ?>: PHP script embedded within the HTML to dynamically fetch and display news articles.

$api_url: The URL of the API endpoint to fetch news articles about "apple". This URL includes parameters for date range, sorting, and an API key.



### cURL Initialization:

curl_init(): Initializes a cURL session.
curl_setopt(): Sets various options for the cURL session, such as the URL to fetch, returning the transfer as a string, and adding a custom user agent header.
curl_exec(): Executes the cURL request and retrieves the response.
curl_close(): Closes the cURL session.
json_decode($response, true): Decodes the JSON response into a PHP associative array.

if (isset($news_data['articles']) && !empty($news_data['articles'])):

Checks if the 'articles' key exists and is not empty in the decoded response.
echo '<h1>Tesla News Articles</h1>'Outputs the main heading.
foreach ($news_data['articles'] as $article): Loops through each article in the response and outputs the title, description, and a link to the full article.


## Error Handling:

Checks if the API response contains an error status.
Displays an error message or a 'No articles found' message if applicable.



## Summary:

This document combines HTML and PHP to create a dynamic news feed webpage. It fetches data from the News API, processes it, and displays the results in a user-friendly format. The styling is minimal and focuses on readability and link interactions.






