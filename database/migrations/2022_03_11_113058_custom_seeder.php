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
        $roles = array(
            array("role"=>"mentor"),
            array("role"=>"team member"),
            array("role"=>"director"), 
        );

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
            array("role_id"=>1,"branch_id"=>"2","full_name"=>"Nermine Noor","username"=>"Nermine","email"=>"Nermine@mail.com","password"=>bcrypt("1234"),"description"=>"React Native Practitioner, Mobile App developer","active_inactive"=>"1"),
            array("role_id"=>2,"branch_id"=>"1","full_name"=>"Gaby Karam","username"=>"Gaby","email"=>"Gaby@mail.com","password"=>bcrypt("1234"),"description"=>"Junior Full Stack Developer","active_inactive"=>"0"),
        );

        $stages = array(
            array("cohort_code"=>1,"prairie"=>"1","stage_name"=>"Prairie","start_date"=>"2021-04-01","end_date"=>"2021-06-01","active_inactive"=>"1"),
            array("cohort_code"=>2,"prairie"=>"1","stage_name"=>"Prairie","start_date"=>"2020-09-01","end_date"=>"2020-11-01","active_inactive"=>"1"),
            array("cohort_code"=>2,"prairie"=>"0","stage_name"=>"Project 1","start_date"=>"2020-11-01","end_date"=>"2020-12-01","active_inactive"=>"0"),
            array("cohort_code"=>2,"prairie"=>"0","stage_name"=>"Project 2","start_date"=>"2020-12-01","end_date"=>"2021-02-01","active_inactive"=>"0"),
            array("cohort_code"=>2,"prairie"=>"0","stage_name"=>"Project 3","start_date"=>"2021-02-01","end_date"=>"2021-03-01","active_inactive"=>"0"),
            array("cohort_code"=>2,"prairie"=>"0","stage_name"=>"Final_project","start_date"=>"2021-03-01","end_date"=>"2021-04-01","active_inactive"=>"0"),
           
        );

        $user__absence__requests = array(
            array("user_id"=>1,"absence_reason"=>"Sick reason","absence_requested_date"=>"2021-03-01","absence_start_date"=>"2021-03-30","absence_end_date"=>"2021-04-02","absence_approved"=>"1"),
            array("user_id"=>2,"absence_reason"=>"Sick reason","absence_requested_date"=>"2021-02-21","absence_start_date"=>"2021-03-15","absence_end_date"=>"2021-03-17","absence_approved"=>"1"),
            array("user_id"=>3,"absence_reason"=>"Sick reason","absence_requested_date"=>"2021-02-01","absence_start_date"=>"2021-03-20","absence_end_date"=>"2021-03-23","absence_approved"=>"0"),
            array("user_id"=>4,"absence_reason"=>"Sick reason","absence_requested_date"=>"2021-02-01","absence_start_date"=>"2021-03-20","absence_end_date"=>"2021-03-23","absence_approved"=>"0"),
           
        );

        $attendances = array(
            array("attendance_date"=>"2021-03-11","admin_id"=>"1"),
            array("attendance_date"=>"2021-03-12","admin_id"=>"1"),
            array("attendance_date"=>"2021-03-13","admin_id"=>"1"), 
            array("attendance_date"=>"2021-03-14","admin_id"=>"1"), 
            array("attendance_date"=>"2021-03-15","admin_id"=>"1"), 
            array("attendance_date"=>"2021-03-16","admin_id"=>"2"), 
            array("attendance_date"=>"2021-03-17","admin_id"=>"2"), 
            array("attendance_date"=>"2021-03-18","admin_id"=>"2"), 
            array("attendance_date"=>"2021-03-19","admin_id"=>"2"), 
            array("attendance_date"=>"2021-03-20","admin_id"=>"2"), 
            array("attendance_date"=>"2021-03-21","admin_id"=>"2"), 
        );

        $user_attendances = array(
            array("user_id"=>1,"attendance_id"=>"1","present_absent"=>"1","excuse"=>"0","attendance_key_amount"=>"10","comment"=>"No comment"),
            array("user_id"=>1,"attendance_id"=>"2","present_absent"=>"1","excuse"=>"0","attendance_key_amount"=>"10","comment"=>"No comment"),
            array("user_id"=>1,"attendance_id"=>"3","present_absent"=>"0","excuse"=>"1","attendance_key_amount"=>"0","comment"=>"No comment"),
            array("user_id"=>1,"attendance_id"=>"4","present_absent"=>"1","excuse"=>"0","attendance_key_amount"=>"10","comment"=>"No comment"),
            array("user_id"=>1,"attendance_id"=>"5","present_absent"=>"1","excuse"=>"0","attendance_key_amount"=>"10","comment"=>"No comment"),
            array("user_id"=>2,"attendance_id"=>"1","present_absent"=>"1","excuse"=>"0","attendance_key_amount"=>"10","comment"=>"No comment"),
            array("user_id"=>2,"attendance_id"=>"2","present_absent"=>"1","excuse"=>"0","attendance_key_amount"=>"10","comment"=>"No comment"),
            array("user_id"=>2,"attendance_id"=>"3","present_absent"=>"0","excuse"=>"1","attendance_key_amount"=>"0","comment"=>"No comment"),
            array("user_id"=>2,"attendance_id"=>"4","present_absent"=>"0","excuse"=>"0","attendance_key_amount"=>"0","comment"=>"No comment"),
            array("user_id"=>2,"attendance_id"=>"5","present_absent"=>"1","excuse"=>"0","attendance_key_amount"=>"10","comment"=>"No comment"),
            
           
        );

        $tasks = array(
            array("stage_id"=>"2","task_name"=>"cv styling","task_link"=>"https://codi.gitbook.io/docs/04_challenges/cv-styling-master","task_type"=>"Challenge","key_range"=>"100","is_teamwork"=>"0","start_date"=>"2020-10-01","end_date"=>"2020-10-10"),
            array("stage_id"=>"2","task_name"=>"Movie Database","task_link"=>"https://codi.gitbook.io/docs/04_challenges/movie-databaser","task_type"=>"Challenge","key_range"=>"50","is_teamwork"=>"0","start_date"=>"2020-10-10","end_date"=>"2020-10-20"),
            array("stage_id"=>"2","task_name"=>"HTML-CSS-GIT","task_link"=>"https://codi.gitbook.io/docs/03_exercises/01_html_css/html_css_git","task_type"=>"Exercise","key_range"=>"200","is_teamwork"=>"0","start_date"=>"2020-10-20","end_date"=>"2020-10-30"),
            array("stage_id"=>"2","task_name"=>"Interactive Story","task_link"=>"https://codi.gitbook.io/docs/07_non_pogramming/interactive-story-part1","task_type"=>"Non-Programming","key_range"=>"100","is_teamwork"=>"1","start_date"=>"2020-11-01","end_date"=>"2020-11-10"),
            array("stage_id"=>"3","task_name"=>"Real Client Project One","task_link"=>"https://codi.gitbook.io/docs/general/04_participate/05-how-to-project-template","task_type"=>"Project","key_range"=>null,"is_teamwork"=>"1","start_date"=>"2020-11-10","end_date"=>"2020-12-30"),
            array("stage_id"=>"5","task_name"=>"Chat App","task_link"=>"","task_type"=>"Socket IO","key_range"=>null,"is_teamwork"=>"0","start_date"=>"2021-02-01","end_date"=>"2021-03-01"),
            
        );

        $users_tasks = array(
            
            
            array("task_id"=>"1","user_id"=>"1","admin_id"=>"1","keys"=>"100","progress"=>"1","assignment_link"=>"lalalalala"),
            array("task_id"=>"1","user_id"=>"2","admin_id"=>"1","keys"=>"100","progress"=>"1","assignment_link"=>"lalalalala"),
            array("task_id"=>"1","user_id"=>"3","admin_id"=>"1","keys"=>"100","progress"=>"1","assignment_link"=>"lalalalala"),
            array("task_id"=>"1","user_id"=>"4","admin_id"=>"1","keys"=>"100","progress"=>"1","assignment_link"=>"lalalalala"),
            array("task_id"=>"1","user_id"=>"5","admin_id"=>"1","keys"=>"100","progress"=>"1","assignment_link"=>"lalalalala"),
            array("task_id"=>"1","user_id"=>"6","admin_id"=>"1","keys"=>"100","progress"=>"1","assignment_link"=>"lalalalala"),

            array("task_id"=>"6","user_id"=>"1","admin_id"=>"2","keys"=>null,"progress"=>"1","assignment_link"=>"lalalalala"),
            array("task_id"=>"6","user_id"=>"2","admin_id"=>"2","keys"=>null,"progress"=>"1","assignment_link"=>"lalalalala"),
            array("task_id"=>"6","user_id"=>"3","admin_id"=>"2","keys"=>null,"progress"=>"1","assignment_link"=>"lalalalala"),
            array("task_id"=>"6","user_id"=>"4","admin_id"=>"2","keys"=>null,"progress"=>"1","assignment_link"=>"lalalalala"),
            array("task_id"=>"6","user_id"=>"5","admin_id"=>"2","keys"=>null,"progress"=>"1","assignment_link"=>"lalalalala"),
            array("task_id"=>"6","user_id"=>"6","admin_id"=>"2","keys"=>null,"progress"=>"1","assignment_link"=>"lalalalala"),
            
        );

        $skills = array(
            array("name"=>"HTML","skill_family"=>"Core Competencies"),
            array("name"=>"CSS","skill_family"=>"Core Competencies"),
            array("name"=>"Vanilla JS","skill_family"=>"Core Competencies"),
            array("name"=>"PHP","skill_family"=>"Core Competencies"),

            array("name"=>"Research","skill_family"=>"Project Management"),
            array("name"=>"Time Estimation","skill_family"=>"Project Management"),
            array("name"=>"Teamwork/Delegation","skill_family"=>"Project Management"),
            array("name"=>"Agile Methodology","skill_family"=>"Project Management"),

            array("name"=>"CSS Pre-processors","skill_family"=>"Advanced Tools & Build Tool"),

            array("name"=>"Sqlite","skill_family"=>"Databases"),
            array("name"=>"mySQL/mariaDB","skill_family"=>"Databases"),
            array("name"=>"MongoDB","skill_family"=>"Databases"),

            array("name"=>"React","skill_family"=>"Frameworks"),
            array("name"=>"React Native","skill_family"=>"Frameworks"),
            array("name"=>"Laravel","skill_family"=>"Frameworks"),

            array("name"=>"Git","skill_family"=>"Command-Line"),
            array("name"=>"SSH","skill_family"=>"Command-Line"),
            array("name"=>"Vim/Nano","skill_family"=>"Command-Line"),

            array("name"=>"Express","skill_family"=>"Server Side JS"),
            array("name"=>"Node","skill_family"=>"Server Side JS"),



           
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
        

        DB::table('user__absence__requests')->insert($user__absence__requests);
        DB::table('user_attendances')->insert($user_attendances);
        DB::table('attendances')->insert($attendances);
        DB::table('branches')->insert($branches);
        DB::table('cohorts')->insert($cohorts);
        DB::table('admins')->insert($admins);
        DB::table('stages')->insert($stages);
        DB::table('users')->insert($users);
        DB::table('roles')->insert($roles);
        DB::table('tasks')->insert($tasks);
        DB::table('skills')->insert($skills);
        DB::table('users_tasks')->insert($users_tasks);
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
