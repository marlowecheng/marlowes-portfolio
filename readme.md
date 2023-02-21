# Marlowe Cheng | Portfolio

Note for Future Marlowe to understand what is actually going on so they don't have to spend days trying to decipher the spaghetti code written by Past Marlowe.


## Setting up for Development/Launch

Check **init.php** to see if the project root is set for development or launch
Uncomment/comment these based on the purpose

Launch: `define('WWW_ROOT', 'https://marlowecheng.com')`

Development: `define('WWW_ROOT', 'http://localhost');`


## @NOTE

> cmd + f: @NOTE

@NOTE is kinda like a bookmark to note the problem code blocks or just plain confusion. Basically something Future Marlowe can easily find to fix/improve.


## To-Do List

![frogcoolcry.png](https://i.imgur.com/POXY3BW.png)

## Updates Log Probably

### 23.02.21

* Cried into hands for 2 hours
* Partial'd the SCSS into partials

### 23.01.31

* Head partials has been returned
* Manually added <head> has been removed
* Added meta variables with information stored in each page
```
$meta_title = 'Marlowe Cheng | Page Name';
$meta_desc = 'Description';
```
* Added meta variables to head.php
```
$meta_title = $meta_title ?? '';
$meta_desc = $meta_desc ?? '';
```
* Threw in php blocks for meta tag's href to grab each variables from each page


### 23.01.29

* Temporarily removed the head partials
* Manually added meta tags in the <head> for each page