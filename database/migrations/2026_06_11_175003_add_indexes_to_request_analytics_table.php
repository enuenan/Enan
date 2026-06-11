<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        $tableName = config('request-analytics.database.table', 'request_analytics');
        $connection = config('request-analytics.database.connection');
        
        Schema::connection($connection)->table($tableName, function (Blueprint $table) {
            $table->index('visited_at');
            $table->index('session_id');
            $table->index('path');
            $table->index('user_id');
            $table->index('request_category');
            $table->index(['visited_at', 'session_id']);
            $table->index(['path', 'visited_at']);
            $table->index(['browser', 'visited_at']);
            $table->index(['operating_system', 'visited_at']);
            $table->index(['country', 'visited_at']);
        });
    }

    public function down()
    {
        $tableName = config('request-analytics.database.table', 'request_analytics');
        $connection = config('request-analytics.database.connection');
        
        Schema::connection($connection)->table($tableName, function (Blueprint $table) {
            $table->dropIndex(['visited_at']);
            $table->dropIndex(['session_id']);
            $table->dropIndex(['path']);
            $table->dropIndex(['user_id']);
            $table->dropIndex(['request_category']);
            $table->dropIndex(['visited_at', 'session_id']);
            $table->dropIndex(['path', 'visited_at']);
            $table->dropIndex(['browser', 'visited_at']);
            $table->dropIndex(['operating_system', 'visited_at']);
            $table->dropIndex(['country', 'visited_at']);
        });
    }
};