<?php
 
class UserSeeder
  extends DatabaseSeeder
{
  public function run()
  {
    $users = [
      [
        "username" => "admin",
        "password" => Hash::make("digitall123"),
        "email"    => "admin@digitall.com"
      ]
    ];
  
    foreach ($users as $user) {
      User::create($user);
    }
  }
}