# Scrabble Score
### Epicodus Exercise in BDD with PHP | July 6, 2017

By Max Scher and Steve Spitz

## Description
This web application returns the scrabble score of a given word based on the user's input.

## Setup
* Open GitHub site on your browser: https://github.com/maxobaxo/scrabble-dabble
* Select the green dropdown menu to clone this repository.
* Copy the link for the GitHub repository.
* Open Terminal on your computer.
* In Terminal, perform the following steps:
    * type 'cd desktop' and press enter
    * type 'git clone' then paste the repository link, and press enter
    * type 'cd scrabble-dabble' to access the path on your computer
    * type 'composer install' in terminal to download dependencies
    * type 'cd web' to enter the web folder
    * type 'php -S localhost:8000' to open local server
* In your browser, enter the url 'localhost:8000' to view the webpage.
* Enter in a single word to learn the scrabble score for the given word.

## Specifications
It can return the scrabble score for a one-letter word:
  * Example Input: 'K'
  * Example Output: 5
It can return the scrabble score for a one-letter word, regardless of case:
  * Example Input: 'k'
  * Example Output: 5
It can return the scrabble score for a multi-letter word:
  * Example Input: 'WooD'
  * Example Output: 8
It only returns scrabble scores for one-word entries:
  * Example Input: 'Come back to me'
  * Example Output: 'Scrabble does not accept multiple-word entries.'
It only returns scrabble scores for one-word entries that contain only alphabetical characters:
   * Example Input: 'C0me b@ck to^me, Sheila!'
   * Example Output: 'Scrabble does not accept multiple-word entries.'

## Languages Used
Git, PHP, HTML, Twig, CSS

## License Information
This application is licensed under the MIT License.

Copyright &copy; Max Scher & Steve Spitz 2017
