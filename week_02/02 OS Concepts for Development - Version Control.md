# OVERVIEW OF SOFTWARE & HARDWARE TECHNOLOGY I: OS Concepts for Development

[TOC]

#### :golf: Learning Outcomes

At the end of this lesson you will be able to:

- [ ] use github commands to: 
  - [ ] create and clone repository
  - [ ] push and pull updates to or from repository
  - [ ] collaborate in a project
  - [ ] create and use branch



#### :school_satchel: Student Starter Pack

  - My Github account https://github.com/kjvmartinez

  - Github account

  - Download git for windows: https://git-scm.com/download/win

      - To check if it is already installed in your PC, in CLI type `$ git -v`

  - Group yourselves into 3

  - You will be working online in this lesson

  - :milk_glass: Hydrate.

    

#### :rocket: Version control



##### :triangular_flag_on_post: i. What is version control?

In [software engineering](https://en.wikipedia.org/wiki/Software_engineering), **version control** (also known as **revision control**, **source control**, or **source code management**) is a class of systems responsible for managing changes to [computer programs](https://en.wikipedia.org/wiki/Computer_program), documents, large web sites, or other collections of information. Version control is a component of [software configuration management](https://en.wikipedia.org/wiki/Software_configuration_management).[[1\]](https://en.wikipedia.org/wiki/Version_control#cite_note-Mercurial-1)

Changes are usually identified by a number or letter code, termed the "revision number", "revision level", or simply "revision". For example, an initial set of files is "revision 1". When the first change is made, the resulting set is "revision 2", and so on. Each revision is associated with a [timestamp](https://en.wikipedia.org/wiki/Timestamp) and the person making the change. Revisions can be compared, restored, and with some types of files, merged.

from: https://en.wikipedia.org/wiki/Version_control

##### :triangular_flag_on_post: ii. What is the importance version control?

- to enable multiple developers or teams to work in an isolated fashion without impacting the work of others
- ability to save changes made to files, whilst retaining the changes from all previous versions



##### :triangular_flag_on_post: iii . What is Git and Github?​

- Git is the command line version control system (VCS) software which works on your local computer.
- Git was created by Linus Torvalds in 2005 for development of the Linux kernel, with other kernel developers contributing to its initial development.
- GitHub is a code hosting platform for version control and collaboration. It lets you and others work together on projects from anywhere.



##### :triangular_flag_on_post: iv. Graphical User Interface of Github?

###### Basic Functionality of git

**Warning:** Never `git add`, `commit`, or `push` sensitive information to a remote repository. Sensitive information can include, but is not limited to:

- Passwords
- SSH keys
- [AWS access keys](http://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSGettingStartedGuide/AWSCredentials.html)
- API keys
- Credit card numbers
- PIN numbers

**Commit**

When changes are made in a developer's local workspace they are `committed` (saved locally) and, then `pushed` (sent to the repository) within Git, this makes them available for consumption by other developers in the team. Those developers `pull` (fetch new updates from the repository) all the changes to their own local workspace.

**Branches**

-  allow you to have different commit histories in the same repo
- useful for feature work

**Forking and Pull Requests**

- used when you don’t have direct push access to a repo
- Fork: creates your own version of the repo that you can commit to
- When you’re finished committing all of your changes, create a pull request
- Pull Request: tells the main repo that you have some commits you would like to merge, and allows others to review them first

**How to contribute code**

```powershell
$ git clone [repo-url]
$ git pull # syncs latest version from the master repo to your local repo
[edit the code]
$ git add [file] # stages code for commit (git remove does not unstage, it stages a deletion, we'll get to unstaging in a bit)
$ git commit # create a record of the changes you've made
$ git push # sync your local changes to the master repo
```

**Some rules for good commits**

- commit should represent one change or a small set of related changes (like a bug fix or new feature)

- all committed code should be functional and tested

- make sure the commit message is descriptive

  

##### :triangular_flag_on_post: v. Git Termonology / Jargons

###### Repos and Branches

| Term            | Description                                                  |
| --------------- | ------------------------------------------------------------ |
| Origin (repo)   | Your remote repo (on Github); it is the “origin” for your local copy. Either it is a repo you created yourself or it is a fork of someone else’s GitHub repo. |
| Upstream (repo) | The main repo (on GitHub) from which you forked your GiHub repo. |
| Local (repo)    | The repo on your local computer.                             |
| Master          | The main branch (version) of your repo.                      |

###### Basic Commands and Functions

| Term         | Explanation                                                  |
| ------------ | ------------------------------------------------------------ |
| Fork         | Make a copy of someone else’s GitHub repo in your own GitHub account. |
| Clone        | Make a copy of the your GitHub repo on your local computer. In CLI: ‘git clone’ copies a remote repo to create a local repo with a remote called `origin`automatically set up. |
| Pull         | You incorporate changes into your repo.                      |
| Add          | Adding snapshots of your changes to the “Staging” area.      |
| Commit       | Takes the files as they are in your staging area and stores a snap shot of your files (changes) permanently in your Git directory. |
| Push         | You “push” your files (changes) to the remote repo.          |
| Merge        | Incorporate changes into the branch you are on.              |
| Pull Request | Term used in collaboration. You “issue a pull request” to the owner of the upstream repo asking them to pull your changes into their repo (accept your work). |



###### :space_invader: Practice 2-01

| Try it!                                                      |
| ------------------------------------------------------------ |
| Do the first activity individually. In this article, the steps and screenshots were provided. <br />Follow the steps carefully, and if you encounter a problem, do not hesitate to ask for help.<br />https://guides.github.com/activities/hello-world/ |

Copy and paste the remote repository URL.

```
https://github.com/gintokiSakata00/hello-world.git
```

###### :space_invader: Practice 2-02

| Try it!                                                      |
| ------------------------------------------------------------ |
| I hope you've enjoyed doing the first activity. This time we will do the similar activity but using Windows CLI. <br /> |

**Steps:**

1. In your local repository (PC), create a folder named hello-world-v2 using CLI. Create a readme.md file inside the folder. Copy and paste the commands below:

   ```powershell
   $mkdir hello-world-v2
   $type nul > .\hello-world-v2\readme.md
   ```

2. In your github account create a repository named hello-world-v2. Copy and paste the remote repository URL.

   ```
   https://github.com/gintokiSakata00/hello-world-v2.git
   ```

3. Open CLI, change the current working directory to your local project (inside hello-world-v2).

4. Initialize the local directory as a Git repository.

   ```powershell
   $ git init
   ```

5. Add the files in your new local repository. This stages them for the first commit.

   ```powershell
   $ git add .		
   ```

6. Commit the files that you've staged in your local repository.

   ```powershell
   $ git commit -m "First commit"
   ```

7. At the top of your GitHub Account repository's Quick Setup page, click to copy the remote repository URL. Something like this https://github.com/kjvmartinez/hello-world-v2.git

8. In CLI, [add the URL for the remote repository](https://docs.github.com/en/enterprise/2.13/user/articles/adding-a-remote) where your local repository will be pushed.

   ```powershell
   $ git remote add origin <remote repository URL>
   # Sets the new remote
   $ git remote -v
   # Verifies the new remote URL
   ```

9. Push the changes in your local repository to your GitHub Account.

   ```powershell
   $ git push -u origin master
   ```

   

   Check the updates in your repository. Take a screenshot of your repository. Save as YourLastname_01

   

   **Have a 5-minute `<br>`!**

Steps in Branching:

10. Create a reademe-edits branch and switch to it at the same time

    ```powershell
    $ git checkout -b readme-edits
    ```

    This is shorthand for (no need to do this if you used the above code):

    ```powershell
    $ git branch readme-edits
    $ git checkout readme-edits
    ```

11. In your local repository, modify the readme.md file. Add one sentence for demo. Save. Go back to CLI to commit the changes.

    ```powershell
    $ git commit -a -m "added new line for demo"
    ```

12. Switch back to master branch.

    ```powershell
    $ git checkout master
    ```

13. Merge the readme-edits branch to master

    ```powershell
    $ git merge readme-edits
    ```

14. Push the changes

    ```powershell
    $ git push
    ```

15. Delete the readme-edits branch

    ```powershell
    $ git branch -d readme-edits
    ```

16. Create feature branch and switch to it

    ```powershell
    $ git checkout -b feature
    ```

17. In your local repository, create index.html file. Just put `<p> The quick brown fox jumps over the lazy dog.</p>`

18. Add the new file and commit.

    ```powershell
    $ git add .
    $ git commit -m "added new file index.html"
    ```

19. Switch back to master branch, merge the feature branch, push the changes, delete the feature branch

    ```powershell
    $ git checkout master
    $ git merge feature
    $ git push
    $ git branch -d feature
    ```



###### :space_invader: Practice 2-03

| Try it!                                                      |
| ------------------------------------------------------------ |
| **THREE PERSON COLLABORATION VIA CLI SHARED REPO WORKFLOW** (without branches). |

This exercise is based on SWG Git Novice lesson https://swcarpentry.github.io/git-novice/08-collab/

One of you will be the "Owner" and two teammates will be "Collaborators".

**Step 1.** Owner will give collaborator access to their repository

​	Requirements:

- [ ] Repository name: YourTeamName-CC6
- [ ] Files: tenlines.txt

1. Click on **Settings** tab > **Collaborators**
2. Enter collaborators' username

**Step 2.** Collaborators clones owner's repository

1. Go to https://github.com/notifications and accept access to Owner's repo.

2. On the CLI, clone the owner's repo but issuing the command:

   ```powershell
   $ git clone origin remote repository URL
   ```

**Step 3.** Collaborators work on clone of owner's repository

1. Open CLI, go to your cloned repo

2. Open editor and revise file tenlines.txt

3. Commit your changes to your local repo using `add` and `commit`

4.  Push your changes to the Owner's repo on Github

   ```
   $ git push origin master
   ```

**Step 4.** Owner review and accepts changes from collaborators

Look at Owner’s GitHub repo and see new commit(s) from Collaborator.

Download (pull) Collaborators changes to Owner’s local repo:

```
$ git pull origin master
```



###### :space_invader: Practice 2-04

| Try it!                                                      |
| ------------------------------------------------------------ |
| **FORK-ing**. Someday, you may want to contribute to other's projects, or you like to use someone's project as a starting point. This process is known as forking. |

**Steps:**

1. Fork the repository probable-octo-train from organization PSU-CC6-REPOs by clicking the the fork button.

2. Clone it in your local repository

   ```
   $ git clone origin remote repository URL
   ```

3. Open the cloned repository using your favorite editor.

4. Read the readme.md file for the instructions of this activity.

repo for fork 

https://github.com/gillbertmpadon/probable-octo-train.git



#### :pushpin: References

| Links                                                        |
| ------------------------------------------------------------ |
| https://medium.com/weareservian/importance-of-version-control-and-why-you-need-it-aae53dac208a<br />https://guides.github.com/activities/hello-world/<br />https://uoftcoders.github.io/studyGroup/lessons/git/collaboration/lesson/ |



