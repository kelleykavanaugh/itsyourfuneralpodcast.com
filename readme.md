Hello!

I created a Wordpress theme from scratch for my personal portfolio website, www.kelleykavanaugh.com . This github repo contains 2 iterations of that Wordpress theme. It was not created to be "out of the box" used by anyone else, but if you want to check it out, or modify it for your own use, that's okay by me. 

If you do, please:

1. Please leave my credit in the footer

2. Let me know where you've used it! I'd love to see your work. kelleykavanaugh@gmail.com

Some "features" of this theme (current version):

~ Powered with Bootstrap to be fully scalable!

~ 6 Different Page Templates with different Icons in the header circle. These icons are from Font Awesome (http://fortawesome.github.io/Font-Awesome/), and can be easily changed in each Page Template.

~ The Index and Page Template 6 are "about" and "contact" and thus are static Pages with no Posts.

~ Page Templates 2, 3, 4, & 5 call posts listed in specific categories only. To use your categories, you must find your own category numbers and replace them with my number from line 19:
```html
<?php query_posts( 'cat=3' ); ?>
```
~ To use the Circle Images on Posts or Pages, upload an image that is 180 px by 180px and include the tag "circle" in the class of the image. For example:
```html
<img class="size-full circle" alt="" src="IMAGE URL HERE" width="180" height="180" />
```
Please let me know if you use my Wordpress theme, or if you need help with anything on it! kelleykavanaugh@gmail.com

Thanks,

Kelley Kavanaugh