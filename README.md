<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation

- composer update
- copy .env.example to .env
- set your database connection in .env file
- launch migrations
- create user: php artisan make:filament-user
- Login: /admin (Brewery List)

# Access to API:
## POST to http://your-installation-path/api/auth/login
- in body request:
<pre>
    {
        "email" : "your created user email",
        "password" : "your password"
    }
</pre>
- response:
    {
        "success": true,
        "message": "Login success.",
        "token": "4|1fs0II31VTG4VdsLetE7YVoui0uxZYIFlsTRH2hq3c4cdd35"
    }

# Request:
## GET to http://your-installation-path/api/breweries
- with Authorization Bearer Token

- response
<pre>
{
    "data": [
        {
            "id": 5128,
            "name": "(405) Brewing Co",
            "brewery_type": "micro",
            "address_1": "1716 Topeka St",
            "address_2": null,
            "address_3": null,
            "city": "Norman",
            "state_province": "Oklahoma",
            "postal_code": "73069-8224",
            "country": "United States",
            "longitude": -97.46818222,
            "latitude": 35.25738891,
            "phone": 4058160490,
            "website_url": "http://www.405brewing.com",
            "state": "Oklahoma",
            "street": "1716 Topeka St"
        },
        {
            "id": 9,
            "name": "(512) Brewing Co",
            "brewery_type": "micro",
            "address_1": "407 Radam Ln Ste F200",
            "address_2": null,
            "address_3": null,
            "city": "Austin",
            "state_province": "Texas",
            "postal_code": "78745-1197",
            "country": "United States",
            "longitude": null,
            "latitude": null,
            "phone": 5129211545,
            "website_url": "http://www.512brewing.com",
            "state": "Texas",
            "street": "407 Radam Ln Ste F200"
        },
        {
            "id": 3400000000,
            "name": "1 of Us Brewing Company",
            "brewery_type": "micro",
            "address_1": "8100 Washington Ave",
            "address_2": null,
            "address_3": null,
            "city": "Mount Pleasant",
            "state_province": "Wisconsin",
            "postal_code": "53406-3920",
            "country": "United States",
            "longitude": -87.88336350209435,
            "latitude": 42.72010826899558,
            "phone": 2624847553,
            "website_url": "https://www.1ofusbrewing.com",
            "state": "Wisconsin",
            "street": "8100 Washington Ave"
        },
        {
            "id": 0,
            "name": "10 Barrel Brewing Co",
            "brewery_type": "large",
            "address_1": "1501 E St",
            "address_2": null,
            "address_3": null,
            "city": "San Diego",
            "state_province": "California",
            "postal_code": "92101-6618",
            "country": "United States",
            "longitude": -117.129593,
            "latitude": 32.714813,
            "phone": 6195782311,
            "website_url": "http://10barrel.com",
            "state": "California",
            "street": "1501 E St"
        },
        {
            "id": 6,
            "name": "10 Barrel Brewing Co",
            "brewery_type": "large",
            "address_1": "62970 18th St",
            "address_2": null,
            "address_3": null,
            "city": "Bend",
            "state_province": "Oregon",
            "postal_code": "97701-9847",
            "country": "United States",
            "longitude": -121.281706,
            "latitude": 44.08683531,
            "phone": 5415851007,
            "website_url": "http://www.10barrel.com",
            "state": "Oregon",
            "street": "62970 18th St"
        },
        {
            "id": 0,
            "name": "10 Barrel Brewing Co",
            "brewery_type": "large",
            "address_1": "1135 NW Galveston Ave Ste B",
            "address_2": null,
            "address_3": null,
            "city": "Bend",
            "state_province": "Oregon",
            "postal_code": "97703-2465",
            "country": "United States",
            "longitude": -121.3288021,
            "latitude": 44.0575649,
            "phone": 5415851007,
            "website_url": null,
            "state": "Oregon",
            "street": "1135 NW Galveston Ave Ste B"
        },
        {
            "id": 0,
            "name": "10 Barrel Brewing Co",
            "brewery_type": "large",
            "address_1": "1411 NW Flanders St",
            "address_2": null,
            "address_3": null,
            "city": "Portland",
            "state_province": "Oregon",
            "postal_code": "97209-2620",
            "country": "United States",
            "longitude": -122.6855056,
            "latitude": 45.5259786,
            "phone": 5032241700,
            "website_url": "http://www.10barrel.com",
            "state": "Oregon",
            "street": "1411 NW Flanders St"
        },
        {
            "id": 9,
            "name": "10 Barrel Brewing Co - Bend Pub",
            "brewery_type": "large",
            "address_1": "62950 NE 18th St",
            "address_2": null,
            "address_3": null,
            "city": "Bend",
            "state_province": "Oregon",
            "postal_code": "97701",
            "country": "United States",
            "longitude": -121.2809536,
            "latitude": 44.0912109,
            "phone": 5415851007,
            "website_url": null,
            "state": "Oregon",
            "street": "62950 NE 18th St"
        },
        {
            "id": 0,
            "name": "10 Barrel Brewing Co - Boise",
            "brewery_type": "large",
            "address_1": "826 W Bannock St",
            "address_2": null,
            "address_3": null,
            "city": "Boise",
            "state_province": "Idaho",
            "postal_code": "83702-5857",
            "country": "United States",
            "longitude": -116.202929,
            "latitude": 43.618516,
            "phone": 2083445870,
            "website_url": "http://www.10barrel.com",
            "state": "Idaho",
            "street": "826 W Bannock St"
        },
        {
            "id": 1988,
            "name": "10 Barrel Brewing Co - Denver",
            "brewery_type": "large",
            "address_1": "2620 Walnut St",
            "address_2": null,
            "address_3": null,
            "city": "Denver",
            "state_province": "Colorado",
            "postal_code": "80205-2231",
            "country": "United States",
            "longitude": -104.9853655,
            "latitude": 39.7592508,
            "phone": 7205738992,
            "website_url": null,
            "state": "Colorado",
            "street": "2620 Walnut St"
        },
        {
            "id": 1,
            "name": "10 Torr Distilling and Brewing",
            "brewery_type": "micro",
            "address_1": "490 Mill St",
            "address_2": null,
            "address_3": null,
            "city": "Reno",
            "state_province": "Nevada",
            "postal_code": "89502",
            "country": "United States",
            "longitude": -119.7732015,
            "latitude": 39.5171702,
            "phone": 7755307014,
            "website_url": "http://www.10torr.com",
            "state": "Nevada",
            "street": "490 Mill St"
        },
        {
            "id": 7531,
            "name": "10-56 Brewing Company",
            "brewery_type": "micro",
            "address_1": "400 Brown Cir",
            "address_2": null,
            "address_3": null,
            "city": "Knox",
            "state_province": "Indiana",
            "postal_code": "46534",
            "country": "United States",
            "longitude": -86.627954,
            "latitude": 41.289715,
            "phone": 6308165790,
            "website_url": null,
            "state": "Indiana",
            "street": "400 Brown Cir"
        },
        {
            "id": 5,
            "name": "101 North Brewing Company",
            "brewery_type": "closed",
            "address_1": "1304 Scott St Ste D",
            "address_2": null,
            "address_3": null,
            "city": "Petaluma",
            "state_province": "California",
            "postal_code": "94954-7100",
            "country": "United States",
            "longitude": -122.665055,
            "latitude": 38.27029381,
            "phone": 7077534934,
            "website_url": "http://www.101northbeer.com",
            "state": "California",
            "street": "1304 Scott St Ste D"
        },
        {
            "id": 4,
            "name": "105 West Brewing Co",
            "brewery_type": "micro",
            "address_1": "1043 Park St",
            "address_2": null,
            "address_3": null,
            "city": "Castle Rock",
            "state_province": "Colorado",
            "postal_code": "80109-1585",
            "country": "United States",
            "longitude": -104.8667206,
            "latitude": 39.38269495,
            "phone": 3033257321,
            "website_url": "http://www.105westbrewing.com",
            "state": "Colorado",
            "street": "1043 Park St"
        },
        {
            "id": 42,
            "name": "10K Brewing",
            "brewery_type": "micro",
            "address_1": "2005 2nd Ave",
            "address_2": null,
            "address_3": null,
            "city": "Anoka",
            "state_province": "Minnesota",
            "postal_code": "55303-2243",
            "country": "United States",
            "longitude": -93.38952559,
            "latitude": 45.19812039,
            "phone": 7633924753,
            "website_url": "http://10KBrew.com",
            "state": "Minnesota",
            "street": "2005 2nd Ave"
        }
    ],
    "links": {
        "first": "http://laravel-backend.test/api/breweries?page=1",
        "last": "http://laravel-backend.test/api/breweries?page=4",
        "prev": null,
        "next": "http://laravel-backend.test/api/breweries?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 4,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://laravel-backend.test/api/breweries?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "http://laravel-backend.test/api/breweries?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "http://laravel-backend.test/api/breweries?page=3",
                "label": "3",
                "active": false
            },
            {
                "url": "http://laravel-backend.test/api/breweries?page=4",
                "label": "4",
                "active": false
            },
            {
                "url": "http://laravel-backend.test/api/breweries?page=2",
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://laravel-backend.test/api/breweries",
        "per_page": 15,
        "to": 15,
        "total": 50
    }
}
</pre>
