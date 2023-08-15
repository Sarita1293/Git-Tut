

 difference between primarykey & unique key:

The primary key is accepted as a unique or sole identifier for every record in the table.
When the primary key is not present in the table, then the unique key is also used as a unique identifier for records
In the case of a primary key, we cannot save NULL values.
In the case of a unique key, we can save a null value, however, only one NULL value is supported.
Each table holds just one primary key.
A table can hold more than one unique key.
With the primary key, we cannot modify or delete the values.
With the unique key, we can modify the column values.

delete and truncate:
The DELETE command is used to delete particular records from a table. 
The TRUNCATE command is used to delete the complete data from the table.

DROP & TRUNCATE:
the DROP command is used to remove the whole database or table indexes, data, and more.
Whereas the TRUNCATE command is used to remove all the rows from the table.


Q: aggregate functions in mysql?
A: min, max, avg, sum, count

Q: what is query order of execution ?. which which execute first? select * from students where name= 'avi' order by asc?
A: 
from : choose and join table to get base data
where : filters the base data
group by : aggregate the base data
having : filters the aggregate data
select : returns the final data
orderby : sort the final data
limit : limits the returned data to a row count

git command to push files
php ajax
ajax success or erro state code

drop, delete truncate deff
search engines mysql
indexing mysql
datatypes in mysql
how to delete schemas
trigger, stored procedure, views, 

jquery : how to get values of a textfield

laravel: 


        
what is abstract classes?
how to use API ? create, secure, authorize , tools?


clear basic, should have knowledge of server and deployment of projects
logical parts


introduction
project description
job role and responsibilities
execution of select from where limit order by group by
time limit of session destroy and max characetrs allowed in get method
diffe between get post
diff between session and cookie
types of array , types of string functions
current versio  of laravel php mysql
aggregate function name
swap 2 numbers without using 3rd variable
how to pass controllers value into view using laravel if i have array of elements
eloquent
create migrate command
create model command
database setup file in laravel


project introduction , my roles and chanllenges
wordpress : what is wordpress how it works its features?
php : version, get char limit, diff get,post,request
        session cookies diff and syntax, swaping algorithm, array function, string function , implode explode diff,
        sorting functions, aggregate function,oops features, method overloading and overriding, abstract and interface diff and definations
        

Laravel: facades, middleware, migration, what is laravel, what is container

mysql : joins type, definations eg, triggers

jquery: how to find out the type of any datatype 



interview- neosoft- telephonic-20/7/23
interface with example

Q: does php supports polymorphism?
A: PHP can use the method of polymorphism in 2 distinguishing ways. 
Polymorphism in PHP uses interfaces that are pre-provided in PHP and abstract classes to implement the methods of polymorphism.

Q: how you will achieve polymorphism in php?
A: Every abstract class has one or more abstract methods. These classes require their child classes to fill the methods with the same name. Hence, 
different child classes use the methods, in the same way, thereby implementing polymorphism in PHP.

magic methods?

Q:types of error and how to handle it?
A:The three types of errors in PHP are:
Notices:
Notices are the non-critical errors that occur during script execution. 
This error is not visible to users and occurs when a developer includes something wrong in the program.

Warnings:
These are more critical than Notice errors. 
It only warns you that there is an issue and doesn't prevent you from stopping the execution. It occurs when a developer tries to include a missing file.

Fatal:
This is the most critical error, which occurred due to an undefined function. 
It generally occurs when a function is called without having its definition.

Q:what is traits in php?
PHP only supports single inheritance: a child class can inherit only from one single parent.
So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
Traits are used to declare methods that can be used in multiple classes. 
Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).
Traits are declared with the trait keyword.To use a trait in a class, use the use keyword.
syntax:
<?php
class MyClass {
  use TraitName;
}
?>

<?php
trait message1 {
public function msg1() {
    echo "OOP is fun! ";
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>

Q: static functions in php?
A: In certain cases, it is very handy to access methods and properties in terms of a class rather than an object. 
This can be done with the help of static keyword. Any method declared as static is accessible without the creation of an object. 
Static functions are associated with the class, not an instance of the class. 
They are permitted to access only static methods and static variables.
To add a static method to the class, static keyword is used.
public static function test()
{
    // Method implementation
}
<?php
/* Use static function as a counter */
  
class solution {
      
    static $count;
      
    public static function getCount() {
        return self::$count++;
    }
}
  
solution::$count = 1;
  
for($i = 0; $i < 5; ++$i) {
    echo 'The next value is: '. 
    solution::getCount() . "\n";
}
  
?>
O/P: The next value is: 1
The next value is: 2
The next value is: 3



what is authentication and authorization and diffence?
In authentication, the system or the web application identifies its users through the credentials they provide. 
If it finds that the credentials are valid, they are authenticated, or else they are not.

In authorization, the system or the web application checks if the authenticated users can access the resources that they are trying to access or make a request for. In other words, it checks their rights and permissions over the requested resources. 
If it finds that they can access the resources, it means that they are authorized.

what are the facades and how u use it?

what is service container in laravel?

what is service provider in laravel?

hooks in codeigniter?

mysql storage engine? what are their difference?
what is indexing
what is seeder?
laravel life cycle? which part of code execute first and it works?


1-ug-2023 : fortune pvt ltd

explain all the projects in details  swifty, bil pariksha, boooking management system, api's created by you
