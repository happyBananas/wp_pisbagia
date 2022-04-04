=== pisangbahagia ===
Contributors: lonecodexdotcom
Requires at least: 5.9
Tested up to: 5.9
Requires PHP: 5.6
Stable tag: 1.0
License URI: http://lonecodex.com

== Description ==
Tema yang simple, solid dan mendukung mobile view. Cocok digunakan untuk website blog dan berita

== Changelog ==

= 1.0 =
* Released: Februari 16, 2022

= 1.01 =
* Released: Februari 17, 2022
    == Update log: [ Internal bug and improvement ]  ==
    > [disqus plugin] masalah cors origin error pada disqus --> fail
    > [banner] masalah banner small saat versi mobile tulisannya lebih dari containernya, harusnya max-width containernya 170an px --> ok
    > [banner] masalah jika banner post tidak punya thumbnail, banner akan menampilkan image rusak, harunsya bisa tanpa ada thumnail, jadi pake background-color -> ok
    > [single.php] masalah pic pada head setiap artikel gk ada keterangan gambarnya dari mana url nya, keterangan dllnya --> fail
    > [breadcrumb] masalah saat mobile dan tulisannya banyak, tulisannya akan kebawah, harusnya kesamping dan ada ... --> ok
    > [menu primary] masalah pada menu primary, dimana dia harus ada tambahan nav class pas nambah di menu menu theme, ganti .nav jadi li --> ok
    > [list post author name] untuk nama user pada list post juga bisa gk keliatan, karna user wpnya harus isi nama depan dulu, ini bisa diakalin mungkin klo namaya masih kosong bisa diganti apa gitu --> ok
    > [side-content] menambahkan margin top 25px saat mobile version --> ok
    > [screenshot] screenshot pada edit theme gk ada, ternyata .PNG harusnya .png --> ok
    > [readme] tambah readme.txt pada theme nya seperti theme bawaan dari wp --> ok
    > [dokumentasi wp] dokumentasiiin updatenya versi excel di codingannya v1.1, ini udah ada readme.txt jadi gk perlu --> ok
    > [db] jangan lupa db dari lokal masukin ke git juga --> ok
    > [style-min.css] buat style-min.css --> ok
    > [single.php] merapikan style pada single (karna banyak elementnya masih pake def wp)
        > figcaption merubah ukurannya menjadi lebih kecil dan warna juga lebih soft --> ok
*

= 1.02 =
* Released: Februari 21, 2022
    == Update log: [ Internal bug and improvement ]  ==

    Performace
    > [banner-img] img pada banner tidak punya size yang jelas (tidak ada width dan height pada html), buat jadi ada, ubah method di banner --> ok
    > [image] ubah jadi .webP atau AVIF, ini tergantung mau diubah atau engga --> ok
    > [image] klo upload buat thumbnail pake ukuran maximum contoh 650x300, jangan pake ukuran asli gambarnya, ubah di wp ukuran gambar full jadi 665px --> ok

    Accessibility
    > [btn-nav-search-top] tidak ada attribut aria-label --> ok
    > [btn-sroll-top] tidak ada attribut aria-label, ditambahkan aria-label --> ok
    > [wp-block-latest-posts__list > li ] tidak ada attribut aria-label, --> fail
    > [text] beberapa text dengan color 777 warnanya hampir sama kek fff jadi diubah ke 555 --> ok
    > [<h3>Oops Hasil tidak ditemukan</h3>] tidak sequensialy descending order, ubah jadi menggunakan<p> --> ok

     SEO
    > [banner-img] img pada banner tidak punya alt tag, buat jadi ada --> ok

    UNFIX BUG
    > weather hilang
    > font google bikin lemot, CDN?
    > font awesome bikin lemot, CDN?
    > static resource bikin lemot, CDN?
    > [wp-block-latest-posts__list > li ] tidak ada attribut aria-label, --> fail
    > [disqus plugin] masalah cors origin error pada disqus --> fail
    > [single.php] masalah pic pada head setiap artikel gk ada keterangan gambarnya dari mana url nya, keterangan dllnya --> fail
    > [single] contrast tulisan belum baik, font size dan font-family keknya perlu diubah, ukuran dan jarak2 di single juga kurang srek --> fail

*

= 1.03 =
* Released: April 04, 2022
    == Update log: [ Internal bug and improvement ]  ==

    fixed BUG
    > list  main menu (main navbar) weird behavior, fixed --> ok

    UNFIX BUG
    > weather hilang
    > font google bikin lemot, CDN?
    > font awesome bikin lemot, CDN?
    > static resource bikin lemot, CDN?
    > [wp-block-latest-posts__list > li ] tidak ada attribut aria-label, --> fail
    > [disqus plugin] masalah cors origin error pada disqus --> fail
    > [single.php] masalah pic pada head setiap artikel gk ada keterangan gambarnya dari mana url nya, keterangan dllnya --> fail
    > [single] contrast tulisan belum baik, font size dan font-family keknya perlu diubah, ukuran dan jarak2 di single juga kurang srek --> fail

*

https://github.com/happyBananas/wp_pisbagia/tree/master

== Copyright ==
pisangbahagia WordPress Theme, 2021-2022 WordPress.org

