<?php
// ----------------------------------------------------------------------------
// Konfigurasi aplikasi dalam berkas ini merupakan setting konfigurasi tambahan
// SID. Letakkan setting konfigurasi ini di desa/config/config.php.
// ----------------------------------------------------------------------------

// Uncomment jika situs ini untuk demo. Pada demo, user admin tidak bisa dihapus
// dan username/password tidak bisa diubah

// $config['demo_mode'] = false;

// Setting ini untuk menentukan user yang dipercaya. User dengan id di setting ini
// dapat membuat artikel berisi video yang aktif ditampilkan di Web.
// Misalnya, ganti dengan id = 1 jika ingin membuat pengguna admin sebagai pengguna terpecaya.
$config['user_admin'] = 0;


// config email
$config['protocol']       = 'smtp';  // mail	mail, sendmail, or smtp	The mail sending protocol.
$config['smtp_host']      = '';      // SMTP Server Address.
$config['smtp_user']      = '';      // SMTP Username.
$config['smtp_pass']      = '';      // SMTP Password.
$config['smtp_port']      = '';      // SMTP Port."