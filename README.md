specs:
* The program returns 0 when no matches are found
    -word to count: "bird"
    -string to use: "bacon"
    -output: "count: 0"
* The program can return the count for a single word
    -word to count: "thing"
    -string to use: "thing"
    -output: "count: 1"
* The program can return the count for a multiple words
    -word to count: "the"
    -string to use: "the cat ate the food"
    -output: "count: 2"
* The program can return the count regardless of capitalization
    -word to count: "hello"
    -string to use: "Hello, I am from the city hello"
    -output: "count: 2"
* The program will not count integers
    -word to count: 45
    -string to use: "It's 45 degrees outside"
    -output: "Please enter words"
