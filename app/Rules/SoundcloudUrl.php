<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class SoundcloudUrl implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $parts = parse_url($value);
        if (isset($parts['host']) && $parts['host'] == 'soundcloud.com') {
            return true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'آدرس وارد شده اشتباهه';
    }
}
