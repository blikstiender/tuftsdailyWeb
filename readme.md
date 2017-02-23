Tufts Daily Wordpress Web App - Readme
======================================

Local Setup - macOS 
-------------------
* To set up the app for local development you must follow a couple of steps: 
  
    1. First, you must set up apache to run your site. Apache is pre-installed on macOS, so you just need to shift the following configurations: 
        * Open `/etc/apache2/httpd.conf` in your favorite editor with sudo privs. Then, uncomment the following lines: 
            - `Include /private/etc/apache2/extra/httpd-vhosts.conf` to allow virtual hosts.
            - `LoadModule php5_module libexec/apache2/libphp5.so`.
        * Crate a virtual host by, once again, opening `/etc/apache2/extra/httpd-vhosts.conf` (and again, using sudo privs). 
        * Add the following to the virtual host: 
            ```
            <VirtualHost *:80>
                DocumentRoot "/Users/USER/Sites/tuftsdailyWeb"
                ServerName tuftsdaily.test.server
                <Directory "/Users/USER/Sites/tuftsdailyWeb">
                    Require all granted
                    Allow from all
                </Directory>
            </VirtualHost>

            ```
        * Remember to change USER to whatever your user path is. 
        * Restart apache with the following command: `sudo apachectl restart`.
  
    2. Create a Sites directory in your home directory (`cd ~ && mkdir Sites`), and clone the repository there. 
  
    3. Modify the wp-config.php inside `tuftsdailyWeb` to mimic `wp-config.local.php`. Get the actual database password from your local friendly project lead. 
  
    4. Open `127.0.0.1` in your browser. 
  
    5. That should work, but it most probably won't. Contact your local project lead with any questions about this. 

