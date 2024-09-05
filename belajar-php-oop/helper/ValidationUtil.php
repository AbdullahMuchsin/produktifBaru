<?php

require_once __DIR__ . "/../data/LoginRequest.php";

class ValidationUtil
{
    static function validate(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException("Username is null");
        } else if (!isset($request->password)) {
            throw new ValidationException("Password is null");
        } else if (trim($request->username) == "") {
            throw new Exception("Username is blank");
        } else if (trim($request->password) == "") {
            throw new Exception("Password is blank");
        }
    }

    static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);

        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new ValidationException("{$property->getName()} not is set");
            } else if (is_null($property->getValue($request))) {
                throw new Exception("{$property->getName()} is null");
            }
        }
    }
}
