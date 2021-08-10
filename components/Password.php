<?php

/* 
 * Copyright (C) 2021 themhz
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace SampleWebApp\components;

class Password
{
    public string $password;
    public function __construct(string $password){
        $this->password = $password;
    }

    public function hash(){
        return password_hash($this->password, PASSWORD_DEFAULT);
    }

    public function verify($hashed_password){
        return password_verify($this->password, $hashed_password);
    }

    public function __toString() {

        return $this->password;
    }

}