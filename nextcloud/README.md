Direct on config.php :

<?php
$CONFIG = array (
  'trusted_proxies'   => ['10.0.0.1'],
  'overwritehost'     => 'ssl-proxy.tld',
  'overwriteprotocol' => 'https',
  'overwritewebroot'  => '/domain.tld/nextcloud',
  'overwritecondaddr' => '^10\.0\.0\.1$',
  'overwrite.cli.url' => 'https://domain.tld/,
);

From Docker Compose :

Using the apache image behind a reverse proxy and auto configure server host and protocol
The apache image will replace the remote addr (IP address visible to Nextcloud) with the IP address from X-Real-IP if the request is coming from a proxy in 10.0.0.0/8, 172.16.0.0/12 or 192.168.0.0/16 by default. If you want Nextcloud to pick up the server host (HTTP_X_FORWARDED_HOST), protocol (HTTP_X_FORWARDED_PROTO) and client IP (HTTP_X_FORWARDED_FOR) from a trusted proxy, then disable rewrite IP and add the reverse proxy's IP address to TRUSTED_PROXIES.

APACHE_DISABLE_REWRITE_IP (not set by default): Set to 1 to disable rewrite IP.

TRUSTED_PROXIES (empty by default): A space-separated list of trusted proxies. CIDR notation is supported for IPv4.

If the TRUSTED_PROXIES approach does not work for you, try using fixed values for overwrite parameters.

OVERWRITEHOST (empty by default): Set the hostname of the proxy. Can also specify a port.
OVERWRITEPROTOCOL (empty by default): Set the protocol of the proxy, http or https.
OVERWRITECLIURL (empty by default): Set the cli url of the proxy (e.g. https://mydnsname.example.com)
OVERWRITEWEBROOT (empty by default): Set the absolute path of the proxy.
OVERWRITECONDADDR (empty by default): Regex to overwrite the values dependent on the remote address.
Check the Nexcloud documentation for more details.

Keep in mind that once set, removing these environment variables won't remove these values from the configuration file, due to how Nextcloud merges configuration files together.
