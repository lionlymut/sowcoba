<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sow_pc_arsip_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sow_pc_arsip_id')->constrained('sow_pc_arsips')->cascadeOnDelete();
            $table->foreignId('case_id')->nullable()->constrained('inventaris')->nullOnDelete();
            $table->foreignId('psu_id')->nullable()->constrained('inventaris')->nullOnDelete();
            $table->foreignId('prosesor_id')->nullable()->constrained('inventaris')->nullOnDelete();
            $table->foreignId('ram_id')->nullable()->constrained('inventaris')->nullOnDelete();
            $table->foreignId('motherboard_id')->nullable()->constrained('inventaris')->nullOnDelete();
            $table->date('tanggal_penggunaan')->nullable();
            $table->date('tanggal_perbaikan')->nullable();
            $table->boolean('helpdesk')->default(false);
            $table->boolean('form')->default(false);
            $table->string('nomor_perbaikan')->nullable();
            $table->foreignId('hostname_id')->nullable()->constrained('hostnames')->nullOnDelete();
            $table->string('divisi')->nullable();
            $table->foreignId('pic_id')->nullable()->constrained('pics')->nullOnDelete();
            $table->text('keterangan')->nullable();
            $table->string('foto')->nullable()->default('');
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sow_pc_arsip_items');
    }
};