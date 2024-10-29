-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2024 at 07:43 AM
-- Server version: 10.3.39-MariaDB-0ubuntu0.20.04.2
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `hima_database`
--
-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
    `id` int(11) NOT NULL,
    `nama` varchar(50) DEFAULT NULL,
    `jkel` varchar(11) DEFAULT NULL,
    `tgl_lahir` date DEFAULT NULL,
    `email` varchar(100) DEFAULT NULL,
    `no_tlp` varchar(20) DEFAULT NULL,
    `jabatan` varchar(100) DEFAULT NULL,
    `status` varchar(40) DEFAULT NULL,
    `angkatan` int(11) DEFAULT NULL,
    `patondro` varchar(11) DEFAULT NULL,
    `nra` varchar(20) DEFAULT NULL,
    `jkarir` text DEFAULT NULL,
    `alamat` text DEFAULT NULL,
    `gambar` varchar(100) DEFAULT NULL,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO
    `anggota` (
        `id`,
        `nama`,
        `jkel`,
        `tgl_lahir`,
        `email`,
        `no_tlp`,
        `jabatan`,
        `status`,
        `angkatan`,
        `patondro`,
        `nra`,
        `jkarir`,
        `alamat`,
        `gambar`,
        `created_at`,
        `updated_at`
    )
VALUES (
        1,
        'Indra Irawan',
        'pria',
        '2003-10-11',
        'indrairawan1103@gmail.com',
        '+6282193872438',
        'Wakil Kordinator Pembelajaran',
        'BPH',
        2021,
        'XIX',
        '309',
        '- lk 1 himasar\n-lk 2 himasar',
        'jl. cirangka desa marumpa, maros',
        '1726194520.jpg',
        '2024-09-09 18:11:12',
        '2024-09-17 07:16:58'
    ),
    (
        5,
        'Alif Al Qhadri',
        'pria',
        '2002-12-26',
        'alqad261202@gmail.com',
        '+6285249986657',
        'Wakil Ketua',
        'BPH',
        2021,
        'XX',
        '326',
        '- lk 1 himasar\n-lk 2 himasar',
        'Sudiang',
        'al.jpg',
        '2024-09-10 06:53:59',
        '2024-09-12 18:16:32'
    ),
    (
        16,
        'Aprilian Maulana A.',
        'pria',
        '2000-04-28',
        'aprilianmaulana2@gmail.com',
        '+6282194906687',
        'Sekretaris',
        'BPH',
        2021,
        'XIX',
        '307',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jalan taman sudiang indah',
        '1726109818.jpg',
        '2024-09-11 18:56:58',
        '2024-09-11 18:56:58'
    ),
    (
        17,
        'Andi Alif Rahmat Fauzan',
        'pria',
        '2002-07-30',
        'andialif1306@gmail.com',
        '+6282346657671',
        'Kordinator Pengkaderan',
        'BPH',
        2021,
        'XXI',
        '313',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jl. Bate Salapang',
        '1726110178.jpg',
        '2024-09-11 19:02:58',
        '2024-09-11 19:02:58'
    ),
    (
        18,
        'MUH. AIRUL AWING',
        'pria',
        '2002-08-28',
        'muhairul420@gmail.com',
        '+628152343438',
        'Staf Pengkaderan',
        'BPH',
        2021,
        'XXII',
        '338',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jl. Damai unhas',
        '1726121139.jpg',
        '2024-09-11 22:05:39',
        '2024-09-11 22:05:39'
    ),
    (
        19,
        'andi salman alfarisi',
        'pria',
        '2004-02-15',
        'andi.salmanalfarisi2004@gmail.com',
        '+6289684059354',
        'Staf Pengkaderan',
        'BPH',
        2022,
        'XXII',
        '336',
        '- lk 1 himasar\n-lk 2 himasar',
        'jl.perintis kemerdekaan 1',
        '1726121162.jpg',
        '2024-09-11 22:06:02',
        '2024-09-11 22:06:02'
    ),
    (
        20,
        'Muh Almaer R',
        'pria',
        '2003-04-04',
        'muhalmaer@gmail.com',
        '+6281342123078',
        'Wakil Kordinator Pengkaderan',
        'BPH',
        2021,
        'XX',
        '323',
        '- lk 1 himasar\n-lk 2 himasar',
        'Btn. Nuki Dwikarya Permai',
        '1726121192.jpg',
        '2024-09-11 22:06:32',
        '2024-09-11 22:06:32'
    ),
    (
        21,
        'Muh. Alif Anhar',
        'pria',
        '2003-09-26',
        'sultankautsar21@gmail.com',
        '+6285756895140',
        'Staf Pembelajaran',
        'BPH',
        2021,
        'XIX',
        '308',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jl. Banta-Bantaeng No.23',
        '1726143377.jpg',
        '2024-09-12 04:16:17',
        '2024-09-12 04:16:17'
    ),
    (
        22,
        'Gonsa Wijaya',
        'pria',
        '2005-09-19',
        'gonsawijaya01@gmail.com',
        '+6282194699850',
        'Staf Kesekretariatan',
        'BPH',
        2021,
        'XXI',
        '312',
        '- lk 1 himasar\n-lk 2 himasar',
        'Khodam 2',
        '1726144361.jpg',
        '2024-09-12 04:32:41',
        '2024-09-12 04:32:41'
    ),
    (
        23,
        'MUH. ASLAM',
        'pria',
        '2004-02-14',
        'mhmmdaslam1402@gmail.com',
        '+6287864316849',
        'Wakil Kordinator Kesekretariatan',
        'BPH',
        2021,
        'XIX',
        '311',
        '- lk 1 himasar\n-lk 2 himasar',
        'Bua',
        '1726144583.jpg',
        '2024-09-12 04:36:23',
        '2024-09-12 04:36:23'
    ),
    (
        24,
        'Kevin Mandi Ara\'',
        'pria',
        '2003-08-13',
        'kevinmanjar4@gmail.com',
        '+62895414032855',
        'Staf Pembelajaran',
        'BPH',
        2021,
        'XXII',
        '332',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jl.perintis 7',
        '1726151017.png',
        '2024-09-12 06:23:37',
        '2024-09-12 06:23:37'
    ),
    (
        25,
        'Muh chaidir dahlan leha',
        'pria',
        '2003-04-21',
        'chaidirdahlan21@gmail.com',
        '+62895324666281',
        '-',
        'Anggota Muda',
        2023,
        'XXIII',
        '0',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jalan muh yamin lr7a no 7 bara baraya utara',
        '1726191059.jpg',
        '2024-09-12 17:30:59',
        '2024-09-12 17:30:59'
    ),
    (
        26,
        'Gelvien leonardo dalipang',
        'pria',
        '2005-07-23',
        'aldomks221322@gmail.com',
        '+6282196041136',
        '-',
        'Anggota Muda',
        2023,
        'XXIII',
        '0',
        '- lk 1 himasar\n-lk 2 himasar',
        'Daya, perumahan griya daya permai',
        '1726191092.jpg',
        '2024-09-12 17:31:32',
        '2024-09-12 17:31:32'
    ),
    (
        27,
        'Muhammmad aslam',
        'pria',
        '2002-11-02',
        'aslamnurdiana56@gmail.com',
        '+6282194694939',
        'Staf Pembelajaran',
        'BPH',
        2021,
        'XX',
        '322',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jl. Batua raya no 91D',
        '1726191140.jpg',
        '2024-09-12 17:32:20',
        '2024-09-12 17:32:20'
    ),
    (
        28,
        'fadhel fadh osihi',
        'pria',
        '2003-11-13',
        'fadhosihifadhel@gmail.com',
        '+6288705573472',
        'Kordinator Kesekretariatan',
        'BPH',
        2021,
        'XIX',
        '325',
        '- lk 1 himasar\n-lk 2 himasar',
        'jl. maros 4',
        '1726191525.jpg',
        '2024-09-12 17:38:45',
        '2024-09-12 17:38:45'
    ),
    (
        30,
        'Munandar',
        'pria',
        '2001-08-04',
        'nandarces@gmail.com',
        '+62895384866553',
        '-',
        'Anggota Muda',
        2023,
        'XXIII',
        '0',
        '- lk 1 himasar\n-lk 2 himasar',
        'btp blok A grahatigaputra no23',
        '1726303386.jpg',
        '2024-09-14 00:43:06',
        '2024-09-14 00:43:06'
    ),
    (
        32,
        'Muhammad Rifky Khalil',
        'pria',
        '2004-05-19',
        'muhrifki190504@gmail.com',
        '+62895806730980',
        'Staf Humas',
        'BPH',
        2022,
        'XXI',
        '339',
        '- lk 1 himasar\n-lk 2 himasar',
        'jln sanrangan btn dwi dharma',
        '1726304256.jpg',
        '2024-09-14 00:57:36',
        '2024-09-14 00:57:36'
    ),
    (
        33,
        'Nandita Pramesti Aulia',
        'wanita',
        '2005-12-16',
        'nanditapramestiaulia@gmail.com',
        '+6282128501278',
        '-',
        'Anggota Muda',
        2023,
        'XXIII',
        '0',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jln. Gn Latimodjong',
        '1726304380.jpg',
        '2024-09-14 00:59:40',
        '2024-09-14 00:59:40'
    ),
    (
        34,
        'MUH. RIKHYAL MA\'RUF',
        'pria',
        '2005-08-09',
        'rehanaja090825@gmail.com',
        '+6281243699940',
        '-',
        'Anggota Muda',
        2023,
        'XXIII',
        '0',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jl.Sungai Limboto Lorong 56',
        '1726304564.jpg',
        '2024-09-14 01:02:44',
        '2024-09-14 01:02:44'
    ),
    (
        35,
        'Veny Agustin',
        'wanita',
        '2003-11-11',
        'venyagustin11@gmail.com',
        '+6289654114015',
        'Staf Humas',
        'BPH',
        2022,
        'XXIII',
        '334',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jl. Sidrap 1 Blok H No.306 BSP',
        '1726306067.jpg',
        '2024-09-14 01:27:47',
        '2024-09-14 01:27:47'
    ),
    (
        36,
        'Hesli Sonda Pasuang',
        'pria',
        '2005-05-23',
        'hesli005@gmail.com',
        '+6285252270457',
        '-',
        'Anggota Muda',
        2023,
        'XXIV',
        '0',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jl. Lamuru lorong 118C No. 2',
        '1726306210.jpg',
        '2024-09-14 01:30:10',
        '2024-09-14 01:30:10'
    ),
    (
        37,
        'Grace Vilsia Sarangnga’',
        'wanita',
        '2005-03-28',
        'gracevilsia@gmail.com',
        '+6282394559156',
        '-',
        'Anggota Muda',
        2023,
        'XXIII',
        '0',
        '- lk 1 himasar\n-lk 2 himasar',
        'Perintis kemerdekaan IV',
        '1726307033.jpg',
        '2024-09-14 01:43:53',
        '2024-09-14 01:52:30'
    ),
    (
        39,
        'Leonardo ericson ody',
        'pria',
        '2005-09-22',
        'xycruz4@gmail.com',
        '+6281355998360',
        '-',
        'Anggota Muda',
        2023,
        'XXIII',
        '0',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jl antang komp idi',
        '1726307429.jpg',
        '2024-09-14 01:50:29',
        '2024-09-14 01:50:29'
    ),
    (
        40,
        'MUHAMMAD FADEL',
        'pria',
        '2003-09-07',
        'muh.fadel789@gmail.com',
        '+62895806733826',
        '-',
        'Anggota Muda',
        2023,
        'XXIII',
        '0',
        '- lk 1 himasar\n-lk 2 himasar',
        'jl.Biring Romang / UKIP',
        '1726311976.jpg',
        '2024-09-14 03:06:16',
        '2024-09-14 03:06:16'
    ),
    (
        41,
        'Wawan Julianto',
        'pria',
        '2003-06-27',
        'studyweb2023@gmail.com',
        '+6285349699104',
        '-',
        'Anggota Muda',
        2023,
        'XXIII',
        '0',
        '- lk 1 himasar\n-lk 2 himasar',
        'Mattirodeceng , RT 001, RW 002, Desa Kindang, Kec. Kindang , Bulukumba, Sulawesi Selatan',
        '1726315989.jpg',
        '2024-09-14 04:13:09',
        '2024-09-17 17:39:48'
    ),
    (
        42,
        'Rahmat Ramadhan',
        'pria',
        '2002-11-10',
        'rahmatramadhan349@gmail.com',
        '+6285213976352',
        'Staf Pembelajaran',
        'BPH',
        2022,
        'XXII',
        '333',
        '- lk 1 himasar\n-lk 2 himasar',
        'Barru',
        '1726380258.png',
        '2024-09-14 22:04:19',
        '2024-09-15 03:22:14'
    ),
    (
        44,
        'Prisilia Tandilangngan',
        'wanita',
        '2002-04-02',
        'ptandilangngan@gmail.com',
        '+6281524473312',
        'Bendahara',
        'BPH',
        2021,
        'XXI',
        '314',
        '- lk 1 himasar\r\n-lk 2 himasar',
        'jl dakota tuvolep 3',
        '1726400135.jpg',
        '2024-10-03 08:16:49',
        '2024-10-03 00:16:49'
    ),
    (
        45,
        'Nur Masyitha Maharani',
        'wanita',
        '2002-07-14',
        'maharanimasyitha9@gmail.com',
        '+6282194552018',
        '-',
        'Anggota Muda',
        2023,
        'XXIII',
        '0',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jl. Gunung Lompobattang',
        '1726403874.jpg',
        '2024-09-15 04:37:54',
        '2024-09-15 05:05:00'
    ),
    (
        46,
        'Muhammad Akbar Fauzan',
        'pria',
        '2000-12-19',
        'muhakbarfauzan@gmail.com',
        '+62895806221115',
        'DPO',
        'Anggota Lepas',
        2020,
        'XIX',
        '297',
        '- lk 1 himasar\n- lk 2 himasar\n- ketua umum himasar ke 12',
        'JLN BORONG RAYA NO.79',
        '1726465885.jpg',
        '2024-09-15 21:51:25',
        '2024-09-15 21:53:34'
    ),
    (
        51,
        'Andi Fachrul Sheva Van Jovie',
        'pria',
        '2003-04-05',
        'fachrul@gmail.com',
        '+6282189293431',
        'Kordinator Pembelajaran',
        'BPH',
        2121,
        'XXI',
        '000',
        '- lk 1 himasar\n-lk 2 himasar',
        'dangko',
        '1726750883.png',
        '2024-09-19 05:01:23',
        '2024-09-19 05:01:23'
    ),
    (
        52,
        'Rizqah Ramadhani Nur',
        'wanita',
        '2002-11-04',
        'nurrizqah950@gmail.com',
        '+628259120797',
        'Kordinator Humas',
        'BPH',
        2021,
        'XX',
        '316',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jl. Dr Wahidin Sudiro husodo No. 77A',
        '1726886494.jpg',
        '2024-09-20 18:41:34',
        '2024-09-20 18:41:34'
    ),
    (
        53,
        'REYNALDO HAMDANI',
        'pria',
        '2003-03-04',
        'reynaldohamdani123@gmail.com',
        '+6281937554563',
        'Ketua',
        'BPH',
        2021,
        'XXI',
        '324',
        '- lk 1 himasar\r\n-lk 2 himasar',
        'MAKASSAR',
        '1726888816.jpg',
        '2024-10-03 08:15:29',
        '2024-10-03 00:15:29'
    ),
    (
        54,
        'Ichsan Maulana Adnan',
        'pria',
        '2002-04-19',
        'ichsanmaulana190402@gmail.com',
        '+6281253185359',
        'Staf DPO',
        'Anggota Lepas',
        2020,
        'XVIII',
        '294',
        '- lk 1 himasar\r\n-lk 2 himasar',
        'Jl. Cakalang VII no.15',
        '1726890362.jpg',
        '2024-09-20 19:46:02',
        '2024-09-23 23:04:26'
    ),
    (
        55,
        'Risal Rusli',
        'pria',
        '2001-05-15',
        'risallrusli@gmail.com',
        '+6281255532987',
        'Staf Pembelajaran',
        'BPH',
        2021,
        'XX',
        '318',
        '- lk 1 himasar\r\n-lk 2 himasar',
        'Jl. Pampang 4 No 29',
        '1727696991.png',
        '2024-10-07 14:28:19',
        '2024-10-07 06:28:19'
    ),
    (
        56,
        'Roberto Rio Ada\' Walangitan',
        'pria',
        '2003-11-17',
        'robertoorioo17@gmail.com',
        '+6281254358880',
        'Staf Pengkaderan',
        'BPH',
        2021,
        'XX',
        '328',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jalan tidung X',
        '1726891613.jpg',
        '2024-09-20 20:06:53',
        '2024-09-20 20:06:53'
    ),
    (
        57,
        'Rika Dampang',
        'wanita',
        '2005-02-23',
        'dampangrika@gmail.com',
        '+6282190452141',
        'Staf Kesekretariatan',
        'BPH',
        2022,
        'XXIII',
        '337',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jln. Sahabat II No 75',
        '1726894996.jpg',
        '2024-09-20 21:03:16',
        '2024-09-20 21:03:16'
    ),
    (
        58,
        'Muh isra hudiansa',
        'pria',
        '2003-10-01',
        'isra12@gmail.com',
        '+62895406463156‬',
        '-',
        'Anggota Muda',
        2023,
        'XXIII',
        NULL,
        '- lk 1 himasar\n-lk 2 himasar',
        'Jln sejati',
        '1726977663.jpg',
        '2024-09-21 20:01:03',
        '2024-09-21 20:01:03'
    ),
    (
        59,
        'Dinda Arojo Dos Santos',
        'wanita',
        '2002-08-09',
        'dindaarojo89@gmail.com',
        '+6287888468565',
        'Staf Pembelajaran',
        'BPH',
        2021,
        'XX',
        '321',
        '- lk 1 himasar\n-lk 2 himasar',
        'Jln. Fokker No.26 Lanud Sultan Hasanuddin',
        '1726985254.jpg',
        '2024-09-21 22:07:34',
        '2024-09-21 22:07:34'
    ),
    (
        60,
        'fadhil ahmad',
        'pria',
        '2005-08-28',
        'fadhilahmd12@gmail.com',
        '+6285158491223',
        '-',
        'Anggota Muda',
        2023,
        'XXIII',
        '0',
        '-lk1 HIMASAR',
        'btp blok j',
        '1727241945.jpg',
        '2024-09-24 21:25:45',
        '2024-09-24 21:25:45'
    );

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
    `id` int(11) NOT NULL,
    `kategori` varchar(25) DEFAULT NULL,
    `judul` varchar(255) DEFAULT NULL,
    `berita` longtext DEFAULT NULL,
    `gambar` varchar(100) DEFAULT NULL,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO
    `berita` (
        `id`,
        `kategori`,
        `judul`,
        `berita`,
        `gambar`,
        `created_at`,
        `updated_at`
    )
