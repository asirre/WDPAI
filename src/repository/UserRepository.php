<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{

    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users_info_view WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname']
        );
    }

    public function getId(string $email)
    {
        $statement = $this->database->connect()->prepare('
        SELECT id FROM public.users WHERE email = :email');
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();
        $id = $statement->fetch(PDO::FETCH_ASSOC);
        if ($id == false) {
            return null;
        }
        return $id;
    }

    public function checkEmail($email): bool
    {
        $statement = $this->database->connect()->prepare('
        SELECT email FROM public.users_info_view WHERE email = :email');
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();
        $found = $statement->fetch(PDO::FETCH_ASSOC);
        if (!$found) {
            return false;
        }
        return true;
    }


    public function addUser(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users_details (name, surname)
            VALUES (?, ?)
        ');

        $stmt->execute([
            $user->getName(),
            $user->getSurname(),
        ]);

        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (email, password, id_user_details)
            VALUES (?, ?, ?)
        ');

        $stmt->execute([
            $user->getEmail(),
            $user->getPassword(),
            $this->getUserDetailsId($user)
        ]);
    }

    public function getUserDetailsId(User $user): int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users_details WHERE name = :name AND surname = :surname');
        $stmt->bindParam(':name', $user->getName(), PDO::PARAM_STR);
        $stmt->bindParam(':surname', $user->getSurname(), PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['id'];
    }

    public function updateUserDetails($id, $password, $email)
    {
        if ($password != null) {
            $statement1 = $this->database->connect()->prepare('
        UPDATE public.users SET  password = :password WHERE id = :id
        ');
            $statement1->bindParam(':password', $password, PDO::PARAM_STR);
            $statement1->bindParam(':id', $id, PDO::PARAM_INT);
            $statement1->execute();

        }

        $statement2 = $this->database->connect()->prepare('
        UPDATE public.users SET email = :email WHERE id=:id
        ');
        $statement2->bindParam(':email', $email, PDO::PARAM_STR);
        $statement2->bindParam(':id', $id, PDO::PARAM_INT);
        $statement2->execute();




    }

}