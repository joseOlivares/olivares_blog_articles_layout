# olivares-blog-articles_layout

Gantry 5.3.2+ Particle to show articles inside joomla categories implementing a Blog entries list (small image on the left and intro text on the right, usind a card style). It works with Joomla 4.x or higher  (joomla 3.5+ compatiblle).  This particle uses UIkit 3.x and FontAwesome 5.x

# Developer info :ninja:
Hi my name is Jose Luis Olivares. 
If you appreciate my effort, please endorse my Development skills on Linkedin (https://www.linkedin.com/in/jolivaress/) or making a voluntary donation through Paypal https://paypal.me/joolivares 

You can see an example implemented in this website I made (https://iconnsv.com) or down below checking some screenshots

# Installation on Joomla 3.x / 4.x:

1-Copy the olivares_blog_article_layout.html.twig and blog-main-olivares.yaml files to root/templates/TEMPLATE_DIR/custom/particles (if the particles folder does not exist, you have to create it manually)

2-Copy the _olivares_blog_article_layout.scss file to root/templates/TEMPLATE_DIR/custom/scss (if the scss folder does not exists, you will need to create it manually)

3- Add the following code in your custom.scss file.

	@import "dependencies";
	@import "olivares_blog_article_layout"; /* Olivares Blog Card Particle */

  If the custom.scss file does not exists, you will need to create it manually. Also, make sure your custom.scss file has the @import "dependencies"; code at the very top.


4- Add olivaresGetUrlParam.php as a Gantry dependency injection (check Gantry docs https://docs.gantry.org/gantry5/advanced/php-functions)
 
# Some Screenshots

## Particle on Gantry 5.3.2+
![gantry5-particle]( ./no-copy-imgs/particle-img1.jpg?raw=true "Add particle")

## General Configuration
![presentation-mode](./no-copy-imgs/particle-img2.jpg?raw=true "Articles IDs to show")

## Setting categories where articles should be taken from
![card-mode]( ./no-copy-imgs/particle-img3.jpg?raw=true "How many cards")

## Real example
![nocard-mode]( ./no-copy-imgs/particle-img4.jpg?raw=true "Particle implemented")