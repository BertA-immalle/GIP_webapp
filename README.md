# anonymous comment section

## version 1

view *.png* file

## version 2

1. clone repository
2. install composer
* [guide](https://getcomposer.org/download/)
3. add to path
* sessionwise: `export PATH="$HOME/.config/composer/vendor/bin:$PATH"`
* global: `export PATH="$HOME/.config/composer/vendor/bin:$PATH" >> ~/.zshrc`
4. `composer install`
5. make new schema
6. make new user
7. configure this user with the necessary schema previliges
8. copy *.env.example file*
9. edit the `DB_DATABASE` `DB_USERNAME` and the `DB_PASSWORD` variable from the *.env* file
10. `php artisan key:generate`
11. `php artisan config:clear`
10. `php artisan serve`
11. enjoy

## explenation

This is first and and formost a school project. It is a webapplication where you can comment on my earlier video I made for an explenation for a tool. It could also be used at the start or end of a tour around the workingspace. You tell your guest that if they want they can leave a comment on the video you're displaying to them. And it is always assuring to visitors they can leave some quote or working point anonymous.