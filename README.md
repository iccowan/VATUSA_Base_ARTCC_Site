VATUSA Website Template v2.1
============================

Written in Laravel 5.6, The PHP Framework for Web Artisans

Includes VATUSA API Integration

Written by Ian Cowan, vZTL ARTCC Webmaster

Prerequisites
--------------
- If you wish to have training scheduling, setmore will be required. You can create an account at [https://www.setmore.com/](https://www.setmore.com/).
- You can either use git to install the files or download them directly, but git makes the process much easier.
- You should have both composer and npm installed and accessible in the folder you wish to install the website.
- PHP 7.0 or greater is required.

Installation
------------

1. Clone the website files to your local machine and cd into the cloned directory.
   - `git clone https://github.com/iccowan/VATUSA_Base_ARTCC_Site.git`

2. Acquire the composer dependencies.
   - `composer install`

3. Acquire, initialize, and run npm (see below if errors are returned while running).
   - `npm install`
   - `npm run prod`

4. Setup the environment (.env) file for your ARTCC and to customize the website following the example (.env.example).

5. Other customizations. The following items can and should be customized according to your ARTCC. See below for alternate optional customizations.
   - `~/public/photos/Banner.jpg` - Update with a banner photo for the home page.
   - `~/public/photos/logo.png` - Update with your logo.
   - `~/public/photos/xmas_logo.png` - Update with your Christmas logo. If you do not have one, create a copy of your logo and rename it as the Christmas logo.
   - OPTIONAL - `~/resources/views/emails` - Customize automatic emails sent to the ARTCC for various actions.

6. Run the following command to initialize the website.
   - `php artisan Initialization:Init`

7. Go to `~/routes/web.php` and scroll down to lines 231-233. Uncomment lines 236-239 and enter your CID. Navigate to `/wm-grant` and then re-comment out lines 236-239. You will now have full permissions on the website.

8. You need to add a cron job to run for `php artisan schedule:run` every minute.
   - The crontab should be as follows (as per the Laravel documentation): `* * * * * cd /[PATH TO YOUR PROJECT] && php artisan schedule:run >> /dev/null 2>&1`
   - If your web host does not allow minutely crob jobs, navigate to [https://cron-job.org](https://crob-job.org), register, and create a cron job. The URL for the cron job should look as follows (replace with your website url and token from environment file):
     - `[https://www.artccurl.com]/cron-job/run?j=schedule:run&t=[env(CRON_JOB_TOKEN)]`
   - Navigate to the link that you included to confirm that the cron jobs are working. The response should read "success".

9. You should now be good to go! Launch the website and see everything in action!

*If you plan to use git for version control, be sure to change the ignore.gitignore to .gitignore before making any commits.*

Troubleshooting
---------------
All questions can be directed to [wm@ztlartcc.org](mailto:wm@ztlartcc.org). The documentation for this version of laravel can be found at [https://laravel.com/docs/5.6](https://laravel.com/docs/5.6).

- If npm is erroring when running either `npm install` or `npm run prod`, try the following:
  - Make sure npm is up-to-date
  - Run the following commands to make sure pngquant is installed:
    - `npm install imagemin-pngquant@5.0.1 --save`
    - `npm install pngquant-bin@3.1.1 --save`
- This should fix the problem but if you're still getting an error, try the following commands to reset npm within the project:
  - `rm -rf node_modules`
  - `rm package-lock.json yarn.lock`
  - `npm cache clear --force`
  - `npm install`

Usage
-----
This was created for the use by the ZTL ARTCC and has been made available to the public. Please do not remove the author meta tag in the master layout view. Other than that, feel free to make changes to any part of the website you wish. Enjoy!

Version History
---------------
- 1/07/2019 -> Version 1.0 Released -> Initial release
- 1/09/2019 -> Version 1.1 Released -> Fixed some minor issues and updated the README
- 1/09/2019 -> Version 1.2 Released -> Fixed a few more minor issues
- 1/09/2019 -> Version 1.3 Released -> Fixed customization issues and updated README
- 1/10/2019 -> Version 2.0 Released -> Added flights within ARTCC boundaries; added customizations to the .env file and updated the README; simplified installation immensely
- 1/13/2019 -> Version 2.1 Released -> Added website activity audits
