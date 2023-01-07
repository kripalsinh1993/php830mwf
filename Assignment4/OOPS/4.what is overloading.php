<?php

// what is overloading ?

//     Overloading means to provide dynamically properties and methods in php.

//     These dynamic entities are processed via magic methods,one can establish in a class for various action types.

//     All overloading methods must be defined as public.

//     After creating object for a class, we can access set of entities that are properties or methods not defined within the scope of the class.

//     Such entities are said to be overloaded properties or methods,and the process is called as overloading.

//     For working with these overloaded properties or functions,PHP magic methods are used.

//     Most of the magic methods wiil be triggered in object context except_callStatic() method which is used in static context.


//     Overloading property:

//     Php property overloading allows us to create dynamic properties in object context.
//     for creating those properties no separate line of code is needed.
//     A property which is associated with class instance,and not declared within the scope of the class,is considered as overloaded property.

//     Some of the magic methods which is useful for property overloading.


//     __set(): It is triggered while initializing overloaded properties.
//     __get(): It is utilized for reading data from inaccessible properties.
//     __isset(): This magic method is invoked when we check overloaded properties with isset() function.
//     __unset(): This function will be invoked on using PHP unset() for oveloaded properties.


//     Method Overloading:

//     Method Overloading means some function with different arguments its called method overloading.
//     php does not support overloading.

?>