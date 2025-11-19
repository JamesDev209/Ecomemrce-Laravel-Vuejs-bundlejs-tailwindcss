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
        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'category_id')) {
                $table->unsignedBigInteger('category_id')->nullable()->after('id');
            }
            if (!Schema::hasColumn('products', 'price')) {
                $table->decimal('price', 10, 2)->default(0)->after('category_id');
            }
            if (!Schema::hasColumn('products', 'stock')) {
                $table->integer('stock')->default(0)->after('price');
            }
            if (!Schema::hasColumn('products', 'gallery')) {
                $table->json('gallery')->nullable()->after('stock');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['category_id', 'price', 'stock', 'gallery']);
        });
    }
};
