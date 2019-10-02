# xml-tag-finder
 This project is responsible for returning the value of one or more xml tag.

#### Install

```
composer require VivianeQuinaia/xml-tag-finder
```

#### How to use
```php
<?php

$finderFactory = $a = (new FinderFactory())->create($xml);

$tag = $finderFactory->getTag('infNFe/emit/CNPJ')->find();

$attribute = $finderFactory->getTag('infNFe')->getAttribute('Id')->find();
```

#### Run Tests
```
$ vendor/phpunit/phpunit/phpunit tests
```