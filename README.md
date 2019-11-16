# Crowdsource Survey App

## Run the Application

Create `.env` file

```sh
cp .env-sample .env
```

If you are working in local development, you can uncomment these lines from `docker-compose.yml` file to mount local filesystem to container's

```yaml
...
  vol_php_public:
    ...
    # driver: local
    # driver_opts:
    #   type: none
    #   device: $PWD/php/public
    #   o: bind
...
```

Then, build images and run containers

```sh
docker-compose up -d
```

Finally, you can access from your browser at http://localhost:8181

## Modifikasi Desain form

* pada mode administrator, klik Themes pada layar.
* maka akan keluar beberapa themes yang sudah terinstall di framework
* pada tampilan themes, ada beberapa tab diantaranya : Survey Themes, Admin Themes, dan Question Themes
  * **Survey Themes** : untuk tampilan survey yang akan dilihat oleh client
  * **Admin Survey** : untuk tampilan admin
* untuk memodifikasi themes bisa klik *themes editor*, atau jika hanya merubah beberapa tampilan saja pilih *themes options*
