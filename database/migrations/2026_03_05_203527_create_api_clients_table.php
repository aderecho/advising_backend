<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('api_clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_id')->unique();    // shared with client
            $table->string('name');
            $table->longText('public_key_pem');       // PEM: -----BEGIN PUBLIC KEY-----
            $table->boolean('is_active')->default(true);
            $table->json('allowed_ips')->nullable();  // optional allowlist
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('api_clients');
    }
};