VALUES (
        3,
        'blog',
        'Snapchat Rilis Fitur AI dan Desain Baru, Ada Grandparents Lens!',
        '<h5 style=\"text-align: justify;\">Snapchat terus mengembangkan fitur berbasis AI untuk para penggunanya. Setelah memperkenalkan asisten AI generatif, Snap kini menghadirkan serangkaian pembaruan dengan fitur baru yang canggih dan lebih kreatif. Fitur-fitur ini diharapkan mampu memaksimalkan pengalaman pengguna serta membuat antarmuka aplikasi lebih mudah diakses.<br>Salah satu fitur terbaru yang diperkenalkan adalah “My Selfie”, yang eksklusif bagi pengguna Snapchat+. Fitur ini memungkinkan pengguna membuat gambar AI dari swafoto mereka sendiri, serta dari teman yang juga berlangganan.<br>Hasil gambar tersebut menampilkan pengguna dalam berbagai pose dan situasi kreatif yang dihasilkan oleh AI. Selain itu, Snap juga memperkenalkan “grandparents lens”, yang menggunakan teknologi AI untuk memprediksi bagaimana wajah pengguna akan terlihat saat mereka memasuki usia lanjut.</h5><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Pengguna Snapchat+ juga akan merasakan inovasi pada fitur Memories. Fitur ini dapat melacak foto-foto yang telah disimpan sebelumnya dan menambahkan teks hasil kreasi AI atau efek lensa AR pada foto dan video yang tersimpan. Fitur ini memungkinkan pengalaman nostalgia menjadi lebih dinamis dan menarik.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Snap juga memperbarui asisten virtualnya, MyAI. Dengan bantuan teknologi ChatGPT, MyAI kini mampu mengatasi berbagai permasalahan berdasarkan gambar. Beberapa kemampuan yang ditambahkan termasuk menerjemahkan menu restoran, mengidentifikasi jenis tanaman, hingga memahami rambu parkir.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Selain pembaruan fitur AI, Snap juga sedang menguji desain ulang aplikasi yang lebih sederhana dan intuitif. Snapchat, yang sebelumnya mendapat kritik atas antarmuka yang rumit, kini menyatukan percakapan dengan Stories dalam satu tampilan.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Stories akan berada di bagian atas daftar percakapan, memudahkan pengguna untuk melihat dan berinteraksi dengan konten yang relevan. Perubahan signifikan lainnya adalah penghapusan tab terpisah untuk Snap Map.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Snap Map kini diintegrasikan ke dalam tab obrolan, sehingga pengguna dapat mengaksesnya dengan lebih mudah tanpa perlu berpindah ke tab lain. Fitur Spotlight dan Stories yang sebelumnya terpisah juga akan digabungkan ke dalam satu tab baru bernama “Watch”, yang menyajikan konten secara algoritmik berdasarkan preferensi pengguna.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Desain baru ini juga mengurangi jumlah tab utama dari lima menjadi tiga, yaitu kamera, obrolan, dan Watch. Kamera tetap menjadi tampilan utama ketika pengguna membuka aplikasi, menjadikan Snapchat lebih praktis dan mudah digunakan.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Namun, mengingat pengalaman Snap di masa lalu dengan perubahan besar pada antarmuka, perusahaan ini akan meluncurkan desain baru secara bertahap. Hanya sebagian kecil pengguna yang akan menerima pembaruan ini terlebih dahulu sebelum diluncurkan secara luas.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Snap berharap bahwa pendekatan yang lebih hati-hati ini akan memastikan penerimaan positif dari komunitas pengguna Snapchat di seluruh dunia.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Dengan fitur-fitur AI baru yang semakin pintar dan desain aplikasi yang lebih ramah pengguna, Snapchat tidak hanya memudahkan interaksi sosial, tetapi juga terus berinovasi untuk mengikuti perkembangan teknologi terkini.</p><p style=\"text-align: justify;\"><br></p>',
        '1726843726.jpg',
        '2023-11-05 01:09:34',
        '2024-09-20 07:31:04'
    ),
    (
        4,
        'event',
        'Suksesnya Musyawarah Besar (Mubes) HIMASAR 2023 di Benteng Somba Opu',
        '<p>Makassar, 24 September 2023 – Himpunan Mahasiswa Makassar (HIMASAR) sukses menggelar Musyawarah Besar (Mubes) di Rumah Adat Barru, Benteng Somba Opu. Acara yang diadakan pada tanggal 24 September 2023 ini dihadiri oleh anggota HIMASAR, dengan tujuan utama memilih ketua dan wakil ketua baru yang akan memimpin organisasi untuk periode mendatang.</p><p>Mubes kali ini berjalan dengan lancar dan penuh semangat kebersamaan. Muh. Akbar Fauzan, ketua HIMASAR sebelumnya, secara resmi menyerahkan tongkat estafet kepemimpinan kepada Reynaldo Hamdani yang terpilih sebagai Ketua HIMASAR yang baru. Sementara itu, Alif Al Qhadri terpilih sebagai Wakil Ketua mendampingi Reynaldo dalam memimpin HIMASAR ke depan.</p><p>Acara ini berlangsung dalam suasana penuh keakraban dan semangat demokrasi. Para peserta Mubes sepakat bahwa HIMASAR ke depan akan semakin kuat dalam menjaga solidaritas, kebersamaan, dan kreatifitas anggotanya. Reynaldo Hamdani dalam sambutannya menyampaikan terima kasih atas kepercayaan yang diberikan dan berkomitmen untuk membawa HIMASAR semakin maju serta terus berkontribusi positif bagi mahasiswa dan masyarakat Makassar.</p><p>Dengan terpilihnya kepemimpinan yang baru, diharapkan HIMASAR akan semakin solid dalam menjalankan berbagai program kerja, baik di bidang akademik, sosial, maupun budaya. Mubes ini juga menjadi momentum untuk mempererat tali silaturahmi antaranggota dan memperkokoh persatuan di dalam organisasi.</p><p>Suksesnya pelaksanaan Mubes ini membuktikan komitmen HIMASAR dalam menjaga nilai-nilai demokrasi dan semangat gotong-royong di tengah anggotanya. Semoga kepemimpinan baru HIMASAR dapat membawa angin segar dan inovasi yang bermanfaat bagi seluruh anggota serta masyarakat Makassar pada umumnya.</p>',
        '1727149741.jpg',
        '2023-09-23 01:27:42',
        '2024-09-23 19:49:01'
    ),
    (
        5,
        'event',
        'Latihan Kepemimpinan (LK) 1 Gelombang 1 dan 2 HIMASAR',
        '<p>Makassar, 12 November 2023 – Himpunan Mahasiswa Makassar (HIMASAR) kembali mencatatkan kesuksesan dengan berhasil melaksanakan Latihan Kepemimpinan (LK) 1 untuk Gelombang 1 dan 2. Ini menjadi bagian dari upaya HIMASAR dalam membekali anggotanya dengan keterampilan kepemimpinan dan manajerial yang diperlukan untuk menghadapi tantangan di dunia organisasi dan masyarakat.</p><p>Latihan Kepemimpinan ini dibagi dalam dua gelombang guna memberikan kesempatan kepada lebih banyak peserta untuk mengikuti program pelatihan ini secara optimal. Seluruh peserta LK 1 mendapatkan materi-materi penting seputar kepemimpinan, kerja tim, komunikasi efektif, serta bagaimana mengambil keputusan dalam situasi yang menantang.</p><p>Acara berlangsung dengan penuh antusiasme, di mana para peserta menunjukkan semangat belajar yang tinggi. Mereka aktif berdiskusi, mengikuti simulasi kepemimpinan, dan bekerja sama dalam berbagai tugas kelompok. Para pemateri yang berpengalaman di bidang kepemimpinan juga turut memberikan wawasan berharga, menginspirasi para peserta untuk terus mengembangkan potensi mereka sebagai pemimpin.</p><p>Ketua HIMASAR yang baru, Reynaldo Hamdani, menyampaikan bahwa Latihan Kepemimpinan 1 ini merupakan langkah awal dalam mencetak calon-calon pemimpin masa depan dari HIMASAR. \"Melalui pelatihan ini, kami berharap para peserta dapat menerapkan ilmu yang mereka dapatkan untuk kemajuan HIMASAR dan masyarakat luas. Kepemimpinan bukan hanya soal memimpin, tapi juga tentang bagaimana membawa perubahan positif di sekitarnya,\" ujar Reynaldo.</p><p>Suksesnya penyelenggaraan LK 1 Gelombang 1 dan 2 ini menjadi bukti komitmen HIMASAR dalam menciptakan kader-kader yang tidak hanya cakap secara akademis, namun juga unggul dalam hal kepemimpinan dan pengabdian kepada masyarakat. Dengan program ini, HIMASAR terus mendorong anggotanya untuk berperan aktif sebagai agen perubahan yang membawa dampak positif bagi lingkungan sekitarnya.</p>',
        '1727150363.jpg',
        '2023-11-12 06:30:07',
        '2024-09-23 19:59:23'
    ),
    (
        6,
        'blog',
        'Hacker Bjorka Bocorkan Jutaan NPWP, Ada Data Milik Jokowi',
        '<p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Bjorka, sosok peretas yang pernah membuat geger Indonesia, kembali muncul dengan aksi terbarunya. Kali ini, Bjorka diduga membocorkan jutaan data NPWP (Nomor Pokok Wajib Pajak) milik Direktorat Jenderal Pajak Kementerian Keuangan.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Dilaporkan, sekitar 6,6 juta data NPWP kini dijual di forum gelap Breach Forums, termasuk data pribadi milik Presiden Joko Widodo (Jokowi) dan kedua putranya, Gibran Rakabuming Raka serta Kaesang Pangarep.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Kebocoran data ini diungkap oleh Teguh Aprianto, pendiri Ethical Hacker Indonesia, dalam sebuah unggahan di media sosial X pada tanggal 18 September 2024. Teguh menyebut bahwa data-data yang bocor mencakup Nomor Induk Kependudukan (NIK), NPWP, alamat, nomor telepon, email, dan informasi pribadi lainnya.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Selain itu, diketahui juga bahwa data NPWP yang bocor ini dibanderol oleh Bjorka dengan harga fantastis, yaitu sekitar 150 juta rupiah atau setara dengan US$10 ribu di forum tersebut.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Dalam unggahannya, Bjorka secara terang-terangan menyebutkan bahwa data yang bocor termasuk informasi pribadi milik Presiden Jokowi, putra-putranya, serta sejumlah menteri, termasuk Menteri Keuangan Sri Mulyani dan Menteri Komunikasi dan Informatika</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Perusahaan keamanan siber Falcon Feeds juga membenarkan adanya dugaan kebocoran data ini. Mereka melaporkan bahwa informasi pribadi dalam data yang bocor mencakup nama, NIK, NPWP, alamat, email, nomor telepon, hingga tanggal lahir.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Meski demikian, Falcon Feeds menekankan bahwa klaim kebocoran data ini masih dalam tahap verifikasi lebih lanjut.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Menanggapi situasi ini, Direktorat Jenderal Pajak (DJP) Kementerian Keuangan langsung melakukan investigasi. Direktur Penyuluhan, Pelayanan, dan Hubungan Masyarakat DJP, Dwi Astuti, mengonfirmasi bahwa tim teknis sedang mendalami dugaan kebocoran data tersebut untuk memastikan kebenarannya dan mengambil tindakan yang diperlukan.</p>',
        '1727685836.jpg',
        '2024-09-18 08:43:56',
        '2024-09-18 00:43:56'
    ),
    (
        7,
        'event',
        'Pelatihan Himasar di Kabupaten Pangkep sukses mengenalkan IT kepada generasi Z',
        '<p style=\"padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">Makassar, 20 Februari 2024 – Himpunan Mahasiswa Makassar (HIMASAR) sukses menggelar pelatihan daerah di Pangkep, yang berlangsung dari tanggal 16 Februari hingga 1 Mret 2024. Acara ini dihadiri oleh lebih dari 50 peserta.</p><p style=\"padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">Pelatihan ini bertujuan untuk meningkatkan kompetensi dan keterampilan mahasiswa dalam berbagai bidang, termasuk teknologi informasi. Selama kurang lebih lima belas hari, peserta mendapatkan materi dari para ahli dan praktisi yang berpengalaman di bidangnya.</p><p style=\"padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">Ketua HIMASAR, Renaldo Hamdani, menyampaikan rasa syukur dan bangganya atas kesuksesan acara ini. “Kami sangat senang melihat antusiasme dan semangat para peserta. Kami berharap pelatihan ini dapat memberikan manfaat yang besar bagi mereka dalam mengembangkan potensi diri dan berkontribusi bagi anggota maupun peserta yang mengitutinya,” ujarnya.</p><p style=\"padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">Salah satu peserta, Nurul Aini, mengungkapkan bahwa pelatihan ini sangat bermanfaat dan memberikan banyak wawasan baru. “Saya belajar banyak hal baru yang sebelumnya tidak saya ketahui. Ini adalah pengalaman yang sangat berharga bagi saya,” katanya.</p><p style=\"padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">Dengan berakhirnya pelatihan ini, HIMASAR terus berkomitmen untuk melanjutkan program-program serupa yang bertujuan meningkatkan kualitas sumber daya manusia, khususnya di kalangan mahasiswa Makassar.</p>',
        '1726853299.jpg',
        '2024-10-02 01:38:35',
        '2024-10-01 17:38:35'
    ),
    (
        8,
        'event',
        'Study Tour Himasar: Eksplorasi Budaya di Benteng Rotterdam',
        '<p>Makassar, 4 Mei 2024 – Himpunan Mahasiswa Makassar (HIMASAR) sukses menggelar acara <strong>Study Tour</strong> bagi para Anggota Muda yang berlangsung di Benteng Rotterdam pada tanggal 4 Mei 2024. Kegiatan ini bertujuan untuk memperkenalkan sejarah lokal kepada anggota baru serta mempererat hubungan di antara anggota HIMASAR melalui kegiatan edukatif di salah satu situs bersejarah paling ikonik di Makassar.</p><p>Benteng Rotterdam, yang merupakan warisan sejarah dari era Kerajaan Gowa-Tallo, menjadi lokasi yang tepat untuk menggali pengetahuan tentang sejarah perjuangan dan budaya lokal. Para anggota muda HIMASAR yang hadir diajak berkeliling dan mendengarkan penjelasan mengenai sejarah Benteng dan perannya dalam perkembangan kota Makassar. Mereka juga berkesempatan untuk mengunjungi museum yang ada di dalam Benteng, menambah wawasan mereka tentang masa lalu Makassar.</p><p>Ketua HIMASAR, Reynaldo Hamdani, dalam sambutannya menyampaikan pentingnya kegiatan ini bagi anggota muda. \"Study tour ini bukan hanya soal belajar tentang sejarah, tapi juga bagaimana kita sebagai generasi muda dapat mengambil pelajaran dari masa lalu untuk membangun masa depan yang lebih baik. Saya harap pengalaman ini menjadi motivasi bagi teman-teman anggota muda untuk terus berkontribusi dalam menjaga kebudayaan dan sejarah lokal kita,\" ujarnya.</p><p>Acara berlangsung dalam suasana yang penuh keakraban, dan para anggota muda HIMASAR sangat antusias dalam mengikuti setiap sesi kunjungan. Kegiatan ini juga menjadi momen penting untuk mempererat rasa kebersamaan dan kekeluargaan di antara anggota HIMASAR, sejalan dengan visi organisasi untuk terus membangun kekuatan dan kreativitas melalui semangat kebersamaan.</p><p>Dengan suksesnya acara ini, diharapkan para anggota muda HIMASAR dapat lebih mengenal budaya dan sejarah lokal serta semakin termotivasi untuk aktif dalam berbagai kegiatan organisasi di masa mendatang.</p>',
        '1727151729.jpg',
        '2024-09-30 17:07:57',
        '2024-09-30 09:07:57'
    ),
    (
        9,
        'blog',
        'Update “Wave 2” Microsoft Copilot, Bikin “Office” Lebih Pintar',
        '<p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Microsoft baru-baru ini mengumumkan pembaruan besar untuk&nbsp;<a href=\"https://telset.id/news/microsoft-bakal-hadirkan-keyboard-dengan-tombol-copilot-ai/\" data-wpel-link=\"internal\" target=\"_self\" rel=\"follow\" style=\"color: var(--td_theme_color,#4db2ec); text-decoration: none; pointer-events: auto;\">Copilot</a>, asisten AI all-in-one milik mereka. Pembaruan copilot ini disebut “Wave 2” dan membawa sejumlah kemampuan baru ke dalam aplikasi Office populer, mulai dari Word, Excel, PowerPoint, hingga Teams dan Outlook. Selain itu, Microsoft memperkenalkan fitur baru bernama Copilot Pages, yang dirancang untuk meningkatkan kolaborasi dan produktivitas dalam satu platform yang lebih terintegrasi.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Salah satu sorotan utama dalam pembaruan ini adalah Copilot Pages, yang disebut Microsoft sebagai “kanvas dinamis dan persisten” untuk kolaborasi multipemain. Dalam praktiknya, Pages memungkinkan pengguna menyimpan dan mengelola konten yang dihasilkan oleh Copilot tanpa harus meninggalkan aplikasi itu sendiri. Microsoft menjelaskan bahwa Pages membuat konten sementara yang dihasilkan oleh AI menjadi lebih permanen, sehingga pengguna dapat mengedit, menambahkan, dan berbagi dengan rekan kerja.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Pengguna yang memiliki akun Microsoft Entra akan dapat mengakses fitur ini secara gratis, dan Microsoft berencana untuk meluncurkannya dalam beberapa minggu mendatang. Namun, hingga kini, belum ada informasi apakah fitur ini akan diluncurkan lebih luas ke semua pengguna.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Selain Pages, Microsoft juga melakukan sejumlah pembaruan kecil pada aplikasi lain di dalam ekosistem&nbsp;<a href=\"https://telset.id/apps/microsoft-365-gantikan-microsoft-office\" data-wpel-link=\"internal\" target=\"_self\" rel=\"follow\" style=\"color: var(--td_theme_color,#4db2ec); text-decoration: none; pointer-events: auto;\">Microsoft 365</a>, seperti:</p><ol style=\"padding: 0px; margin-bottom: 26px; margin-left: auto; margin-right: auto; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; text-align: justify; white-space-collapse: collapse;\"><li style=\"line-height: inherit; margin-left: 21px; margin-bottom: 10px; font-size: 15px !important;\">Word: Pembaruan ini memudahkan pengguna untuk merujuk data dari web atau aplikasi lain, termasuk informasi dari email dan rapat. Ada juga pengalaman baru dengan “on-canvas start” yang menempatkan Copilot di pusat aktivitas menulis. Fitur ini dijadwalkan hadir pada akhir September 2024.</li><li style=\"line-height: inherit; margin-left: 21px; margin-bottom: 10px; font-size: 15px !important;\">Excel: Salah satu pembaruan terbesar di Excel adalah integrasi dengan bahasa pemrograman Python, memungkinkan pengguna melakukan analisis tingkat lanjut menggunakan bahasa alami. Selain itu, Excel kini dapat menangani data yang tidak diformat dalam tabel, serta mendukung lebih banyak formula dan pemformatan bersyarat. Saat ini, dukungan Python tersedia dalam pratinjau publik.</li><li style=\"line-height: inherit; margin-left: 21px; margin-bottom: 10px; font-size: 15px !important;\">PowerPoint: Fitur baru bernama Narrative Builder memungkinkan pengguna membuat presentasi dari prompt. Pengguna dapat menyesuaikan garis besar presentasi dan menyelaraskannya dengan branding perusahaan yang telah disetujui.</li><li style=\"line-height: inherit; margin-left: 21px; margin-bottom: 10px; font-size: 15px !important;\">Teams: Dengan pembaruan ini, Copilot di Teams kini dapat “berpikir” melalui transkrip rapat dan chat, memungkinkan pengguna menanyakan informasi yang mungkin terlewat selama rapat berlangsung.</li><li style=\"line-height: inherit; margin-left: 21px; margin-bottom: 10px; font-size: 15px !important;\">Outlook: Fitur baru yang diberi nama Prioritize my inbox menggunakan AI untuk menyusun ulang email berdasarkan prioritas, seperti merespons email dari orang-orang penting atau dalam thread yang sedang berlangsung. Fitur ini akan dirilis pada akhir 2024.</li><li style=\"line-height: inherit; margin-left: 21px; margin-bottom: 0px; font-size: 15px !important;\">OneDrive: Copilot kini dapat “berpikir” melalui file dan menemukan informasi yang relevan di dalamnya, seperti fungsi pencarian berbasis AI yang canggih untuk OneDrive.</li></ol><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Selain peningkatan di aplikasi Office, Microsoft juga memperkenalkan Copilot agents dan agent builder melalui Copilot Studio. Fitur ini lebih ditujukan untuk organisasi besar, di mana agen-agen Copilot dapat dirancang untuk menyelesaikan pekerjaan secara otomatis. Microsoft menyatakan bahwa kemampuan agen ini bervariasi, mulai dari agen sederhana yang merespons prompt hingga agen yang sepenuhnya otonom, menggantikan tugas-tugas berulang.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Meskipun fitur ini menarik, kemungkinan besar pengguna umum tidak akan banyak berinteraksi dengan agen-agen Copilot dalam waktu dekat. Namun, bagi pengembang dan organisasi besar, agen AI ini berpotensi menjadi game-changer dalam meningkatkan efisiensi operasional.</p><p style=\"margin-right: auto; margin-bottom: 26px; margin-left: auto; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 18px; overflow-wrap: break-word; text-align: justify; color: rgb(34, 34, 34); white-space-collapse: collapse; line-height: 1.4 !important;\">Microsoft terus mendorong batasan teknologi AI di ekosistem Office mereka, dan pembaruan Wave 2 ini menunjukkan bahwa perusahaan ini serius dalam menghadirkan pengalaman kerja yang lebih cerdas dan kolaboratif melalui integrasi teknologi AI yang lebih mendalam. Fitur-fitur baru ini akan memperkuat posisi Microsoft dalam persaingan di pasar teknologi AI dan produktivitas.</p>',
        '1726843818.jpg',
        '2024-09-20 06:50:18',
        '2024-09-20 06:50:18'
    ),
    (
        10,
        'blog',
        'Pengaruh Perkembangan Teknologi Terhadap Cara Orang-orang Berinteraksi',
        '<p style=\"text-align: justify; padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">Staf Ahli Bidang Sosial, Ekonomi, dan Budaya, Kementerian Komunikasi dan Informatika (Kominfo), Wijaya Kusumawardhana, memaparkan bahwa kontribusi AI pada PDB global menyentuh USD 13 triliun. Sedangkan untuk kawasan Asia Tenggara bisa mencapai USD 1 triliun, di mana USD 366 miliar ada di Indonesia.</p><p style=\"text-align: justify; padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">“Apalagi negara kita ini memiliki generasi muda yang luar biasa banyak, yakni 105 juta warga muda,” ujar Wijaya di acara Selular Business Forum, Jakarta, Senin (9/9/2024).</p><p style=\"text-align: justify; padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">Pada kesempatan yang sama, Deputy EVP Digital Technology and Platform Business Telkom, Ari Kurniawan, menuturkan bahwa tren kapitalisasi pasar global generatif AI ini menarik tingkat modal yang signifikan di semua segmen, dari USD 44 miliar pada 2020 menjadi USD 16.300 miliar pada 2023. Namun, di Indonesia sendiri, penerapan AI masih tertinggal bahkan jika dibandingkan dengan negara tetangga, di mana Indonesia berada di posisi keempat dengan overall index 61.03 di bawah Singapura (81,97), Malaysia (68,71), dan Thailand (63,03). Untuk mengejar ketertinggalan itu, Ari menyebut harus ada strategi nasional untuk penerapan AI di Indonesia.</p><p style=\"text-align: justify; padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">“Tentu strategi ini harus ada sasarannya, seperti berinvestasi dalam penelitian dan pengembangan kecerdasan buatan, menumbuhkan ekosistem digital untuk kecerdasan buatan, menciptakan lingkungan kebijakan yang memungkinkan kecerdasan buatan, membangun kapasitas sumber daya manusia dan mempersiapkan diri menghadapi pasar tenaga kerja, transformasi hingga kerjasama internasional untuk kecerdasan buatan yang dapat dipercaya,” tutur Ari. Dalam hal ini juga, Ari menambahkan, tidak hanya sekedar sasaran strategi yang harus diperhatikan, tetapi juga harus ada aturan atau regulasi yang mengatur penggunaan AI di Indonesia.</p><p style=\"text-align: justify; padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">“Jadi, harus ada aturan terkait investasi, kompetisi, hingga keberlangsungan bisnis AI. Aturan ini juga untuk mengukur dampak positif dan menghindari dampak negatif dari pemanfaatan AI,” kata Ari.</p><p style=\"text-align: justify; padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">Mengenai regulasi AI, Wijaya merespon bahwa saat ini Kementerian Kominfo telah mengeluarkan Surat Edaran Menteri Kominfo Nomor 9 Tahun 2023 tentang Etika Kecerdasan Artifisial.</p><p style=\"text-align: justify; padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">“Sebagai panduan pengembangan AI yang merupakan turunan dari UU ITE dan UU PDP,” pungkas Wijaya.</p>',
        '1727685681.jpg',
        '2024-09-30 08:41:21',
        '2024-09-30 00:41:21'
    ),
    (
        11,
        'event',
        'Anniversary Himasar ke 13 di Malino',
        '<p style=\"margin: 12px 0px 0px; white-space-collapse: collapse; text-align: justify; padding: 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; background-color: rgb(247, 247, 247);\">Malino, 23 Juni 2024 - HIMASAR (Himpunan Mahasiswa Makassar) merayakan Milad ke-12 dengan penuh semangat dan antusiasme. Acara yang berlangsung di Malino mulai 21 -23 juni 2024, ini dihadiri oleh puluhan anggota dan alumni HIMASAR.</p><p style=\"margin: 12px 0px 0px; white-space-collapse: collapse; text-align: justify; padding: 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; background-color: rgb(247, 247, 247);\">Perayaan Milad ke-13 ini menjadi momen penting bagi HIMASAR untuk merefleksikan perjalanan organisasi selama 13 tahun terakhir. Ketua HIMASAR, Renaldo Hamdani, dalam sambutannya menyampaikan rasa syukur dan terima kasih kepada seluruh anggota dan pihak yang telah mendukung HIMASAR selama ini. “Kami sangat bangga dengan pencapaian yang telah diraih HIMASAR. Semoga ke depan, HIMASAR dapat terus berkontribusi positif bagi masyarakat dan bangsa,” ujarnya.</p><p style=\"margin: 12px 0px 0px; white-space-collapse: collapse; text-align: justify; padding: 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; background-color: rgb(247, 247, 247);\">Acara ini dimeriahkan dengan berbagai kegiatan menarik ada juga pertunjukan seni dan budaya yang menampilkan bakat-bakat dari anggota HIMASAR.</p><p style=\"margin: 12px 0px 0px; white-space-collapse: collapse; text-align: justify; padding: 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; background-color: rgb(247, 247, 247);\">Dengan suksesnya perayaan Milad ke-13 ini, HIMASAR berharap dapat terus tumbuh dan berkembang menjadi organisasi yang lebih solid dan berdaya saing tinggi. “Kami berkomitmen untuk terus mengadakan kegiatan-kegiatan yang bermanfaat dan inspiratif bagi seluruh anggota dan masyarakat,” tambah Renaldo Hamdani</p>',
        '1726857192.jpg',
        '2024-10-03 06:57:35',
        '2024-10-02 22:57:35'
    ),
    (
        12,
        'event',
        'Pelantikan dan Upgrading Kepengurusan HIMASAR Periode 2023/2024',
        '<p style=\"text-align: justify; padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">28 September 2023 - Himpunan Mahasiswa Makassar (HIMASAR) telah melaksanakan pelantikan dan upgrading kepengurusan baru untuk periode 2023/2024. Acara ini berlangsung di Kampus Universitas Dipa Makassar dengan dihadiri oleh para mahasiswa, dosen, dan tamu undangan lainnya.</p><p style=\"text-align: justify; padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">Pelantikan ini diawali dengan sambutan dari Ketua HIMASAR periode sebelumnya, yang menyampaikan apresiasi dan harapan kepada pengurus baru. “Kami berharap kepengurusan baru ini dapat membawa HIMASAR ke arah yang lebih baik dan terus berinovasi dalam berbagai kegiatan,” ujar Ketua HIMASAR.</p><p style=\"text-align: justify; padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">Setelah prosesi pelantikan, acara dilanjutkan dengan sesi upgrading yang bertujuan untuk meningkatkan kapasitas dan kapabilitas para pengurus baru. Materi upgrading mencakup berbagai aspek penting seperti kepemimpinan, manajemen organisasi, dan pengembangan karakter. “Upgrading ini sangat penting untuk memastikan bahwa setiap pengurus memiliki pemahaman yang mendalam tentang peran dan tanggung jawabnya,” kata salah satu pemateri.</p><p style=\"text-align: justify; padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">Wakil Rektor Bidang Kemahasiswaan, yang turut hadir dalam acara tersebut, memberikan motivasi kepada para pengurus baru. “Kalian adalah harapan masa depan. Manfaatkan kesempatan ini untuk belajar dan berkembang, serta berkontribusi positif bagi kampus dan masyarakat,” ujarnya.</p><p style=\"text-align: justify; padding: 0px; margin: 12px 0px 0px; word-break: break-word; font-size: 16px; line-height: var(--cib-type-body2-line-height); font-variation-settings: var(--cib-type-body2-font-variation-settings); color: rgb(17, 17, 17); font-family: -apple-system, Roboto, SegoeUI, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;Microsoft YaHei&quot;, &quot;Meiryo UI&quot;, Meiryo, &quot;Arial Unicode MS&quot;, sans-serif; white-space-collapse: collapse; background-color: rgb(247, 247, 247);\">Dengan pelantikan dan upgrading ini, diharapkan HIMASAR dapat terus berperan aktif dalam mengembangkan potensi mahasiswa dan memberikan kontribusi nyata bagi kemajuan universitas.</p>',
        '1726857612.jpg',
        '2023-10-04 10:40:12',
        '2024-09-20 10:46:56'
    );

