<?php require('logic.php'); ?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alex C. Project 1</title>
    <link href='./static/style.css' rel='stylesheet'>
  </head>
  <body>
    <div class="container">
      <h1>Alex Caloggero</h1>
      <img src='./images/ac.jpg' alt='Alex Caloggero'>
      <h2>About Me</h2>
      <p>I'm Alex Caloggero. I'm from just outside of Boston, MA and currently work as a prospect researcher at Tufts University. About a year ago I 
took the online course, CS50x, which is Harvard's intro to Computer science course. I discovered that I really loved programming and design thinking and 
I've also had an interest in computers/technology since I was a kid. I completed CS50 and continued my learning with other online classes through EDx 
and have also worked on my own personal projects, learning and absorbing all that I can. I want to make a shift career-wise towards software development and this is my first big step! Great to meet you all and 
excited to get started!</p>
      <h2>Random Quote</h2>
      <blockquote><em><?php echo $quote[$index];?></em></blockquote>
    </div>
  </body>

</html>

