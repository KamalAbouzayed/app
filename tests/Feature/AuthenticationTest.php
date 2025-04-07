<?php

it('can login', function () {
    $response = $this->post('/api/login', [
        'email' => 'test@example.com',
        'password' => 'password'
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json())->toHaveKeys(['token', 'user']);
});
