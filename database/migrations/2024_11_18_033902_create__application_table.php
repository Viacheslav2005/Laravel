<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Application', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->enum('service_type', ['Ковры','Диваны','Кровати']);
            $table->dateTime('date_time');
            $table->string('address', max(255));
            $table->enum('status', ['новая', 'подтверждена', 'отклонена']);
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
        Schema::dropIfExists('Application');
    }
};