INSERT INTO
    `berita` (
        `id`,
        `kategori`,
        `judul`,
        `berita`,
        `gambar`,
        `created_at`,
        `updated_at`
    )
VALUES (
        13,
        'blog',
        'Cara Menggunakan Localtunnel untuk Akses Proyek Publik Gratis',
        '<h3>Langkah 1: Instalasi Node.js</h3><p>Localtunnel memerlukan <strong>Node.js</strong> untuk dijalankan. Jika Anda belum menginstal Node.js, berikut cara melakukannya:</p><h4>Untuk Linux/Mac:</h4><ol><li>Buka terminal.</li><li>Instal Node.js menggunakan <strong>nvm</strong> (Node Version Manager) atau <strong>apt</strong>:<ul><li>Instal via NVM (rekomendasi):<pre class=\"!overflow-visible\"><div class=\"dark bg-gray-950 contain-inline-size rounded-md border-[0.5px] border-token-border-medium relative\"><div class=\"flex items-center text-token-text-secondary bg-token-main-surface-secondary px-4 py-2 text-xs font-sans justify-between rounded-t-md h-9\">bash</div><div class=\"sticky top-9 md:top-[5.75rem]\"><div class=\"absolute bottom-0 right-2 flex h-9 items-center\"><div class=\"flex items-center rounded bg-token-main-surface-secondary px-2 font-sans text-xs text-token-text-secondary\"><span class=\"\" data-state=\"closed\"><button class=\"flex gap-1 items-center py-1\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-sm\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z\" fill=\"currentColor\"></path></svg>Copy code</button></span></div></div></div><div class=\"overflow-y-auto p-4\" dir=\"ltr\"><code class=\"!whitespace-pre hljs language-bash\">curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.1/install.sh | bash\r\n<span class=\"hljs-built_in\">source</span> ~/.bashrc\r\nnvm install node\r\n</code></div></div></pre></li><li>Instal via apt (untuk Ubuntu/Debian):<pre class=\"!overflow-visible\"><div class=\"dark bg-gray-950 contain-inline-size rounded-md border-[0.5px] border-token-border-medium relative\"><div class=\"flex items-center text-token-text-secondary bg-token-main-surface-secondary px-4 py-2 text-xs font-sans justify-between rounded-t-md h-9\">bash</div><div class=\"sticky top-9 md:top-[5.75rem]\"><div class=\"absolute bottom-0 right-2 flex h-9 items-center\"><div class=\"flex items-center rounded bg-token-main-surface-secondary px-2 font-sans text-xs text-token-text-secondary\"><span class=\"\" data-state=\"closed\"><button class=\"flex gap-1 items-center py-1\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-sm\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z\" fill=\"currentColor\"></path></svg>Copy code</button></span></div></div></div><div class=\"overflow-y-auto p-4\" dir=\"ltr\"><code class=\"!whitespace-pre hljs language-bash\">sudo apt update\r\nsudo apt install nodejs npm\r\n</code></div></div></pre></li></ul></li></ol><h4>Untuk Windows:</h4><ol><li><strong>Download Node.js</strong> dari <a rel=\"noopener\" target=\"_new\">nodejs.org</a>.</li><li>Ikuti petunjuk instalasi seperti biasa.</li></ol><p>Setelah instalasi, Anda dapat memeriksa apakah Node.js dan npm (Node Package Manager) sudah terinstal dengan menjalankan perintah berikut di terminal/cmd:</p><pre class=\"!overflow-visible\"><div class=\"dark bg-gray-950 contain-inline-size rounded-md border-[0.5px] border-token-border-medium relative\"><div class=\"flex items-center text-token-text-secondary bg-token-main-surface-secondary px-4 py-2 text-xs font-sans justify-between rounded-t-md h-9\">bash</div><div class=\"sticky top-9 md:top-[5.75rem]\"><div class=\"absolute bottom-0 right-2 flex h-9 items-center\"><div class=\"flex items-center rounded bg-token-main-surface-secondary px-2 font-sans text-xs text-token-text-secondary\"><span class=\"\" data-state=\"closed\"><button class=\"flex gap-1 items-center py-1\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-sm\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z\" fill=\"currentColor\"></path></svg>Copy code</button></span></div></div></div><div class=\"overflow-y-auto p-4\" dir=\"ltr\"><code class=\"!whitespace-pre hljs language-bash\">node -v\r\nnpm -v\r\n</code></div></div></pre><h3>Langkah 2: Instal Localtunnel</h3><p>Sekarang, Anda bisa menginstal Localtunnel menggunakan <strong>npm</strong> (terinstal otomatis bersama Node.js).</p><ol><li>Buka terminal atau command prompt.</li><li>Jalankan perintah berikut untuk menginstal Localtunnel secara global:<pre class=\"!overflow-visible\"><div class=\"dark bg-gray-950 contain-inline-size rounded-md border-[0.5px] border-token-border-medium relative\"><div class=\"flex items-center text-token-text-secondary bg-token-main-surface-secondary px-4 py-2 text-xs font-sans justify-between rounded-t-md h-9\">bash</div><div class=\"sticky top-9 md:top-[5.75rem]\"><div class=\"absolute bottom-0 right-2 flex h-9 items-center\"><div class=\"flex items-center rounded bg-token-main-surface-secondary px-2 font-sans text-xs text-token-text-secondary\"><span class=\"\" data-state=\"closed\"><button class=\"flex gap-1 items-center py-1\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-sm\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z\" fill=\"currentColor\"></path></svg>Copy code</button></span></div></div></div><div class=\"overflow-y-auto p-4\" dir=\"ltr\"><code class=\"!whitespace-pre hljs language-bash\">npm install -g localtunnel\r\n</code></div></div></pre></li></ol><h3>Langkah 3: Jalankan Laravel Secara Lokal</h3><ol><li>Di terminal, navigasikan ke direktori proyek Laravel Anda:<pre class=\"!overflow-visible\"><div class=\"dark bg-gray-950 contain-inline-size rounded-md border-[0.5px] border-token-border-medium relative\"><div class=\"flex items-center text-token-text-secondary bg-token-main-surface-secondary px-4 py-2 text-xs font-sans justify-between rounded-t-md h-9\">bash</div><div class=\"sticky top-9 md:top-[5.75rem]\"><div class=\"absolute bottom-0 right-2 flex h-9 items-center\"><div class=\"flex items-center rounded bg-token-main-surface-secondary px-2 font-sans text-xs text-token-text-secondary\"><span class=\"\" data-state=\"closed\"><button class=\"flex gap-1 items-center py-1\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-sm\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z\" fill=\"currentColor\"></path></svg>Copy code</button></span></div></div></div><div class=\"overflow-y-auto p-4\" dir=\"ltr\"><code class=\"!whitespace-pre hljs language-bash\"><span class=\"hljs-built_in\">cd</span> /path/to/proyek-laravel\r\n</code></div></div></pre></li><li>Jalankan aplikasi Laravel dengan menggunakan perintah:<pre class=\"!overflow-visible\"><div class=\"dark bg-gray-950 contain-inline-size rounded-md border-[0.5px] border-token-border-medium relative\"><div class=\"flex items-center text-token-text-secondary bg-token-main-surface-secondary px-4 py-2 text-xs font-sans justify-between rounded-t-md h-9\">bash</div><div class=\"sticky top-9 md:top-[5.75rem]\"><div class=\"absolute bottom-0 right-2 flex h-9 items-center\"><div class=\"flex items-center rounded bg-token-main-surface-secondary px-2 font-sans text-xs text-token-text-secondary\"><span class=\"\" data-state=\"closed\"><button class=\"flex gap-1 items-center py-1\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-sm\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z\" fill=\"currentColor\"></path></svg>Copy code</button></span></div></div></div><div class=\"overflow-y-auto p-4\" dir=\"ltr\"><code class=\"!whitespace-pre hljs language-bash\">php artisan serve\r\n</code></div></div></pre>Aplikasi Laravel Anda sekarang berjalan di <code>localhost:8000</code> secara default.</li></ol><h3>Langkah 4: Jalankan Localtunnel</h3><p>Sekarang, Anda bisa menjalankan Localtunnel untuk membuat URL publik yang mengarahkan ke aplikasi Laravel Anda yang berjalan di <code>localhost:8000</code>.</p><ol><li><p>Jalankan perintah Localtunnel:</p><pre class=\"!overflow-visible\"><div class=\"dark bg-gray-950 contain-inline-size rounded-md border-[0.5px] border-token-border-medium relative\"><div class=\"flex items-center text-token-text-secondary bg-token-main-surface-secondary px-4 py-2 text-xs font-sans justify-between rounded-t-md h-9\">bash</div><div class=\"sticky top-9 md:top-[5.75rem]\"><div class=\"absolute bottom-0 right-2 flex h-9 items-center\"><div class=\"flex items-center rounded bg-token-main-surface-secondary px-2 font-sans text-xs text-token-text-secondary\"><span class=\"\" data-state=\"closed\"><button class=\"flex gap-1 items-center py-1\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-sm\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z\" fill=\"currentColor\"></path></svg>Copy code</button></span></div></div></div><div class=\"overflow-y-auto p-4\" dir=\"ltr\"><code class=\"!whitespace-pre hljs language-bash\">lt --port 8000\r\n</code></div></div></pre></li><li><p>Setelah perintah di atas dijalankan, Anda akan mendapatkan URL publik, misalnya:</p><pre class=\"!overflow-visible\"><div class=\"dark bg-gray-950 contain-inline-size rounded-md border-[0.5px] border-token-border-medium relative\"><div class=\"flex items-center text-token-text-secondary bg-token-main-surface-secondary px-4 py-2 text-xs font-sans justify-between rounded-t-md h-9\"></div><div class=\"sticky top-9 md:top-[5.75rem]\"><div class=\"absolute bottom-0 right-2 flex h-9 items-center\"><div class=\"flex items-center rounded bg-token-main-surface-secondary px-2 font-sans text-xs text-token-text-secondary\"><span class=\"\" data-state=\"closed\"><button class=\"flex gap-1 items-center py-1\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-sm\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z\" fill=\"currentColor\"></path></svg>Copy code</button></span></div></div></div><div class=\"overflow-y-auto p-4\" dir=\"ltr\"><code class=\"!whitespace-pre hljs\">your-url-name.loca.lt\r\n</code></div></div></pre></li></ol><p>URL ini dapat diakses dari mana saja di internet. Setiap orang yang mengakses URL ini akan diarahkan ke aplikasi Laravel yang berjalan di komputer lokal Anda.</p><h3>Langkah 5: Akses Aplikasi Laravel Publik</h3><p>Bagikan URL yang dihasilkan Localtunnel (misalnya <code>your-url-name.loca.lt</code>) ke siapa saja yang perlu mengakses proyek Laravel Anda. Mereka akan dapat mengakses aplikasi Anda di browser melalui URL tersebut.</p><h3>Opsi Tambahan: Menentukan Subdomain</h3><p>Jika Anda ingin menentukan nama subdomain, Anda bisa menggunakan opsi berikut saat menjalankan Localtunnel:</p><pre class=\"!overflow-visible\"><div class=\"dark bg-gray-950 contain-inline-size rounded-md border-[0.5px] border-token-border-medium relative\"><div class=\"flex items-center text-token-text-secondary bg-token-main-surface-secondary px-4 py-2 text-xs font-sans justify-between rounded-t-md h-9\">bash</div><div class=\"sticky top-9 md:top-[5.75rem]\"><div class=\"absolute bottom-0 right-2 flex h-9 items-center\"><div class=\"flex items-center rounded bg-token-main-surface-secondary px-2 font-sans text-xs text-token-text-secondary\"><span class=\"\" data-state=\"closed\"><button class=\"flex gap-1 items-center py-1\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-sm\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z\" fill=\"currentColor\"></path></svg>Copy code</button></span></div></div></div><div class=\"overflow-y-auto p-4\" dir=\"ltr\"><code class=\"!whitespace-pre hljs language-bash\">lt --port 8000 --subdomain namasubdomain\r\n</code></div></div></pre><p>Misalnya:</p><pre class=\"!overflow-visible\"><div class=\"dark bg-gray-950 contain-inline-size rounded-md border-[0.5px] border-token-border-medium relative\"><div class=\"flex items-center text-token-text-secondary bg-token-main-surface-secondary px-4 py-2 text-xs font-sans justify-between rounded-t-md h-9\">bash</div><div class=\"sticky top-9 md:top-[5.75rem]\"><div class=\"absolute bottom-0 right-2 flex h-9 items-center\"><div class=\"flex items-center rounded bg-token-main-surface-secondary px-2 font-sans text-xs text-token-text-secondary\"><span class=\"\" data-state=\"closed\"><button class=\"flex gap-1 items-center py-1\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-sm\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z\" fill=\"currentColor\"></path></svg>Copy code</button></span></div></div></div><div class=\"overflow-y-auto p-4\" dir=\"ltr\"><code class=\"!whitespace-pre hljs language-bash\">lt --port 8000 --subdomain proyeklaravel\r\n</code></div></div></pre><p>Ini akan menghasilkan URL seperti <code>proyeklaravel.loca.lt</code>.</p><h3>Langkah 6: Hentikan Localtunnel</h3><p>Jika Anda ingin menghentikan Localtunnel, cukup tekan <code>CTRL + C</code> di terminal tempat Localtunnel berjalan.</p><h3>Kelebihan Localtunnel:</h3><ul><li><strong>Gratis dan Unlimited</strong>: Tidak ada batasan data atau batasan waktu.</li><li><strong>Simple dan Mudah</strong>: Sangat mudah digunakan hanya dengan beberapa perintah sederhana.</li></ul><h3>Catatan:</h3><ul><li>Localtunnel hanya memberikan URL sementara yang akan berubah setiap kali Anda menjalankannya, kecuali Anda menentukan subdomain.</li><li>Jika Anda ingin membuat aplikasi Laravel Anda online secara permanen, solusi hosting akan lebih tepat.</li></ul>',
        '1727148813.png',
        '2024-10-03 07:06:36',
        '2024-10-02 23:06:36'
    ),
    (
        15,
        'event',
        'IT TALKS WEBINAR : Trend Teknologi Web Saat Ini',
        '<p data-sourcepos=\"7:1-7:32\"><strong>Makassar, 05 November 2023</strong> – Himpunan Mahasiswa Makassar (HIMASAR) sukses menggelar webinar online dengan tema \"Tren Teknologi Web Saat Ini\". Acara yang dihadiri oleh ratusan peserta dari berbagai jurusan di Universitas Dipa Makassar ini berhasil memberikan pengetahuan terbaru mengenai perkembangan teknologi web terkini.</p><p data-sourcepos=\"9:1-9:70\">Webinar yang dibawakan oleh Rady Surya A, seorang Engineer di eFishery, memberikan wawasan mendalam mengenai berbagai inovasi dan tren terbaru di dunia pengembangan web. Peserta antusias mengikuti sesi tanya jawab dan diskusi yang berlangsung meriah.</p><p data-sourcepos=\"11:1-11:230\">\"Kami sangat senang dengan antusiasme peserta dalam webinar ini. Harapan kami, ilmu yang didapatkan dapat bermanfaat bagi peserta dalam mengembangkan karir di bidang teknologi,\" ujar Reynaldo Hamdani, Ketua Umum HIMASAR 2023-2024.</p><p data-sourcepos=\"13:1-13:217\">Selain mendapatkan pengetahuan baru, peserta webinar juga berkesempatan mendapatkan e-sertifikat sebagai bukti partisipasi. Sebagai tambahan, panitia juga menyediakan doorprize menarik untuk menambah semangat peserta.</p><p data-sourcepos=\"17:1-17:254\">Suksesnya webinar ini membuktikan bahwa HIMASAR aktif dalam memberikan kontribusi positif bagi mahasiswa. Kegiatan seperti ini diharapkan dapat terus diselenggarakan untuk meningkatkan kualitas sumber daya manusia di bidang teknologi.</p>',
        '1727331137.png',
        '2023-11-04 21:24:17',
        '2023-11-05 13:24:17'
    );

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
    `key` varchar(255) NOT NULL,
    `value` mediumtext NOT NULL,
    `expiration` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO
    `cache` (`key`, `value`, `expiration`)
