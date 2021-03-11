<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomSeeder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        $branches = array(
            array("branch_name"=>"Beirut","branch_country"=>"Lebanon","branch_location"=>"Gemmayze"),
            array("branch_name"=>"Tripoli","branch_country"=>"Lebanon","branch_location"=>"Tripoli"),
            array("branch_name"=>"Saida","branch_country"=>"Lebanon","branch_location"=>"Saida"),
            array("branch_name"=>"Aley","branch_country"=>"Lebanon","branch_location"=>"Aley")
        );

        $cohorts = array(
            array("branch_id"=>1,"cohort_code"=>"BB07","start_date"=>"2021-04-01","end_date"=>"2021-10-01"),
            array("branch_id"=>1,"cohort_code"=>"BB06","start_date"=>"2020-09-01","end_date"=>"2021-4-01"),
            array("branch_id"=>2,"cohort_code"=>"TB01","start_date"=>"2021-02-01","end_date"=>"2021-08-01"),
            array("branch_id"=>3,"cohort_code"=>"SB01","start_date"=>"2019-01-01","end_date"=>"2021-07-01"),
            array("branch_id"=>1,"cohort_code"=>"BB05","start_date"=>"2020-01-01","end_date"=>"2021-09-01"),
           
        );

        $admins = array(
            array("role_id"=>1,"branch_id"=>"1","full_name"=>"Khaldoun Nourdine","username"=>"Khaldoun","email"=>"Khaldoun@mail.com","password"=>bcrypt("1234"),"description"=>"Laravel Master, Backend senior developer","active_inactive"=>"1"),
            array("role_id"=>2,"branch_id"=>"1","full_name"=>"Hassan Abdallah","username"=>"Hackour","email"=>"hassan@mail.com","password"=>bcrypt("1234"),"description"=>"Junior Full Stack Developer","active_inactive"=>"1"),
            array("role_id"=>2,"branch_id"=>"2","full_name"=>"Nermine Noor","username"=>"Nermine","email"=>"Nermine@mail.com","password"=>bcrypt("1234"),"description"=>"React Native Practitioner, Mobile App developer","active_inactive"=>"1"),
        );

        $stages = array(
            array("cohort_code"=>1,"prairie"=>"1","stage_name"=>"Prairie","start_date"=>"2021-04-01","end_date"=>"2021-06-01","active_inactive"=>"1"),
            array("cohort_code"=>2,"prairie"=>"1","stage_name"=>"Prairie","start_date"=>"2020-09-01","end_date"=>"2020-11-01","active_inactive"=>"0"),
            array("cohort_code"=>2,"prairie"=>"0","stage_name"=>"Project 1","start_date"=>"2020-11-01","end_date"=>"2020-12-01","active_inactive"=>"0"),
            array("cohort_code"=>2,"prairie"=>"0","stage_name"=>"Project 2","start_date"=>"2020-12-01","end_date"=>"2021-02-01","active_inactive"=>"0"),
            array("cohort_code"=>2,"prairie"=>"0","stage_name"=>"Project 3","start_date"=>"2021-02-01","end_date"=>"2021-03-01","active_inactive"=>"0"),
            array("cohort_code"=>2,"prairie"=>"0","stage_name"=>"Final_project","start_date"=>"2021-03-01","end_date"=>"2021-04-01","active_inactive"=>"1"),
           
        );

        $users = array(
            array(
            "cohort_code"=>2,
            "user_first_name"=>"Elie",
            "user_last_name"=>"Azar",
            "email"=>"elieazar@mail.com",
            "password"=>bcrypt("1234"),
            "user_phone_number"=>"70647025",
            "user_emergency_number"=>"05010101",
            "user_birth_date"=>"1992-08-03",
            "user_nationality"=>"Lebanese",
            "user_gender"=>"Male",
            "user_city"=>"Beirut",
            "user_address"=>"baabda",
            "user_avatar"=>"No Avatar",
            "user_discord_id"=>"#5576",
            "user_security_level"=>"1",
            "active_inactive"=>"1",
        ),
        array(
            "cohort_code"=>2,
            "user_first_name"=>"Ali",
            "user_last_name"=>"Shkeir",
            "email"=>"AliShkeir@mail.com",
            "password"=>bcrypt("1234"),
            "user_phone_number"=>"70111111",
            "user_emergency_number"=>"05010101",
            "user_birth_date"=>"1996-08-03",
            "user_nationality"=>"Lebanese",
            "user_gender"=>"Male",
            "user_city"=>"Beirut",
            "user_address"=>"Bir Abed",
            "user_avatar"=>"No Avatar",
            "user_discord_id"=>"#5000",
            "user_security_level"=>"1",
            "active_inactive"=>"1",
        ),
        array(
            "cohort_code"=>2,
            "user_first_name"=>"Ali",
            "user_last_name"=>"Maksoud",
            "email"=>"AliMaksoud@mail.com",
            "password"=>bcrypt("1234"),
            "user_phone_number"=>"70222222",
            "user_emergency_number"=>"05010101",
            "user_birth_date"=>"1989-07-12",
            "user_nationality"=>"Lebanese",
            "user_gender"=>"Male",
            "user_city"=>"North",
            "user_address"=>"Zgharta",
            "user_avatar"=>"No Avatar",
            "user_discord_id"=>"#5599",
            "user_security_level"=>"1",
            "active_inactive"=>"1",
        ),
        array(
            "cohort_code"=>2,
            "user_first_name"=>"Tala",
            "user_last_name"=>"Houdeib",
            "email"=>"TalaHoudeib@mail.com",
            "password"=>bcrypt("1234"),
            "user_phone_number"=>"70123456",
            "user_emergency_number"=>"05010101",
            "user_birth_date"=>"1991-07-12",
            "user_nationality"=>"Lebanese",
            "user_gender"=>"Female",
            "user_city"=>"Beirut",
            "user_address"=>"Maten",
            "user_avatar"=>"No Avatar",
            "user_discord_id"=>"#5600",
            "user_security_level"=>"1",
            "active_inactive"=>"1",
        ),
        array(
            "cohort_code"=>2,
            "user_first_name"=>"Rebecca",
            "user_last_name"=>"Nazha",
            "email"=>"RebeccaNazha@mail.com",
            "password"=>bcrypt("1234"),
            "user_phone_number"=>"70999999",
            "user_emergency_number"=>"05010101",
            "user_birth_date"=>"1995-09-01",
            "user_nationality"=>"Lebanese",
            "user_gender"=>"Female",
            "user_city"=>"Beirut",
            "user_address"=>"Ashrafieh",
            "user_avatar"=>"No Avatar",
            "user_discord_id"=>"#5700",
            "user_security_level"=>"1",
            "active_inactive"=>"1",
        ),
        array(
            "cohort_code"=>2,
            "user_first_name"=>"Manal",
            "user_last_name"=>"Jaber",
            "email"=>"ManalJaber@mail.com",
            "password"=>bcrypt("1234"),
            "user_phone_number"=>"70888888",
            "user_emergency_number"=>"05010101",
            "user_birth_date"=>"1994-09-01",
            "user_nationality"=>"Lebanese",
            "user_gender"=>"Female",
            "user_city"=>"Aley",
            "user_address"=>"Aley",
            "user_avatar"=>"No Avatar",
            "user_discord_id"=>"#5800",
            "user_security_level"=>"1",
            "active_inactive"=>"1",
        ),
        array(
            "cohort_code"=>2,
            "user_first_name"=>"Antoine",
            "user_last_name"=>"Haddad",
            "email"=>"AntoineHaddad@mail.com",
            "password"=>bcrypt("1234"),
            "user_phone_number"=>"70222222",
            "user_emergency_number"=>"05010101",
            "user_birth_date"=>"1996-09-01",
            "user_nationality"=>"Lebanese",
            "user_gender"=>"Male",
            "user_city"=>"Beirut",
            "user_address"=>"Ashrafieh",
            "user_avatar"=>"No Avatar",
            "user_discord_id"=>"#5901",
            "user_security_level"=>"1",
            "active_inactive"=>"1",
        ),
        array(
            "cohort_code"=>2,
            "user_first_name"=>"Mostafa",
            "user_last_name"=>"Onaizan",
            "email"=>"MostafaOnaizan@mail.com",
            "password"=>bcrypt("1234"),
            "user_phone_number"=>"70123456",
            "user_emergency_number"=>"05010101",
            "user_birth_date"=>"1996-09-01",
            "user_nationality"=>"Syrian",
            "user_gender"=>"Male",
            "user_city"=>"Beirut",
            "user_address"=>"Sabra",
            "user_avatar"=>"No Avatar",
            "user_discord_id"=>"#5902",
            "user_security_level"=>"1",
            "active_inactive"=>"1",
        ),
        array(
            "cohort_code"=>3,
            "user_first_name"=>"Abdallah",
            "user_last_name"=>"Tripoli Student",
            "email"=>"TripoliStudent@mail.com",
            "password"=>bcrypt("1234"),
            "user_phone_number"=>"03556655",
            "user_emergency_number"=>"09010101",
            "user_birth_date"=>"1996-09-01",
            "user_nationality"=>"Lebanese",
            "user_gender"=>"Male",
            "user_city"=>"Tripoli",
            "user_address"=>"Tripoli",
            "user_avatar"=>"No Avatar",
            "user_discord_id"=>"#7001",
            "user_security_level"=>"1",
            "active_inactive"=>"1",
        ),
        array(
            "cohort_code"=>3,
            "user_first_name"=>"Noor",
            "user_last_name"=>"Tripoli Student 2",
            "email"=>"TripoliStudent2@mail.com",
            "password"=>bcrypt("1234"),
            "user_phone_number"=>"81447788",
            "user_emergency_number"=>"09111111",
            "user_birth_date"=>"1992-09-01",
            "user_nationality"=>"Lebanese",
            "user_gender"=>"Female",
            "user_city"=>"Tripoli",
            "user_address"=>"Tripoli",
            "user_avatar"=>"No Avatar",
            "user_discord_id"=>"#7200",
            "user_security_level"=>"1",
            "active_inactive"=>"1",
        ),
        array(
            "cohort_code"=>3,
            "user_first_name"=>"Omar",
            "user_last_name"=>"Tripoli Student 3",
            "email"=>"TripoliStudent3@mail.com",
            "password"=>bcrypt("1234"),
            "user_phone_number"=>"81772255",
            "user_emergency_number"=>"09020202",
            "user_birth_date"=>"1993-09-01",
            "user_nationality"=>"Lebanese",
            "user_gender"=>"Male",
            "user_city"=>"Tripoli",
            "user_address"=>"Tripoli",
            "user_avatar"=>"No Avatar",
            "user_discord_id"=>"#7330",
            "user_security_level"=>"1",
            "active_inactive"=>"1",
        ),
        array(
            "cohort_code"=>3,
            "user_first_name"=>"Mayssa",
            "user_last_name"=>"Tripoli Student 4",
            "email"=>"TripoliStudent4@mail.com",
            "password"=>bcrypt("1234"),
            "user_phone_number"=>"81993311",
            "user_emergency_number"=>"09223366",
            "user_birth_date"=>"1993-09-01",
            "user_nationality"=>"Lebanese",
            "user_gender"=>"Female",
            "user_city"=>"Tripoli",
            "user_address"=>"Tripoli",
            "user_avatar"=>"No Avatar",
            "user_discord_id"=>"#7360",
            "user_security_level"=>"1",
            "active_inactive"=>"1",
        ),
        array(
            "cohort_code"=>5,
            "user_first_name"=>"Hassan",
            "user_last_name"=>"Awad",
            "email"=>"HassanAwad@mail.com",
            "password"=>bcrypt("1234"),
            "user_phone_number"=>"70663366",
            "user_emergency_number"=>"05010101",
            "user_birth_date"=>"1995-08-03",
            "user_nationality"=>"Lebanese",
            "user_gender"=>"Male",
            "user_city"=>"Beirut",
            "user_address"=>"Dahiye",
            "user_avatar"=>"No Avatar",
            "user_discord_id"=>"#5599",
            "user_security_level"=>"1",
            "active_inactive"=>"0",
        ),
        array(
            "cohort_code"=>5,
            "user_first_name"=>"Marwa",
            "user_last_name"=>"Hodeib",
            "email"=>"MarwaHodeib@mail.com",
            "password"=>bcrypt("1234"),
            "user_phone_number"=>"70889966",
            "user_emergency_number"=>"05010101",
            "user_birth_date"=>"1991-08-03",
            "user_nationality"=>"Lebanese",
            "user_gender"=>"Female",
            "user_city"=>"Beirut",
            "user_address"=>"Beirut",
            "user_avatar"=>"No Avatar",
            "user_discord_id"=>"#5511",
            "user_security_level"=>"1",
            "active_inactive"=>"0",
        ),
        array(
            "cohort_code"=>5,
            "user_first_name"=>"Abedlkader",
            "user_last_name"=>"Fkheir",
            "email"=>"AbedLkader@mail.com",
            "password"=>bcrypt("1234"),
            "user_phone_number"=>"70461397",
            "user_emergency_number"=>"05010101",
            "user_birth_date"=>"1995-08-03",
            "user_nationality"=>"Lebanese",
            "user_gender"=>"Male",
            "user_city"=>"Beirut",
            "user_address"=>"Beirut",
            "user_avatar"=>"No Avatar",
            "user_discord_id"=>"#5591",
            "user_security_level"=>"1",
            "active_inactive"=>"0",
        ),

        
           
        );

        DB::table('branches')->insert($branches);
        DB::table('cohorts')->insert($cohorts);
        DB::table('admins')->insert($admins);
        DB::table('stages')->insert($stages);
        DB::table('users')->insert($users);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
