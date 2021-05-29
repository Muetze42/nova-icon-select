# Fork of [bernhardh/nova-icon-select](https://github.com/bernhardh/nova-icon-select)

Ready for: `Font Awesome Free 5.15.3` & `Font Awesome Pro 5.15.3`.

```cli
composer require muetze/nova-icon-select
```
---
### Usage With All Font Awesome Free Icons
```php
NovaIconSelect::make("Icon")
->setIconProvider(FontAwesomeIconProvider::class);
```
or
```php
NovaIconSelect::make("Icon")
->setIconProvider(new FontAwesomeIconProvider());
```
---
### Usage With Custom Font Awesome Free Styles
```php
NovaIconSelect::make("Icon")
->setIconProvider(new FontAwesomeIconProvider(['solid', 'regular', 'brands']));
```
---
## Usage With Font Awesome Pro
Publish the config file:
```cli
php artisan vendor:publish --provider="Bernhardh\NovaIconSelect\FieldServiceProvider"
php artisan config:cache
```

```php
NovaIconSelect::make("Icon")
->setIconProvider(new FontAwesomeIconProvider(['solid', 'regular', 'light', 'brands'], 'pro'));
```
Duotone is not included. Or does anyone need them in this package?
___

See the original repository for more examples, info and uses:  
[bernhardh/nova-icon-select](https://github.com/bernhardh/nova-icon-select)