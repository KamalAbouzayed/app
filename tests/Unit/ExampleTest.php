<?php

use App\Models\User;

it('can return a sum of number', function () {
    $sum = 1 + 1;

    $user = createUser();

    expect($user)->toBeInstanceOf(User::class);
});
