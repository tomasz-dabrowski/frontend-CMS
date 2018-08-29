# Simple frontend CMS
#### Object PHP, MySQL, jQuery, Bootstrap, TinyMCE, MVC

Frontend CMS based on <a href="https://github.com/tomasz-dabrowski/frontend-sample" target="_blank">
Frontend sample project</a>

<img src="doc/01.png" width="400px" />

In the upper left corner there's a "Login" button:

<img src="doc/02.png" width="400px" />

After clicking it, you can enter your username and password (validation using the jQuery library):

<img src="doc/03.png" width="400px" />

After logging in, buttons for quick change preview and password change appear at the top of the page:

<img src="doc/04.png" width="400px" />

You can change the password:

<img src="doc/05.png" width="400px" />

Also you can see div's surrounded by an orange frame, that can be edited by the CMS:

<img src="doc/06.png" width="400px" />

There are two content types of edit:

1. Using TinyMCE editor - in the upper right corner of the orange frame with the text "WYWIWYG"

<img src="doc/08.png" width="400px" />

After clicking this text area the editing window opens:

<img src="doc/09.png" width="400px" />

2. Using one line - in the upper right corner of the orange frame with the text "ONELINE"

<img src="doc/11.png" width="400px" />

After clicking this text area:

<img src="doc/12.png" width="400px" />

## How to use?

The database structure is very simple

<img src="doc/07.png" width="400px" />

To create a block to edit with the name 'content-main' that you want to put anywhere on the page, just write:

```php
<?php $FrontendCMS->Cms->displayBlock('content-main', 'wysiwyg'); ?>
```

A new record will be created in the database:

<img src="doc/10.png" width="400px" />