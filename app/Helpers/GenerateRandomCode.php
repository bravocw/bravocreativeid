<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

if (!function_exists('generate_unique_db_code')) {
    /**
     * Generate 6 karakter acak unik yang belum ada di tabel database.
     *
     * @param string $table Nama tabel target
     * @param string $column Nama kolom target
     * @return string
     */
    function generate_unique_db_code(string $table, string $column): string
    {
        do {
            $code = Str::random(6);
            $exists = DB::table($table)->where($column, $code)->exists();
        } while ($exists);

        return $code;
    }
}
