<?php
/**
 * Created by PhpStorm.
 * User: m.benahmed
 * Date: 19/05/2017
 * Time: 15:24
 */

namespace AppBundle\Service;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class PasswordEncoder implements PasswordEncoderInterface
{
    public function __construct() {
    }

    public function encodePassword($raw, $salt) {
        return md5($raw);
    }

    public function isPasswordValid($encoded, $raw, $salt) {
        return md5($raw) == $encoded;
    }
}