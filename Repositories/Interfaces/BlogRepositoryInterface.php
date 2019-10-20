<?php

namespace App\Repositories\Interfaces;

use App\User;

interface BlogRepositoryInterface{

        public function get();

        public function getByUser(User $user);
    }