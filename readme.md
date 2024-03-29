Tufts Daily Wordpress Web App - Readme
======================================

Local Setup - macOS 
-------------------
* Webserver + WP Setup:
    1. First, you must set up apache to run your site. Apache is pre-installed on macOS, so you just need to shift the following configurations: 
        * Open `/etc/apache2/httpd.conf` in your favorite editor with sudo privs. Then, uncomment the following lines: 
            - `Include /private/etc/apache2/extra/httpd-vhosts.conf` to allow virtual hosts.
            - `LoadModule php5_module libexec/apache2/libphp5.so`.
            - `LoadModule rewrite_module libexec/apache2/mod_rewrite.so`.
            - `LoadModule alias_module libexec/apache2/mod_alias.so`.
        * Crate a virtual host by, once again, opening `/etc/apache2/extra/httpd-vhosts.conf` (and again, using sudo privs). 
        * Add the following to the virtual host file at `/etc/apache2/extra/httpd-vhosts.conf`: 
            ```
            <VirtualHost *:80>
                DocumentRoot "/Users/USER/Sites/tuftsdailyWeb"
                ServerName tuftsdaily.test.server
                <Directory "/Users/USER/Sites/tuftsdailyWeb">
                    Require all granted
                    Allow from all
                    RewriteEngine on
                    RewriteCond %{REQUEST_FILENAME} -f [OR]
                    RewriteCond %{REQUEST_FILENAME} -d
                    RewriteRule .+ - [L]

                    RewriteRule ^ index.php [L]
                </Directory>
            </VirtualHost>

            ```
        And delete the rest of the file (i.e. the mock virtual hosts)
        * Remember to change USER to whatever your user path is. 
        * Restart apache with the following command: `sudo apachectl restart`.
  
    2. Create a Sites directory in your home directory (`cd ~ && mkdir Sites`), and clone the repository there. 
  
    3. Modify the wp-config.php inside `tuftsdailyWeb` to mimic `wp-config.local.php`. Get the actual database password from your local friendly project lead. 
  
    4. Open `127.0.0.1` in your browser. 
  
    5. That should work, but it most probably won't. Contact your local project lead with any questions about this. 

* NPM + Webpack Setup: 
    1. Make sure you have npm installed. 

    2. Install webpack globally with: `npm install webpack -g`.

    3. Then, run `npm install` to get remainders of packages. 

    4. Finally, run `webpack --watch` to complile the frontend code. 

* If you followed all the instructions, then the site should be running on `127.0.0.1`;