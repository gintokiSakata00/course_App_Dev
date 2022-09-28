# **OVERVIEW OF SOFTWARE & HARDWARE TECHNOLOGY II** : WEB APPLICATION

[TOC]

#### :golf: Learning Objective

​		At the end of this lesson you should be able to:

- [ ] Differentiate frontend and backend development

- [ ] List the emerging technologies for frontend and backend development

- [ ] Develop web application that uses HTML, CSS, and PHP programming language

  

#### :school_satchel: Student Starter Pack

  - T​eam
  - :alarm_clock: Pomodoro technique: 20 minutes focus work - 5 minutes break (checking number of likes and shares in SocMed are not included) - Repeat (this will increase productivity)
  - Another productivity tip: Play video in 1.25 - 1.5x speed
  - :milk_glass: Hydrate.



> There's a thin line between helping and enabling. :) 



#### :rocket: Front-end and Back-end Development

The front end, also called “**client-side**” programming, is what happens in the browser. It’s everything the user sees and interacts with (user interface).

The back end, also called “**server-side**” programming, happens on the **server** and the **database**. It’s the machinery that works behind the scenes to power those fancy features users interact with on the client-side.


Technologies: Front-End and Back-End

| Front-End                     | Back-End                                                     |
| ----------------------------- | ------------------------------------------------------------ |
| HTML<br />CSS<br />JavaScript | **DBMS:** MySQL, NoSQL and PostreSQL, Oracle, <br />Teradata, Microsoft SQL Server<br />**Frameworks and PLs:** Ruby on Rails, <br />C++/C/C#, Python, and PHP |



#### :rocket: Full-stack Development

This is the combination of fron-end and back-end development. It is not a practical solution to have a single programmer in full-stack development. However, sometimes a custom software development company will have developers who are proficient with both sides, known as a full stack developer.



#### :rocket: PHP

##### :triangular_flag_on_post: Introduction

​		PHP is a widely-used open source and general purpose scripting language which is primarily made for web development.

**Here are some interesting facts about PHP:**

1. The mascot of PHP is a big blue elephant.
2. ‘Personal Home Page’ is the original name of PHP.
3. Today, PHP is recognized as “PHP: Hypertext Preprocessor, ”.
4. Rasmus Lerdorf didn’t designed PHP to used as some programming language. It was just developed to manage his personal website. In 1997, after months of work and beta testing, the official version of PHP was released.
5. The famous PHP projects or frameworks are :Symfony, Laravel, CodeIgniter, Faker.
6. Cross-platform abilities (available in various os)

Source:

​	https://www.geeksforgeeks.org/interesting-facts-about-php/



##### :triangular_flag_on_post: Advantage of PHP

- Execution using only meagre system resources, it will not slow down the host machine
- Its simplicity allows anyone with basic knowledge in HTML to start integrating PHP into their web pages straight away
- Modular system of extension allows it to interface with different libraries, such as encryption, graphics or XML.



Watch the PHP Front to Back tutorials by Brad Traversy in this link https://www.youtube.com/watch?v=oJbfyzaA2QA&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn

The repository named [traversy-effective-phpfiesta](https://github.com/PSU-BSCS3-CC6/traversy-effective-phpfiesta) in our GitHub organization contains all the codes created in this series. You can clone the repository and try to play with it.

As you progress in this YT series, try the following practice sets to hone your skills in writing PHP codes. To start, someone from your team will create a repository in your github account '**php-fiesta-cookie**'. Set your repo as **private**, so your answer would not be available in public. Next add your teammates and me (**kjvmartinez**) as collaborator. Create a folder in your local machine with the same name as your repo.

 

Writing code is same as in academic writing, **when you use or adapt code** **developed by someone else as part of your project, you must cite your source**. Divide the tasks amongst your team. 

###### :space_invader: Practice 4-01

After watching the **Variables, Constants and Data Types** and **Arrays** write PHP code for this problem.

1. Inside /php-fiesta-cookie create a file named **01sa.php**

2. Create a multidimensional array named YourTeamName. Add the data below.

   | id   | species    | type1 | type2  | ability     | hp   | attack | defense |
   | ---- | ---------- | ----- | ------ | ----------- | ---- | ------ | ------- |
   | 1    | Bulbasaur  | Grass | Poison | Overgrow    | 45   | 49     | 49      |
   | 2    | Ivysaur    | Grass | Poison | Overgrow    | 60   | 62     | 63      |
   | 3    | Venusaur   | Grass | Poison | Overgrow    | 80   | 82     | 83      |
   | 4    | Charmander | Fire  | N/A    | Blaze       | 39   | 52     | 43      |
   | 5    | Charmeleon | Fire  | N/A    | Blaze       | 58   | 64     | 58      |
   | 6    | Charizard  | Fire  | Flying | Blaze       | 78   | 84     | 78      |
   | 7    | Squirtle   | Water | N/A    | Torrent     | 44   | 48     | 65      |
   | 8    | Wartortle  | Water | N/A    | Torrent     | 59   | 63     | 80      |
   | 9    | Blastoise  | Water | N/A    | Torrent     | 79   | 83     | 100     |
   | 10   | Caterpie   | Bug   | N/A    | Shield Dust | 50   | 20     | 55      |

3. Print the array

4. Echo the number of elements in an array.

5. Declare variable $favorite and assign your favorite specie (use array notation).



###### :space_invader: Practice 4-02

After watching the **Loops** write PHP code for this problem.

1. Using **foreach** display all the species in a list.
2. In CLI, git add, commit and push. [message in commit: "01sa.php done"]



###### :space_invader: Practice 4-03

After watching the **Functions** write PHP code for this problem.

1. Inside /php-fiesta-cookie create another file named **02sa.php**
2. Create a function using this template hp_sum, ave_attack
   - hp_sum will return the sum of the column hp
   - ave_attack will return the average of column attack
3.  In CLI, git add, commit and push. [message in commit: "02sa.php done"]



###### :space_invader: Practice 4-04

After watching the **Conditionals** write PHP code for this problem.

1. Inside /php-fiesta-cookie create another file named **03sa.php**

2. Create a function with this header **pokemon_defense**(arrayname, limit_number)
   - pokemon_defense function will echo the name of the pokemon with defense is greater than or equal to limit_number
3.  In CLI, git add, commit and push. [message in commit: "03sa.php done"]



###### :space_invader: Practice 4-05

After watching the **Include and Require** clone the repository named [cover-verbose-memory](https://github.com/PSU-BSCS3-CC6/cover-verbose-memory) inside your **php-fiesta-cookie** local folder.

1. Create folder a folder named 'inc' inside cover-verbose-memory.
2. Inside inc directory create file header.php, footer.php
3. Create pages for features, contacts (PHP files)
4. Modify the code in index.php
   -  separate the code for header and footer
   - to apply the separated files use include or require in index, features, contacts pages
5. In CLI, git add, commit and push [message in commit: "inc directory done"]



:hourglass_flowing_sand: Submission Instruction:

Once your team is done with practice sets, everyone should paste the link of your repo in the provided bin.



