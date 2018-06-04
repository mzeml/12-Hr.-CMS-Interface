# 12-Hr.-CMS-Interface

## Objective

I was tasked in creating a Content Management System (CMS) that had an interface separate from the hosting machine. I created two virtual machines (VMs), one hosting a MySQL database and one that was the web interface for the database. The thing is, I had less than 12 hours to do this with essentially zero experience with PHP, HTML, MySQL, and connecting two virtual machines together. I sat down and did what I could on my own (with the help of a lot of Googling, of course).

## What I Did

First, I setup both VMs on an internal network so that they can communicate with each other. I then setup the MySQL database in one of the VMs which I call VM1. I created a database called “cms” with a table “users”. The table contained First Name, Last Name, ID number, and Role. All but ID were text fields. ID was a integer field.

Next, I setup the other VM, VM2, to have an Apache server to host the interface page. I created a main menu which had three options: View the “users” table’s contents, add a record to “users” table, or remove a record from “users”. 

The “View” option took you to another page that showed the current values in the database. 

The “Add” option had inputs had fields where you can enter the name, ID, and role of the new record. If you fail to fill all the fields with something, submitting would just take you back to the Main Menu and nothing would be added to the database. Entering incorrect data types, such as a non-integer into the ID value would result it being set to zero.

The “Remove” option had you enter a First and Last name. You need both to remove a record. If you fail to provide both, you go back to the Main Menu. If the record does not exist, nothing gets deleted.

This all worked because I was able to connect to the database through the interface and manipulate it there. 

## Bugs and Issues

Since this project was completely new to me, there are a **bunch** of issues with my code and logic. For one, I did not sanitize my input. My error messages are generic at best. The changes made to the database are sometimes not reflected at first in the interface, prompting a refresh of the site to show changes. My success messages occur even when the system does not process something due to it not being a valid input. 

## What I Learned

Google and Stack Overflow are my saviors
The simplest mistakes are often the ones that plague you (I forgot to enable PHP in Apache which lead to an hour of useless debugging)
Given a tight deadline, I can accomplish the seemingly impossible (to myself)
