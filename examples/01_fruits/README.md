mongo-php-prototype
=====================

Providing an easy to follow installation guide, and examples on basic features of mongo-db

********************************************************************************
********************************************************************************

Installing Mongo DB
===================
Note: Instruction on the official site http://docs.mongodb.org/manual/tutorial/install-mongodb-on-debian-or-ubuntu-linux/ are pretty easy to follow.
(on Ubuntu)

    sudo apt-key adv --keyserver keyserver.ubuntu.com --recv 7F0CEB10

add the  following line 
> deb http://downloads-distro.mongodb.org/repo/ubuntu-upstart dist 10gen

in /etc/apt/sources.list.d/10gen.list

	sudo apt-get update
    sudo apt-get install mongodb-10gen


then on your terminal type 
    mongo
you should see something like this
>MongoDB shell version: 2.0.6

>connecting to: test

Resources
=========

* http://www.mongodb.org/  (Official site)
* http://docs.mongodb.org/manual/tutorial/install-mongodb-on-debian-or-ubuntu-linux/  (official installation guide)