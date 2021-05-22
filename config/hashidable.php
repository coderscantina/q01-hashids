<?php

return [
    /**
     * Ensures hashids are unique to project. Preferrably, use a value
     * that won't change during the project's lifetime.
     */
    'salt' => env('HASHIDABLE_SALT', 'e6653151d12e0ce90e4f5d6089eb63c663788fd5923d10efd7be1ee4c4f34aeb75ac6cbd8cb97ce08b2d81b670b5316a2995081f8c4542974b192c5ccffa6ce8'),

    /**
     * Length of the generated hashid.
     */
    'length' => 8,

    /**
     * Character set used to generate the hashids.
     */
    'charset' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',

    /**
     * Prefix attached to the generated hash.
     */
    'prefix' => '',

    /**
     * Suffix attached to the generated hash.
     */
    'suffix' => '',

    /**
     * If a prefix of suffix is defined, we use this as a separator
     * between the prefix/suffix.
     */
    'separator' => '-',
];
