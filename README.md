# Library for Laravel to Encrypt and Decrypt Models, Arrays and Values.

[![Latest Stable Version](http://poser.pugx.org/leolopez/encrypt/v)](https://packagist.org/packages/leolopez/encrypt) [![Total Downloads](http://poser.pugx.org/leolopez/encrypt/downloads)](https://packagist.org/packages/leolopez/encrypt) [![Latest Unstable Version](http://poser.pugx.org/leolopez/encrypt/v/unstable)](https://packagist.org/packages/leolopez/encrypt) [![License](http://poser.pugx.org/leolopez/encrypt/license)](https://packagist.org/packages/leolopez/encrypt) [![PHP Version Require](http://poser.pugx.org/leolopez/encrypt/require/php)](https://packagist.org/packages/leolopez/encrypt)

## Installation

Install the package

    composer require leolopez/encrypt
    
## Register the service provider

Add the Service Provider in `config/app.php` into the `providers` section
    
    Leolopez\Encrypt\EncryptServiceProvider::class
    
Add the Facade in `config/app.php` into the `aliases` section
    
    'Encrypt' => Leolopez\Encrypt\Facades\Encrypt::class,
    
 # Available methods
 
 # Models

Encrypts columns of an array of object

    encryptObject($array, $keys)

Decrypts columns of an array of object

    decryptObject($array, $keys)

Encrypts a column of an Object

    encryptValueObject($object, $key)

Decrypts a column of an Object

    decryptValueObject($object, $key)
    
 # Arrays

Encrypts columns of an Array

    encryptArray($array, $keys)

Decrypts columns of an Array

    decryptArray($array, $keys)    
    
 # Values
 
 Encrypts a value

    encryptValue($value)

Decrypts a value

    decryptValue($key)
    
## Example

# Encrypt a model value

Go to your controller and import the facade

    use Leolopez\Encrypt\Facades\Encrypt;
    
Send as a first parameter the array, and add the keys you want to encrypt
    
    $users = User::all();
    $users = Encrypt::encryptObject($users, ['id']);
    
# Decrypt a model value
    
Send as a first parameter the array, and add the keys you want to decrypt
    
    $users = User::all();
    $users = Encrypt::encryptObject($users, ['id']);
    
    