VALUES (
        '5c785c036466adea360111aa28563bfd556b5fba',
        'i:1;',
        1728311341
    ),
    (
        '5c785c036466adea360111aa28563bfd556b5fba:timer',
        'i:1728311341;',
        1728311341
    );

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
    `id` int(10) UNSIGNED NOT NULL,
    `migration` varchar(255) NOT NULL,
    `batch` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO
    `migrations` (`id`, `migration`, `batch`)
VALUES (
        4,
        '2024_09_03_133718_himasar',
        1
    ),
    (
        6,
        '0001_01_01_000000_create_users_table',
        2
    ),
    (
        7,
        '0001_01_01_000001_create_cache_table',
        2
    ),
    (
        8,
        '0001_01_01_000002_create_jobs_table',
        2
    ),
    (
        9,
        '2024_09_09_071355_himasar',
        2
    ),
    (
        10,
        '2024_10_01_063611_add_slug_to_berita_table',
        3
    );

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
    `id` int(11) NOT NULL,
    `devisi` varchar(50) DEFAULT NULL,
    `kegiatan` varchar(255) DEFAULT NULL,
    `tgl` date DEFAULT NULL,
    `status` varchar(20) DEFAULT NULL,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `proker`
--

INSERT INTO
    `proker` (
        `id`,
        `devisi`,
        `kegiatan`,
        `tgl`,
        `status`,
        `created_at`,
        `updated_at`
    )
