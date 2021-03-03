<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('Application_number')->unique()->nullable();
            $table->string('Application_name')->nullable();
            $table->string('Applicant_name')->nullable();
            $table->date('DOB')->nullable();
            $table->string('Certificate_to_be_uploaded')->nullable();
            $table->string('file1')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Email')->nullable();
            $table->integer('Contact_no')->nullable();
            $table->string('Education')->nullable();
            $table->string('Religion')->nullable();
            $table->string('Occupation')->nullable();
            $table->string('Relationship_type')->nullable();
            $table->string('Enter_name')->nullable();
            $table->date('DOB_2')->nullable();



            $table->string('Permanent_address_door_no')->nullable();
            $table->string('Permanent_address_sub_locality_1')->nullable();
            $table->string('Permanent_address_sub_locality_2')->nullable();
            $table->string('Permanent_address_location')->nullable();

            $table->string('City')->nullable();
            $table->string('Permanent_address_disrict')->nullable();
            $table->string('Permanent_state')->nullable();
            $table->integer('Pin_Code')->nullable();
            $table->string('Permanent_address_country')->nullable();
            $table->string('Permanent_police_station')->nullable();
            $table->string('Permanent_post_office')->nullable();



            $table->string('Present_address_door_no')->nullable();
            $table->string('Present_address_sub_locality_1')->nullable();
            $table->string('Present_address_sub_locality_2')->nullable();
            $table->string('Present_address_location')->nullable();

            $table->string('City_pre')->nullable();
            $table->string('Present_address_disrict')->nullable();
            $table->string('Present_state')->nullable();

            $table->integer('Pin_Code_pre')->nullable();
            $table->string('Present_address_country')->nullable();
            $table->string('Present_police_station')->nullable();
            $table->string('Present_post_office')->nullable();


            $table->string('Duration_of_stay_at_present_address')->nullable();
            $table->string('List_of_supporting_docs')->nullable();
            $table->string('attachments')->nullable();


            $table->string('status')->nullable();
            $table->date('DDFD')->nullable();
            $table->date('Target_date')->nullable();
            $table->string('Remarks')->nullable();





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
