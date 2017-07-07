specs:
* The program returns 0 when no matches are found
    -word to count: "bird"
    -string to use: "bacon"
    -output: 0
* The program can return the count for a single word
    -word to count: "thing"
    -string to use: "thing"
    -output: 1
* The program can return the count for a multiple words
    -word to count: "the"
    -string to use: "the cat ate the food"
    -output: 2
* The program can return the count regardless of capitalization
    -word to count: "hello"
    -string to use: "Hello, I am from the city hello"
    -output: 2
* The program does not count words with special characters in them
    -word to count: "it"
    -string to use: "Well, it's a beautiful day"
    -output: 0
