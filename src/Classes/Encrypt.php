<?php

namespace Leolopez\Encrypt\Classes;

use Crypt;

class Encrypt
{
    /**
     * Encrypts an Eloquent Model, specifying the fields to be encrypted.
     *
     * @param Array $array - The Object model of the array.
     * @param Array $keys - The fields to be encrypted.
     *
     * @return Array The array encrypted.
     */
    public function encryptObject($array, ...$keys)
    {
        $data = [];

        foreach ($array as $model) {
            foreach ($keys as $value) {
                $model->{$value} = Crypt::encrypt(strval($model->{$value}));
            }
            array_push($data, $model->getAttributes());
        }

        return $data;
    }

    /**
     * Decrypts an Eloquent Model, specifying the fields to be decrypted.
     *
     * @param Array $array - The Object model of the array.
     * @param Array $keys - The fields to be decrypted.
     *
     * @return Array The array decrypted.
     */
    public function decryptObject($array, ...$keys)
    {
        $data = [];

        foreach ($array as $model) {
            foreach ($keys as $value) {
                $model->{$value} = Crypt::decrypt($model->{$value});
            }
            array_push($data, $model->getAttributes());
        }

        return $data;
    }

    /**
     * Encrypt a value of an Eloquent Model, specifying the field to be encrypted.
     *
     * @param Array $array - The Object model of the array.
     * @param Array $keys - The fields to be encrypted.
     *
     * @return Array The array encrypted.
     */
    public function encryptValueObject($model, ...$keys)
    {
        $data = [];

        foreach ($keys as $value) {
            $model->{$value} = Crypt::encrypt($model->{$value});
        }
        array_push($data, $model->getAttributes());

        return $data[0];
    }

    /**
     * Encrypt a value of an Eloquent Model, specifying the field to be encrypted.
     *
     * @param Array $array - The Object model of the array.
     * @param Array $keys - The fields to be encrypted.
     *
     * @return Array The array encrypted.
     */
    public function decryptValueObject($model, ...$keys)
    {
        $data = [];

        foreach ($keys as $value) {
            $model->{$value} = Crypt::encrypt($model->{$value});
        }
        array_push($data, $model->getAttributes());

        return $data[0];
    }

    /**
     * Encrypts an specific value.
     *
     * @param Array $value - The field to be encrypted.
     *
     * @return Array The value encrypted.
     */
    public function encryptValue($value)
    {
        $data = strval($value);
        $value = Crypt::encrypt($data);
        return $value;
    }

    /**
     * Decrypts an specific value.
     *
     * @param Array $value - The field to be encrypted.
     *
     * @return Array The value encrypted.
     */
    public function decryptValue($value)
    {
        $value = Crypt::decrypt($value);
        return $value;
    }

    /**
     * Encrypt a value of an array, specifying the fields to be encrypted.
     *
     * @param Array $array - The Object model of the array.
     * @param Array $keys - The fields to be encrypted.
     *
     * @return Array The array encrypted.
     */
    public function encryptArray($array, ...$keys)
    {
        foreach ($keys as $value) {
            $array[$value] = Crypt::encrypt($array[$value]);
        }

        return $array;
    }

    /**
     * Encrypt a value of an array, specifying the fields to be encrypted.
     *
     * @param Array $array - The Object model of the array.
     * @param Array $keys - The fields to be encrypted.
     *
     * @return Array The array encrypted.
     */
    public function decryptArray($array, ...$keys)
    {
        foreach ($keys as $value) {
            $array[$value] = Crypt::decrypt($array[$value]);
        }

        return $array;
    }
}
