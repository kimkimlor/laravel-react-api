<?php

return [
  'paths' => ['api/*'], // Atur path yang diizinkan
  'allowed_methods' => ['*'], // Metode HTTP yang diizinkan
  'allowed_origins' => ['http://localhost:5173'], // Domain asal yang diizinkan
  'allowed_origins_patterns' => [],
  'allowed_headers' => ['*'], // Header yang diizinkan
  'exposed_headers' => [],
  'max_age' => 0, // Durasi cache permintaan preflight
  'supports_credentials' => true, // Apakah mengizinkan kredensial
];
