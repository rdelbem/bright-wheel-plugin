## Hi, this is my code test for My Bright Wheel.

1. This is a WordPress plugin, intended to create a shortcode to embed a form that sends a post fetch request to the hubspot api

2. It uses autoload to load classes by its namespaces in php

3. It is divided in three parts\
   a. A main class, which is located at src/BrightWheel.php\
   b. A view, which is located at view/form-layout.php\
   c. Assets, that can be find at src/assets/\
   I. One js file called main.js\
   II. A style sheet called styles.css\

   It can be installed in WP as a regular plugin, just download and install it. Then paste the shortcode [brightwheelform] whererver it pleases you in your post.
   I chose to do it as a plugin, using a shortcode, because in this fashion, any user could embed the form without any trouble on many posts, and it could be re-styled and refactored dynamicaly.
