cara pasang php machine untuk koneksi dengan oracle: 
1. install xampp atau apache server (perhatikan daingat versi dari php nya)
2. download oci8.dll sesuai dengan VERSI php di url : http://pecl.php.net/package/oci8
3. hasil download-an taruh di dalam folder (applikasi php atau xampp atau apache server) -> php -> ext
4. didalam folder php cari file php.ini dan buka dengan notepad
5. ubah baris ;extension=oci8_11g menjadi extension=oci8_11g (hilangkan tanda ; diawal baris)
6. restart service

----------------------------------------

cara testing :
1. letakan folder testkoneksioracle kedalam folder htdocs
2. buka folder nya dan buka file index.php dengan menggunakan notepad dan ubah settingan koneksi oracle
3. buka browser dan akses localhost/testkoneksioracle
4. jika muncul berhasil maka koneksi dengan oracle telah berhasil

----------------------------------------


