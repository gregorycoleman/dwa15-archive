@extends('templates.master')

@section('title')
    Lecture 1
@stop

@section('content')

<a href='/lectures'>&larr;  All lecture outlines</a>

# Lecture 1 - Jan 26

## Web Sites vs. Web Applications
<img src='http://making-the-internet.s3.amazonaws.com/php-frisbee-league-website@2x.png' style='max-width:536px; width:100%' alt=''>
<br>
<img src='http://making-the-internet.s3.amazonaws.com/php-frisbee-league-webapplication@2x.png' style='max-width:536px; width:100%' alt=''>
<br>
[Web Development Puzzle](http://making-the-internet.s3.amazonaws.com/misc-puzzle.png)

**Server side capabilities**

* Manipulate (create, read, update, delete) information from a database.
* Maintain users / logins; remember information across sessions.
* Send email.
* Upload and manipulate files on a server.
* Communicate with other sites.
* Etc.


## Topics we'll cover in this course
* Local and production server management
* Version Control with [Git](http://git-scm.com/) and [Github](https://github.com/)
* PHP
* Frameworks ([Laravel](http://laravel.com/))
* Dependency management ([Composer](https://getcomposer.org))
* Skills for being a successful web programmer
    + Keeping up with a quickly changing topics and tools
    + Communicating with peers, clients, etc.


## Introductions


## Course expectations
+ Level of difficulty
+ Prerequisites quiz
+ Trial, error, and patience (with yourself, with your peers, with your TAs)


## Onboarding
Tour of <http://dwa15.com>


## Today's lecture topic
+ [Command Line](https://github.com/susanBuck/dwa15-spring2017-notes/tree/master/00_Command_Line)
+ [Set up a local server](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/01_Servers_and_Git/01_Setup_local_server.md)


## To do between now and next lecture
+ __Windows users:__ Get set up with the [class version of Cmder](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/00_Command_Line/03_Windows-Cmder.md).
+ __New to command line?__
    + Read through the [Command Line notes](https://github.com/susanBuck/dwa15-fall2016-notes/tree/master/00_Command_Line). Specifically, you should be comfortable with creating/editing folders and files as outlined in the [Primer](https://github.com/susanBuck/dwa15-fall2016-notes/blob/master/00_Command_Line/04_Primer.md) section.
+ Set up your __local server__ as outlined in today's lecture, making sure you have `http://localhost/helloworld.php` working.
+ Take __Lecture 1 quiz__ in [Canvas](http://canvas.harvard.edu) (Available Mon Jan 30 @ 6:30pm through Thu Feb 2 @ 6:30pm Eastern)
+ Join the class [__Slack__](/slack) and __[Piazza](/piazza)__, if you haven't already.
+ Create an account at [Github](http://github.com).

@endsection
