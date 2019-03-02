# iran-province-info
A laravel package for IRAN Provinces and Cities.

## installation ##

1.Run the command below to install via Composer
    
    composer require gitipasand/iranprovince
    
2.Open your config/app.php and add the following to the providers array:

    Gitipasand\IranProvinceInfo\IranProvinceServiceProvider::class,
  
3.Open your config/app.php and add the following to the aliases array:

    'IranProvinceInfo'=>Gitipasand\IranProvinceInfo\IranProvinceInfo::class  

4.run Command
    
    php artisan vendor:publish

## usage ##

    use IranProvinceInfo;

    
    $province = new IranProvinceInfo();
    
    
    $province->getProvinces() // get All Provinces
    
    
    $province->getCities() // get All Cities
    
    
    $province->getProvinceCities($province_id); // get cities for province

## License ##
All contents of this package are licensed under the [MIT license](https://github.com/gitipasand/Iran-province-info/blob/master/LICENSE)
 