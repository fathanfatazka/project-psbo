<div align="center">
  <img src="https://upload.wikimedia.org/wikipedia/commons/1/15/Bogor_Agricultural_University_%28IPB%29_symbol.svg" width=250px>
  <br>
  <h1>IPB: Tracking User</h1>
  <b>Pengembangan Sistem Berorientasi Objek<br>
  Kelompok 3 Praktikum 2</b>
</div>


## A. Deskripsi Singkat Aplikasi
[`^ Kembali Keatas ^`](#)

&ensp;&ensp;&ensp;&ensp;&ensp; IPB: Tracking user merupakan suatu platform berbasis web yang dapat menunjukan pergerakan user dalam lingkungan kampus ipb university. Melalui platform ini, user dapat mengetahui lokasi mana saja didalam kampus yang ramai maupun sepi. Penerapan lebih lanjut untuk aplikasi ini adalah penyesuaian terhadap protokol kesehatan yang diterapkan imbas dari pandemi Covid-19. Melalui aplikasi ini, user dapat mengetahui lokasi mana yang ramai di dalam kampus sehingga dapat menentukan tujuannya lebih baik dan menghindari kerumunan.  


## B. User Analysis
[`^ Kembali Keatas ^`](#)

#### User Story

* Saya sebagai mahasiswa IPB ,jika perkuliahan dilaksanakan secara offline,saya ingin tahu dimana lokasi di ipb yang sedang ramai orangnya, sehingga saya tidak pergi atau melewati daerah tersebut untuk menekan penularan Covid19.
* Saya sebagai mahasiswa IPB, jika perkuliahan dilaksanakan secara offline, dengan kondisi new normal seperti ini saya ingin tahu informasi mengenai lokasi mana di IPB yang bisa digunakan untuk mengadakan suatu kegiatan.


## C. Spesifikasi Teknis Lingkungan Pengembangan
[`^ Kembali Keatas ^`](#)

#### Software:
* Operating System : Windows 10 64-bit & Linux
* Text Editor : Visual Studio Code
* Version Control System: Git
* Design Tools and Prototyping : Figma
* Management Tools : Trello
  
#### Hardware:
* CPU : Intel Core i3-4030U @1.90GHz
* GPU : Intel HD Graphic Family
* RAM : 6GB DDR3l
* ROM : 512Gb HDD dan 128Gb SSD

#### Tech Stack
* Programming Languange : Javascript, PHP, Python
* Framework : Django
* Web Server : XAMPP
* DBMS : MySql
 
## D. Konsep OOP yang Digunakan

*1. Inheritance*

Kelas pada model di backend menggunakan konsep inheritance, dimana kelas model yang dibuat oleh user diturunkan dari kelas Model secara umum (abstract class) yang memiliki method-method umum seperti agar bisa menambahkan tipe data pada atribut model yang dibuat user maka menggunakan method dari kelas Model.

<img src="https://github.com/fathanfatazka/project-psbo/blob/master/report-assets/inheritance.jpeg">

*2. Polymorphism*

Framework yang digunakan mengizinkan kita untuk melakukan overriding terhadap atribut-atribut yang diturunkan dari kelas parent. Seperti yang diimplementasikan pada views (atau pada framework lain dinamakan controller seperti pada arsitektur MVC) sudah menggunakan class-based views dimana kita bisa mengoverride atribut-atribut pada kelas generics (kelas parent yang menyediakan method-method untuk REST API) sesuai dengan kebutuhan kita.

<img src="https://github.com/fathanfatazka/project-psbo/blob/master/report-assets/polymorphism.jpeg">

*3. Abstraction* 

Framework yang digunakan juga banyak mengimplementasikan konsep ini dimana pengembang hanya perlu menggunakan decorator sebagai bentuk abstraksi dan menyematkannya pada kelas yang ingin ditambahi method dan fungsionalitasnya tanpa perlu tau bagaimana fungsionalitas itu berjalan dibelakang. Pada project ini diimplementasikan pada Model yang memiliki decorator @property.

<img src="https://github.com/fathanfatazka/project-psbo/blob/master/report-assets/abstraction.jpeg">

*4. Encapsulation* 

Model dan Controller dari framework yang digunakan sudah menggunakan standar kelas (class-based) sehingga konsep ini sudah pasti diimplementasikan dimana ada method yang dapat memanipulasi attribut pada kelas dan juga ada atribut lokal yang terdapat hanya pada kelas tersebut. seperti pada Model yang terdapat pada projek yang sudah terdapat atribut lokal dan juga method.

<img src="https://github.com/fathanfatazka/project-psbo/blob/master/report-assets/encapsulation.jpeg">


## E. Tipe Design Pengembangan yang Digunakan
 
## F. Hasil dan Pembahasan
[`^ Kembali Keatas ^`](#)

  #### 1. Use Case Diagram 
  
  <img src="https://github.com/fathanfatazka/project-psbo/blob/master/report-assets/Use%20Case%20Diagram.jpg">
  
  #### 2. Activity Diagram 
  * Melakukan Tracking :
  <img src="https://github.com/fathanfatazka/project-psbo/blob/master/report-assets/TrackUser%20Activity%20Diagram.jpg">
  
  * Merubah Profile :
  <img src="https://github.com/fathanfatazka/project-psbo/blob/master/report-assets/Ubah%20Profil.jpg">
 
  #### 3. Class Diagram 
  
   
  
  #### 4. Entity Relationship Diagram
  
  <img src="https://github.com/fathanfatazka/project-psbo/blob/master/report-assets/erd.jpeg">
  
  #### 5. Arsitektur Sistem  
  
  
  
  #### 6. Fungsi Utama yang Dikembangkan 
Fungsi utama:
Tracking people -> fungsi ini bertujuan jika telah dimulainya perkuliahan tatap muka di IPB University dimana mahasiswa IPB university dapat melcak keberadaan orang disekitarnya melalui web dengan begitu Mahasiswa dapat menghindari kerumunan dikarenakan Penyebaran Covid-19 yang masih ada, sehingga mengharuskan orang orang untuk menjaga jarak, Dengan begitu akan terlecak kerumunan yang dengan sensor warna merah jika kerumunan lebih dari 10 orang kuning 3-10 orang dan biru 1-2 orang dan mahasiswa dapat mencari jalan lain jika disuatu jalan terdapat kerumunan.  

  #### 7. Fungsi CRUD
  
  #### a. Create :
  
  #### b. Read :
  
  #### c. Update :
  
  #### d. Delete :


## G. Hasil Implementasi
[`^ Kembali Keatas ^`](#)
  * <b>Screenshot Sistem</b>

  #### 1. Sign Up Page
  <img src="https://github.com/fathanfatazka/project-psbo/blob/master/report-assets/SS/1.%20signup%20tracking.png">
  
  #### 2. Login Page
  <img src="https://github.com/fathanfatazka/project-psbo/blob/master/report-assets/SS/2.%20Login-tracking.png">
  
  #### 3. Welcome Page
  <img src="https://github.com/fathanfatazka/project-psbo/blob/master/report-assets/SS/3.%20welcome-tracking.png">
 
  #### 4. Dashboard / Track Page
  <img src="https://github.com/fathanfatazka/project-psbo/blob/master/report-assets/SS/4.%20dashboard-tracking.png">
  
  #### 5. Profile Page
  <img src="https://github.com/fathanfatazka/project-psbo/blob/master/report-assets/SS/5.%20profile-tracking.png">
  
  #### 6. Update Profile Page
  <img src="https://github.com/fathanfatazka/project-psbo/blob/master/report-assets/SS/6.%20update-profile-tracking.png">
  
  #### 7. Admin Page
  <img src="https://github.com/fathanfatazka/project-psbo/blob/master/report-assets/SS/7.%20admin-page-tracking.png">

  * <b>Link Aplikasi</b>
    
## H. Saran untuk Pengembangan Selanjutnya
[`^ Kembali Keatas ^`](#)

Berikut beberapa saran untuk proyek pengembangan selanjutnya:
1. Proses pembelajaran dalam membangun/mengembangkan platform harus lebih efektif dan tidak memakan waktu yang lama
2. Pembagian tugas para pengembang lebih jelas dan sesuai jobdesc agar tanggung jawab lebih merata dan tepat
3. Memaksimalkan komunikasi dan manajemen antar pengembang dalam proses pengembangan
4. Aplikasi dapat dikembangkan menjadi lebih baik karena fungsinya yang cukup penting bagi kehidupan kampus


## I. Job Description Role
[`^ Kembali Keatas ^`](#)
<table>
    <tr>
      <th></th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Role</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Jumiatul Sakdiah</td>
      <td>G6418000</td>
      <td>UI/UX Designer</td>
    </tr>
    <tr>
      <td>2</td>
      <td>M Fahrury Romdendine</td>
      <td>G64180069</td>
      <td>Backend Developer</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Fathu Rizka</td>
      <td>G64180104</td>
      <td>UI/UX Designer</td>
    </tr>
    <tr>
      <td>4</td>
      <td>M Fathan Fatazka</td>
      <td>G64180118</td>
      <td>PM & Frontend Developer</td>
    </tr>
  </table>
