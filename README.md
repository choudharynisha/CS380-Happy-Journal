# Happy Journal (Web App)

In the Spring 2020 semster, the topic for CS380 – Recent Advances in Computer Science was Info Retrieval & Web Search. As part of an assignment, I learned PHP to develop a web app called Happy Journal, where users can record moments that make them happy.

## Inspiration

A few years ago, I saw a post on Facebook about creating a happiness jar, where one would

(1) take an empty jar,

(2) starting from New Year's Day of the following year, write down things that make them happy on scraps of paper, which all go in the jar, and

(3) take them all out on New Year's Eve of that year and look at all the great things that happened throughout the year.

Here's [the Happiness Jar's cover photo](https://www.facebook.com/HapJar/photos/a.236526546818416/236526536818417/?type=1&theater) (shown below), which is similar to the original post I saw –

![Happiness Jar Idea](https://cs380happyjournal.nishachoudhary.com/Screenshots/HappinessJarCoverPhoto.png)

## What Happy Journal Addresses

I created the Happy Journal to mimic the idea of creating a happiness jar, but to also address the following –

(1) Reduce paper consumption

(2) Eliminate the need to keep jars

(3) Easily maintain all happy moments, and archive as desired *(to be addressed in future development of the app)*

## Current Functionality

In this initial version of the web app, Happy Journal allows users to add an entry and display / view all entries.

## Development

To develop this version of Happy Journal, I used HTML, CSS, JavaScript & Bootstrap, and PHP.

### Homepage / Welcome Page

The homepage / welcome page uses HTML, CSS, and (some) Bootstrap.

![Homepage / Welcome Page](https://cs380happyjournal.nishachoudhary.com/Screenshots/Homepage.png)

### Add an Entry Page

The Add an Entry page uses HTML, CSS, JavaScript & Bootstrap, and PHP. The user enters input using the HTML form, which is processed using PHP and saved to a CSV file.

![Add an Entry Page](https://cs380happyjournal.nishachoudhary.com/Screenshots/AddEntry.png)

### View Journal Page

The View Journal page uses HTML, CSS, Bootstrap, and PHP. Each entry in the CSV file is outputted as a card (making use of Bootstrap) and is retrieved using PHP.

![View Journal Page (No Entries)](https://cs380happyjournal.nishachoudhary.com/Screenshots/Journal0Entries.png)

![View Journal Page (With Entries)](https://cs380happyjournal.nishachoudhary.com/Screenshots/Journal6Entries.png)

## Future Development

In the future, I would like to further develop the Happy Journal web app to enhance the user experience. Features and functionality I would like to add are –

(1) account creation

(2) sorting (alphabetically, categorically, and chronologically)

(3) resetting the "journal"

(4) deleting entries

(5) option to create archives

(6) option to download entries