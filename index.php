<?php

use Timber\Timber;

$data = [
  'title' => 'A Timber Tutorial',
];

Timber::render('index.twig', $data);
