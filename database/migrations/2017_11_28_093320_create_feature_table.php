<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('property_id')->unsigned();



//            $table->foreign('property_id')->references('id')->on('feature');

            $table->string('built_in_year')->nullable();
            $table->string('view')->nullable();
            $table->string('parking_space')->nullable();
            $table->string('double_glazed_window')->nullable();
            $table->string('central_air_conditioning')->nullable();
            $table->string('central_heating')->nullable();
            $table->string('flooring_type')->nullable();
            $table->string('electricity_backup_type')->nullable();
            $table->string('waste_disposal')->nullable();
            $table->string('total_number_of_floors')->nullable();
            $table->string('other_main_feature')->nullable();
            $table->string('furnished')->nullable();
            $table->string('lobby_in_building')->nullable();


            $table->string('floor')->nullable();
            $table->string('total_floor_building')->nullable();
            $table->string('number_of_elevators_in_building')->nullable();
            $table->string('service_elevators_in_building')->nullable();
            $table->string('public_parking')->nullable();
            $table->string('underground_parking')->nullable();
            $table->string('elevator_or_lift')->nullable();
            $table->string('number_of_units')->nullable();
            $table->string('broadband_internet_access')->nullable();
            $table->string('satellite_or_cable_tv_ready')->nullable();
            $table->string('intercom')->nullable();
            $table->string('other_business_and_communication')->nullable();
            $table->string('facilities')->nullable();
            $table->string('business_center_or_media_room_building')->nullable();
            $table->string('confrence_room_in_building')->nullable();
            $table->string('atm_and_machine_in_building')->nullable();
            $table->string('number_of_bedrooms')->nullable();
            $table->string('number_of_bathrooms')->nullable();
            $table->string('number_of_servant_quaters')->nullable();
            $table->string('drawing_room')->nullable();
            $table->string('dining_room')->nullable();
            $table->string('number_of_kitchens')->nullable();
            $table->string('study_room')->nullable();
            $table->string('prayer_room')->nullable();
            $table->string('powder_room')->nullable();
            $table->string('gym_room')->nullable();
            $table->string('steaming_room')->nullable();
            $table->string('number_of_store_rooms')->nullable();
            $table->string('lounge_or_sitting_room')->nullable();
            $table->string('laundry_room')->nullable();
            $table->string('other_room')->nullable();

            $table->string('nearby_schools')->nullable();
            $table->string('nearby_hospitals')->nullable();
            $table->string('nearby_shopping_malls')->nullable();
            $table->string('nearby_restaurants')->nullable();
            $table->string('distance_from_airport_kms')->nullable();
            $table->string('other_nearby_places')->nullable();
            $table->string('nearby_public_transport')->nullable();


            $table->string('lawn_or_garden')->nullable();
            $table->string('swimming_pool')->nullable();
            $table->string('sauna')->nullable();


            $table->string('jacuzzi')->nullable();
            $table->string('other_health_and_recreational')->nullable();
            $table->string('maintenance_staff')->nullable();
            $table->string('security_staff')->nullable();
            $table->string('facilities_for_disabled')->nullable();
            $table->string('other_facilities')->nullable();
            $table->string('laundry_or_dry_cleaning_facilities')->nullable();
            $table->string('communal_or_shared_kitchen_in_building')->nullable();
            $table->string('pet_policies')->nullable();
            $table->string('cctv_security_installed')->nullable();
            $table->string('cafeteria_or_canteen_in_building')->nullable();

            $table->string('pet_policy_type')->nullable();

            $table->string('possesion')->nullable();
            $table->string('corner')->nullable();
            $table->string('park_facing')->nullable();
            $table->string('disputed')->nullable();
            $table->string('file')->nullable();
            $table->string('balloted')->nullable();
            $table->string('sewerage')->nullable();
            $table->string('electricity')->nullable();
            $table->string('water_supply')->nullable();
            $table->string('sui_gas')->nullable();
            $table->string('boundry_wall')->nullable();

            $table->string('Irrigation')->nullable();
            $table->string('Tube_Wells')->nullable();
            $table->string('Accessible_by_Road')->nullable();
            $table->string('Perimeter_Fencing')->nullable();
            $table->string('Is_Land_Fertile')->nullable();
            $table->string('Boundary_Lines')->nullable();
            $table->string('Nearby_Water_Resources')->nullable();
            $table->string('Other_Land_Features')->nullable();



            $table->string('other_plot_features')->nullable();

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
        Schema::dropIfExists('feature');
    }
}
