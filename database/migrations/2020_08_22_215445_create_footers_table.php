<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description_1')->nullable();
            $table->text('description_2')->nullable();
            $table->text('address')->nullable();
            $table->text('telephones')->nullable();
            $table->text('emails')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google')->nullable();
            $table->string('linkdin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('telegram')->nullable();
            $table->boolean('visible')->default(1);
            $table->timestamps();
        });


        \DB::table('footers')->insert([
            'title' =>  'عنوان فوتر',
            'description_1' => ' متن توضیحات فوتر متن توضیحات فوتر',
            'description_2' => ' متن توضیحات فوتر متن توضیحات فوتر',
            'address' => 'آدرس آدرس آدرس ',
            'telephones' => '09141204545,04137229090',
            'emails' => 'sadegh@gmail.com, ali@gamil.com',
            'facebook' => 'eylay.ir',
            'twitter' => 'eylay.ir',
            'google' => 'eylay.ir',
            'linkdin' => 'eylay.ir',
            'instagram' => 'eylay.ir',
            'telegram' => 'eylay.ir',
            'facebook' => 'eylay.ir',


        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footers');
    }
}
