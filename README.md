# Dockerize your nextcloud

## Nginx

### /etc/nginx/nginx.conf

```nginx
...

http {
  ...

  client_max_body_size 10G;
  client_body_buffer_size 128k;
}
```

### /etc/nginx/conf.d/nextcloud.conf

```nginx
...

server {
  listen 80;
  server_name *YOUR_DNS* | *LOCAL_IP*;

  return 301 https://$server_name$request_uri;
}

server {
  listen 443 ssl http2;
  server_name *YOUR_DNS* | *LOCAL_IP*;

  ssl_certificate /path/to/cert.crt;
  ssl_certificate_key /path/to/cert.key;

  ...

  location /nextcloud {
    proxy_pass http://localhost:*PORT_NEXTCLOUD*;
    proxy_set_header Host $host;
    proxy_set_header X-Real-IP $remote_addr;
    proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
    proxy_set_header X-Forwarded-Proto https;
  }
}
```
