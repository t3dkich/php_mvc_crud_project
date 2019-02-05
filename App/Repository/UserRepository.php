<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 01/11/2018
 * Time: 02:33
 */

namespace App\Repository;


use App\Data\UserDTO;
use Database\DatabaseInterface;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    /**
     * UserRepository constructor.
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function insert(UserDTO $userDTO): bool
    {
        $this->db->query("
            insert into users(username, password, first_name, last_name, bornOn)
            values (?,?,?,?,?)
        ")->execute([
            $userDTO->getUsername(),
            $userDTO->getPassword(),
            $userDTO->getFirstName(),
            $userDTO->getLastName(),
            $userDTO->getBornOn(),
        ]);

        return true;
    }

    public function findOneByUsername(string $username): ?UserDTO
    {
       return $this->db->query("
            select id, username, password, first_name firstName, last_name lastName, bornOn
            from users
            where username = ?
        ")->execute([$username])
        ->fetch(UserDTO::class)
        ->current();

    }

    public function findOneById(int $id): ?UserDTO
    {
        return $this->db->query("
            select id, username, password, first_name firstName, last_name lastName, bornOn
            from users
            where id = ?
        ")->execute([$id])
            ->fetch(UserDTO::class)
            ->current();
    }

    public function update(int $id, UserDTO $userDTO): bool
    {
        $this->db->query("
            update users
             set
              username = ?,
              password = ?,
              first_name = ?,
              last_name = ?,
              bornOn = ?
            where id = ?
        ")->execute([
            $userDTO->getUsername(),
            $userDTO->getPassword(),
            $userDTO->getFirstName(),
            $userDTO->getLastName(),
            $userDTO->getBornOn(),
            $id
        ]);

        return true;
    }

    /**
     * @return \Generator|UserDTO[]
     */
    public function findAll(): \Generator
    {
        return $this->db->query("
            select id, username, password, first_name firstName, last_name lastName, bornOn
            from users
        ")->execute()
            ->fetch(UserDTO::class);
    }
}