<?php

it('returns a successful response', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});

it('returns a successful articles page', function () {
    $response = $this->get('/articles');
    $response->assertStatus(200);
});