VALUES (
        1,
        'Pembelajaran',
        'web himasar',
        '2024-09-03',
        'Selesai',
        '2024-09-15 12:16:08',
        '2024-09-15 18:46:30'
    ),
    (
        2,
        'Pembelajaran',
        'Webinar',
        '2024-01-17',
        'Selesai',
        '2024-09-15 05:29:45',
        '2024-09-15 18:48:36'
    ),
    (
        3,
        'Pembelajaran',
        'Pembelajaran setiap sekali seminggu',
        '2024-09-16',
        'Selesai',
        '2024-09-15 18:48:08',
        '2024-09-15 18:48:08'
    ),
    (
        4,
        'Pengkaderan',
        'Latihan Dasar Kepemimpinan I',
        '2024-09-16',
        'Selesai',
        '2024-09-15 18:49:47',
        '2024-09-15 18:49:47'
    ),
    (
        5,
        'Pengkaderan',
        'Latihan Dasar Kepemimpinan I I',
        '2024-10-01',
        'Comming Soon',
        '2024-09-15 18:50:29',
        '2024-09-15 19:11:40'
    ),
    (
        6,
        'Humas',
        'Pelatihan Daerah (PELATDA)',
        '2024-09-16',
        'Selesai',
        '2024-09-15 18:52:20',
        '2024-09-15 18:52:20'
    );

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
    `id` varchar(255) NOT NULL,
    `user_id` bigint(20) UNSIGNED DEFAULT NULL,
    `ip_address` varchar(45) DEFAULT NULL,
    `user_agent` text DEFAULT NULL,
    `payload` longtext NOT NULL,
    `last_activity` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO
    `sessions` (
        `id`,
        `user_id`,
        `ip_address`,
        `user_agent`,
        `payload`,
        `last_activity`
    )
