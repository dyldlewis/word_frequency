# Word Frequency

#### Search for a word in a string

#### By Dylan Lewis

## Description

This program allows the user to enter a word and a string. The program then searches the string for the word and returns the amount of times the word appears in the string.

## Specs

* The program returns 0 when no matches are found
-word to count: "for"
-string to use: "the"
-output: "count: 0"
* The program can return the count for a single word
-word to count: "apple"
-string to use: "apple"
-output: "count: 1"
* The program can return the count for a multiple words
-word to count: "apple"
-string to use: "apple on my apple"
-output: "count: 2"
* The program can return the count regardless of capitalization
-word to count: "chicken"
-string to use: "Chicken soup tastes great with chicken breast"
-output: "count: 2"
* The program will not count integers
-word to count: 45
-string to use: "It's 45 degrees outside"
-output: "Please enter words"

## Prerequisites
* Both php and composer are required for this app, if you do not yet have them installed you can follow this tutorial here:
Mac - https://www.learnhowtoprogram.com/php/getting-started-with-php/installing-composer-and-configuration-for-mac
Pc - https://www.learnhowtoprogram.com/php/getting-started-with-php/installing-composer-and-configuration-for-windows
* If you do not have a local server set up, you'll need to install MAMP as well https://www.learnhowtoprogram.com/php/getting-started-with-php/installing-php


## Setup/Installation Requirements

* Locate repository on github https://github.com/dyldlewis/word_frequency
* Copy the link to the github repository
* Open terminal on your computer
* In terminal do the follow:
  * Enter your desktop using 'cd desktop'
  * type 'git clone (repository url)'
  * type 'cd word_frequency' to access the new directory
  * type 'composer install' to acquire the necessary dependencies
  * type 'cd web'
  * enter 'php -S localhost:8000'
* View the web app by visiting localhost:8000 in your web browser

## Known Bugs

There are no known bugs

## Support and contact details

For support or any other questions contact Dylan at dyldlewis@gmail.com

## Technologies Used

HTML, Silex, PHP, Composer, PHPUnit, Twig

### License

MIT

Copyright (c) 2016 **Dylan Lewis**
