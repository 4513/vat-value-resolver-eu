# VAT Value Resolver for the EU  
[![codecov](https://codecov.io/gh/4513/vat-value-resolver-eu/graph/badge.svg?token=X1l8bJImRU)](https://codecov.io/gh/4513/vat-value-resolver-eu)  

*mibo/vat-value-resolver-eu*  

 The library implements Value Resolver for VAT rates for the EU member countries. Note, that the library
does not contain all its members' VAT rates, specially for dates and previous dates when the country had or
more than 4 VAT rates, because that cannot be implemented unless one can specify the value of the VAT
by classification of the product or service. Because of many countries and I, the developer am not native
to each country nor willing to search the whole net, the countries might have missing VAT rates for some
dates, years.  
 The library is open to contributions, not only of the code and adding new or missing VAT rates, but also
of reporting upcoming changes of VAT rates, so that the library can be updated in time.  
 Every change for every VAT is reported in changelog.

---
### News
**Slovakia 2024** - Not approved yet  
Since `vX.X.X`  
New VAT values for Slovakia for 2024 were added.  
Then change includes:  
* Standard VAT rate from 20 to 22 percent.

**Czechia 2024** - Not approved yet  
Since `vX.X.X`  
New VAT values for Czechia for 2024 were added.  
The change includes:  
* Reduced VAT rate from 15 to 12 percent;
* Second reduced VAT rate removed.

**Estonia 2024** - Not approved yet  
Since `vX.X.X`  
*[Increase of 2 percent to VAT rate](https://www.riigikogu.ee/tegevus/eelnoud/eelnou/d0b2635d-5314-4d28-842b-b961c167350a/kaibemaksuseaduse-ja-maksukorralduse-seaduse-muutmise-seadus)*  
New VAT values for Estonia for 2024 were added.
The change includes:  
* Standard VAT rate from 20 to 22 percent;
* Reduced VAT rate remains at 9 percent.  

**Luxembourg 2024**  
Since `v1.0.0`   
*[Temporary VAT rate for 2023 ends on 1st Jan 2024](https://legilux.public.lu/eli/etat/leg/loi/2022/10/26/a534/jo)*  
New VAT values for Luxembourg for 2024 were added.  
The change includes:  
* Standard VAT rate from 16 to 17 percent;  
* Reduced VAT rate from 7 to 8 percent;
* Super reduced VAT rate keeps at 3 percent;
* Parking VAT rate from 13 to 14 percent.

---
### Installation

```bash
composer require mibo/vat-value-resolver-eu
```

Do not forget to register the resolver into the VAT Manager:
```php
$manager = new \MiBo\VAT\Manager(
    $myConvertor,
    new \MiBo\VAT\ValueResolvers\EUValueResolver(),
    $myRateResolver
);
```

---
### Changes, updates, etc.
 The library follows SemVer, however, because countries might change their VAT rates at any time and the
count of support countries is only few, the library follows the next rules about versions:
* deleting a country from the list of supported countries is considered as a major change,
  * *which normally should not happen unless the country leaves the EU*;
* deleting a country's date from the list of supported dates is considered as a major change;
* adding a country to the list of supported countries is considered as a minor change,
  * *which normally should not happen unless the country joins the EU*;
* adding a country's date to the list of supported dates is considered as a minor change,
  * *and that applies for both, future, present and post dates*;
* changing a country's VAT rate is considered as a patch change,
  * *which should never happen and might be necessary only if a typo occurs*.
