<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 01/11/2018
 * Time: 02:11
 */

namespace App\Repository;


use App\Data\UserDTO;

interface UserRepositoryInterface
{
    public function insert(UserDTO $userDTO) : bool;
    public function findOneByUsername(string $username) : ?UserDTO;
    public function findOneById(int $id) : ?UserDTO;
    public function update(int $id, UserDTO $userDTO) : bool;

    /**
     * @return \Generator|UserDTO
     */
    public function findAll() : \Generator;
}