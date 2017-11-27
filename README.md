PHP5 Yandex Turbo Pages RSS feed generator
=====================================

[![Latest Stable Version](https://poser.pugx.org/sokolnikov911/yandex-turbo-pages-php5/v/stable)](https://packagist.org/packages/sokolnikov911/yandex-turbo-pages-php5)
[![Total Downloads](https://poser.pugx.org/sokolnikov911/yandex-turbo-pages-php5/downloads)](https://packagist.org/packages/sokolnikov911/yandex-turbo-pages-php5)
[![Latest Unstable Version](https://poser.pugx.org/sokolnikov911/yandex-turbo-pages-php5/v/unstable)](https://packagist.org/packages/sokolnikov911/yandex-turbo-pages-php5)
[![License](https://poser.pugx.org/sokolnikov911/yandex-turbo-pages-php5/license)](https://packagist.org/packages/sokolnikov911/yandex-turbo-pages-php5)
[![composer.lock](https://poser.pugx.org/sokolnikov911/yandex-turbo-pages-php5/composerlock)](https://packagist.org/packages/sokolnikov911/yandex-turbo-pages-php5)
[![PHPPackages Rank](http://phppackages.org/p/sokolnikov911/yandex-turbo-pages-php5/badge/rank.svg)](http://phppackages.org/p/sokolnikov911/yandex-turbo-pages-php5)
[![PHPPackages Referenced By](http://phppackages.org/p/sokolnikov911/yandex-turbo-pages-php5/badge/referenced-by.svg)](http://phppackages.org/p/sokolnikov911/yandex-turbo-pages-php5)

Russian version of README you can find here: [README_RU.md](https://github.com/sokolnikov911/yandex-turbo-pages/blob/master/README_RU.md).

Yandex Turbo Pages valid RSS feed generator for PHP5.4+.


## Examples

This example you can find in `examples/example.php`

```php
// creates Feed with all needed namespaces
$feed = new Feed();

// creates Channel with description and one ad from Yandex Ad Network
$channel = new Channel();
$channel
    ->title('Channel Title')
    ->link('http://blog.example.com')
    ->description('Channel Description')
    ->language('ru')
    ->adNetwork(Channel::AD_TYPE_YANDEX, 'RA-123456-7', 'first_ad_place')
    ->appendTo($feed);

// adds Google Analytics to feed
$googleCounter = new Counter(Counter::TYPE_GOOGLE_ANALYTICS, 'XX-1234567-89');
$googleCounter->appendTo($channel);

// adds Yandex Metrika to feed
$yandexCounter = new Counter(Counter::TYPE_YANDEX, 12345678);
$yandexCounter->appendTo($channel);

// creates first page of feed with link, description and other content, and appends this page to channel
$item = new Item();
$item
    ->title('Thirst page!')
    ->link('http://www.example.com/page1.html')
    ->author('John Smith')
    ->category('Technology')
    ->turboContent('Some content here!<br>Second content string.')
    ->pubDate(strtotime('Tue, 21 Aug 2012 19:50:37 +0900'))
    ->appendTo($channel);

// creates list of related pages
$relatedItemsList = new RelatedItemsList();

// adds link to first related page
$relatedItem = new RelatedItem('Related article 1', 'http://www.example.com/related1.html');
$relatedItem->appendTo($relatedItemsList);

// adds link to second related page with image
$relatedItem = new RelatedItem('Related article 2', 'http://www.example.com/related2.html',
    'http://www.example.com/related2.jpg');
$relatedItem->appendTo($relatedItemsList);

// appends list of related links to first page
$relatedItemsList
    ->appendTo($item);

// creates another one page
$item = new Item();
$item
    ->title('Second page!')
    ->link('http://www.example.com/page2.html')
    ->author('John Smith')
    ->category('Technology')
    ->turboContent('Yet another content here!')
    ->pubDate(strtotime('Tue, 21 Aug 2012 19:50:37 +0900'))
    ->appendTo($channel);

// displays the generated feed
echo $feed;
```



## Installing


```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest stable version of **yandex-turbo-pages**

```bash
php composer.phar require sokolnikov911/yandex-turbo-pages
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

You can then later update **yandex-turbo-pages** using composer:

 ```bash
composer.phar update
 ```
 
 
## Requirements

This Yandex Trurbo Pages RSS feed generator requires at least PHP5.4.


## License

This library is licensed under the MIT License.