# Custom Theme with Wordpress

See `.env-example` for database configuration and login credentials.

# Setup
- Clone the repo using the command ``git clone --recurse-submodules https://github.com/clemdevs/carcase-wordpress.git``
- Setup virtualhost 

`hosts.txt`
```hosts.txt
127.0.0.1 localhost
127.0.0.1 carcase.localhost
```

`xampp/etc/conf/extra/httpd-vhosts`
```xampp/etc/conf/extra/httpd-vhosts
<VirtualHost *:80>
	DocumentRoot C:\xampp\htdocs\CarCase\www
	ServerName carcase.localhost
</VirtualHost>
```

- In the theme's folder `wp-content/themes/carcase`, run the following commands:
 - `npm install` 
 - `npm audit fix`
 - `npm run watch`
- Do the same commands for `wp-content/themes/carcase-child`
