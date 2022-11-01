# OVERVIEW OF SOFTWARE & HARDWARE TECHNOLOGY I: OS Concepts for Development

[TOC]

#### :golf: Learning Outcomes

​		At the end of this lesson you will be able to:

- [ ] use Command Line Interface (CLI) to: 
- [ ] Navigate the file systems and directories
- [ ] Create, edit, and manipulate directories and files
- [ ] write shell scripts



#### :school_satchel: Student Starter Pack

  - Files: createfolders.bat, createfiles.bat, file_list.txt, folder_list.txt, paragraph_test.txt, friends.txt, desiderata.txt, the black swan.txt

  - :alarm_clock: Pomodoro technique: 20 minutes focus work - 5 minutes break (checking number of likes and shares in SocMed are not included) - Repeat (this will increase productivity)

  - You will be working offline in this lesson (Terminals), you might want to turn off your Internet to avoid distractions.

  - :milk_glass: Hydrate.

    

#### :rocket: Terminals

**Command Line Interface** (CLI)

- Command Line Interface

- Command Line Interpreter

- Command Line Input

The **command line** is a text interface for your computer. It's a program that takes in **commands**, which it passes on to the computer's operating system to run. From the **command line**, you can navigate through files and folders on your computer, just as you would with Windows Explorer on Windows or Finder on Mac OS. 

- a command line program accepts text input to execute operating system functions
- is considered by many to be the Holy Grail of computer management.
- 1960s computer terminals is the only way to interact with computers
- 1970s an 1980s, command line input was commonly used by Unix systems and PC systems like MS-DOS and Apple DOS
- Today, with graphical user interfaces (GUI), most users never use command-line interfaces (CLI).
- However, CLI is still used by software developers and system administrators to configure computers, install software, and access features that are not available in the graphical interface.



**Why is it important in Dev?**

*Learning CLI in world full of graphical user interface, drag-and-drops, and a multitude of other tools that simplify using technologies to the maximum.*

Using the terminal gives you greater control and more options, thus making you more flexible and able to deal with a broader set of tasks on hand. In addition to that, it’s faster, uses less RAM than other interfaces, and doesn’t care about the quality of your monitor one bit.



**What is Windows terminal?**

​		**Windows Terminal** is a modern **terminal** application for users of **command-line** tools and shells like Command Prompt, PowerShell, and **Windows** Subsystem for Linux (WSL).



**Is CMD a terminal?**

​		So, **cmd**.exe is not a **terminal** emulator because it is a Windows application running on a Windows machine. ... **cmd**.exe is a console program, and there are lots of those. For example telnet and python are both console programs.



##### **:triangular_flag_on_post: i. Scripting**

​		A **shell scripting** is writing a program for the shell to execute and a **shell script** is a file or program that shell will execute.

​		**Bash** (AKA **B**ourne **A**gain **Sh**ell) is a **type of interpreter** that processes shell commands.

​		If you are a programmer, then you might have use commands like `move` to move or rename a file, `type nul > filename.txt` to create a file or `copy con testfile.txt` to edit a file. We use these commands in a **terminal** which is the **interface to the shell interpreter**.

​		A shell script is a fully-fledged programming language in itself. It can define variables, functions and we can do conditional execution of shell commands as well.

##### **:triangular_flag_on_post: ii. Commands**

Learn Command Line - Choosing Terminal and Test Commands

- [ ] How to open command line interface?

   - Win + R > type `cmd` press enter
   - Windows explorer address bar > type `cmd` press enter
   - Win > type `cmd` press enter



- [ ] Command Line vs. Graphical User Interface: Color and Title Editing

  ```powershell
  $ color /help
  $ color 1
  $ color fc
  $ color
  $ title Testing Color and Title
  ```

  

- [ ] Change Directory and Move to a specific Folder using CD command

  - Create a folder foo in your Desktop
  - Download the files createfolder.bat and folder_list.txt and place it inside folder foo
  - Run the batch file (createfolder.bat) by double clicking it
  - From Windows explorer (inside foo) type `cmd` in address bar and press enter

  ```powershell
  $ cd "IT3 GVC"
  $ dir
  $ cd..
  $ cd "CC6 AET\Lab"
  $ cd\
  $ cd \Users\...\Desktop\foo
  $ cd "CC6 AET"
  $ cd "..\IT3 GVC\References"
  ```

  

