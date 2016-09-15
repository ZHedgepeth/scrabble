# Scrabble

#### Web app that will give the user the scrabble score of a given word. It will use php, silex, twig, and tests (phpunit). 09.15.16

#### By _**Nicolas Hurtado, Zachary Hedgepeth**_


## Description

Given a word, scrabble will create a score dependent upont the letters used in the word based on the Scrabble board game that we all love.


## Setup/Installation Requirements

* If you wish to view the source code locally on your machine please follow the following steps:

  +  1). Navigate to the directory in which you want the scrabble project to reside.

  +  2). Enter the following command into your terminal:
        git clone https://github.com/KomodoTech/scrabble.git

  +  3). Navigate to the scrabble directory, and execute the following command in the terminal:
          composer install

  +  4). Navigate to the web directory and start your local host by executing the following command in your terminal:
          php -S localhost:8000

  +  5). Open up the browser of your choice and go to the following url:
          http://localhost:8000/

  +  6). If you wish to look at the source code, feel free to browse through the files in the scrabble directory


## Specs


* 1). Word including 1 letter of value 1 (a,e,i,o,u,l,n,r,s,t).
  + IN:  e
  + OUT: 1

* 2). Word including 1 letter of value 2 (d,g).
  + IN:  d
  + OUT: 2

* 3). Word including 1 letter of value 3 (b,c,m,p);
  + IN:  b
  + OUT: 3

* 4). Word including 1 letter of value 4 (f,h,v,y,w);
  + IN:  f
  + OUT: 4

* 5). Word including 1 letter of value 5 (k);
  + IN:  k
  + OUT: 5

* 6). Word including 1 letter of value 8 (j,x);
  + IN:  j
  + OUT: 8

* 7). Word including 1 letter of value 10 (q,z);
  + IN:  z
  + OUT: 10

* 8). Word will include a mix of values
  + IN: frog
  + OUT: 8

* 9). Word is a sequence of lower case alpha characters.
  + IN:  dog
  + OUT: 5

* 10). Word is a sequence of mixed case alpha characters.
  + IN:  trEaT
  + OUT: 5

* 12). Word is a sequence of non alpha characters;
  + IN:  78097+~
  + OUT: 0

* 13). Word is a sequence of mixed case alpha and non-alpha characters:
  + IN:  t_+4343F
  + OUT: 0


## Known Bugs

None yet


## Support and Contact Details

Please feel free to contact us through the github account nickh93 or at the following emails:
    nickh93@outlook.com
    zmhedge@gmail.com

## Technologies Used

* silex v~2.0
* twig v~1.0
* phpunit v5.5.*
* bootstrap v3.3.7



### License

* GPLV3

palindromePHP Copyright (c) 2016 **Nicolas Hurtado, Zachary Hedgepeth**
