<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 01/11/2018
 * Time: 02:42
 */

namespace App\Service;


use App\Data\UserDTO;

interface UserServiceInterface
{
    public function register(UserDTO $userDTO, string $confirmPassword) : bool;
    public function login(string $username, string $password) : ?UserDTO;
    public function currentUser() : ?UserDTO;
    public function edit(UserDTO $userDTO) : bool;

    /**
     * @return \Generator|UserDTO[]
     */
    public function all() : \Generator;
}