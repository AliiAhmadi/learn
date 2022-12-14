<?php
// SQL => Structured Query Language

### DDL DCL DML TCL
# navicat 

# how connect to mysql with commandline ?

// command to connect :
#       mysql -h localhost -u root -p

// show all database names
"SHOW databases";

// create new database
"CREATE DATABASE test";

// remove a database
"DROP DATABASE test";

// select active database
"USE test";

### working with tables in sql

// show tables of a database
"SHOW tables";

// see structure of a table in database for example in database test we have users table
"DESCRIBE users";

// +--------------+--------------+------+-----+---------+-------+
// | Field        | Type         | Null | Key | Default | Extra |
// +--------------+--------------+------+-----+---------+-------+
// | CustomerID   | int(11)      | NO   | PRI | NULL    |       |
// | CustomerName | varchar(100) | NO   |     | NULL    |       |
// | ContactName  | varchar(100) | NO   |     | NULL    |       |
// | Address      | varchar(100) | NO   |     | NULL    |       |
// | City         | varchar(100) | NO   |     | NULL    |       |
// | PostalCode   | int(11)      | NO   |     | NULL    |       |
// | Country      | varchar(100) | NO   |     | NULL    |       |
// +--------------+--------------+------+-----+---------+-------+


// create table syntax
"CREATE TABLE table_name (
    column1 dataTypeOfColumn1,
    column2 dataTypeOfColumn2,
    ...
)";

// +-------------+--------------+------+-----+---------+-------+
// | Field       | Type         | Null | Key | Default | Extra |
// +-------------+--------------+------+-----+---------+-------+
// | id          | bigint(20)   | YES  |     | NULL    |       |
// | title       | varchar(32)  | YES  |     | NULL    |       |
// | description | varchar(128) | YES  |     | NULL    |       |
// +-------------+--------------+------+-----+---------+-------+


// how create table with constraints
"CREATE TABLE table_name (
    column1 dataTypeOfColumn1 constraint,
    column2 dataTypeOfColumn2 constraint,
    ...
)";

# constraints =>
//      NOT NULL
//      UNIQUE
//      PRIMARY KEY
//      FOREIGN KEY
//      CHECK
//      DEFAULT
