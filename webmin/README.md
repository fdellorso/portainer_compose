Want to run under Nginx sub-directory?

/etc/webmin/config :
referers=webmin.example.com
webprefix=/webmin
webprefixnoredir=1

/etc/webmin/miniserv.conf :
redirect_ssl=1
redirect_host=webmin.example.com
redirect_prefix=/webmin
cookiepath=/webmin

/etc/webmin/xterm/config :
host=webmin.example.com/webmin