- [ ] Open Windows Explorer from CLI

  ```powershell
  $ explorer
  $ explorer .
  $ explorer "C:\Users" 
  ```



Learn Command Line - Directories and Files

- [ ] Create a New Folder / Directory

  ```powershell
  $ mkdir folder_name
  $ md folderName
  ```

  - [ ] mkdir "Name with spaces"

  ```powershell
  $ mkdir "folder name"
  $ md "folder name"
  ```

  

- [ ] Create Folders in Different Path

  ```powershell
  C:\Users\tintin\Desktop\foo\CC6 AET>mkdir "..\IT3 GVC\Lab\Week 1"
  ```

  

- [ ] Create Folders in Different Drive

  ```powershell
  $ mkdir D:\test_folder
  ```




###### :space_invader: Practice 01

| Try it!                                                      |
| ------------------------------------------------------------ |
| 1. Create MyPractice_dir folder in C root directory<br />2. Create dir1, dir2, dir3 folders inside MyPractice_dir<br />3. Change the title of CLI interface to YourLastname Practice 00<br /> |

```powershell
C:\>mkdir myPractice_dir
C:\myPractice_dir>mkdir dir1
C:\myPractice_dir>mkdir dir2
C:\myPractice_dir>mkdir dir3
C:\myPractice_dir>title Padon Practice 00
```



- [ ] Rename Folder or Directories using Windows Command: Move

  ```powershell
  $ move Lab Laboratory
  # example: C:\Users\tintin\Desktop\foo\IT3 GVC>move Lab Laboratory
  ```

  

- [ ] Move folder or directories using Windows Move Command

  ```powershell
  $ move Laboratory /Quiz
  # C:\Users\tintin\Desktop\foo\IT3 GVC>move Laboratory /Quiz
  ```

  

- [ ] Move Folder or Directories to the Parent & ROOT directory

  - Delete the folders in foo
  - Run the batch file again

  ```powershell
  $ tree /f
  $ robocopy "IT3 GVC/" "C:" /e /MOVE
  $ tree /f
  ```

   /e :: copy subdirectories, including Empty ones.

  /MOVE :: MOVE files AND dirs (delete from source after copying).

  

- [ ] Move and Rename Folder or Directories To New Paths

  ```powershell
  $ move References "C:\Users\tintin\Desktop\foo\References_01"
  ```

  

- [ ] Rename A File Or Folder: RENAME

  ```powershell
  $ rename readme.md readme_nga.md
  ```

  

- [ ] Microsoft Windows Commands Help

  ```powershell
  $ help
  $ color /help
  $ xcopy /?
  ```

  

- [ ] Copy Directories Recursively

  ```powershell
  $ xcopy "CC6 AET" "C:\Users\tintin\Desktop" /E /H
  ```

  

- [ ] Copy One or More Files To Another Location.

  - Run the createfiles.bat inside folder foo

  ```powershell
  $ tree /f
  $ xcopy *.docx "C:\Users\Computer Studies PSU\Desktop\foo\IT3 GVC\References"
  $ move *.docx "C:\Users\Computer Studies PSU\Desktop\foo\CC6 AET\References"
  ```

  

- [ ] Remove All Directories and Files In Specified Directory: RD, RMDIR

  ```powershell
  $ rd /S "CC6 AET"
  ```



Learn Command Line - Echo, Type

- [ ] Display Message on Screen: ECHO

  ```powershell
  $ echo /?
  $ echo "hello world"
  ```

  

- [ ] Concatenate and Print (Display) The Content of Files

  ```powershell
  $ echo hi > test1.txt
  $ echo bye > test2.txt
  $ type test1.txt
  ```




###### :space_invader: Practice 02

| Try it!                                                      |
| ------------------------------------------------------------ |
| 1. Rename dir3 to dir2.1 and move it inside dir2<br />2. Inside dir1 create a file named test_file.txt with your full name in it.<br /> |

```powershell
# << Copy and paste your code below. >>
C:\myPractice_dir>rename dir3 dir2.1 | move dir2.1 dir2
C:\myPractice_dir>echo "Gillbert Padon" > .\dir1\test_file.txt

```



