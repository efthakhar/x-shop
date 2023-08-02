<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('campaign_mails', function (Blueprint $table) {
            $table->id();
            $table->string('campaign_name');
            $table->string('campaign_mail_subject');
            $table->text('campaign_mail_content');
            $table->json('targeted_customers_ids');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_mails');
    }
};
