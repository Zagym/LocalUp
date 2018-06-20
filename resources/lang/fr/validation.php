<?php

return [
    'custom' => [
        'firstname' => [
            'required' => 'Le prénom est obligatoire.',
            'max' => 'Le prénom doit faire 255 caractéres maximum.',
        ],
        'lastname' => [
            'required' => 'Le nom est obligatoire.',
            'max' => 'Le nom doit faire 255 caractéres maximum.',
        ],
        'email' => [
            'required' => 'L\'email est obligatoire.',
            'max' => 'L\'email doit faire 255 caractéres maximum.',
            'unique' => 'L\'email est déjà utilisé.'
        ],
        'zip' => [
            'digits' => 'Votre code postal doit faire 5 caractéres.',
        ],
        'phone' => [
            'max' => 'Le numéro de téléphone doit faire 10 caractéres maximum.',
        ],
        'address' => [
            'max' => 'L\'adresse doit faire 255 caractéres maximum.',
        ],
        'password' => [
            'min' => 'Le mot de passe doit faire 6 caractéres minimum.',
            'confirmed' => 'Les deux mots de passe doivent être identiquent.',
        ]
    ],
];
