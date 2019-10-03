# xml-tag-finder
 This project is responsible for returning the value of one or more xml tag.

#### Install

```
composer require VivianeQuinaia/xml-tag-finder
```

#### How to use

The first tag of xml file (<?xml?>) is ignored by the lib.
To get a value of any xml tag you need the path of it. 
For example:
If you need the value of emitter CNPJ, use 'nfeProc/NFe/infNFe/emit/CNPJ'.
It's the same way to get a value of an attribute tag, just pass the path of tag and attribute name.
######Example:
```php
<?php

use Arquivei\XML\Tag\Finder\FinderFactory;

$finderFactory = (new FinderFactory())->create($xml);

$tag = $finderFactory->getTag('nfeProc/NFe/infNFe/emit/CNPJ')->find();
$attribute = $finderFactory->getTag('infNFe')->getAttribute('Id')->find();

var_dump($tag, $attribute);
```

#### Run Tests
```
$ vendor/phpunit/phpunit/phpunit tests
```