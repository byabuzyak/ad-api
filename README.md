# Laravel Ad API example application
###### This is the simple implementation of Ad API service based on Laravel framework that includes two endpoints
#### To start the application please use the following command:
In the application directory run:
`php artisan serve`

#### Endpoint for creating a new ad: `/ad/create`:

###### Request example:

`curl --location --request POST 'localhost:8000/ad/create' \
 --form 'text=My first ad' \
 --form 'price=3.0' \
 --form 'amount=100' \
 --form 'banner=@/path_to_image.jpeg'`

#### Endpoint to fetch most relevanted ad: `/ad/get`

###### Request example:
`curl --location --request GET 'localhost:8000/ad/get' \
 --header 'Content-Type: application/json'`

#### Running tests

`vendor/bin/phpunit`
