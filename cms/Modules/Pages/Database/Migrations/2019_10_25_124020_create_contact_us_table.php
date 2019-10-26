<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Pages\Entities\ContactUs;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact_email');
            $table->string('phone');
            $table->string('mobile_1');
            $table->string('mobile_2')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('youtube')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('skype')->nullable();
            $table->string('medium')->nullable();
            $table->timestamps();
        });
        
        ContactUs::create([
            'contact_email'     =>  'contact@syssr.org',
            'phone'             =>  '',
            'mobile_1'          =>  '',
            'mobile_2'          =>  '',
            'facebook'          =>  'https://www.facebook.com/SyrianSocietyforScientificResearch',
            'linkedin'          =>  'https://www.linkedin.com/in/syrian-society-for-scientific-research-a33577108',
            'twitter'           =>  'https://twitter.com/SSSR_org',
            'google_plus'       =>  'https://plus.google.com/+SyssrOrg',
            'youtube'           =>  'http://www.youtube.com/user/SyssrOrg',
            'whatsapp'          =>  '',
            'skype'             =>  '',
            'medium'            =>  '',
        ]);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_us');
    }
}
