VATUSA Website Template v1.1
============================

Written in Laravel 5.6, The PHP Framework for Web Artisans

Includes VATUSA API Integration

Written by Ian Cowan, vZTL ARTCC Webmaster

Prerequisites
--------------
- If you wish to have training scheduling, setmore will be required.
- You can either use git to install the files or download them directly, but git makes the process much easier.
- You should have both composer and npm installed and accessible in the folder you wish to install the website.
- PHP 7.0 or greater is required.

Installation
------------

1. Clone the website files to your local machine and cd into the cloned directory.
   - `git clone https://github.com/iccowan/VATUSA_Base_ARTCC_Site.git`

2. Acquire the composer dependencies.
   - `composer install`

3. Acquire, initialize, and run npm.
   - `npm install`
   - `npm run dev`

4. Setup the environment (.env) file for your ARTCC following the example (example.env).

5. Run the following commands to initialize the environment file.
   - `php artisan key:generate`
   - `php artisan config:cache`

6. Create the tables. All of the migrations are included so all of them should be created with one command. You then need to run the seeder once for event presets and roles/permissions to work properly.
   - `php artisan migrate`
   - `php artisan db:seed`

7. Create the public symbolic link to the storage folder so the event banners and OTS reports will work properly.
   - `php artisan storage:link`

8. Customize. The following items can and should be customized according to your ARTCC.
   - `~/app/Console/Commands/OnlineControllerUpdate.php` - Update `protected $facilities` (lines 32-41) for the facilities that you would like to record hours for controllers.
   - `~/app/Http/Controllers/FrontController.php` - Update line 43 and line 51 for the first and second fields that you would like to show the online status.
   - `~/resources/views/site/home.blade.php` - Update lines 13, 14, 18-35.
   - `~/resources/views/inc/footer.blade.php` - Update line 12 and remove line 3 if you don't want the VATSTAR logo in the footer.
   - `~/resources/views/inc/sidebar.blade.php` - Update lines 5, 30, and 60. Line 30 should be a script you get from setmore.
   - `~/resources/views/layouts/dashboard.blade.php` - Update line 43 to show your ARTCC Name at the top of the page.
   - `~/resources/views/layouts/master.blade.php` - Update line 39 to show your ARTCC Name at the top of the page.
   - `~/resources/views/layouts/email.blade.php` - Update line 11 with the correct information.
   - `~/resources/views/inc/navbar.blade.php` - Update line 40 with your ARTCC name for the visitor link.
   - `~/resources/views/site/visit.blade.php` - Update lines 11 and 53 with your ARTCC name.
   - `~/public/photos/Banner.jpg` - Update with a banner photo for the home page.
   - `~/public/photos/logo.png` - Update with your logo.
   - `~/public/photos/xmas_logo.png` - Update with your Christmas logo.

9. Update the emails in the following controllers on the following lines.
   - `~/app/Http/Controllers/AdminDash.php` - Lines 343, 344, 649, 650, 836, 837, 884, 885, 962, 963, 969, 970.
   - `~/app/Http/Controllers/ControllerDash.php` - Lines 556, 558.
   - `~/app/Http/Controllers/FrontController.php` - Lines 254, 255, 327, 328.
   - `~/app/Http/Controllers/TrainingDash.php` - Lines 139, 141, 244, 246.

10. Customize the emails within the `~/resources/emails` folder to your liking. Please note that the variables in the email template are the only ones available.

11. Run the following commands to initialize the roster, airport information, and online controllers.
   - `php artisan RosterUpdate:UpdateRoster`
   - `php artisan OnlineControllers:GetControllers`

12. Go to `~/routes/web.php` and scroll down to lines 231-233. Uncomment lines 236-239 and enter your CID. Navigate to `/wm-grant` and then re-comment out lines 236-239. You will now have full permissions on the website.

13. You need to add a cron job to run for `php artisan schedule:run` every minute.
   - The crontab should be as follows (as per the Laravel documentation): `* * * * * cd /[PATH TO YOUR PROJECT] && php artisan schedule:run >> /dev/null 2>&1`
   - If your web host does not allow minutely crob jobs, navigate to [https://cron-job.org](https://crob-job.org), register, and create a cron job. The URL for the cron job should look as follows (replace with your website url and token from environment file):
     - `[https://www.artccurl.com]/cron-job/run?j=schedule:run&t=[env(CRON_JOB_TOKEN)]`
   - Navigate to the link that you included to confirm that the cron jobs are working. The response should read "success".

14. You should now be good to go! Launch the website and see everything in action!

*If you plan to use git for version control, be sure to change the ignore.gitignore to .gitignore before making any commits.*

Troubleshooting
---------------
All questions can be directed to [wm@ztlartcc.org](mailto:wm@ztlartcc.org). The documentation for this version of laravel can be found at [https://laravel.com/docs/5.6](https://laravel.com/docs/5.6).

Usage
-----
This was created for the use by the ZTL ARTCC and has been made available to the public. Please do not remove the author meta tag in the master layout view. Other than that, feel free to make changes to any part of the website you wish. Enjoy!

Version History
---------------
- 1/07/2019 -> Version 1.0 Released -> Initial release
- 1/09/2019 -> Version 1.1 Released -> Fixed some minor issues and updated the README
