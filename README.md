# Ping Pong #

#### An application to practice BDD in PHP, September 12th, 2016

#### By Mark Lawson and David Ayala

## Description ##

This application prints a list of numbers up to and including the inputted number, except certain numbers are replaced with ping, pong, or ping-pong.

## Setup/Installation Instructions ##

* Clone the repository
* Using the command line, navigate to the project's root directory
* Install dependencies by running $ composer install
* Navigate to the /web directory and start a local server with $ php -S localhost:8000
* Open a browser and go to the address http://localhost:8000 to view the application

## Specifications ##

* Return all numbers up to an including the input
    * input: 5
    * output: 1, 2, 3, 4, 5

* Replace all numbers divisible by 3 with 'ping'
    * input: 3
    * output: 'ping'

* Replace all numbers divisible by 5 with 'pong'
    * input: 5
    * output: 'pong'

* Replace all numbers divisible by 15 with 'ping-pong'
    * input 15
    * output: 'pingpong'


## Known Bugs ##

There are no known bugs at this time.

## Support and Contact Details ##

Please report any bugs or issues to mlawson3691@gmail.com.

## Languages/Technologies Used ##

* PHP
* Silex
* Twig

### License ###

*This application is licensed under the MIT license.*

Copyright (c) 2016 Mark Lawson & David Ayala
