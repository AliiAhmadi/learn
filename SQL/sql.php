<?php
// SQL => Structured Query Language

### DDL DCL DML TCL
# navicat 

# how connect to mysql with commandline ?

// command to connect :
#       mysql -h localhost -u root -p


// +------------+------------------------------------+--------------------+-------------------------------+-----------+------------+---------+
// | CustomerID | CustomerName                       | ContactName        | Address                       | City      | PostalCode | Country |
// +------------+------------------------------------+--------------------+-------------------------------+-----------+------------+---------+
// |          1 | Alfreds Futterkiste                | Maria Anders       | Obere Str. 57                 | Berlin    |      12209 | Germany |
// |          2 | Ana Trujillo Emparedados y helados | Ana Trujillo       | Avda. de la Constitución 2222 | Mexico DF |       5021 | Mexico  |
// |          3 | Antonio Moreno Taquería            | Antonio Moreno     | Mataderos 2312                | Mexico DF |       5023 | Mexico  |
// |          4 | Around the Horn                    | Thomas Hardy       | 120 Hanover Sq.               | London    |    1122334 | UK      |
// |          5 | Berglunds snabbköp                 | Christina Berglund | Berguvsvägen 8                | lule      |      95822 | Sweden  |

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

// delete a table
"DROP TABLE users";

// clear a table
"TRUNCATE TABLE users";

// add a column
"ALTER TABLE users ADD age int";

// delete a column
"ALTER TABLE users DROP COLUMN age";

// modify columns
"ALTER TABLE users MODIFY COLUMN age bigint";
