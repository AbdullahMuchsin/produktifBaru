<?php

namespace Data;

class SocialMedia
{
    public string $name;

    final public function login(string $username, string $password): bool
    {
        if ($username == true && $password == true) {
            return true;
        }

        return false;
    }
}

final class Facebook extends SocialMedia
{
    // public function login(string $username, string $password): bool
    // {
    //     return true;
    // }
}

// class FakeFacebook extends Facebook {}
