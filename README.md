# IsoCountries

A simple class for returning ISO2 and ISO3 country codes and names. Great for populating HTML drop down country lists.

## Features

* Complete ISO2/ISO3 lists with mappings to the corresponding country names
* Get mappings for the EU, Europe, North America, South America, Africa, Asia & Oceania
* Filter out countries you don't want
* Move preferred countries to the top of the returned list

## Installation

Install Composer (assuming you haven't already got it):

```bash
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```

Add IsoCountries to your composer.json file

```json
{
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/brightfishsoftware/isocountries"
        }
    ],
    "require": {
        "brightfishsoftware/isocountries": "dev-master"
    }
}
```

Run "composer install"

## Examples

### Get All Countries

```php
<?php
use BrightfishSoftware\IsoCountries;

$countries = new IsoCountries;
print_r($countries->get()); // as ISO3
print_r($countries->get(IsoCountries::RETURN_AS_ISO2)); // as ISO2
```

### Move Country To Top

```php
<?php
use BrightfishSoftware\IsoCountries;

$countries = new IsoCountries;
print_r($countries->toTop('GBR')->get());
```

### Exclude Countries

```php
<?php
use BrightfishSoftware\IsoCountries;

$countries = new IsoCountries;
print_r($countries->exclude(['AFG', 'ALA', 'ALB'])->get());
```

### Get All EU Member States

```php
<?php
use BrightfishSoftware\IsoCountries;

$countries = new IsoCountries;
print_r($countries->getEu()); // all EU
print_r($countries->toTop('GBR')->getEu()); // all EU but move GBR to top
```

## License

Copyright (c) 2014, Brightfish Software/Ed Eliot
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this
   list of conditions and the following disclaimer.
2. Redistributions in binary form must reproduce the above copyright notice,
   this list of conditions and the following disclaimer in the documentation
   and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

The views and conclusions contained in the software and documentation are those
of the authors and should not be interpreted as representing official policies,
either expressed or implied, of the FreeBSD Project.
