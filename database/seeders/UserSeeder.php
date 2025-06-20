<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['alice', 'Alice', 'Smith', '1990-01-01', 'alice@example.com', 1],
            ['bob', 'Bob', 'Johnson', '1985-02-02', 'bob@example.com', 2],
            ['charlie', 'Charlie', 'Williams', '1992-03-03', 'charlie@example.com', 3],
            ['david', 'David', 'Brown', '1991-04-04', 'david@example.com', 2],
            ['emily', 'Emily', 'Jones', '1993-05-05', 'emily@example.com', 1],
            ['frank', 'Frank', 'Garcia', '1989-06-06', 'frank@example.com', 3],
            ['grace', 'Grace', 'Miller', '1994-07-07', 'grace@example.com', 1],
            ['henry', 'Henry', 'Davis', '1988-08-08', 'henry@example.com', 2],
            ['isabel', 'Isabel', 'Rodriguez', '1995-09-09', 'isabel@example.com', 3],
            ['jack', 'Jack', 'Martinez', '1996-10-10', 'jack@example.com', 1],
            ['kate', 'Kate', 'Hernandez', '1991-11-11', 'kate@example.com', 2],
            ['leo', 'Leo', 'Lopez', '1992-12-12', 'leo@example.com', 3],
            ['mia', 'Mia', 'Gonzalez', '1993-01-13', 'mia@example.com', 1],
            ['nick', 'Nick', 'Wilson', '1994-02-14', 'nick@example.com', 2],
            ['olivia', 'Olivia', 'Anderson', '1995-03-15', 'olivia@example.com', 3],
            ['paul', 'Paul', 'Thomas', '1996-04-16', 'paul@example.com', 1],
            ['quinn', 'Quinn', 'Taylor', '1997-05-17', 'quinn@example.com', 2],
            ['rachel', 'Rachel', 'Moore', '1998-06-18', 'rachel@example.com', 3],
            ['steve', 'Steve', 'Jackson', '1990-07-19', 'steve@example.com', 1],
            ['tina', 'Tina', 'Martin', '1991-08-20', 'tina@example.com', 2],
            ['ursula', 'Ursula', 'Lee', '1992-09-21', 'ursula@example.com', 3],
            ['victor', 'Victor', 'Perez', '1993-10-22', 'victor@example.com', 1],
            ['wendy', 'Wendy', 'Thompson', '1994-11-23', 'wendy@example.com', 2],
            ['xander', 'Xander', 'White', '1995-12-24', 'xander@example.com', 3],
            ['yara', 'Yara', 'Harris', '1996-01-25', 'yara@example.com', 1],
            ['zack', 'Zack', 'Sanchez', '1997-02-26', 'zack@example.com', 2],
            ['amy', 'Amy', 'Clark', '1998-03-27', 'amy@example.com', 3],
            ['brian', 'Brian', 'Ramirez', '1999-04-28', 'brian@example.com', 1],
            ['cara', 'Cara', 'Lewis', '1990-05-29', 'cara@example.com', 2],
            ['dan', 'Dan', 'Robinson', '1985-06-30', 'dan@example.com', 3],
            ['ella', 'Ella', 'Walker', '1986-07-31', 'ella@example.com', 1],
            ['fred', 'Fred', 'Young', '1987-08-01', 'fred@example.com', 2],
            ['gina', 'Gina', 'Allen', '1988-09-02', 'gina@example.com', 3],
            ['harry', 'Harry', 'King', '1989-10-03', 'harry@example.com', 1],
            ['ivy', 'Ivy', 'Wright', '1990-11-04', 'ivy@example.com', 2],
            ['jon', 'Jon', 'Scott', '1991-12-05', 'jon@example.com', 3],
            ['kelly', 'Kelly', 'Torres', '1992-01-06', 'kelly@example.com', 1],
            ['luke', 'Luke', 'Nguyen', '1993-02-07', 'luke@example.com', 2],
            ['maya', 'Maya', 'Hill', '1994-03-08', 'maya@example.com', 3],
            ['nate', 'Nate', 'Flores', '1995-04-09', 'nate@example.com', 1],
            ['olga', 'Olga', 'Green', '1996-05-10', 'olga@example.com', 2],
            ['peter', 'Peter', 'Adams', '1997-06-11', 'peter@example.com', 3],
            ['queen', 'Queen', 'Nelson', '1998-07-12', 'queen@example.com', 1],
            ['ryan', 'Ryan', 'Baker', '1999-08-13', 'ryan@example.com', 2],
            ['sara', 'Sara', 'Hall', '2000-09-14', 'sara@example.com', 3],
            ['tom', 'Tom', 'Rivera', '2001-10-15', 'tom@example.com', 1],
            ['uma', 'Uma', 'Campbell', '2002-11-16', 'uma@example.com', 2],
            ['vince', 'Vince', 'Mitchell', '2003-12-17', 'vince@example.com', 3],
            ['will', 'Will', 'Carter', '2004-01-18', 'will@example.com', 1],
            ['xena', 'Xena', 'Roberts', '2005-02-19', 'xena@example.com', 2],
        ];

        foreach ($users as [$username, $firstName, $lastName, $birth, $email, $id_roles]) {
            DB::table('users')->insert([
                'username' => $username,
                'firstName' => $firstName,
                'lastName' => $lastName,
                'birth' => $birth,
                'email' => $email,
                'password' => Hash::make('password'), // tu peux personnaliser si besoin
                'id_roles' => $id_roles,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