- [ ] Display All .txt Files and Concatenate Two Files

  ```powershell
  $ dir *.txt
  $ dir /b *.txt
  $ type test1.txt test2.txt > test3.txt
  $ type test3.txt
  ```

  

- [ ] Search for Pattern in Each File: "findstr"

  ```powershell
  # findstr help
  $ findstr /?
  # use spaces to separate multiple search strings
  $ findstr /i "video reading" test1.txt
  # search matched string in a file
  $ finstr video test1.txt
  # counting the number of matches
  $ finstr /n "your" test1.txt | find /c ":"
  $ findstr /n your "C:\Users\Computer Studies PSU\Desktop\foo\*" | find /c ":"
  # search matched string in a list of files.
  $ findstr /n your "C:\Users\Computer Studies PSU\Desktop\foo\*"
  ```




Learn Command Line Secrets

- [ ] Graphical Display of Folder Structure (tree)

  ```powershell
  # folders only
  $ tree
  $ tree "C:\Users\tintin\Desktop\foo\IT3 GVC"
  # include files
  $ tree /f
  # use ASCII instead of extended characters
  $ tree /f /a
  ```

  

- [ ] Abort The Current Task In Command Line

  - [ ] `Ctrl` + `C`
  - [ ] `Ctrl` + `Pause/Break`

  

- [ ] Displays & Kill Running Applications and Services

  ```powershell
  # display list of services that are running
  $ net start
  $ net stop <service>
  # display list of application that are running
  $ tasklist
  # stop the application
  $ taskkill /im typora.exe
  ```
  



###### :space_invader: Practice 03

| Try it!                                                      |
| ------------------------------------------------------------ |
| 1. Using files desiderata.txt, friends.txt, and the black swan.txt, write a command that searches for the word "life" from the text inside and displays the file name and number of occurrences.<br /> |

```powershell
# << Copy and paste your code below. >>
C:\myPractice_dir>find /c "life" desiderata.txt "the black swan.txt" friends.txt
```



##### :triangular_flag_on_post: **iii. Input / Output**

- [ ] Redirect Command Prompt Output to a File

  ```powershell
  # output for the command will be directed to listoftxtfiles.txt
  $ dir *.txt > listoftxtfiles.txt
  # running same command without overwriting the file (append)
  $ dir *.txt >> listoftxtfiles.txt
  ```



##### **:triangular_flag_on_post: iv. Sample Script**

​	**Batch file** (with .bat extension) include one or multiple commands that Command Prompt can understand and run in sequence to perform various actions.

###### :space_invader: Practice 04

| Try it!                                                      |
| ------------------------------------------------------------ |
| 1. Open notepad<br />2. Type the code below and save as my_first_batch_file.bat |

```powershell
@ECHO OFF
ECHO Congratulations! Your first batch file executed successfully.
PAUSE
```

- @ECHO OFF - disables the display prompt to show only the message on a clean line. 
-  ECHO - prints the desired text on the screen
- PAUSE - Prevents the console window from closing after executing the command. 



```powershell
@echo off

cls

for /f "usebackq delims=" %%f in (folder_list.txt) do (
	mkdir "%%f"
	cd "%%f"
	for /f "tokens=1-3" %%a IN ("Quiz Lab References") DO (
		mkdir %%a %%b %%c
		type nul > readme.md)
	cd..
)

dir /w
echo Finished
```

- cls - clear the screen

- "usebackq delims=" - to recognize the spaces in the name of the folder

- %%f - variable that fetch every line in folder_list.txt

  

###### :space_invader: Practice 05

| Try it!                                                      |
| ------------------------------------------------------------ |
| Probably you've encountered a worm that creates shortcut files (.lnk extension) when you insert your flash drive in an infected computer. To remove those shortcut files, create a batch file that deletes shortcut files not only in your flash drive root directory but also in its sub-directories. |

​	@echo off

rem replace drive letter with flashdrive letter on computer

for /R C:\Users\gin\Desktop %%z in (*.lnk) do (

  del  %%z

)



#### :rocket: Up next: Version control

- Create an account at [https://github.com](https://github.com/). It doesn't matter what email you use. You can change it in the future.

- Group yourselves into three next topic's exercises are collaborative.

  





| :pushpin: **References**                               |
| ------------------------------------------------------ |
| A-Z index of Windows CMD commands https://ss64.com/nt/ |