VALUES (
        '0YYnyr7h8SF4uPGgSZbKKLyPtoi9QL5qQViXCZmK',
        NULL,
        '172.71.182.6',
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.3',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoib09IUk16elZHY3ZBSVZqTjhBOVRQVXNaSWdwTFBXSTEwajlhYTdIZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730053483
    ),
    (
        '1DkmM6zZaRRXkUPt95bRAovt3ydyE4QByJDEUANA',
        NULL,
        '108.162.242.37',
        'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQkpQY2ZSZ1hJZkF1SzNEYlludG0wOE96bnlBRVIySUVsR0NMRlhvNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vaGltYXNhci5jbG91ZC9ldmVudC1kZXRhaWxzLzQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
        1730017707
    ),
    (
        '2HHLYsmnGQMgc8ie43YIh2Pkilr2wKmIKq3YcgCo',
        NULL,
        '172.71.158.40',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoibjFkdkhoSWdtOUJVRlBkenpvdmMzUk1wdXd6dXJvZUxOekVwRGQxWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmhpbWFzYXIuY2xvdWQvYmxvZ3MvMTMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
        1730086172
    ),
    (
        '4WgRjvuVqK37cRpOMhWaid7S2OrNHuYYMBqDe1i6',
        NULL,
        '141.101.98.13',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWTdrTVdQRGhvUGZqRTZMMlV4Wk5pVXRxbXpFOHZ2RE1rbWM0SEZ4aCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vd3d3LmhpbWFzYXIuY2xvdWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
        1730012944
    ),
    (
        '4yQ2k6dW6kJ8bYQ2b8hteoBRWgzJa0nkCyj13hLb',
        NULL,
        '172.71.183.66',
        'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaGF3bEVmTXhsNnBYeExVOHVXc1pjU3R4S08zbkh0S2NCMTNIRDdQRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vaGltYXNhci5jbG91ZC9nYWxsZXJ5P3BhZ2U9MiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1729968398
    ),
    (
        '6rlNfcLTJNiJzRiv1zc9XNxE9LMPNiVLWhFJAxdC',
        NULL,
        '162.158.167.94',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTWpTakk2N05UTlF4ckVzVGFBZmNoVEZUZzZOZGhoOGQ3VXFLVjRqZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vaGltYXNhci5jbG91ZC9nYWxsZXJ5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',
        1730075009
    ),
    (
        '7i2vhNv94VMqi6VH8KEpUUzmlz1I53QMDX37xUgV',
        NULL,
        '172.68.225.19',
        'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ2tlNzdMcUJOYzNDMG05eEdadXJ4dHU3VUxZR1N5bjQ3VjI1SlNLTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730058491
    ),
    (
        'AelAzq7MsJYbybLS4CVvWmcb0f2bef2PHlxXOav7',
        NULL,
        '172.71.124.27',
        'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Mobile Safari/537.36',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWtCWEg5NkVDNXpaNGptbWQ5N1VkZUt3UVRqQTByQjFuVnhXSkFKZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vaGltYXNhci5jbG91ZC9ldmVudC1kZXRhaWxzLzExIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',
        1729973955
    ),
    (
        'AlkzTgkd5ZPv7qGLFXAp7OrlD6nD9co3JG9fpPuM',
        NULL,
        '162.158.42.110',
        'Mozilla/5.0 (compatible; DotBot/1.2; +https://opensiteexplorer.org/dotbot; help@moz.com)',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSU1VbmtBaHNFUjM2NVY4NUdicWp5OENwZVNkcTZPaUhQTG5mNEw3QyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730100506
    ),
    (
        'bFndUFgJcrJh2k7Wiq0YtJjdvKozZNiz8jr7h5OA',
        NULL,
        '141.101.76.17',
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNFlCejVTTndJME1ZTWdjTEY1SXBWeTh2R2hrVFZ1VWg1UFA4YVVKRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vaGltYXNhci5jbG91ZC9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',
        1730073515
    ),
    (
        'bSOo4J6ZORrluiZ9jzKoONtzAPeSTCFoAX0TQn2k',
        NULL,
        '162.158.162.232',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFFWUnJrTlgzZVk5VDUwNHNUZVNQbDBBcko2cnpkUXl0ZVdaWENWNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vaGltYXNhci5jbG91ZC9ldmVudC1kZXRhaWxzLzUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
        1729988087
    ),
    (
        'ct8pBUrhZJssMEMyXoVdH8osMLtwjtI8OhcGF60x',
        NULL,
        '172.70.143.35',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoia2g5UEs1ZjE0SkFkeEpZdW5pZVNsY293TTQwaTdqeTNwb2E0c2R1QiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vd3d3LmhpbWFzYXIuY2xvdWQvYWJvdXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
        1730085879
    ),
    (
        'dwzGcHsr6QPn2JhDDdYIBjIxWMP8VNofeywmkp7n',
        NULL,
        '172.69.23.166',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWkpNU3FWeWNRV2ZhWmx0MkZoaEcyd3NOMjY5ZlVWQUdKdUVuRU5tbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730052612
    ),
    (
        'FettkhLZeJBW3UXrlvM6aRQzwpx7bkDs9bJz6XR0',
        NULL,
        '172.70.147.68',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoicERvZjJ4VHpjZTlqNzRaOHcyZHRjTFBvZ2prTHF3Vlh4d0FPZnEwOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vd3d3LmhpbWFzYXIuY2xvdWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
        1729998838
    ),
    (
        'fmcE7NYcBfIc423RWoMd1Ylit0DsAiZ0h5aDmZYu',
        NULL,
        '162.158.138.209',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUlIS3RuRno3dmFHTWlKZktITGRqUGtZY0FpaTJtMFhsZVBaSXBJeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHBzOi8vaGltYXNhci5jbG91ZC9ldmVudHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
        1730053802
    ),
    (
        'FnX4rngEBWZV4pGsgCqRPf9FMT1XPqE4CB8UP6R9',
        NULL,
        '172.69.64.203',
        'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT1FzdjZiNktwSnlHSk1PcHJYRWVkamZNOHBKTG52YVAzc1dpVzJoYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730040984
    ),
    (
        'HDGUo6T2CB7xO8BVngc7rj2wpAc116mis4VLHMpY',
        NULL,
        '172.71.155.61',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMHN5VGRrRGw1WWxKSlhVcldwTjFFVTNWdGpwenl0c1gxNmNJM1FCeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vd3d3LmhpbWFzYXIuY2xvdWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
        1730041861
    ),
    (
        'Hl7gTNSt9JMUqftchHMYKW7jt9LdFC5U6nAjVOBX',
        NULL,
        '172.70.211.206',
        'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjE4d0EyWHVoSVIybzlnQ0NDWWNmak5NeFNmMUNuSDU4anpEaTBHbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730055714
    ),
    (
        'i5zjLufR56oLlnsin8Jdb3QcCLegTQ0zPwRMjiuA',
        NULL,
        '108.162.226.185',
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQkx1TVJnM1laTm9CNllWZHNqN0w5Q3o4T3h3YVU5em9ORG5zcWdOSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vaGltYXNhci5jbG91ZC9zdHJ1Y3R1cmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
        1729967485
    ),
    (
        'ia26CzMicLqVtVneo2z8BKqI2Gt2nguAOJNlrFiO',
        NULL,
        '172.71.158.46',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoieEJEdmpLSnNISVlUYWZ3T0VHYTUzbWY3UW9kNTNVN1p3OFh0a0pweSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1729973598
    ),
    (
        'ia8kwnXHGOJfQ744Y5jj0Viltd98xoQ5IL0OVHGE',
        NULL,
        '172.69.194.120',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiREo5Qmh2Qk5vb1NXb01MR1ltU2F1NjhYMVkyY0psTm1WQ2d3ekhxSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730083358
    ),
    (
        'IwaeliiMVtgt1ion1sVc84HGWneRIRJV4MCy9MBL',
        NULL,
        '172.69.114.29',
        '',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoidFpSQzRRS3pMaTVKMHVkR2tCUnBvUWlmNko5d0FNN0NQYjBwTGxQVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1729998304
    ),
    (
        'JtlkhqDZN9Uv9hB1TMdNv5s7wP4d74HfLjuQCSJM',
        NULL,
        '172.70.34.3',
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUzJtaW1KVVRTdXJNQzhuRGZqZ3NCM3ZSdHRwNWNmUGx2RzJkc3Z6WCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730051997
    ),
    (
        'KcxV6AgHRZpTkHEsmsy38vc6LmBmEcvmAoptQEeo',
        NULL,
        '141.101.84.139',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiemNwMjNiUkZQdUhHSHpCTERHWmJZamRJSUY1SXNId09rRFJWS0JqSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1729987786
    ),
    (
        'KG961Jm4fKSXUIVasN0PUPPqTz5cWveMvJbJWwu3',
        NULL,
        '162.158.106.196',
        'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/26.0 Chrome/122.0.0.0 Mobile Safari/537.36',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoidlZCdG95M2dsejROb1NZS3lkSVRTVm1sNHBIQjFueU5SYXFpTWxkOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730077905
    ),
    (
        'kogxvRFSSxPxf0gcdmowM2SYzQN4viiJIVDoU8Lt',
        NULL,
        '172.68.242.121',
        'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoidGJVVEp6bG5ZZHVKbzExOWJDWWRtdzlnNHAyc1JWY1hGTDA2UFR5dyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730077900
    ),
    (
        'l4CpkcpnlfIfRjK4sUB7yLZ2mXYCxUY2GXKnRjqx',
        NULL,
        '172.69.134.189',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoidUhXckkwRHZMS1Q2MXRVUzl3Mm1vTXZ0VDkwY3hGa04zMW1PVVg5WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vd3d3LmhpbWFzYXIuY2xvdWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
        1730081944
    ),
    (
        'LgWsCbTCTi70TY4WWLC8qbwRP1iH5afplbwqhDyQ',
        NULL,
        '172.71.154.192',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTlh1Q00ybUtQNnBiNWtaZnlhZVhkUnd3VVM0VXBVUkRZazViNmM0YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vd3d3LmhpbWFzYXIuY2xvdWQvZXZlbnQtZGV0YWlscy8xMiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1729999118
    ),
    (
        'lq2cZDxHPMhimeP1PMhajD95ADORuOWx5DkvDaRe',
        NULL,
        '172.69.134.4',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWnpjbUFhNks2cWc4NEJ5bFFrWUJOenVyOU1nYVBlV1hHSTR5WWNvQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd3d3LmhpbWFzYXIuY2xvdWQvY29udGFjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730042178
    ),
    (
        'nkJkw6wsKfl9QtyAiBOo0iUgtcggyxerQSR1D3Tz',
        NULL,
        '172.71.131.116',
        'Mozilla/5.0 (Linux; Android 10; Redmi Note 7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36 OPR/59.1.2926.54067',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoicmhFU1hmR1RzeU16VTJyM2FvUGlSWldUeHdxaDc1Qk1wY21mWHg4cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730006818
    ),
    (
        'nwtprhserU5qPbe8FwXZpOLgR7qQTxQZKx2m2JHI',
        NULL,
        '172.71.82.13',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM3FaV0JuSklYb1Q4THJsT1pZdlF3VXAwdkNvc0pnaXl5d2NDUTdnTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vd3d3LmhpbWFzYXIuY2xvdWQvYmxvZ3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
        1730085880
    ),
    (
        'p6xCfAsEm3beOHXukRq7hC72WfDjXnlWlR5U4a1M',
        NULL,
        '172.71.148.180',
        'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ0l6bEFwWW5icFdvbDEwbVZ6RjBXVTExUmxYYkJZUlBnT3VlUE53TSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730015269
    ),
    (
        'PiUikfmhWec9NmMBxkmDOPFuXdaOUU2UJMhAKTFn',
        NULL,
        '172.71.127.149',
        '',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoicEtFZ05rU3ZvQnZvZkZNdllOelNSTUFPeUFpdUloRzJKVGc2RmF3UCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730016779
    ),
    (
        'RjvIgxeWl6IJxeAwuZOmK610F1ZCOOjbqTOHqkMk',
        NULL,
        '172.68.245.113',
        'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTWI3TlVlNjJKZncxeDRCZjhNbUkxVGc0cnlaTXo4ekpvT0NkbklDaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730046771
    ),
    (
        'rTp9gvas8r7hw4ODQyJy4gV5T8u56DQWytkTx5Cv',
        NULL,
        '162.158.95.69',
        'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 OPR/94.0.0.0',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY0l1Q3Y1MEZSOVI0MWFJMGllcUNUQXdxTWhpSnNtM0N0S2pOZFAwQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730015274
    ),
    (
        'S2K7ecZXObn6e09tTyx4hjkBOb4oTOq2PPu5DXeh',
        NULL,
        '172.70.91.148',
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoia3QyM3Fkck5TYnd2NW04NlpzbElpYUhRMmZSeFdUWG41Nml2TEhsaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730045047
    ),
    (
        'sehHadmz39AqexiEBwxRVNC7o2Gmji5ZiS7nkADV',
        NULL,
        '162.158.166.196',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVE4SmxpUlllU3VUU2JpNzVlZG5TeThYdFgwOVRKb3FVQWRaYjRoOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730075010
    ),
    (
        'SuOm13pfrPO7Ou9tMGOm2CCAQ0QAqgM6Zx57xMHg',
        NULL,
        '162.158.163.154',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNHZHSUc3djBEOTNsenNDNUlFYVlkU2NIV1p0QlhLSWZPaG9NWFRGbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730074436
    ),
    (
        'tl55c4epTq5dys7z3x6Gr6IexEyOI1w1jP28CjQZ',
        NULL,
        '172.71.182.6',
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.3',
        'YToyOntzOjY6Il90b2tlbiI7czo0MDoiQ2N3SmZSWWlrSW4xWDV0S2J5V21JWDY0VXl5Y0lSR3E5cThoYklFOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',
        1730053481
    ),
    (
        'tqWlqncTKdXhSIUFY3iUg5SDTbi824FAwX5dLBA0',
        NULL,
        '172.71.81.98',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUJIbmN5WmExUjR6SExCNVp5RFVJa1VBUk02emFBSUczUldqQjBudyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vd3d3LmhpbWFzYXIuY2xvdWQvZXZlbnRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',
        1730086179
    ),
    (
        'TVuflbvIGHRwQ2cvY7Nq9LqOTZoHhtZB4ADt9IAs',
        NULL,
        '172.69.134.11',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoicng0TTBPb1FjQzdueHpzODlxZzU3VWdyODBmY25Ma2VoREI3R2lQRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730045369
    ),
    (
        'uyRPfU6pFV11EDm2ijGbMSKkKuYTIop0ueuvW3fM',
        NULL,
        '172.68.174.147',
        'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY0pnSDdUMzhRTjY5cE0yVXZEc0RDN0IwdDEwSEdKeDN3cUV2MkFSbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730019253
    ),
    (
        'w0oURxDjFsiGxvFYOo3dU3hT2V2e6Ueq7Ri9jF2n',
        NULL,
        '172.70.92.189',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUlkejI3YWtQS0FkOE4xNEp2dURldEpSbEthRzE3UnA1MExjdzZLQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vd3d3LmhpbWFzYXIuY2xvdWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
        1730085515
    ),
    (
        'wg99q3BLrGdeI8n5c9e7gauqNjeAFV8vI8nX0HIP',
        NULL,
        '172.69.23.95',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQzNyVFpVWHJYQ0ZGZFZRcmpKdlhmWXRTVkRHWVJHd3hLcUNVNUlFMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vd3d3LmhpbWFzYXIuY2xvdWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
        1730012879
    ),
    (
        'wm4L0fJE0M5s2cMuQ61sIKKgYAxv28IYlWdZcKGH',
        NULL,
        '172.70.86.169',
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoieFRhbFNGbWY0ejA4N2E0QWlGNTZtS2lSU2dHWXFiZFhxd2E3Z2NiRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730052575
    ),
    (
        'Wtkh3O1p2dNWBDtEwIv6d9gTOGttCcmtkRP8jqQA',
        NULL,
        '172.68.242.121',
        'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.5 Safari/605.1.15',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRGRXWk1WaU5qVmlsTGtRNEJtWllOSXlBdVFFOFlobmJVc2cyeFdRNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730078054
    ),
    (
        'xB6jNG2prBb8zrh7zn8XGIOZTOFVnSgeN8E0HPlr',
        NULL,
        '172.70.175.134',
        'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoibnBLd2h0cTYxZjg2V3FZZWdtdnozU3F3S0lrT1NQSkxBUFYzSXNJWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1729979595
    ),
    (
        'xkeA8tbmuIbGhbJ1tFOAKE1fd04aG3CFVKBXcqRx',
        NULL,
        '172.70.188.76',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaVZYQlMwVXpweGozd0dzNmNWTm5FMkxRTmJrYlRkTjB2Tk5Ia2E1WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vaGltYXNhci5jbG91ZC9ldmVudC1kZXRhaWxzLzE1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',
        1730075600
    ),
    (
        'XNanlhLDn9x78TQcsmiSAGXSHgAjVFYREbGA5MMs',
        NULL,
        '141.101.84.33',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoidEdsN2xBRklneE4xMHJ2RktQN0ZDVUw2NXdrWjE4YVdIQlhIbmVEVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vaGltYXNhci5jbG91ZC9zdHJ1Y3R1cmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
        1730053953
    ),
    (
        'yefv1Ie6FfiigZlI4GPyPCqAl0t3iPGLr0F9T3Zj',
        NULL,
        '162.158.167.54',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaUpNR0VPdW9EZHBhdmVGb0lRamkxQkJJNmJldnhYeWZGaWtmaUNMUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGltYXNhci5jbG91ZC9hYm91dCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730053161
    ),
    (
        'YL9pvVyzy3Fwn8jUlJrGkDNyVtZOsnusPPy2dqKP',
        NULL,
        '172.69.22.143',
        'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ0V2TWxOSlowYjJBWXBkSXUzUDlOeDNjSU5TRnNMS3phek1qSjRwOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vd3d3LmhpbWFzYXIuY2xvdWQvc3RydWN0dXJlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',
        1730086173
    ),
    (
        'yTLsezdpLhs4Rn4S2vYBliqkzFzotjsLG6GGB4Ec',
        NULL,
        '162.158.222.214',
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36',
        'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQVV0Wm5lWVhBckh4NEF4U1pESllHOUJzTGd2MlB0d2Z6S3ZKcGR5dSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vaGltYXNhci5jbG91ZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
        1730071026
    );

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(255) NOT NULL,
    `no_tlp` varchar(20) DEFAULT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `roles` varchar(15) DEFAULT NULL,
    `alamat` text DEFAULT NULL,
    `about` text DEFAULT NULL,
    `visi` text DEFAULT NULL,
    `misi` text DEFAULT NULL,
    `tujuan` text DEFAULT NULL,
    `sejarah` longtext NOT NULL,
    `email_verified_at` timestamp NULL DEFAULT NULL,
    `remember_token` varchar(100) DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO
    `users` (
        `id`,
        `name`,
        `no_tlp`,
        `email`,
        `password`,
        `roles`,
        `alamat`,
        `about`,
        `visi`,
        `misi`,
        `tujuan`,
        `sejarah`,
        `email_verified_at`,
        `remember_token`,
        `created_at`,
        `updated_at`
    )
