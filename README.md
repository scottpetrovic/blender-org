# blender.org wordpress theme

We are making the new blender.org skin. Join the discussion on the [dedicated mailing list](http://lists.blender.org/mailman/listinfo/bf-webcontent).

## Installation

1. Get a copy of Wordpress
2. Extract the archive in your Apache Root
3. Delete the `wp-content` folder
4. Check out this repository as `wp_content` as a replacement for the just delete folder
5. Manually sync the plugins and upload folders from Dropbox
6. Create a new MySQL Database
7. Import the database content that you find on Dropbox
8. Manually configure your `wp-config.php` file to point at this database

## Links
- [Database dump](https://dl.dropboxusercontent.com/u/8149083/blender.org/wordpress_bthree_2013-09-23.sql.gz)
- [Uploads folder](https://dl.dropboxusercontent.com/u/8149083/blender.org/uploads.zip)

## Other info

- WP username and password are (admin, password)
- if you can add to your `/etc/hosts` file the following line:

```
local.blender.org	120.0.0.1
```
so that you can visit local.blender.org on your browser and see the website. Alternatively you can add to your `wp-config.php` the following lines to see it vising localhost/blender:

```
define('WP_HOME','http://localhost/blender');
define('WP_SITEURL','http://localhost/blender');
```

## Apache settings
Depending on the system you are working on, you might want to check these settings too:

1. enable short_code (in php.ini)  - this allows code to run with "<?" as well as <?php". The template and plugins use both formats.
2. enable "rewrite_module" or "mod_rewrite" - this allow the links to work since the permalink format is different than the default.



## Plugins currently used
- [	CMS Tree Page View](http://eskapism.se/code-playground/cms-tree-page-view/)
- [Advanced Custom Fields](http://www.advancedcustomfields.com/)
- [Media Library Assistant]
- [Post Snippets]
- [Widgetable](http://halgatewood.com/widgetable)
- Page Links To
- W3 Total Cache
- WP RSS Aggregator
