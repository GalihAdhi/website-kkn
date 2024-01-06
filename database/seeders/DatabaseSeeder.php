<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Official;
use App\Models\Council;
use App\Models\Infrastructure;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Article::factory(10)->create();
        // Official::factory(20)->create();
        // Council::factory(20)->create();
        // Infrastructure::factory(10)->create();

        DB::table('profiles')->insert([
            'geografis' => '<p>Desa Kismoyoso merupakan salah satu Desa di Provinsi Jawa Tengah yang terletak di Kecamatan Ngemplak Kabupaten Boyolali, dengan kondisi geografis sebagai berikut: </p>
                            <ol>
                                <li> Tipologi Desa :
                                    <ul>
                                    <li> Persawahan </li>
                                    <li> Perladangan </li>
                                    <li> Perkebunan </li>
                                    <li> Peternakan </li>
                                    <li> Kerajinan dan Industri Kecil </li>
                                    <li> Jasa dan Perdagangan </li>
                                    </ul>
                                </li>
                                <li> Luas Wilayah : 3,8 km<sup>2</sup></li>
                                <li> Batas Wilayah :
                                    <ul>
                                    <li> Sebelah Utara : Desa Giriroto</li>
                                    <li> Sebelah Selatan : Desa Donohudan Dan Pandeyan</li>
                                    <li> Sebelah Barat : Desa Dibal</li>
                                    <li> Sebelah Timur : Kabupaten Karanganyar</li>
                                    </ul>
                                </li>
                            </ol>',
            'ekonomi' =>    '<p>
                                Gambaran umum mengenai kondisi ekonomi masyarakat Desa Kismoyoso dapat dilihat dari potensi sumber daya yang ada, seperti sumber daya alam, sumber daya manusia, sumber daya kelembagaan, dan sumber daya sarana dan prasarana.
                            </p>
                            <p>
                                Potensi sumber daya alam berupa persawahan, perladangan, perkebunan dan peternakan merupakan potensi sumber daya unggulan yang mendominasi aktivitas masyarakat, selain itu sebagian masyarakatnya bekerja sebagai pengrajin, pelaku UMKM, pedagang, karyawan swasta, dan pegawai negeri sipil.
                            </P>
                            ',
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin1@Kismoyoso.com',
            'password' => Hash::make('admin123')
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin2@Kismoyoso.com',
            'password' => Hash::make('admin123')
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin3@Kismoyoso.com',
            'password' => Hash::make('admin123')
        ]);

        DB::table('visions')->insert([
            'visi' => 'Terwujudnya sistem pemerintahan yang efektif sehingga mampu meningkatkan pelayanan dan kesejahteraan masyarakat.',
            'misi' => ' a. Penyelenggaraan pemerintahan yang efektif dan efisien. <br>
                        b. Pengembangan kemampuan administrasi pemerintah dan pembangunan. <br>
                        c. Peningkatan pelayanan, pemberdayaan masyarakat dan kesejahteraan masyarakat. <br>'
        ]);

        // Struktur Pemerintahan Desa 
        DB::table('officials')->insert([
            'nama' => 'Siyamto, ST',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Kepala Desa',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Adi Prayoga, SE. MM.',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Sekretaris Desa',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Ita Royani',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'P',
            'jabatan' => 'KAUR Keuangan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Dewi Anggraeni',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'P',
            'jabatan' => 'KAUR Umum',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Suwandi',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'KASI Pemerintahan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Mujahid',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'KASI Kesejahteraan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Andrianto',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Kepala Dusun I',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Ayugi Rantau Witra',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Kepala Dusun II',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Shodiqun',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Kepala Dusun III',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('officials')->insert([
            'nama' => 'Mujiono',
            'uri' => Str::random(30),
            'jenis_kelamin' => 'L',
            'jabatan' => 'Kepala Dusun IV',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Struktur Pemerintahan Desa 
        // DB::table('councils')->insert([
        //     'nama' => 'Sumidi',
        //     'uri' => Str::random(30),
        //     'jenis_kelamin' => 'L',
        //     'jabatan' => 'Ketua',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('councils')->insert([
        //     'nama' => 'Nata',
        //     'uri' => Str::random(30),
        //     'jenis_kelamin' => 'L',
        //     'jabatan' => 'Wakil Ketua',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('councils')->insert([
        //     'nama' => 'Dalimin, S.Ag',
        //     'uri' => Str::random(30),
        //     'jenis_kelamin' => 'L',
        //     'jabatan' => 'Sekretaris',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('councils')->insert([
        //     'nama' => 'Joko Waluyo',
        //     'uri' => Str::random(30),
        //     'jenis_kelamin' => 'L',
        //     'jabatan' => 'Bendahara',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('councils')->insert([
        //     'nama' => 'Sularso',
        //     'uri' => Str::random(30),
        //     'jenis_kelamin' => 'L',
        //     'jabatan' => 'Seksi Pembangunan dan Ekonomi',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('councils')->insert([
        //     'nama' => 'Anshor Afandi, S.Ag',
        //     'uri' => Str::random(30),
        //     'jenis_kelamin' => 'L',
        //     'jabatan' => 'Seksi Pendidikan',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('councils')->insert([
        //     'nama' => 'Drs. Joko Supriyanto',
        //     'uri' => Str::random(30),
        //     'jenis_kelamin' => 'L',
        //     'jabatan' => 'Seksi Agama',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('councils')->insert([
        //     'nama' => 'Agus Setyawan, SKM',
        //     'uri' => Str::random(30),
        //     'jenis_kelamin' => 'L',
        //     'jabatan' => 'Seksi Kesehatan',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('councils')->insert([
        //     'nama' => 'Wasingun',
        //     'uri' => Str::random(30),
        //     'jenis_kelamin' => 'L',
        //     'jabatan' => 'Seksi Lingkungan Hidup',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('councils')->insert([
        //     'nama' => 'Purwanto',
        //     'uri' => Str::random(30),
        //     'jenis_kelamin' => 'L',
        //     'jabatan' => 'Seksi Keamanan dan Ketertiban',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // DB::table('councils')->insert([
        //     'nama' => 'Eko Puji Santoso',
        //     'uri' => Str::random(30),
        //     'jenis_kelamin' => 'L',
        //     'jabatan' => 'Seksi Kesejahteraan Sosial',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // Kelembagaan
        DB::table('unions')->insert([
            'nama' => 'Rukun Tetangga (RT)',
            'uri' => Str::random(30),
            'keterangan' => '
                                <p>Rukun Tetangga (RT) merupakan lembaga yang bertugas membantu pelaksanaan pemerintahan. Desa Kismoyoso memiliki beberapa RT.</p>
                                <ul>
                                    <li>Ketua RT 01 RW 01 : Paringad</li>
                                    <li>Ketua RT 02 RW 01 : Tartmanto</li>
                                    <li>Ketua RT 03 RW 01 : Nyawartono</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 02 : Sarjoko</li>
                                    <li>Ketua RT 02 RW 02 : Sumardi</li>
                                    <li>Ketua RT 03 RW 02 : Tarman</li>
                                    <li>Ketua RT 04 RW 02 : Sukimin</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 03 : Herman</li>
                                    <li>Ketua RT 02 RW 03 : Suparno</li>
                                    <li>Ketua RT 03 RW 03 : Sarmidi</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 04 : Sukimin</li>
                                    <li>Ketua RT 02 RW 04 : Sunardi</li>
                                    <li>Ketua RT 03 RW 04 : Slamed</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 05 : Hadi Susanto</li>
                                    <li>Ketua RT 02 RW 05 : Mustofa Ali</li>
                                    <li>Ketua RT 03 RW 05 : PArjiyanto</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 06 : Suharso</li>
                                    <li>Ketua RT 02 RW 06 : Suratno</li>
                                    <li>Ketua RT 03 RW 06 : Zaenal</li>
                                    <li>Ketua RT 03 RW 06 : Jaiman</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 07 : Didik Jatmiko</li>
                                    <li>Ketua RT 02 RW 07 : Wahyudi</li>
                                    <li>Ketua RT 03 RW 07 : Sunanto</li>
                                    <li>Ketua RT 04 RW 07 : Bambang R</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 08 : Mulyadi</li>
                                    <li>Ketua RT 02 RW 08 : Rahmat</li>
                                    <li>Ketua RT 03 RW 08 : Joko S</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 09 : Suwanto</li>
                                    <li>Ketua RT 02 RW 09 : Sriyono</li>
                                    <li>Ketua RT 03 RW 09 : Fauzan</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 10 : Ismail</li>
                                    <li>Ketua RT 02 RW 10 : Mahi Sholih</li>
                                    <li>Ketua RT 03 RW 10 : Muhammad Ali</li>
                                    <li>Ketua RT 04 RW 10 : Kawit</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 11 : Mulyono</li>
                                    <li>Ketua RT 02 RW 11 : Mujiono</li>
                                    <li>Ketua RT 03 RW 11 : Rudi S.</li>
                                </ul>
                                <ul>
                                    <li>Ketua RT 01 RW 12 : Mulyono</li>
                                    <li>Ketua RT 02 RW 12 : Mu`alim</li>
                                </ul>
                            ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('unions')->insert([
            'nama' => 'Rukun Warga (RW)',
            'uri' => Str::random(30),
            'keterangan' => '
                            <p>Rukun Warga merupakan lembaga yang bertugas mengkoordinir RT-RT di wilayahnya. Desa Kismoyoso memiliki RW berjumlah 12.</p>
                            <ul>
                                <li>Ketua RW 01 : Sukamto</li>
                                <li>Ketua RW 02 : Sukarno</li>
                                <li>Ketua RW 03 : Darno</li>
                                <li>Ketua RW 04 : Kusno Mawardi</li>
                                <li>Ketua RW 05 : Sutrisno</li>
                                <li>Ketua RW 06 : Sutarno</li>
                                <li>Ketua RW 07 : Purnomo</li>
                                <li>Ketua RW 08 : Subari</li>
                                <li>Ketua RW 09 : Agus Purwati</li>
                                <li>Ketua RW 10 : Sumardi</li>
                                <li>Ketua RW 11 : Mu`min</li>
                                <li>Ketua RW 12 : Trimo S</li>
                            </ul>
                            </ul>
                            </ul>
                            </ul>
                            </ul>
                            </ul>
                            <p>Pengurus Rukun Tetangga mempunyai tugas 
                                <ol>
                                    <li>Keputusan musyawarah warga</li>
                                    <li>Menyampaikan mengenai laporan kegiatan organisasi paling sedikit 6 ( enam ) bulan sekali kepada anggota melalui musyawarah anggota</li>
                                    <li>Menyampaikan hal-hal yang terjadi dalam masyarakat yang dianggap perlu mendapatkan penyelesaian Lurah.</li>
                                </ol>
                            </P>
                            ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('unions')->insert([
            'nama' => 'Karang Taruna',
            'uri' => Str::random(30),
            'keterangan' => '
                            <p>Pengurus Lembaga Karang Taruna Desa mempunyai fungsi :  
                            <ol>
                                <li>Pelopor pembangunan dan pembaharuan di wilayah Desa</li>
                                <li>Pembinaan persatuan dan kesatuan pemuda</li>
                                <li>Melaksankan usaha-usaha pencegahan kenakalan remaja dan penyalahgunaan narkotika, serta aktif dalam kegiatan pembaharuan bangsa dikalangan masyarakat</li>
                                <li>Memelihara dan memupuk kebersamaan dan rasa kesetia kawanan sosial</li>
                            </ol>
                            </P>
                            <p>Berikut adalah Pengurus Lembaga Karang Taruna Desa Kismoyoso </p>
                            <ul>
                                <li>-</li>
                                <li>-</li>
                                <li>-</li>
                                <li>-</li>
                            </ul>
                            ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('unions')->insert([
            'nama' => 'Pemberdayaan dan Kesejahteraan Keluarga (PKK)',
            'uri' => Str::random(30),
            'keterangan' => '
                            <p>Tim Penggerak Pemberdayaan dan Kesejahteraan Keluarga Desa mempunyai tugas :  
                                <ol>
                                    <li>Menyusun rencana kerja PKK sebagai penjabaran hasil Rakerda Kabupaten</li>
                                    <li>Melaksanakan kegiatan sesuai jadwal yang disepakati</li>
                                    <li>Menyuluh dan menggerakkan kelompok-kelompok PKK RW, RT dan dasa wisma agar dapat mewujudkan kegiatan-kegiatan yang telah disusun dan disepakati</li>
                                    <li>Menggali, menggerakkan dan mengembangkan potensi masyarakat khususnya keluarga untuk meningkatkan kesejahteraan keluarga sesuai dengan kebijakan yang telah ditetapkan</li>
                                    <li>Melaksanakan kegiatan penyuluhan kepada keluarga-keluarga   yang mencakup kegiatan bimbingan, motivasi, dalam upaya mencapai keluarga sejahtera dan bimbingan mengenai pelaksanaan program kerja </li> 
                                    <li>Berpartisipasi dalam pelaksanaan program instansi yang berkaitan dengan kesejahteraan keluarga di Desa </li> 
                                    <li>Melaksanakan tertib administrasi </li>
                                    <li>Mengadakan konsultasi dengan ketua dan anggota dewan penyantun </li>
                                </ol>
                            </P>
                            <p>Berikut adalah Pengurus Penggerak Pemberdayaan dan Kesejahteraan Keluarga Desa Kismoyoso </p>
                            <ul>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            </ul>
                            ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('unions')->insert([
            'nama' => 'Posyandu',
            'uri' => Str::random(30),
            'keterangan' => '
                            <p>Dalam melaksanakan tugasnya Pengurus Kelompok Posyandu Desa Kismoyoso Kecamatan Ngemplak mempunyai tugas dan tanggungjawab sebagai berikut : 
                                <ol>
                                    <li>Melaksanakan kegiatan Kelompok Posyandu yang berpedoman pada Petunjuk Pelaksanaan Hasil Rakernas VIII PKK Tahun 2015.</li>
                                    <li>Merencanakan, melaksanakan dan melaporkan kegiatan Posyandu kepada Ketua Tim Penggerak PKK Desa Kismoyoso.</li>
                                    <li>Menertibkan administrasi Kelompok Posyandu sesuai dengan Petunjuk.</li>
                                </ol>
                            </P>
                            <p>Berikut adalah Pengurus Kelompok Posyandu Desa Kismoyoso</p>
                            <ul>- (-)
                                <li>- : -</li>
                            </ul>
                            ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
 
        // Data Umum
        DB::table('generals')->insert([
            'uri' => Str::random(30),
            'kategori' => 'Dusun I',
            'jumlah' => 1382,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('generals')->insert([
            'uri' => Str::random(30),
            'kategori' => 'Dusun II',
            'jumlah' => 1945,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('generals')->insert([
            'uri' => Str::random(30),
            'kategori' => 'Dusun III',
            'jumlah' => 3294,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('generals')->insert([
            'uri' => Str::random(30),
            'kategori' => 'Dusun IV',
            'jumlah' => 2012,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Data Sarana dan Prasarana
        DB::table('infrastructures')->insert([
            'sarana' => 'Kantor Desa',
            'uri' => Str::random(30),
            'jumlah' => 1,
            'satuan' => 'unit',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('infrastructures')->insert([
            'sarana' => 'Sekolah Dasar (SD)',
            'uri' => Str::random(30),
            'jumlah' => 3,
            'satuan' => 'unit',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('infrastructures')->insert([
            'sarana' => 'Madrasah ibtidaiyah (MI)',
            'uri' => Str::random(30),
            'jumlah' => 1,
            'satuan' => 'unit',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Articles
        DB::table('articles')->insert([
            'judul' => 'Program Kerja KKN UNS 2023 (Juli - Agustus)',
            'preview' => 'Dalam kurun waktu Juli-Agustus 2023, mahasiswa KKN UNS telah aktif terlibat dalam berbagai kegiatan positif di Sekolah Dasar  Kismoyoso.',
            'uri' => Str::random(30),
            'teks' => '
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus blandit, facilisis mauris sed, ultrices neque. Suspendisse sollicitudin posuere lacus, eget posuere justo hendrerit id. Cras quis magna erat. Curabitur consequat fringilla elit a fringilla. Maecenas facilisis mi a arcu volutpat, et hendrerit dui ullamcorper. Quisque euismod nibh eu quam vulputate placerat a ut est. Curabitur vitae nisi in risus pellentesque elementum. Quisque tempus nisi ut ante lacinia, nec lobortis enim aliquet. Nunc egestas viverra sem, eget varius eros sodales sed. Vivamus nunc quam, efficitur a nibh non, tincidunt porta leo.

                        Ut quis neque et massa mollis efficitur sit amet quis urna. Fusce vel sem dui. Sed vel eleifend nulla, et dictum velit. Ut hendrerit ipsum non molestie maximus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent bibendum elit a neque euismod, nec ultrices libero mollis. In elementum, mi vitae eleifend luctus, libero lectus tempor ante, eget fringilla dui ex quis velit. Praesent fermentum tristique dolor. Ut aliquet rutrum metus ut venenatis.

                        Integer at volutpat lacus. Cras vehicula dignissim purus. Nullam eu elit dapibus, venenatis ex vestibulum, viverra massa. Suspendisse eu purus nec diam gravida pulvinar. Pellentesque placerat venenatis justo, at mollis mi porttitor sed. Nulla sapien arcu, viverra ut pretium nec, gravida non eros. Nulla dictum sed mauris et laoreet. Sed ornare malesuada tincidunt. Donec et tellus quis est rhoncus ultricies sodales eu urna. Duis ac nisl lorem. Praesent mollis dolor vel neque porttitor, ut maximus purus pellentesque. Fusce ut ligula pellentesque, malesuada leo vel, rutrum erat. Duis faucibus, augue non laoreet sagittis, sem justo efficitur nisl, et commodo urna tortor sed quam.

                        Mauris vitae justo non neque mattis suscipit. Morbi a ante lacus. Integer sed leo interdum, congue sem et, molestie erat. Vestibulum ac commodo enim, ac mattis dui. Vivamus consequat finibus sodales. Integer ornare varius efficitur. Curabitur augue ex, lobortis in orci a, commodo dictum nisl. Fusce nibh justo, tempor ut neque sed, porta varius tellus. Fusce id sagittis urna, nec pharetra mauris. Etiam suscipit tellus odio, vitae tincidunt purus laoreet in. Cras pretium lorem vel imperdiet pretium. Ut varius eros vitae elit dapibus, et vestibulum neque egestas. Ut ac aliquet urna. Vestibulum a tincidunt justo, in semper nunc. Morbi sodales nisl mollis nisi faucibus iaculis. Duis et auctor sapien, condimentum semper lectus.

                        Nunc eleifend enim eu mi elementum eleifend. Proin ullamcorper urna eu diam aliquam, ac sagittis nisl imperdiet. Sed cursus leo orci, ut tincidunt turpis lobortis at. Vestibulum eget faucibus nunc. Phasellus pretium orci magna, sodales dignissim ligula tristique ut. Duis dignissim auctor sapien. Pellentesque sit amet ultrices felis, ut eleifend ipsum. Cras at lorem dictum, iaculis mi nec, vulputate ligula. Proin sapien nunc, rutrum venenatis lectus ac, rutrum sagittis sem. Proin tellus diam, rutrum ac efficitur vel, tincidunt et metus. Aenean tincidunt pharetra blandit. Integer lobortis vel ex at elementum. Sed posuere urna at dui egestas maximus. Vestibulum volutpat vulputate vehicula. Vestibulum tempor augue eget dapibus auctor. 
                        </p>
                    ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        //List UMKM
        DB::table('professions')->insert([
            'produk' => 'Gamelan',
            'uri' => Str::random(30),
            'alamat' => 'Beran Rt 02 Rw 01',
            'pemilik' => 'Samijan',
            'nomor' => '081392588903',
            'gmaps' => 'https://goo.gl/maps/A8KboaZDdSjW9QmE9',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
