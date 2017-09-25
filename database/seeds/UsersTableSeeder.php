<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'titarsv@gmail.com',
            'password' => '$2y$10$HNZMbbitF3WUeVju9yel7u2LvoI6hzXTZVnw2FAtXea/r/kKkcasy',
            'remember_token' => 'pqVx93bXqggxETwv5E7hScjPqiOyUiqleI3VWyYSuB3raP6Greeux4Fepwqz',
            'permissions' => '{"dashboard.index":1,"dashboard.systems":1,"dashboard.pages":1,"dashboard.posts":1,"dashboard.tools":1,"dashboard.marketing":1,"dashboard.systems.roles":1,"dashboard.systems.settings":1,"dashboard.systems.users":1,"superuser":1,"dashboard.systems.backup":1,"dashboard.systems.defender":1,"dashboard.systems.monitor":1,"dashboard.systems.logs":1,"dashboard.systems.schema":1,"dashboard.tools.menu":1,"dashboard.tools.category":1,"dashboard.tools.attachment":1,"dashboard.tools.media":1,"dashboard.marketing.comment":1,"dashboard.marketing.advertising":1,"dashboard.marketing.utm":1,"dashboard.marketing.robots":1}'
        ]);
    }

}
