// Ganti ini:
import './bootstrap';

// Menjadi:
import './bootstrap/app'; // Jika menggunakan Laravel Breeze
// atau
import '../sass/app.scss'; // Jika menggunakan Sass
// atau hapus saja jika tidak digunakan

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
