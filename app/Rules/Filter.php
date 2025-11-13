<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Filter implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    protected $forbiddenNames;
    public function __construct($forbiddenNames)
    {
        $this->forbiddenNames = $forbiddenNames;
    }
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (in_array(strtolower($value), $this->forbiddenNames)) {
            $fail('this name is forbidden! ' . $value);
        }
    }
}
