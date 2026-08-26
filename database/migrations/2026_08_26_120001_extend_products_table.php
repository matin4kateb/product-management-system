<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('sku', 40)->nullable()->after('id');
            $table->foreignId('category_id')
                ->nullable()
                ->after('user_id')
                ->constrained('categories')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->string('status', 20)->default('active')->after('quantity');
            $table->softDeletes();
            $table->index(['user_id', 'status']);
        });

        // Existing products receive a deterministic SKU without changing their IDs.
        DB::table('products')->whereNull('sku')->orderBy('id')->eachById(
            function (object $product): void {
                DB::table('products')
                    ->where('id', $product->id)
                    ->update(['sku' => 'PRD-'.str_pad((string) $product->id, 8, '0', STR_PAD_LEFT)]);
            }
        );

        Schema::table('products', function (Blueprint $table) {
            $table->unique('sku');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropIndex(['user_id', 'status']);
            $table->dropUnique('products_sku_unique');
            $table->dropColumn(['sku', 'category_id', 'status', 'deleted_at']);
        });
    }
};
