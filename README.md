# TP2DPBO2526C1
janji : Saya Aracelli Jasmine Malaika dengan NIM 2501804 mengerjakan Tugas Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahan-Nya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

Program Description : program dibuat untuk mengelola data film bioskop dengan menerapkan konsep Object-Oriented Programming (OOP), khususnya inheritance atau pewarisan. Program dibuat menggunakan 4 bahasa pemrograman yaitu
- c++
- java
- python
- php
Program memiliki tiga class utama, yaitu Film sebagai parent class, Film2D sebagai child class, dan Film3D sebagai child class dari Film2D.

# struktur class
1. Film
Film merupakan parent class yang menyimpan data dasar sebuah film, yaitu :
- idFilm
- judul
- genre
- gambar
Class Film juga memiliki constructor, getter, dan setter untuk mengelola setiap atribut.

2. Film2D
Film2D merupakan child class dari Film dengan menggunakan konsep inheritance. Class ini mewarisi atribut dan method dari Film serta memiliki atribut tambahan yaitu :
- resolusi
- bahasa
- subtitle
Class Film2D juga memiliki constructor, getter, dan setter.

3. Film3D
Film3D merupakan child class dari Film2D. Class ini mewarisi atribut dan method dari Film dan Film2D serta memiliki atribut tambahan yaitu :
- tipeKacamata
- efek3D
- hargaTiket
Class Film3D juga memiliki constructor, getter, dan setter.

Hubungan antar class : Film ← Film2D ← Film3D

# konsep oop yang digunakan
1. inheritance
Inheritance digunakan untuk membuat class baru berdasarkan class yang sudah ada.
Pada program ini :
- Film menjadi parent class
- Film2D mewarisi Film
- Film3D mewarisi Film2D
Dengan inheritance, atribut dan method yang sudah dibuat pada class parent dapat digunakan kembali oleh class turunannya.

2. encapsulation
Setiap atribut pada class dibuat menggunakan access modifier private. Akses terhadap atribut dilakukan melalui getter dan setter.

3. constructor
Setiap class memiliki constructor yang digunakan untuk memberikan nilai awal pada atribut ketika objek dibuat.