VALUES (
        1,
        'HIMASAR',
        '+6281937554563',
        'hms@gmail.com',
        '$2y$12$WcDCFBqpwL4DgcMNWVl0BOgFb.y5iyo8XukOzqiITdkDwXmBOmc5G',
        'superAdmin',
        'Jl. Perintis Kemerdekaan KM.9, Tamalanrea Indah',
        'HIMASAR adalah organisasi kemahasiswaan yang beranggotakan mahasiswa asal Makassar atau yang memiliki minat dan perhatian terhadap perkembangan dan kemajuan daerah Makassar. Didirikan dengan semangat kebersamaan dan solidaritas, HIMASAR bertujuan untuk menciptakan wadah bagi mahasiswa dalam mengembangkan potensi diri, baik di bidang akademik maupun non-akademik.',
        'Menjadi organisasi mahasiswa yang berperan aktif dalam mendukung pengembangan sumber daya mahasiswa.',
        'Membina dan mengembangkan potensi mahasiswa melalui kegiatan akademik, sosial, dan budaya.',
        'Memfasilitasi pengembangan diri mahasiswa melalui berbagai kegiatan yang bermanfaat untuk masa depan.',
        'HIMASAR telah menjadi mitra strategis dalam memperkuat hubungan antar mahasiswa serta mendukung pembangunan daerah melalui berbagai kegiatan positif.',
        NULL,
        NULL,
        NULL,
        '2024-09-25 22:23:39'
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
ADD PRIMARY KEY (`id`),
ADD KEY `email` (`email`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
ADD PRIMARY KEY (`id`),
ADD KEY `judul` (`judul`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache` ADD PRIMARY KEY (`key`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
ADD PRIMARY KEY (`id`),
ADD KEY `sessions_user_id_index` (`user_id`),
ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 61;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 13;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 4;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;