# snake-to-camel-laravel
This is an example how to get properties with camelcase (but in DB, column names in snakecase).

You can check it at 3 branches (first-way, second-way, third-way) in Post Model.

Good way, with adding package:

https://github.com/GitCodeDestroyer/snake-to-camel/blob/first-way/app/Models/Post.php

Bad way, with adding separate "getters" for all properties:

https://github.com/GitCodeDestroyer/snake-to-camel/blob/second-way/app/Models/Post.php

Using getAttribute and setAttribute:

https://github.com/GitCodeDestroyer/snake-to-camel/blob/third-way/app/Models/Post.php
