<?php

namespace App\Contracts;

use Illuminate\Support\Collection;

Interface SourceProvider {
    public function getAll() : Collection;
 }