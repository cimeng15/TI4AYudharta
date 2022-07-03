awal

1.installasi laravel 9 via composer

2.membuat link storage untuk penyimpadanan data image.
"php artisan storage:link"

kedua
1. Membuat database
2. Konfigurasi koneksi database pada .env
3. Membuat model dan migrastion
"php artisan make:model Post -m"
4. Menambahkan  field table pada migrations
5. Menjalankan migration
"php artisan migrate"

kedua
1. Membuat database baru
2. Konfigurasi koneksi database pada .env
3. Membuat model dan migration
4. Menambahkan field table pada migration
5. Menjalankan migration
"php artisan migrate"
6. Menambahkan skrip untuk mass assigmen
"protected $fillable = [
        'image',
        'nama',
        'nim',
        'jurusan',
        'semester',
        'jenis_kelamin',
        'alamat',
    ];
	
ketiga
1. Membuat controller baru
2. import model didalam controller
3.   import link storage penyimpanan image
"use Illuminate\Support\Facades\Storage"
4. konfigurasi controller function untuk index, create,store, update, delete.
5. Menambahkan route web
6. Membuat view untuk web index, create, edit data.
