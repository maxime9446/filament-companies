<?php

namespace Wallo\FilamentCompanies\Contracts;

use Illuminate\Foundation\Auth\User;

interface CreatesNewUsers
{
    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     * @return User
     */
    public function create(array $input): User;
}
