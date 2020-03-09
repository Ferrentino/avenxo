-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 06:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sim_kerjasama`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_app_rf_sessions`
--

CREATE TABLE `tb_app_rf_sessions` (
  `SESSION_ID` varchar(50) NOT NULL,
  `IP_ADDRESS` varchar(30) NOT NULL,
  `USER_AGENT` varchar(200) NOT NULL,
  `LAST_ACTIVITY` int(11) NOT NULL,
  `USER_DATA` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mou_rf_jenislembaga`
--

CREATE TABLE `tb_mou_rf_jenislembaga` (
  `ID_JENIS_LEMBAGA` char(5) NOT NULL,
  `JENIS_LEMBAGA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mou_rf_jenislembaga`
--

INSERT INTO `tb_mou_rf_jenislembaga` (`ID_JENIS_LEMBAGA`, `JENIS_LEMBAGA`) VALUES
('LM1', 'Universitas'),
('LM2', 'Non Universitas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mou_rf_kerjasama`
--

CREATE TABLE `tb_mou_rf_kerjasama` (
  `ID_KERJASAMA` char(5) NOT NULL,
  `ID_LEMBAGA` char(6) NOT NULL,
  `TANGGAL_MULAI_KERJASAMA` date NOT NULL,
  `TANGGAL_SELESAI_KERJASAMA` date NOT NULL,
  `DESKRIPSI_KERJASAMA` varchar(250) NOT NULL,
  `STATUS_KERJASAMA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mou_rf_kota`
--

CREATE TABLE `tb_mou_rf_kota` (
  `ID_KOTA` varchar(7) NOT NULL,
  `ID_PROVINSI` varchar(6) NOT NULL,
  `NAMA_KOTA` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mou_rf_kota`
--

INSERT INTO `tb_mou_rf_kota` (`ID_KOTA`, `ID_PROVINSI`, `NAMA_KOTA`) VALUES
('KT00001', 'PV0001', 'Kabupaten Aceh Barat'),
('KT00002', 'PV0001', 'Kabupaten Aceh Barat Daya'),
('KT00003', 'PV0001', 'Kabupaten Aceh Besar'),
('KT00004', 'PV0001', 'Kabupaten Aceh Jaya'),
('KT00005', 'PV0001', 'Kabupaten Aceh Selatan'),
('KT00006', 'PV0001', 'Kabupaten Aceh Singkil'),
('KT00007', 'PV0001', 'Kabupaten Aceh Tamiang'),
('KT00008', 'PV0001', 'Kabupaten Aceh Tengah'),
('KT00009', 'PV0001', 'Kabupaten Aceh Tenggara'),
('KT00010', 'PV0001', 'Kabupaten Aceh Timur'),
('KT00011', 'PV0001', 'Kabupaten Aceh Utara'),
('KT00012', 'PV0001', 'Kabupaten Bener Meriah'),
('KT00013', 'PV0001', 'Kabupaten Bireuen'),
('KT00014', 'PV0001', 'Kabupaten Gayo Lues'),
('KT00015', 'PV0001', 'Kabupaten Nagan Raya'),
('KT00016', 'PV0001', 'Kabupaten Pidie'),
('KT00017', 'PV0001', 'Kabupaten Pidie Jaya'),
('KT00018', 'PV0001', 'Kabupaten Simeulue'),
('KT00019', 'PV0001', 'Kota Banda Aceh'),
('KT00020', 'PV0001', 'Kota Langsa'),
('KT00021', 'PV0001', 'Kota Lhokseumawe'),
('KT00022', 'PV0001', 'Kota Sabang'),
('KT00023', 'PV0001', 'Kota Subulussalam'),
('KT00024', 'PV0002', 'Kabupaten Lebak'),
('KT00025', 'PV0002', 'Kabupaten Pandeglang'),
('KT00026', 'PV0002', 'Kabupaten Serang'),
('KT00027', 'PV0002', 'Kabupaten Tangerang'),
('KT00028', 'PV0002', 'Kota Cilegon'),
('KT00029', 'PV0002', 'Kota Serang'),
('KT00030', 'PV0002', 'Kota Tangerang'),
('KT00031', 'PV0002', 'Kota Tangerang Selatan'),
('KT00032', 'PV0003', 'Kabupaten Bengkulu Selatan'),
('KT00033', 'PV0003', 'Kabupaten Bengkulu Tengah'),
('KT00034', 'PV0003', 'Kabupaten Bengkulu Utara'),
('KT00035', 'PV0003', 'Kabupaten Kaur'),
('KT00036', 'PV0003', 'Kabupaten Kepahiang'),
('KT00037', 'PV0003', 'Kabupaten Lebong'),
('KT00038', 'PV0003', 'Kabupaten Mukomuko'),
('KT00039', 'PV0003', 'Kabupaten Rejang Lebong'),
('KT00040', 'PV0003', 'Kabupaten Seluma'),
('KT00041', 'PV0003', 'Kota Bengkulu'),
('KT00042', 'PV0004', 'Kabupaten Boalemo'),
('KT00043', 'PV0004', 'Kabupaten Bone Bolango'),
('KT00044', 'PV0004', 'Kabupaten Gorontalo'),
('KT00045', 'PV0004', 'Kabupaten Gorontalo Utara'),
('KT00046', 'PV0004', 'Kabupaten Pohuwato'),
('KT00047', 'PV0004', 'Kota Gorontalo'),
('KT00048', 'PV0005', 'Kabupaten Administrasi Kepulauan Seribu'),
('KT00049', 'PV0005', 'Kota Administrasi Jakarta Barat'),
('KT00050', 'PV0005', 'Kota Administrasi Jakarta Pusat'),
('KT00051', 'PV0005', 'Kota Administrasi Jakarta Selatan'),
('KT00052', 'PV0005', 'Kota Administrasi Jakarta Timur'),
('KT00053', 'PV0005', 'Kota Administrasi Jakarta Utara'),
('KT00054', 'PV0006', 'Kabupaten Batanghari'),
('KT00055', 'PV0006', 'Kabupaten Bungo'),
('KT00056', 'PV0006', 'Kabupaten Kerinci'),
('KT00057', 'PV0006', 'Kabupaten Merangin'),
('KT00058', 'PV0006', 'Kabupaten Muaro Jambi'),
('KT00059', 'PV0006', 'Kabupaten Sarolangun'),
('KT00060', 'PV0006', 'Kabupaten Tanjung Jabung Barat'),
('KT00061', 'PV0006', 'Kabupaten Tanjung Jabung Timur'),
('KT00062', 'PV0006', 'Kabupaten Tebo'),
('KT00063', 'PV0006', 'Kota Jambi'),
('KT00064', 'PV0006', 'Kota Sungaipenuh'),
('KT00065', 'PV0007', 'Kabupaten Bandung'),
('KT00066', 'PV0007', 'Kabupaten Bandung Barat'),
('KT00067', 'PV0007', 'Kabupaten Bekasi'),
('KT00068', 'PV0007', 'Kabupaten Bogor'),
('KT00069', 'PV0007', 'Kabupaten Ciamis'),
('KT00070', 'PV0007', 'Kabupaten Cianjur'),
('KT00071', 'PV0007', 'Kabupaten Cirebon'),
('KT00072', 'PV0007', 'Kabupaten Garut'),
('KT00073', 'PV0007', 'Kabupaten Indramayu'),
('KT00074', 'PV0007', 'Kabupaten Karawang'),
('KT00075', 'PV0007', 'Kabupaten Kuningan'),
('KT00076', 'PV0007', 'Kabupaten Majalengka'),
('KT00077', 'PV0007', 'Kabupaten Pangandaran'),
('KT00078', 'PV0007', 'Kabupaten Purwakarta'),
('KT00079', 'PV0007', 'Kabupaten Subang'),
('KT00080', 'PV0007', 'Kabupaten Sukabumi'),
('KT00081', 'PV0007', 'Kabupaten Sumedang'),
('KT00082', 'PV0007', 'Kabupaten Tasikmalaya'),
('KT00083', 'PV0007', 'Kota Bandung'),
('KT00084', 'PV0007', 'Kota Banjar'),
('KT00085', 'PV0007', 'Kota Bekasi'),
('KT00086', 'PV0007', 'Kota Bogor'),
('KT00087', 'PV0007', 'Kota Cimahi'),
('KT00088', 'PV0007', 'Kota Cirebon'),
('KT00089', 'PV0007', 'Kota Depok'),
('KT00090', 'PV0007', 'Kota Sukabumi'),
('KT00091', 'PV0007', 'Kota Tasikmalaya'),
('KT00092', 'PV0008', 'Kabupaten Banjarnegara'),
('KT00093', 'PV0008', 'Kabupaten Banyumas'),
('KT00094', 'PV0008', 'Kabupaten Batang'),
('KT00095', 'PV0008', 'Kabupaten Blora'),
('KT00096', 'PV0008', 'Kabupaten Boyolali'),
('KT00097', 'PV0008', 'Kabupaten Brebes'),
('KT00098', 'PV0008', 'Kabupaten Cilacap'),
('KT00099', 'PV0008', 'Kabupaten Demak'),
('KT00100', 'PV0008', 'Kabupaten Grobogan'),
('KT00101', 'PV0008', 'Kabupaten Jepara'),
('KT00102', 'PV0008', 'Kabupaten Karanganyar'),
('KT00103', 'PV0008', 'Kabupaten Kebumen'),
('KT00104', 'PV0008', 'Kabupaten Kendal'),
('KT00105', 'PV0008', 'Kabupaten Klaten'),
('KT00106', 'PV0008', 'Kabupaten Kudus'),
('KT00107', 'PV0008', 'Kabupaten Magelang'),
('KT00108', 'PV0008', 'Kabupaten Pati'),
('KT00109', 'PV0008', 'Kabupaten Pekalongan'),
('KT00110', 'PV0008', 'Kabupaten Pemalang'),
('KT00111', 'PV0008', 'Kabupaten Purbalingga'),
('KT00112', 'PV0008', 'Kabupaten Purworejo'),
('KT00113', 'PV0008', 'Kabupaten Rembang'),
('KT00114', 'PV0008', 'Kabupaten Semarang'),
('KT00115', 'PV0008', 'Kabupaten Sragen'),
('KT00116', 'PV0008', 'Kabupaten Sukoharjo'),
('KT00117', 'PV0008', 'Kabupaten Tegal'),
('KT00118', 'PV0008', 'Kabupaten Temanggung'),
('KT00119', 'PV0008', 'Kabupaten Wonogiri'),
('KT00120', 'PV0008', 'Kabupaten Wonosobo'),
('KT00121', 'PV0008', 'Kota Magelang'),
('KT00122', 'PV0008', 'Kota Pekalongan'),
('KT00123', 'PV0008', 'Kota Salatiga'),
('KT00124', 'PV0008', 'Kota Semarang'),
('KT00125', 'PV0008', 'Kota Surakarta'),
('KT00126', 'PV0008', 'Kota Tegal'),
('KT00127', 'PV0009', 'Kabupaten Bangkalan'),
('KT00128', 'PV0009', 'Kabupaten Banyuwangi'),
('KT00129', 'PV0009', 'Kabupaten Blitar'),
('KT00130', 'PV0009', 'Kabupaten Bojonegoro'),
('KT00131', 'PV0009', 'Kabupaten Bondowoso'),
('KT00132', 'PV0009', 'Kabupaten Gresik'),
('KT00133', 'PV0009', 'Kabupaten Jember'),
('KT00134', 'PV0009', 'Kabupaten Jombang'),
('KT00135', 'PV0009', 'Kabupaten Kediri'),
('KT00136', 'PV0009', 'Kabupaten Lamongan'),
('KT00137', 'PV0009', 'Kabupaten Lumajang'),
('KT00138', 'PV0009', 'Kabupaten Madiun'),
('KT00139', 'PV0009', 'Kabupaten Magetan'),
('KT00140', 'PV0009', 'Kabupaten Malang'),
('KT00141', 'PV0009', 'Kabupaten Mojokerto'),
('KT00142', 'PV0009', 'Kabupaten Nganjuk'),
('KT00143', 'PV0009', 'Kabupaten Ngawi'),
('KT00144', 'PV0009', 'Kabupaten Pacitan'),
('KT00145', 'PV0009', 'Kabupaten Pamekasan'),
('KT00146', 'PV0009', 'Kabupaten Pasuruan'),
('KT00147', 'PV0009', 'Kabupaten Ponorogo'),
('KT00148', 'PV0009', 'Kabupaten Probolinggo'),
('KT00149', 'PV0009', 'Kabupaten Sampang'),
('KT00150', 'PV0009', 'Kabupaten Sidoarjo'),
('KT00151', 'PV0009', 'Kabupaten Situbondo'),
('KT00152', 'PV0009', 'Kabupaten Sumenep'),
('KT00153', 'PV0009', 'Kabupaten Trenggalek'),
('KT00154', 'PV0009', 'Kabupaten Tuban'),
('KT00155', 'PV0009', 'Kabupaten Tulungagung'),
('KT00156', 'PV0009', 'Kota Batu'),
('KT00157', 'PV0009', 'Kota Blitar'),
('KT00158', 'PV0009', 'Kota Kediri'),
('KT00159', 'PV0009', 'Kota Madiun'),
('KT00160', 'PV0009', 'Kota Malang'),
('KT00161', 'PV0009', 'Kota Mojokerto'),
('KT00162', 'PV0009', 'Kota Pasuruan'),
('KT00163', 'PV0009', 'Kota Probolinggo'),
('KT00164', 'PV0009', 'Kota Surabaya'),
('KT00165', 'PV0010', 'Kabupaten Bengkayang'),
('KT00166', 'PV0010', 'Kabupaten Kapuas Hulu'),
('KT00167', 'PV0010', 'Kabupaten Kayong Utara'),
('KT00168', 'PV0010', 'Kabupaten Ketapang'),
('KT00169', 'PV0010', 'Kabupaten Kubu Raya'),
('KT00170', 'PV0010', 'Kabupaten Landak'),
('KT00171', 'PV0010', 'Kabupaten Melawi'),
('KT00172', 'PV0010', 'Kabupaten Mempawah'),
('KT00173', 'PV0010', 'Kabupaten Sambas'),
('KT00174', 'PV0010', 'Kabupaten Sanggau'),
('KT00175', 'PV0010', 'Kabupaten Sekadau'),
('KT00176', 'PV0010', 'Kabupaten Sintang'),
('KT00177', 'PV0010', 'Kota Pontianak'),
('KT00178', 'PV0010', 'Kota Singkawang'),
('KT00179', 'PV0011', 'Kabupaten Balangan'),
('KT00180', 'PV0011', 'Kabupaten Banjar'),
('KT00181', 'PV0011', 'Kabupaten Barito Kuala'),
('KT00182', 'PV0011', 'Kabupaten Hulu Sungai Selatan'),
('KT00183', 'PV0011', 'Kabupaten Hulu Sungai Tengah'),
('KT00184', 'PV0011', 'Kabupaten Hulu Sungai Utara'),
('KT00185', 'PV0011', 'Kabupaten Kotabaru'),
('KT00186', 'PV0011', 'Kabupaten Tabalong'),
('KT00187', 'PV0011', 'Kabupaten Tanah Bumbu'),
('KT00188', 'PV0011', 'Kabupaten Tanah Laut'),
('KT00189', 'PV0011', 'Kabupaten Tapin'),
('KT00190', 'PV0011', 'Kota Banjarbaru'),
('KT00191', 'PV0011', 'Kota Banjarmasin'),
('KT00192', 'PV0012', 'Kabupaten Barito Selatan'),
('KT00193', 'PV0012', 'Kabupaten Barito Timur'),
('KT00194', 'PV0012', 'Kabupaten Barito Utara'),
('KT00195', 'PV0012', 'Kabupaten Gunung Mas'),
('KT00196', 'PV0012', 'Kabupaten Kapuas'),
('KT00197', 'PV0012', 'Kabupaten Katingan'),
('KT00198', 'PV0012', 'Kabupaten Kotawaringin Barat'),
('KT00199', 'PV0012', 'Kabupaten Kotawaringin Timur'),
('KT00200', 'PV0012', 'Kabupaten Lamandau'),
('KT00201', 'PV0012', 'Kabupaten Murung Raya'),
('KT00202', 'PV0012', 'Kabupaten Pulang Pisau'),
('KT00203', 'PV0012', 'Kabupaten Sukamara'),
('KT00204', 'PV0012', 'Kabupaten Seruyan'),
('KT00205', 'PV0012', 'Kota Palangka Raya'),
('KT00206', 'PV0013', 'Kabupaten Berau'),
('KT00207', 'PV0013', 'Kabupaten Kutai Barat'),
('KT00208', 'PV0013', 'Kabupaten Kutai Kartanegara'),
('KT00209', 'PV0013', 'Kabupaten Kutai Timur'),
('KT00210', 'PV0013', 'Kabupaten Mahakam Ulu'),
('KT00211', 'PV0013', 'Kabupaten Paser'),
('KT00212', 'PV0013', 'Kabupaten Penajam Paser Utara'),
('KT00213', 'PV0013', 'Kota Balikpapan'),
('KT00214', 'PV0013', 'Kota Bontang'),
('KT00215', 'PV0013', 'Kota Samarinda'),
('KT00216', 'PV0014', 'Kabupaten Bulungan'),
('KT00217', 'PV0014', 'Kabupaten Malinau'),
('KT00218', 'PV0014', 'Kabupaten Nunukan'),
('KT00219', 'PV0014', 'Kabupaten Tana Tidung'),
('KT00220', 'PV0014', 'Kota Tarakan'),
('KT00221', 'PV0015', 'Kabupaten Bangka'),
('KT00222', 'PV0015', 'Kabupaten Bangka Barat'),
('KT00223', 'PV0015', 'Kabupaten Bangka Selatan'),
('KT00224', 'PV0015', 'Kabupaten Bangka Tengah'),
('KT00225', 'PV0015', 'Kabupaten Belitung'),
('KT00226', 'PV0015', 'Kabupaten Belitung Timur'),
('KT00227', 'PV0015', 'Kota Pangkalpinang'),
('KT00228', 'PV0016', 'Kabupaten Bintan'),
('KT00229', 'PV0016', 'Kabupaten Karimun'),
('KT00230', 'PV0016', 'Kabupaten Kepulauan Anambas'),
('KT00231', 'PV0016', 'Kabupaten Lingga'),
('KT00232', 'PV0016', 'Kabupaten Natuna'),
('KT00233', 'PV0016', 'Kota Batam'),
('KT00234', 'PV0016', 'Kota Tanjungpinang'),
('KT00235', 'PV0017', 'Kabupaten Lampung Barat'),
('KT00236', 'PV0017', 'Kabupaten Lampung Selatan'),
('KT00237', 'PV0017', 'Kabupaten Lampung Tengah'),
('KT00238', 'PV0017', 'Kabupaten Lampung Timur'),
('KT00239', 'PV0017', 'Kabupaten Lampung Utara'),
('KT00240', 'PV0017', 'Kabupaten Mesuji'),
('KT00241', 'PV0017', 'Kabupaten Pesawaran'),
('KT00242', 'PV0017', 'Kabupaten Pesisir Barat'),
('KT00243', 'PV0017', 'Kabupaten Pringsewu'),
('KT00244', 'PV0017', 'Kabupaten Tanggamus'),
('KT00245', 'PV0017', 'Kabupaten Tulang Bawang'),
('KT00246', 'PV0017', 'Kabupaten Tulang Bawang Barat'),
('KT00247', 'PV0017', 'Kabupaten Way Kanan'),
('KT00248', 'PV0017', 'Kota Bandar Lampung'),
('KT00249', 'PV0017', 'Kota Metro'),
('KT00250', 'PV0018', 'Kabupaten Buru'),
('KT00251', 'PV0018', 'Kabupaten Buru Selatan'),
('KT00252', 'PV0018', 'Kabupaten Kepulauan Aru'),
('KT00253', 'PV0018', 'Kabupaten Maluku Barat Daya'),
('KT00254', 'PV0018', 'Kabupaten Maluku Tengah'),
('KT00255', 'PV0018', 'Kabupaten Maluku Tenggara'),
('KT00256', 'PV0018', 'Kabupaten Kepulauan Tanimbar'),
('KT00257', 'PV0018', 'Kabupaten Seram Bagian Barat'),
('KT00258', 'PV0018', 'Kabupaten Seram Bagian Timur'),
('KT00259', 'PV0018', 'Kota Ambon'),
('KT00260', 'PV0018', 'Kota Tual'),
('KT00261', 'PV0019', 'Kabupaten Halmahera Barat'),
('KT00262', 'PV0019', 'Kabupaten Halmahera Tengah'),
('KT00263', 'PV0019', 'Kabupaten Halmahera Timur'),
('KT00264', 'PV0019', 'Kabupaten Halmahera Selatan'),
('KT00265', 'PV0019', 'Kabupaten Halmahera Utara'),
('KT00266', 'PV0019', 'Kabupaten Kepulauan Sula'),
('KT00267', 'PV0019', 'Kabupaten Pulau Morotai'),
('KT00268', 'PV0019', 'Kabupaten Pulau Taliabu'),
('KT00269', 'PV0019', 'Kota Ternate'),
('KT00270', 'PV0019', 'Kota Tidore Kepulauan'),
('KT00271', 'PV0020', 'Kabupaten Badung'),
('KT00272', 'PV0020', 'Kabupaten Bangli'),
('KT00273', 'PV0020', 'Kabupaten Buleleng'),
('KT00274', 'PV0020', 'Kabupaten Gianyar'),
('KT00275', 'PV0020', 'Kabupaten Jembrana'),
('KT00276', 'PV0020', 'Kabupaten Karangasem'),
('KT00277', 'PV0020', 'Kabupaten Klungkung'),
('KT00278', 'PV0020', 'Kabupaten Tabanan'),
('KT00279', 'PV0020', 'Kota Denpasar'),
('KT00280', 'PV0021', 'Kabupaten Bima'),
('KT00281', 'PV0021', 'Kabupaten Dompu'),
('KT00282', 'PV0021', 'Kabupaten Lombok Barat'),
('KT00283', 'PV0021', 'Kabupaten Lombok Tengah'),
('KT00284', 'PV0021', 'Kabupaten Lombok Timur'),
('KT00285', 'PV0021', 'Kabupaten Lombok Utara'),
('KT00286', 'PV0021', 'Kabupaten Sumbawa'),
('KT00287', 'PV0021', 'Kabupaten Sumbawa Barat'),
('KT00288', 'PV0021', 'Kota Bima'),
('KT00289', 'PV0021', 'Kota Mataram'),
('KT00290', 'PV0022', 'Kabupaten Alor'),
('KT00291', 'PV0022', 'Kabupaten Belu'),
('KT00292', 'PV0022', 'Kabupaten Ende'),
('KT00293', 'PV0022', 'Kabupaten Flores Timur'),
('KT00294', 'PV0022', 'Kabupaten Kupang'),
('KT00295', 'PV0022', 'Kabupaten Lembata'),
('KT00296', 'PV0022', 'Kabupaten Malaka'),
('KT00297', 'PV0022', 'Kabupaten Manggarai'),
('KT00298', 'PV0022', 'Kabupaten Manggarai Barat'),
('KT00299', 'PV0022', 'Kabupaten Manggarai Timur'),
('KT00300', 'PV0022', 'Kabupaten Nagekeo'),
('KT00301', 'PV0022', 'Kabupaten Ngada'),
('KT00302', 'PV0022', 'Kabupaten Rote Ndao'),
('KT00303', 'PV0022', 'Kabupaten Sabu Raijua'),
('KT00304', 'PV0022', 'Kabupaten Sikka'),
('KT00305', 'PV0022', 'Kabupaten Sumba Barat'),
('KT00306', 'PV0022', 'Kabupaten Sumba Barat Daya'),
('KT00307', 'PV0022', 'Kabupaten Sumba Tengah'),
('KT00308', 'PV0022', 'Kabupaten Sumba Timur'),
('KT00309', 'PV0022', 'Kabupaten Timor Tengah Selatan'),
('KT00310', 'PV0022', 'Kabupaten Timor Tengah Utara'),
('KT00311', 'PV0022', 'Kota Kupang'),
('KT00312', 'PV0023', 'Kabupaten Asmat'),
('KT00313', 'PV0023', 'Kabupaten Biak Numfor'),
('KT00314', 'PV0023', 'Kabupaten Boven Digoel'),
('KT00315', 'PV0023', 'Kabupaten Deiyai'),
('KT00316', 'PV0023', 'Kabupaten Dogiyai'),
('KT00317', 'PV0023', 'Kabupaten Intan Jaya'),
('KT00318', 'PV0023', 'Kabupaten Jayapura'),
('KT00319', 'PV0023', 'Kabupaten Jayawijaya'),
('KT00320', 'PV0023', 'Kabupaten Keerom'),
('KT00321', 'PV0023', 'Kabupaten Kepulauan Yapen'),
('KT00322', 'PV0023', 'Kabupaten Lanny Jaya'),
('KT00323', 'PV0023', 'Kabupaten Mamberamo Raya'),
('KT00324', 'PV0023', 'Kabupaten Mamberamo Tengah'),
('KT00325', 'PV0023', 'Kabupaten Mappi'),
('KT00326', 'PV0023', 'Kabupaten Merauke'),
('KT00327', 'PV0023', 'Kabupaten Mimika'),
('KT00328', 'PV0023', 'Kabupaten Nabire'),
('KT00329', 'PV0023', 'Kabupaten Nduga'),
('KT00330', 'PV0023', 'Kabupaten Paniai'),
('KT00331', 'PV0023', 'Kabupaten Pegunungan Bintang'),
('KT00332', 'PV0023', 'Kabupaten Puncak'),
('KT00333', 'PV0023', 'Kabupaten Puncak Jaya'),
('KT00334', 'PV0023', 'Kabupaten Sarmi'),
('KT00335', 'PV0023', 'Kabupaten Supiori'),
('KT00336', 'PV0023', 'Kabupaten Tolikara'),
('KT00337', 'PV0023', 'Kabupaten Waropen'),
('KT00338', 'PV0023', 'Kabupaten Yahukimo'),
('KT00339', 'PV0023', 'Kabupaten Yalimo'),
('KT00340', 'PV0023', 'Kota Jayapura'),
('KT00341', 'PV0024', 'Kabupaten Fakfak'),
('KT00342', 'PV0024', 'Kabupaten Kaimana'),
('KT00343', 'PV0024', 'Kabupaten Manokwari'),
('KT00344', 'PV0024', 'Kabupaten Manokwari Selatan'),
('KT00345', 'PV0024', 'Kabupaten Maybrat'),
('KT00346', 'PV0024', 'Kabupaten Pegunungan Arfak'),
('KT00347', 'PV0024', 'Kabupaten Raja Ampat'),
('KT00348', 'PV0024', 'Kabupaten Sorong'),
('KT00349', 'PV0024', 'Kabupaten Sorong Selatan'),
('KT00350', 'PV0024', 'Kabupaten Tambrauw'),
('KT00351', 'PV0024', 'Kabupaten Teluk Bintuni'),
('KT00352', 'PV0024', 'Kabupaten Teluk Wondama'),
('KT00353', 'PV0024', 'Kota Sorong'),
('KT00354', 'PV0025', 'Kabupaten Bengkalis'),
('KT00355', 'PV0025', 'Kabupaten Indragiri Hilir'),
('KT00356', 'PV0025', 'Kabupaten Indragiri Hulu'),
('KT00357', 'PV0025', 'Kabupaten Kampar'),
('KT00358', 'PV0025', 'Kabupaten Kepulauan Meranti'),
('KT00359', 'PV0025', 'Kabupaten Kuantan Singingi'),
('KT00360', 'PV0025', 'Kabupaten Pelalawan'),
('KT00361', 'PV0025', 'Kabupaten Rokan Hilir'),
('KT00362', 'PV0025', 'Kabupaten Rokan Hulu'),
('KT00363', 'PV0025', 'Kabupaten Siak'),
('KT00364', 'PV0025', 'Kota Dumai'),
('KT00365', 'PV0025', 'Kota Pekanbaru'),
('KT00366', 'PV0026', 'Kabupaten Majene'),
('KT00367', 'PV0026', 'Kabupaten Mamasa'),
('KT00368', 'PV0026', 'Kabupaten Mamuju'),
('KT00369', 'PV0026', 'Kabupaten Mamuju Tengah'),
('KT00370', 'PV0026', 'Kabupaten Pasangkayu'),
('KT00371', 'PV0026', 'Kabupaten Polewali Mandar'),
('KT00372', 'PV0027', 'Kabupaten Bantaeng'),
('KT00373', 'PV0027', 'Kabupaten Barru'),
('KT00374', 'PV0027', 'Kabupaten Bone'),
('KT00375', 'PV0027', 'Kabupaten Bulukumba'),
('KT00376', 'PV0027', 'Kabupaten Enrekang'),
('KT00377', 'PV0027', 'Kabupaten Gowa'),
('KT00378', 'PV0027', 'Kabupaten Jeneponto'),
('KT00379', 'PV0027', 'Kabupaten Kepulauan Selayar'),
('KT00380', 'PV0027', 'Kabupaten Luwu'),
('KT00381', 'PV0027', 'Kabupaten Luwu Timur'),
('KT00382', 'PV0027', 'Kabupaten Luwu Utara'),
('KT00383', 'PV0027', 'Kabupaten Maros'),
('KT00384', 'PV0027', 'Kabupaten Pangkajene dan Kepulauan'),
('KT00385', 'PV0027', 'Kabupaten Pinrang'),
('KT00386', 'PV0027', 'Kabupaten Sidenreng Rappang'),
('KT00387', 'PV0027', 'Kabupaten Sinjai'),
('KT00388', 'PV0027', 'Kabupaten Soppeng'),
('KT00389', 'PV0027', 'Kabupaten Takalar'),
('KT00390', 'PV0027', 'Kabupaten Tana Toraja'),
('KT00391', 'PV0027', 'Kabupaten Toraja Utara'),
('KT00392', 'PV0027', 'Kabupaten Wajo'),
('KT00393', 'PV0027', 'Kota Makassar'),
('KT00394', 'PV0027', 'Kota Palopo'),
('KT00395', 'PV0027', 'Kota Parepare'),
('KT00396', 'PV0028', 'Kabupaten Banggai'),
('KT00397', 'PV0028', 'Kabupaten Banggai Kepulauan'),
('KT00398', 'PV0028', 'Kabupaten Banggai Laut'),
('KT00399', 'PV0028', 'Kabupaten Buol'),
('KT00400', 'PV0028', 'Kabupaten Donggala'),
('KT00401', 'PV0028', 'Kabupaten Morowali'),
('KT00402', 'PV0028', 'Kabupaten Morowali Utara'),
('KT00403', 'PV0028', 'Kabupaten Parigi Moutong'),
('KT00404', 'PV0028', 'Kabupaten Poso'),
('KT00405', 'PV0028', 'Kabupaten Sigi'),
('KT00406', 'PV0028', 'Kabupaten Tojo Una-Una'),
('KT00407', 'PV0028', 'Kabupaten Tolitoli'),
('KT00408', 'PV0028', 'Kota Palu'),
('KT00409', 'PV0029', 'Kabupaten Bombana'),
('KT00410', 'PV0029', 'Kabupaten Buton'),
('KT00411', 'PV0029', 'Kabupaten Buton Selatan'),
('KT00412', 'PV0029', 'Kabupaten Buton Tengah'),
('KT00413', 'PV0029', 'Kabupaten Buton Utara'),
('KT00414', 'PV0029', 'Kabupaten Kolaka'),
('KT00415', 'PV0029', 'Kabupaten Kolaka Timur'),
('KT00416', 'PV0029', 'Kabupaten Kolaka Utara'),
('KT00417', 'PV0029', 'Kabupaten Konawe'),
('KT00418', 'PV0029', 'Kabupaten Konawe Kepulauan'),
('KT00419', 'PV0029', 'Kabupaten Konawe Selatan'),
('KT00420', 'PV0029', 'Kabupaten Konawe Utara'),
('KT00421', 'PV0029', 'Kabupaten Muna'),
('KT00422', 'PV0029', 'Kabupaten Muna Barat'),
('KT00423', 'PV0029', 'Kabupaten Wakatobi'),
('KT00424', 'PV0029', 'Kota Bau-Bau'),
('KT00425', 'PV0029', 'Kota Kendari'),
('KT00426', 'PV0030', 'Kabupaten Bolaang Mongondow'),
('KT00427', 'PV0030', 'Kabupaten Bolaang Mongondow Selatan'),
('KT00428', 'PV0030', 'Kabupaten Bolaang Mongondow Timur'),
('KT00429', 'PV0030', 'Kabupaten Bolaang Mongondow Utara'),
('KT00430', 'PV0030', 'Kabupaten Kepulauan Sangihe'),
('KT00431', 'PV0030', 'Kabupaten Kepulauan Siau Tagulandang Biaro'),
('KT00432', 'PV0030', 'Kabupaten Kepulauan Talaud'),
('KT00433', 'PV0030', 'Kabupaten Minahasa'),
('KT00434', 'PV0030', 'Kabupaten Minahasa Selatan'),
('KT00435', 'PV0030', 'Kabupaten Minahasa Tenggara'),
('KT00436', 'PV0030', 'Kabupaten Minahasa Utara'),
('KT00437', 'PV0030', 'Kota Bitung'),
('KT00438', 'PV0030', 'Kota Kotamobagu'),
('KT00439', 'PV0030', 'Kota Manado'),
('KT00440', 'PV0030', 'Kota Tomohon'),
('KT00441', 'PV0031', 'Kabupaten Agam'),
('KT00442', 'PV0031', 'Kabupaten Dharmasraya'),
('KT00443', 'PV0031', 'Kabupaten Kepulauan Mentawai'),
('KT00444', 'PV0031', 'Kabupaten Lima Puluh Kota'),
('KT00445', 'PV0031', 'Kabupaten Padang Pariaman'),
('KT00446', 'PV0031', 'Kabupaten Pasaman'),
('KT00447', 'PV0031', 'Kabupaten Pasaman Barat'),
('KT00448', 'PV0031', 'Kabupaten Pesisir Selatan'),
('KT00449', 'PV0031', 'Kabupaten Sijunjung'),
('KT00450', 'PV0031', 'Kabupaten Solok'),
('KT00451', 'PV0031', 'Kabupaten Solok Selatan'),
('KT00452', 'PV0031', 'Kabupaten Tanah Datar'),
('KT00453', 'PV0031', 'Kota Bukittinggi'),
('KT00454', 'PV0031', 'Kota Padang'),
('KT00455', 'PV0031', 'Kota Padangpanjang'),
('KT00456', 'PV0031', 'Kota Pariaman'),
('KT00457', 'PV0031', 'Kota Payakumbuh'),
('KT00458', 'PV0031', 'Kota Sawahlunto'),
('KT00459', 'PV0031', 'Kota Solok'),
('KT00460', 'PV0032', 'Kabupaten Banyuasin'),
('KT00461', 'PV0032', 'Kabupaten Empat Lawang'),
('KT00462', 'PV0032', 'Kabupaten Lahat'),
('KT00463', 'PV0032', 'Kabupaten Muara Enim'),
('KT00464', 'PV0032', 'Kabupaten Musi Banyuasin'),
('KT00465', 'PV0032', 'Kabupaten Musi Rawas'),
('KT00466', 'PV0032', 'Kabupaten Musi Rawas Utara'),
('KT00467', 'PV0032', 'Kabupaten Ogan Ilir'),
('KT00468', 'PV0032', 'Kabupaten Ogan Komering Ilir'),
('KT00469', 'PV0032', 'Kabupaten Ogan Komering Ulu'),
('KT00470', 'PV0032', 'Kabupaten Ogan Komering Ulu Selatan'),
('KT00471', 'PV0032', 'Kabupaten Ogan Komering Ulu Timur'),
('KT00472', 'PV0032', 'Kabupaten Penukal Abab Lematang Ilir'),
('KT00473', 'PV0032', 'Kota Lubuklinggau'),
('KT00474', 'PV0032', 'Kota Pagar Alam'),
('KT00475', 'PV0032', 'Kota Palembang'),
('KT00476', 'PV0032', 'Kota Prabumulih'),
('KT00477', 'PV0033', 'Kabupaten Asahan'),
('KT00478', 'PV0033', 'Kabupaten Batu Bara'),
('KT00479', 'PV0033', 'Kabupaten Dairi'),
('KT00480', 'PV0033', 'Kabupaten Deli Serdang'),
('KT00481', 'PV0033', 'Kabupaten Humbang Hasundutan'),
('KT00482', 'PV0033', 'Kabupaten Karo'),
('KT00483', 'PV0033', 'Kabupaten Labuhanbatu'),
('KT00484', 'PV0033', 'Kabupaten Labuhanbatu Selatan'),
('KT00485', 'PV0033', 'Kabupaten Labuhanbatu Utara'),
('KT00486', 'PV0033', 'Kabupaten Langkat'),
('KT00487', 'PV0033', 'Kabupaten Mandailing Natal'),
('KT00488', 'PV0033', 'Kabupaten Nias'),
('KT00489', 'PV0033', 'Kabupaten Nias Barat'),
('KT00490', 'PV0033', 'Kabupaten Nias Selatan'),
('KT00491', 'PV0033', 'Kabupaten Nias Utara'),
('KT00492', 'PV0033', 'Kabupaten Padang Lawas'),
('KT00493', 'PV0033', 'Kabupaten Padang Lawas Utara'),
('KT00494', 'PV0033', 'Kabupaten Pakpak Bharat'),
('KT00495', 'PV0033', 'Kabupaten Samosir'),
('KT00496', 'PV0033', 'Kabupaten Serdang Bedagai'),
('KT00497', 'PV0033', 'Kabupaten Simalungun'),
('KT00498', 'PV0033', 'Kabupaten Tapanuli Selatan'),
('KT00499', 'PV0033', 'Kabupaten Tapanuli Tengah'),
('KT00500', 'PV0033', 'Kabupaten Tapanuli Utara'),
('KT00501', 'PV0033', 'Kabupaten Toba Samosir'),
('KT00502', 'PV0033', 'Kota Binjai'),
('KT00503', 'PV0033', 'Kota Gunungsitoli'),
('KT00504', 'PV0033', 'Kota Medan'),
('KT00505', 'PV0033', 'Kota Padangsidempuan'),
('KT00506', 'PV0033', 'Kota Pematangsiantar'),
('KT00507', 'PV0033', 'Kota Sibolga'),
('KT00508', 'PV0033', 'Kota Tanjungbalai'),
('KT00509', 'PV0033', 'Kota Tebing Tinggi'),
('KT00510', 'PV0034', 'Kabupaten Bantul'),
('KT00511', 'PV0034', 'Kabupaten Gunungkidul'),
('KT00512', 'PV0034', 'Kabupaten Kulon Progo'),
('KT00513', 'PV0034', 'Kabupaten Sleman'),
('KT00514', 'PV0034', 'Kota Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mou_rf_lembaga`
--

CREATE TABLE `tb_mou_rf_lembaga` (
  `ID_LEMBAGA` char(6) NOT NULL,
  `ID_JENIS_LEMBAGA` char(5) NOT NULL,
  `ID_KOTA` varchar(7) DEFAULT NULL,
  `ID_NEGARA` varchar(5) NOT NULL,
  `ID_PROVINSI` varchar(6) NOT NULL,
  `NAMA_LEMBAGA` varchar(50) NOT NULL,
  `ALAMAT_LEMBAGA` varchar(60) NOT NULL,
  `REGIONAL` varchar(25) NOT NULL,
  `NEGARA` varchar(25) NOT NULL,
  `KODEPOS_LEMBAGA` char(6) NOT NULL,
  `NOTELP_LEMBAGA` varchar(13) DEFAULT NULL,
  `EMAIL_LEMBAGA` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mou_rf_negara`
--

CREATE TABLE `tb_mou_rf_negara` (
  `ID_NEGARA` varchar(5) NOT NULL,
  `NAMA_NEGARA` varchar(100) NOT NULL,
  `KODE_TELPON_NEGARA` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mou_rf_negara`
--

INSERT INTO `tb_mou_rf_negara` (`ID_NEGARA`, `NAMA_NEGARA`, `KODE_TELPON_NEGARA`) VALUES
('NG001', 'Amerika', '+1'),
('NG002', 'Kanada', '+1'),
('NG003', 'Anguilla', '+1'),
('NG004', 'Antigua dan Barbuda', '+1'),
('NG005', 'Samoa Amerika', '+1'),
('NG006', 'Barbados', '+1'),
('NG007', 'Bahama', '+1'),
('NG008', 'Virgin Inggris', '+1'),
('NG009', 'Virgin Amerika Serikat', '+1'),
('NG010', 'Cayman', '+1'),
('NG011', 'Bermuda', '+1'),
('NG012', 'Grenada', '+1'),
('NG013', 'Turks dan Caicos', '+1'),
('NG014', 'Montserrat', '+1'),
('NG015', 'Mariana Utara', '+1'),
('NG016', 'Teritori Guam', '+1'),
('NG017', 'Saint Lucia', '+1'),
('NG018', 'Dominika', '+1'),
('NG019', 'Saint Vincent dan Grenadine', '+1'),
('NG020', 'Puerto Riko', '+1'),
('NG021', 'Dominika', '+1'),
('NG022', 'Trinidad dan Tobago', '+1'),
('NG023', 'Saint Kitts dan Nevis', '+1'),
('NG024', 'Jamaika', '+1'),
('NG025', 'Rusia', '+7'),
('NG026', 'Kazakhstan', '+7'),
('NG027', 'Mesir', '+20'),
('NG028', 'Afrika Selatan', '+27'),
('NG029', 'Yunani', '+30'),
('NG030', 'Belanda', '+31'),
('NG031', 'Belgia', '+32'),
('NG032', 'Prancis', '+33'),
('NG033', 'Spanyol', '+34'),
('NG034', 'Hungaria', '+36'),
('NG035', 'Italia', '+39'),
('NG036', 'Rumania', '+40'),
('NG037', 'Swiss', '+41'),
('NG038', 'Austria', '+43'),
('NG039', 'Britania Raya', '+44'),
('NG040', 'Denmark', '+45'),
('NG041', 'Swedia', '+46'),
('NG042', 'Norwegia', '+47'),
('NG043', 'Polandia', '+48'),
('NG044', 'Jerman', '+49'),
('NG045', 'Peru', '+51'),
('NG046', 'Meksiko', '+52'),
('NG047', 'Kuba', '+53'),
('NG048', 'Argentina', '+54'),
('NG049', 'Brasil', '+55'),
('NG050', 'Chili', '+56'),
('NG051', 'Kolombia', '+57'),
('NG053', 'Venezuela', '+58'),
('NG055', 'Malaysia', '+60'),
('NG056', 'Australia', '+61'),
('NG057', 'Indonesia', '+62'),
('NG058', 'Filipina', '+63'),
('NG059', 'Selandia Baru', '+64'),
('NG060', 'Singapura', '+65'),
('NG061', 'Thailand', '+66'),
('NG062', 'Jepang', '+81'),
('NG063', 'Korea Selatan', '+82'),
('NG064', 'Vietnam', '+84'),
('NG065', 'Tiongok', '+86'),
('NG066', 'Turki', '+90'),
('NG067', 'India', '+91'),
('NG068', 'Pakistan', '+92'),
('NG069', 'Afganistan', '+93'),
('NG070', 'Sri Lanka', '+94'),
('NG071', 'Myanmar', '+95'),
('NG072', 'Iran', '+98'),
('NG073', 'Maroko', '+212'),
('NG074', 'Aljazair', '+213'),
('NG075', 'Tunisia', '+216'),
('NG076', 'Libya', '+218'),
('NG077', 'Gambia', '+220'),
('NG078', 'Senegal', '+221'),
('NG079', 'Mauritania', '+222'),
('NG080', 'Mali', '+223'),
('NG081', 'Guinea', '+224'),
('NG082', 'Pantai Gading', '+225'),
('NG083', 'Burkina Faso', '+226'),
('NG084', 'Niger', '+227'),
('NG085', 'Togo', '+228'),
('NG086', 'Benin', '+229'),
('NG087', 'Mauritius', '+230'),
('NG088', 'Liberia', '+231'),
('NG089', 'Siera Leone', '+232'),
('NG090', 'Ghana', '+233'),
('NG091', 'Nigeria', '+234'),
('NG092', 'Chad', '+235'),
('NG093', 'Afrika Tengah', '+236'),
('NG094', 'Kamerun', '+237'),
('NG095', 'Tanjung Verde', '+238'),
('NG096', 'Sao Tome dan Principe', '+239'),
('NG097', 'Guinea Khatulistiwa', '+240'),
('NG098', 'Gabon', '+241'),
('NG099', 'Kongo', '+242'),
('NG100', 'Demokratik Kongo', '+243'),
('NG101', 'Angola', '+244'),
('NG102', 'Guinea-Bissau', '+245'),
('NG103', 'Samudra Hindia Britania', '+246'),
('NG104', 'Ascension', '+247'),
('NG105', 'Seychelles', '+248'),
('NG106', 'Sudan', '+249'),
('NG107', 'Rwanda', '+250'),
('NG108', 'Ethiopia', '+251'),
('NG109', 'Somalia', '+252'),
('NG110', 'Djibouti', '+253'),
('NG111', 'Kenya', '+254'),
('NG112', 'Tanzania', '+255'),
('NG113', 'Uganda', '+256'),
('NG114', 'Burundi', '+257'),
('NG115', 'Mozambik', '+258'),
('NG116', 'Zambia', '+260'),
('NG117', 'Madagaskar', '+261'),
('NG118', 'Reunion', '+262'),
('NG119', 'Zimbabwe', '+263'),
('NG120', 'Namibia', '+264'),
('NG121', 'Malawi', '+265'),
('NG122', 'Lesotho', '+266'),
('NG123', 'Botswana', '+267'),
('NG124', 'Swaziland', '+268'),
('NG125', 'Komoro', '+269'),
('NG126', 'Saint Helena', '+290'),
('NG127', 'Eritrea', '+291'),
('NG128', 'Aruba', '+297'),
('NG129', 'Faroe', '+298'),
('NG130', 'Greenland', '+299'),
('NG131', 'Gibraltar', '+350'),
('NG132', 'Portugal', '+351'),
('NG133', 'Luksemburg', '+352'),
('NG134', 'Irlandia', '+353'),
('NG135', 'Islandia', '+354'),
('NG136', 'Albania', '+355'),
('NG137', 'Malta', '+356'),
('NG138', 'Siprus', '+357'),
('NG139', 'Finlandia', '+358'),
('NG140', 'Bulgaria', '+359'),
('NG141', 'Lituania', '+370'),
('NG142', 'Latvia', '+371'),
('NG143', 'Estonia', '+372'),
('NG144', 'Moldova', '+373'),
('NG145', 'Armenia', '+374'),
('NG146', 'Belarusia', '+375'),
('NG147', 'Andorra', '+376'),
('NG148', 'Monako', '+377'),
('NG149', 'San Marino', '+378'),
('NG150', 'Vatikan', '+379'),
('NG151', 'Ukraina', '+380'),
('NG152', 'Serbia', '+381'),
('NG153', 'Montenegro', '+382'),
('NG154', 'Kroasia', '+385'),
('NG155', 'Slovenia', '+386'),
('NG156', 'Bosnia dan Herzegovina', '+387'),
('NG157', 'Makedonia Utara', '+389'),
('NG158', 'Ceko', '+420'),
('NG159', 'Slovakia', '+421'),
('NG160', 'Liechtenstein', '+423'),
('NG161', 'Falkland', '+500'),
('NG162', 'Belize', '+501'),
('NG163', 'Guatemala', '+502'),
('NG164', 'El Salvador', '+503'),
('NG165', 'Honduras', '+504'),
('NG166', 'Nikaragua', '+505'),
('NG167', 'Kosta Rika', '+506'),
('NG168', 'Panama', '+507'),
('NG169', 'Saint Pierre dan Miquelon', '+508'),
('NG170', 'Haiti', '+509'),
('NG171', 'Guadeloupe', '+590'),
('NG172', 'Bolivia', '+591'),
('NG173', 'Guyana Britania', '+592'),
('NG174', 'Ekuador', '+593'),
('NG175', 'Guiana Prancis', '+594'),
('NG176', 'Paraguay', '+595'),
('NG177', 'Martinik', '+596'),
('NG178', 'Suriname', '+597'),
('NG179', 'Uruguay', '+598'),
('NG180', 'Antillen Belanda', '+599'),
('NG181', 'Timor Timur', '+670'),
('NG182', 'Antartika', '+672'),
('NG183', 'Brunei Darussalam', '+673'),
('NG184', 'Nauru', '+674'),
('NG185', 'Papua Nugini', '+675'),
('NG186', 'Tonga', '+676'),
('NG187', 'Solomon', '+677'),
('NG188', 'Vanuatu', '+678'),
('NG189', 'Fiji', '+679'),
('NG190', 'Palau', '+680'),
('NG191', 'Wallis dan Futuna', '+681'),
('NG192', 'Cook', '+682'),
('NG193', 'Niue', '+683'),
('NG194', 'Samoa', '+685'),
('NG195', 'Kiribati', '+686'),
('NG196', 'Kaledonia Baru', '+687'),
('NG197', 'Tuvalu', '+688'),
('NG198', 'Polinesia Prancis', '+689'),
('NG199', 'Tokelau', '+690'),
('NG200', 'Mikronesia', '+691'),
('NG201', 'Marshall', '+692'),
('NG202', 'Korea Utara', '+850'),
('NG203', 'Hong Kong', '+852'),
('NG204', 'Makau', '+853'),
('NG205', 'Kamboja', '+855'),
('NG206', 'Laos', '+856'),
('NG207', 'Bangladesh', '+880'),
('NG208', 'Taiwan', '+886'),
('NG209', 'Maladewa', '+960'),
('NG210', 'Lebanon', '+961'),
('NG211', 'Yordania', '+962'),
('NG212', 'Suriah', '+963'),
('NG213', 'Irak', '+964'),
('NG214', 'Kuwait', '+965'),
('NG215', 'Arab Saudi', '+966'),
('NG216', 'Yaman', '+967'),
('NG217', 'Oman', '+968'),
('NG218', 'Palestina', '+970'),
('NG219', 'Uni Emirat Arab', '+971'),
('NG220', 'Israel', '+972'),
('NG221', 'Bahrain', '+973'),
('NG222', 'Qatar', '+974'),
('NG223', 'Bhutan', '+975'),
('NG224', 'Mongolia', '+976'),
('NG225', 'Nepal', '+977'),
('NG226', 'Tajikistan', '+992'),
('NG227', 'Turkmenistan', '+993'),
('NG228', 'Azerbaijan', '+994'),
('NG229', 'Nagorno-Karabakh', '+994'),
('NG230', 'Georgia', '+995'),
('NG231', 'Kirgizstan', '+996'),
('NG232', 'Uzbekistan', '+998');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mou_rf_perwakilanlembaga`
--

CREATE TABLE `tb_mou_rf_perwakilanlembaga` (
  `ID_PERWAKILAN_LEMBAGA` char(5) NOT NULL,
  `ID_NEGARA` varchar(5) NOT NULL,
  `ID_PROVINSI` varchar(6) NOT NULL,
  `ID_LEMBAGA` char(6) NOT NULL,
  `ID_KOTA` varchar(7) NOT NULL,
  `NAMA_PERWAKILAN_LEMBAGA` varchar(50) NOT NULL,
  `JENIS_KELAMIN_PERWAKILAN_LEMBAGA` char(9) NOT NULL,
  `JABATAN` varchar(50) DEFAULT NULL,
  `ALAMAT_PERWAKILAN_LEMBAGA` varchar(60) NOT NULL,
  `KODEPOS_PERWAKILAN_LEMBAGA` char(6) NOT NULL,
  `NOTELP_PERWAKILAN_LEMBAGA` varchar(13) DEFAULT NULL,
  `EMAIL_PERWAKILAN_LEMBAGA` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mou_rf_provinsi`
--

CREATE TABLE `tb_mou_rf_provinsi` (
  `ID_PROVINSI` varchar(6) NOT NULL,
  `ID_NEGARA` varchar(5) NOT NULL,
  `NAMA_PROVINSI` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mou_rf_provinsi`
--

INSERT INTO `tb_mou_rf_provinsi` (`ID_PROVINSI`, `ID_NEGARA`, `NAMA_PROVINSI`) VALUES
('PV0001', 'NG057', 'Aceh'),
('PV0002', 'NG057', 'Banten'),
('PV0003', 'NG057', 'Bengkulu'),
('PV0004', 'NG057', 'Gorontalo'),
('PV0005', 'NG057', 'Jakarta'),
('PV0006', 'NG057', 'Jambi'),
('PV0007', 'NG057', 'Jawa Barat'),
('PV0008', 'NG057', 'Jawa Tengah'),
('PV0009', 'NG057', 'Jawa Timur'),
('PV0010', 'NG057', 'Kalimantan Barat'),
('PV0011', 'NG057', 'Kalimantan Selatan'),
('PV0012', 'NG057', 'Kalimantan Tengah'),
('PV0013', 'NG057', 'Kalimantan Timur'),
('PV0014', 'NG057', 'Kalimantan Utara'),
('PV0015', 'NG057', 'Kepulauan Bangka Belitung'),
('PV0016', 'NG057', 'Kepulauan Riau'),
('PV0017', 'NG057', 'Lampung'),
('PV0018', 'NG057', 'Maluku'),
('PV0019', 'NG057', 'Maluku Utara'),
('PV0020', 'NG057', 'Bali'),
('PV0021', 'NG057', 'Nusa Tenggara Barat'),
('PV0022', 'NG057', 'Nusa Tenggara Timur'),
('PV0023', 'NG057', 'Papua'),
('PV0024', 'NG057', 'Papua Barat'),
('PV0025', 'NG057', 'Riau'),
('PV0026', 'NG057', 'Sulawesi Barat'),
('PV0027', 'NG057', 'Sulawesi Selatan'),
('PV0028', 'NG057', 'Sulawesi Tengah'),
('PV0029', 'NG057', 'Sulawesi Tenggara'),
('PV0030', 'NG057', 'Sulawesi Utara'),
('PV0031', 'NG057', 'Sumatra Barat'),
('PV0032', 'NG057', 'Sumatra Selatan'),
('PV0033', 'NG057', 'Sumatra Utara'),
('PV0034', 'NG057', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mou_tr_berkas`
--

CREATE TABLE `tb_mou_tr_berkas` (
  `ID_BERKAS` char(5) NOT NULL,
  `ID_KERJASAMA` char(5) DEFAULT NULL,
  `NAMA_BERKAS` varchar(50) NOT NULL,
  `JENIS_BERKAS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_app_rf_sessions`
--
ALTER TABLE `tb_app_rf_sessions`
  ADD PRIMARY KEY (`SESSION_ID`);

--
-- Indexes for table `tb_mou_rf_jenislembaga`
--
ALTER TABLE `tb_mou_rf_jenislembaga`
  ADD PRIMARY KEY (`ID_JENIS_LEMBAGA`);

--
-- Indexes for table `tb_mou_rf_kerjasama`
--
ALTER TABLE `tb_mou_rf_kerjasama`
  ADD PRIMARY KEY (`ID_KERJASAMA`),
  ADD KEY `FK_RELATIONSHIP_8` (`ID_LEMBAGA`);

--
-- Indexes for table `tb_mou_rf_kota`
--
ALTER TABLE `tb_mou_rf_kota`
  ADD PRIMARY KEY (`ID_KOTA`),
  ADD KEY `FK_RELATIONSHIP_6` (`ID_PROVINSI`);

--
-- Indexes for table `tb_mou_rf_lembaga`
--
ALTER TABLE `tb_mou_rf_lembaga`
  ADD PRIMARY KEY (`ID_LEMBAGA`),
  ADD KEY `FK_RELATIONSHIP_10` (`ID_NEGARA`),
  ADD KEY `FK_RELATIONSHIP_11` (`ID_PROVINSI`),
  ADD KEY `FK_RELATIONSHIP_12` (`ID_KOTA`),
  ADD KEY `FK_RELATIONSHIP_4` (`ID_JENIS_LEMBAGA`);

--
-- Indexes for table `tb_mou_rf_negara`
--
ALTER TABLE `tb_mou_rf_negara`
  ADD PRIMARY KEY (`ID_NEGARA`);

--
-- Indexes for table `tb_mou_rf_perwakilanlembaga`
--
ALTER TABLE `tb_mou_rf_perwakilanlembaga`
  ADD PRIMARY KEY (`ID_PERWAKILAN_LEMBAGA`),
  ADD KEY `FK_RELATIONSHIP_13` (`ID_KOTA`),
  ADD KEY `FK_RELATIONSHIP_14` (`ID_PROVINSI`),
  ADD KEY `FK_RELATIONSHIP_15` (`ID_NEGARA`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_LEMBAGA`);

--
-- Indexes for table `tb_mou_rf_provinsi`
--
ALTER TABLE `tb_mou_rf_provinsi`
  ADD PRIMARY KEY (`ID_PROVINSI`),
  ADD KEY `FK_RELATIONSHIP_7` (`ID_NEGARA`);

--
-- Indexes for table `tb_mou_tr_berkas`
--
ALTER TABLE `tb_mou_tr_berkas`
  ADD PRIMARY KEY (`ID_BERKAS`),
  ADD KEY `FK_RELATIONSHIP_9` (`ID_KERJASAMA`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_mou_rf_kerjasama`
--
ALTER TABLE `tb_mou_rf_kerjasama`
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`ID_LEMBAGA`) REFERENCES `tb_mou_rf_lembaga` (`ID_LEMBAGA`);

--
-- Constraints for table `tb_mou_rf_kota`
--
ALTER TABLE `tb_mou_rf_kota`
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID_PROVINSI`) REFERENCES `tb_mou_rf_provinsi` (`ID_PROVINSI`);

--
-- Constraints for table `tb_mou_rf_lembaga`
--
ALTER TABLE `tb_mou_rf_lembaga`
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`ID_NEGARA`) REFERENCES `tb_mou_rf_negara` (`ID_NEGARA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`ID_PROVINSI`) REFERENCES `tb_mou_rf_provinsi` (`ID_PROVINSI`),
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID_KOTA`) REFERENCES `tb_mou_rf_kota` (`ID_KOTA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_JENIS_LEMBAGA`) REFERENCES `tb_mou_rf_jenislembaga` (`ID_JENIS_LEMBAGA`);

--
-- Constraints for table `tb_mou_rf_perwakilanlembaga`
--
ALTER TABLE `tb_mou_rf_perwakilanlembaga`
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`ID_KOTA`) REFERENCES `tb_mou_rf_kota` (`ID_KOTA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_14` FOREIGN KEY (`ID_PROVINSI`) REFERENCES `tb_mou_rf_provinsi` (`ID_PROVINSI`),
  ADD CONSTRAINT `FK_RELATIONSHIP_15` FOREIGN KEY (`ID_NEGARA`) REFERENCES `tb_mou_rf_negara` (`ID_NEGARA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_LEMBAGA`) REFERENCES `tb_mou_rf_lembaga` (`ID_LEMBAGA`);

--
-- Constraints for table `tb_mou_rf_provinsi`
--
ALTER TABLE `tb_mou_rf_provinsi`
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ID_NEGARA`) REFERENCES `tb_mou_rf_negara` (`ID_NEGARA`);

--
-- Constraints for table `tb_mou_tr_berkas`
--
ALTER TABLE `tb_mou_tr_berkas`
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`ID_KERJASAMA`) REFERENCES `tb_mou_rf_kerjasama` (`ID_KERJASAMA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
