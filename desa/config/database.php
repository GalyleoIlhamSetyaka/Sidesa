<?php
// -------------------------------------------------------------------------
//
// Letakkan username, password dan database sebetulnya di file ini.
// File ini JANGAN di-commit ke GIT. TAMBAHKAN di .gitignore
// -------------------------------------------------------------------------

// Data Konfigurasi MySQL yang disesuaikan

$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = 'eyJpdiI6Im4rMUpONDdmNXZwME0wNmgyUStYa1E9PSIsInZhbHVlIjoiaE9lMVhGaWFJenE4V2UwVmF3czB0UT09IiwibWFjIjoiMGRiNDc2MGFkYzA4ZjQ5YjhjYTJkMWJhYzEzOGU3ZjRjYmZmYjZjMDUwZjczY2MyNmI1OWFjOThkYmQ3YWUzYiIsInRhZyI6IiJ9';
$db['default']['port']     = 3306;
$db['default']['database'] = 'sidesa';
$db['default']['dbcollat'] = 'utf8_general_ci';

/*
| Untuk setting koneksi database 'Strict Mode'
| Sesuaikan dengan ketentuan hosting
*/
$db['default']['stricton'] = true;