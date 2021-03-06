-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Cze 2020, 00:47
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `produkty`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `data`
--

CREATE TABLE `data` (
  `Nazwa` varchar(69) DEFAULT NULL,
  `kalorie` varchar(7) DEFAULT NULL,
  `bialko` varchar(6) DEFAULT NULL,
  `tluszcz` varchar(7) DEFAULT NULL,
  `weglowodany` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `data`
--

INSERT INTO `data` (`Nazwa`, `kalorie`, `bialko`, `tluszcz`, `weglowodany`) VALUES
('Nazwa', 'kalorie', 'bialko', 'tluszcz', 'weglowodany'),
('Agrest', '41', '0,8', '0,2', '11,8'),
('Amarantus nasiona', '400', '14,5', '6,5', '66,2'),
('Ananas', '54', '0,4', '0,2', '13,6'),
('Ananas w syropie', '84', '0,4', '0,1', '21'),
('Anyż', '337', '17,6', '16', '50'),
('Arbuz', '36', '0,6', '0,1', '8,4'),
('Avocado', '160', '2', '15,3', '7,4'),
('Bakłażan', '21', '1,1', '0,1', '6,3'),
('Baleron', '244', '15,1', '20,2', '0,9'),
('Banan', '95', '1', '0,3', '23,5'),
('Banany suszone', '360', '3,8', '1,1', '88,8'),
('Bazylia suszona', '251', '14,3', '4', '61'),
('Bazylia świeża', '23', '3,2', '0,64', '2,7'),
('Biała rzodkiew', '14', '1', '0', '3'),
('Białko jajka kurzego', '49', '10,9', '0,2', '0,7'),
('Bób', '66', '7,1', '0,4', '14'),
('Boćwina', '17', '2,1', '0,5', '5,5'),
('Boczek wędzony', '477', '13', '47', '0'),
('Botwinka', '17', '2,1', '0,5', '5,5'),
('Brokuły', '27', '3', '0,4', '5,2'),
('Brukselka', '37', '4,7', '0,5', '8,7'),
('Brzoskwinia', '46', '1', '0,2', '11,9'),
('Brzoskwinia w syropie', '73', '0,4', '0,1', '18,2'),
('Bułka owsiana', '304', '9,3', '4,5', '58,4'),
('Bułka pszenna zwykła', '273', '8,1', '1,5', '57,7'),
('Bułka sojowa', '315', '10,1', '4', '61,1'),
('Bułka tarta', '347', '9,7', '1,9', '77,6'),
('Bułka wrocławskia', '294', '8', '4,4', '56,6'),
('Burak', '38', '1,8', '0,1', '9,5'),
('Cebula', '30', '1,4', '0,4', '6,9'),
('Cebula czerwona', '30', '1,4', '0,4', '6,9'),
('Cebula konserwowa', '52', '0,7', '0,2', '12,4'),
('Cebulka dymka', '30', '1,4', '0,4', '6,9'),
('Chili', '40', '0,4', '0,1', '1,8'),
('Chleb chrupki', '353', '8,7', '2,4', '78,9'),
('Chleb pszenny', '257', '8,5', '1,4', '54,3'),
('Chleb zwykły', '248', '6,1', '1,3', '56,3'),
('Chleb żytni pełnoziarnisty', '225', '6,8', '1,8', '53,8'),
('Chleb żytni razowy', '213', '5,9', '1,7', '51,2'),
('Chrzan', '67', '4,5', '0,6', '18,1'),
('Ciecierzyca konserwowa', '127', '6', '3', '18'),
('Cieciorka', '364', '19,3', '6', '60,6'),
('Cielęcina łopatka', '106', '19,9', '2,8', '0'),
('Cielęcina sznyclówka', '105', '20,5', '2,4', '0'),
('Cielęcina udziec', '108', '19,9', '3,1', '0'),
('Cukier', '405', '0', '0', '99,8'),
('Cukier brązowy', '380', '0,12', '0', '98'),
('Cukier puder', '387', '0', '0', '100'),
('Cukinia', '15', '1,2', '0,1', '3,2'),
('Curry', '325', '13', '14', '58'),
('Ćwikła', '40', '1,6', '0,1', '10,2'),
('Cykoria', '21', '1,7', '0,2', '4,1'),
('Cynamon', '247', '4', '1,2', '81'),
('Cytryna', '36', '0,8', '0,3', '9,5'),
('Czekolada gorzka', '554', '6,7', '34,3', '56,6'),
('Czereśnie', '61', '1', '0,3', '14,6'),
('Czerwona fasola konserwowa ', '87', '8,1', '0,6', '12,3'),
('Czosnek', '146', '6,4', '0,5', '32,6'),
('Czosnek granulowany', '331', '17', '0,73', '73'),
('Daktyle suszone', '277', '2', '0,4', '74'),
('Dorsz filety bez skóry', '70', '16,5', '0,3', '0'),
('Dynia', '28', '1,3', '0,3', '7,7'),
('Dżem jagodowy niskosłodzony', '153', '0,3', '0,2', '38,2'),
('Dżem śliwkowy niskosłodzony', '153', '0,3', '0,1', '37,9'),
('Dżem truskawkowy niskosłodzony', '153', '0,3', '0,2', '37,8'),
('Dżem wiśniowy niskosłodzony', '154', '0,4', '0,2', '37,5'),
('Ekstrakt z wanilii', '288', '0,03', '0', '14'),
('Estragon', '295', '23', '7,2', '50'),
('Fasola biała suche nasiona', '288', '21,4', '1,6', '61,6'),
('Fasola cięta, konserwowa, bez zalewy', '16', '1,5', '0,2', '4,5'),
('Fasola szparagowa', '27', '2,4', '0,2', '7,6'),
('Fasolka szparagowa, mrożonka', '24', '2,2', '0,2', '6,8'),
('Figi suszone', '290', '3,6', '1,2', '78'),
('Filet z makreli w sosie pomidorowym', '150', '13,1', '9', '4'),
('Flądra świeża', '83', '16,5', '1,8', '0'),
('Gałka muszkatołowa', '475', '6,7', '32', '50'),
('Goździk', '323', '6', '20', '61'),
('Grahamka', '252', '9', '1,7', '56,1'),
('Granat', '83', '1,7', '1,2', '18,7'),
('Grejpfrut', '36', '0,6', '0,2', '9,8'),
('Grejpfrut czerwony', '42', '0,8', '0,1', '10,7'),
('Grejpfrut zielony', '36', '0,6', '0,2', '9,8'),
('Groch suche nasiona', '293', '23,8', '1,4', '60,2'),
('Groszek ptysiowy', '476', '14,9', '30,2', '37,6'),
('Groszek zielony', '75', '6,7', '0,4', '17'),
('Groszek zielony konserwowy', '63', '4,9', '0,2', '15,8'),
('Gruszka', '54', '0,6', '0,2', '14,4'),
('Grzyby suszone', '284', '9,3', '0,7', '73'),
('Halibut świeży', '98', '20,1', '1,9', '0'),
('Herbata bez cukru', '0', '0,1', '0', '0'),
('Imbir', '347', '9,1', '6', '71'),
('Jabłka suszone', '238', '2,1', '2,1', '62,3'),
('Jabłko', '46', '0,4', '0,4', '12,1'),
('Jagody', '45', '0,8', '0,6', '12,2'),
('Jajko kurze', '139', '12,5', '9,7', '0,6'),
('Jajko przepiórcze', '158', '13', '11', '0,4'),
('Jarmuż', '29', '3,3', '0,7', '6,1'),
('Jogurt naturalny 2%', '60', '4,3', '2', '6,2'),
('Kabanos', '326', '27,4', '24,3', '0'),
('Kabanos z kurczaka', '247', '22,8', '17,4', '0,1'),
('Kajzerka', '296', '8,4', '3,6', '58,6'),
('Kakao w proszku 16%', '448', '18,2', '21,7', '50,6'),
('Kalafior', '22', '2,4', '0,2', '5'),
('Kalarepa', '29', '2,2', '0,3', '6,5'),
('Kapary', '23', '2,4', '0,9', '4,9'),
('Kapusta biała', '29', '1,7', '0,2', '7,4'),
('Kapusta czerwona', '27', '1,9', '0,2', '6,7'),
('Kapusta kwaszona', '12', '1,1', '0,2', '3,4'),
('Kapusta pekińska', '12', '1,2', '0,2', '3,2'),
('Kapusta włoska', '38', '3,3', '0,4', '7,8'),
('Kardamon', '311', '11', '6,7', '68'),
('Karp świeży', '110', '18', '4,2', '0'),
('Kasza gryczana', '336', '12,6', '3,1', '69,3'),
('Kasza jaglana', '346', '10,5', '2,9', '71,6'),
('Kasza jęczmienna pęczak', '334', '8,4', '2', '74,9'),
('Kasza jęczmienna perłowa', '327', '6,9', '2,2', '75'),
('Kasza kukurydziana', '337', '8', '1,7', '72'),
('Kasza manna', '348', '8,7', '1,3', '76,7'),
('Kaszanka jęczmienna', '195', '8,5', '12,6', '13'),
('Kawa bez cukru', '2', '0,2', '0', '0,3'),
('Keczup', '93', '1,8', '1', '22,2'),
('Kefir 2%', '51', '3,4', '2', '4,7'),
('Kefir 2% z wapniem', '51', '3,4', '2', '4,7'),
('Kiełbasa delikatesowa z kurczaka', '109', '19,6', '3,3', '0,1'),
('Kiełbasa domowa', '320', '14,7', '29,2', '0,5'),
('Kiełbasa jałowcowa z kurczaka', '236', '19', '17,9', '0,1'),
('Kiełbasa kanapkowa z kurczaka', '179', '11,8', '13,5', '3'),
('Kiełbasa lubuska', '249', '17,5', '18', '4,8'),
('Kiełbasa parówkowa', '323', '11', '31,5', '0'),
('Kiełbasa podlaska z kurczaka', '232', '20,7', '16,7', '0,1'),
('Kiełbasa podsuszana z kurczaka', '162', '21,7', '8,4', '0'),
('Kiełbasa podwawelska', '247', '17,3', '19,6', '0,9'),
('Kiełbasa rzeszowska', '203', '20,9', '13,4', '0'),
('Kiełbasa śląska', '210', '18,4', '15,3', '0'),
('Kiełbasa sucha krakowska', '323', '25,6', '24,8', '0'),
('Kiełbasa sucha myśliwska', '291', '27,8', '20,1', '0'),
('Kiełbasa szynkowa z kurczaka', '110', '16,2', '5', '0'),
('Kiełbasa toruńska', '263', '20,9', '20,1', '0'),
('Kiełbasa zwyczajna', '209', '17,6', '15,6', '0'),
('Kiełbasa żywiecka', '315', '20,3', '26,3', '0'),
('Kiełbaski bawarskie', '308', '15,5', '27,7', '0,1'),
('Kiełki bambusa', '20', '1,1', '0,6', '2'),
('Kiełki brokuła', '57', '5', '0', '6,8'),
('Kiełki buraka', '37', '1,6', '0,2', '9,6'),
('Kiełki fasoli mung', '29', '3', '0,4', '6,2'),
('Kiełki lucerny', '23', '4', '0,7', '2,1'),
('Kiełki rzodkiewki', '43', '3,8', '2,5', '3,6'),
('Kiełki słonecznika', '31', '3,4', '0,7', '4'),
('Kiełki soczewicy', '119', '9', '0,6', '22,1'),
('Kiełki soi', '141', '13,1', '6,7', '9,6'),
('Kiwi', '56', '0,9', '0,5', '13,9'),
('Kminek', '333', '20', '15', '50'),
('Kolendra', '279', '22', '4,8', '52'),
('Komosa ryżowa - quinoa', '334', '14,8', '5', '58,5'),
('Komosa ryżowa - Quinoa', '334', '15', '5', '58'),
('Koncentrat pomidorowy 30%', '92', '5,6', '1,5', '16,7'),
('Koperek', '26', '2,8', '0,4', '6,1'),
('Kostka rosołowa Rosół z kury z pietruszką i lubczykiem ', '300', '10', '20', '10'),
('Krewetka tygrysia', '92', '22', '0', '1'),
('Kukurydza kolba', '110', '3,7', '1,5', '23,4'),
('Kukurydza konserwowa', '102', '2,9', '1,2', '23,6'),
('Kumin (kmin rzymski)', '429', '17', '22', '34'),
('Kurki', '32', '1,49', '0,53', '6,86'),
('Kurkuma', '354', '7,8', '9,9', '65'),
('Len mielony', '253', '40', '9', '3'),
('Len w nasionach', '500', '24,5', '31', '35'),
('Limonka', '30', '0,7', '0,2', '10,5'),
('Liście mięty', '77', '3,8', '0,94', '15'),
('Liść laurowy', '313', '7,6', '8,4', '75'),
('Łosoś smażony', '380', '21,2', '31,4', '4'),
('Łosoś świeży', '201', '19,9', '13,6', '0'),
('Łosoś wędzony', '162', '21,5', '8,4', '0'),
('Magii', '17', '2,7', '0', '1,5'),
('Majeranek', '271', '13', '7', '61'),
('Majonez', '714', '1,3', '79', '2,6'),
('Mak', '478', '20,1', '42,9', '24,7'),
('Mąka kukurydziana', '337', '5,9', '3', '78'),
('Mąka pszenna typ 1850', '309', '11,9', '2,3', '70'),
('Mąka pszenna typ 500', '343', '10,1', '1,2', '74'),
('Mąka pszenna typ 550', '344', '10,5', '1,6', '73'),
('Mąka pszenna typ 750', '341', '11,6', '1,8', '71,3'),
('Makaron bezjajeczny', '364', '11', '1,6', '77,6'),
('Makaron czterojajeczny', '391', '13,2', '3,4', '78,3'),
('Makaron dwujajeczny', '373', '12', '2,6', '76,8'),
('Makaron farfalline pełnoziarnisty z 5 zbóż', '351', '14,4', '2,5', '63,8'),
('Makaron penne pełnoziarnisty', '345', '15,2', '1,3', '68'),
('Makaron rurki (z pszenicy Durum)', '350', '12', '1,5', '72,1'),
('Makaron ryżowy', '356', '6,8', '0,7', '83'),
('Makaron spaghetti razowy', '354', '13', '2,5', '66,5'),
('Mąka ryżowa', '348', '7,2', '0,7', '79,2'),
('Mąka żytnia typ 1400', '310', '7,1', '2,2', '75,3'),
('Mąka żytnia typ 2000', '301', '8,1', '2,2', '74'),
('Mąka żytnia typ 580', '330', '5,1', '1,5', '78,5'),
('Mąka żytnia typ 720', '327', '5,9', '1,7', '77,4'),
('Makrela świeża', '181', '18,7', '11,9', '0'),
('Makrela wędzona', '221', '20,7', '15,5', '0'),
('Maliny', '29', '1,3', '0,3', '12'),
('Mandarynki', '42', '0,6', '0,2', '11,2'),
('Mango', '67', '0,5', '0,3', '17'),
('Marchewka', '27', '1', '0,2', '8,7'),
('Marchewka z groszkiem, mrożonka', '39', '2,6', '0,3', '10,4'),
('Marchewki mini', '41', '1', '0', '9'),
('Maślanka 0,5 %', '37', '3,4', '0,5', '4,7'),
('Masło ekstra', '735', '0,7', '82,5', '0,7'),
('Masło klarowane', '883', '0', '99', '0'),
('Masło orzechowe', '634', '26,6', '53', '8,5'),
('Masło śmietankowe', '659', '1,1', '73,5', '1,1'),
('Melon', '36', '0,9', '0,3', '8,4'),
('Mieszanka mąk gryczanej, ryżowej lub owsianej', '351', '11,7', '2,7', '70,7'),
('Mieszanka warzywna z kurczakiem, ryżem i grzybami chińskimi, mrożonka', '87', '4,3', '2,4', '13,3'),
('Mieszanka ziół', '1', '0', '0,1', '0'),
('Mięta pieprzowa', '77', '3,8', '0,94', '15'),
('Migdały', '572', '20', '52', '20,5'),
('Miks ulubionych warzwy', '38', '1,9', '0,3', '8,8'),
('Mintaj świeży', '73', '16,6', '0,6', '0'),
('Miód pszczeli', '324', '0,3', '0', '79,5'),
('Mleko kokosowe w puszce', '203', '2,1', '18', '8,1'),
('Mleko kozie 2%', '68', '3,2', '4,1', '4,5'),
('Mleko owcze', '107', '6', '7', '5,1'),
('Mleko sojowe', '41', '6', '1,4', '4,3'),
('Mleko spożywcze 2,0%', '51', '3,4', '2', '4,9'),
('Mleko w proszku pełne', '479', '27', '24', '38,7'),
('Mleko zagęszczone niesłodzone', '131', '6,6', '7,5', '9,4'),
('Mleko zagęszczone słodzone', '326', '7,5', '8', '55,3'),
('Młody jęczmień proszek', '320', '52', '2', '21'),
('Morele', '47', '0,9', '0,2', '11,9'),
('Morele suszone', '284', '5,4', '1,2', '72,2'),
('Morszczuk świeży', '89', '17,2', '2,2', '0'),
('Mus jabłkowy', '124', '2,2', '0,2', '28,7'),
('Musli z orzechami i rodzynkami', '375', '11,5', '12,7', '62,9'),
('Musli z suszonymi owocami', '325', '8,4', '3,4', '72,2'),
('Musztarda', '162', '5,7', '6,4', '22'),
('Napój kokosowy w kartonie', '30', '0,1', '2', '3,5'),
('Nasiona Chia', '490', '16', '31', '44'),
('Natka pietruszki', '41', '4,4', '0,4', '9'),
('Nektarynka', '48', '0,9', '0,2', '11,8'),
('Ocet balsamiczny', '116', '0', '0', '0,7'),
('Ocet jabłkowy', '24', '0', '0', '6'),
('Ocet winny', '20', '0', '0', '5'),
('Ogórek', '13', '0,7', '0,1', '2,9'),
('Ogórek kiszony', '11', '1', '0,1', '1,9'),
('Ogórek konserwowy', '23', '0,4', '0,1', '4,9'),
('Ogórek kwaszony', '11', '1', '0,1', '1,9'),
('Ogórki konserwowe', '24', '0,3', '0,1', '5,6'),
('Olej kokosowy', '900', '0', '100', '0'),
('Olej rzepakowy', '884', '0', '100', '0'),
('Olej słonecznikowy', '884', '0', '100', '0'),
('Oliwa z oliwek', '882', '0', '99,6', '0,2'),
('Oliwki czarne', '125', '1,4', '12,7', '4,1'),
('Oliwki zielone marynowane', '125', '1,4', '12,7', '4,1'),
('Oregano', '265', '9', '4,3', '69'),
('Orzechy arachidowe', '560', '25,7', '46,1', '19,2'),
('Orzechy brazylijskie', '656', '14', '66', '4'),
('Orzechy laskowe', '640', '14,4', '63', '14,9'),
('Orzechy piniowe', '673', '16,7', '68,4', '13'),
('Orzechy pistacjowe', '589', '20,5', '48,5', '25'),
('Orzechy włoskie', '645', '16', '60,3', '18'),
('Orzechy ziemne', '603', '26', '50', '14'),
('Ostra papryka', '0,4', '0,02', '0', '0,09'),
('Otręby pszenne', '185', '16', '4,6', '61,9'),
('Paluszek krabowy', '113', '6,5', '2,2', '16,8'),
('Papaja', '41', '0,6', '0,1', '11,1'),
('Papryka czerwona', '28', '1,3', '0,5', '6,6'),
('Papryka czerwona konserwowa', '30', '0,8', '1,5', '5'),
('Papryka sucha', '289', '15', '13', '56'),
('Papryka zielona', '18', '1,1', '0,3', '4,6'),
('Pasternak', '57', '1,6', '0,6', '15,5'),
('Pasztet pieczony', '390', '17', '31,2', '13,5'),
('Pasztet podlaski z kurczaka', '228', '6,7', '21,1', '3,6'),
('Pasztet z kurczaka', '214', '14,4', '14,3', '7,5'),
('Pestki dyni', '556', '24,5', '45,8', '18'),
('Pestki słonecznika', '561', '24,4', '43,7', '24,6'),
('Pesto', '340', '3,7', '34,6', '6,3'),
('Pieczarki', '17', '2,7', '0,4', '2,6'),
('Pieczarki marynowane konserwowe', '19', '2,3', '0,4', '4,3'),
('Pieczeń wołowa', '117', '20,9', '3,6', '0'),
('Pieczona polędwica wołowa', '168', '19,7', '9,9', '0'),
('Pieczywo tostowe', '305', '8,1', '4,7', '58,8'),
('Pieczywo tostowe grahamowe', '273', '7,5', '4,2', '53,8'),
('Pieczywo Wasa', '370', '10', '3', '70'),
('Pieprz biały', '296', '10', '2,1', '69'),
('Pieprz czarny', '318', '11', '3,3', '65'),
('Pieprz czerwony', '318', '12', '17', '57'),
('Pierś indyka bez skóry', '84', '19,2', '0,7', '0'),
('Pierś indyka ze skórą', '100', '18,7', '2,7', '0'),
('Pierś kurczaka bez skóry', '99', '21,5', '1,3', '0'),
('Pietruszka', '38', '2,6', '0,5', '10,5'),
('Pikle konserwowe', '62', '1,3', '0,2', '15,5'),
('Płatki jaglane', '361', '10', '4', '69'),
('Płatki jęczmienne', '355', '9,8', '3,6', '79,4'),
('Płatki kukurydziane', '363', '6,9', '2,5', '83,6'),
('Płatki migdałowe', '581', '22', '51', '10'),
('Płatki owsiane', '366', '11,9', '7,2', '69,3'),
('Płatki pszenne', '351', '9', '3', '81'),
('Płatki ryżowe', '344', '6,7', '0,7', '78,9'),
('Płatki żytnie', '343', '6,4', '3,2', '82,6'),
('Podudzie indyka bez skóry', '100', '16,6', '3,7', '0'),
('Polędwica łososiowa', '106', '20', '2', '2'),
('Polędwica luksusowa', '177', '19,5', '10', '2,4'),
('Polędwica sopocka', '165', '19,9', '9,1', '0,9'),
('Polędwica wołowa', '113', '20,1', '3,5', '0'),
('Polędwica z indyka', '105', '15,8', '4,6', '0,1'),
('Polędwica z piersi kurczaka', '93', '20,4', '1,2', '0'),
('Pomarańcza', '44', '0,9', '0,2', '11,3'),
('Pomidor', '15', '0,9', '0,2', '3,6'),
('Pomidory koktajlowe', '15', '0,9', '0,2', '3,6'),
('Pomidory z puszki', '23', '1,3', '0,2', '4'),
('Por', '24', '2,2', '0,3', '5,7'),
('Porzeczki białe', '33', '1', '0,2', '13,1'),
('Porzeczki czarne', '35', '1,3', '0,2', '14,9'),
('Porzeczki czerwone', '31', '1,1', '0,2', '13,8'),
('Powidła śliwkowe', '214', '1', '0,2', '53'),
('Poziomki', '33', '0,8', '0,5', '8,3'),
('Proszek do pieczenia', '97', '0,1', '0,4', '47'),
('Przecier pomidorowy', '25', '1,2', '0,1', '4,5'),
('Przyprawa do drobiu', '307', '9,6', '7,5', '66'),
('Przyprawa do ryb', '307', '9,6', '7,5', '66'),
('Przyprawa \"Jarzynka\"', '90', '1,9', '0,4', '23,3'),
('Pstrąg strumieniowy świeży', '97', '19,2', '2,1', '0'),
('Pstrąg tęczowy świeży', '160', '18,6', '9,6', '0'),
('Pstrąg wędzony', '117', '19,4', '4,4', '0,2'),
('Pumpernikiel', '240', '5,9', '2', '58,2'),
('Rabarbar', '9', '0,5', '0,1', '4,6'),
('Rodzynki suszone', '277', '2,3', '0,5', '71,2'),
('Rostbef wołowy', '152', '21,5', '7,3', '0'),
('Rozmaryn', '331', '4,9', '15', '64'),
('Rukola', '25', '2,6', '0,7', '3,7'),
('Ryż biały', '344', '6,7', '0,7', '78,9'),
('Ryż brązowy', '322', '7,1', '1,9', '76,8'),
('Rzepa', '26', '1,1', '0,3', '8,2'),
('Rzeżucha', '32', '2,6', '0,7', '5,5'),
('Rzodkiewka', '14', '1', '0,2', '4,4'),
('Salami', '540', '21,9', '50,6', '0,9'),
('Salami popularne', '568', '21,6', '53,7', '1,4'),
('Salami z pieprzem', '405', '17', '37', '1'),
('Sałata', '14', '1,4', '0,2', '2,9'),
('Sałata lodowa', '14', '0,9', '0,1', '3'),
('Sałata rzymska', '17', '1,2', '0', '3'),
('Sandacz świeży', '84', '19,2', '0,7', '0'),
('Sardynki w oleju', '221', '24,1', '13,9', '0'),
('Sardynki w pomidorach', '162', '17', '9,9', '1,4'),
('Schab pieczony', '291', '30,4', '18,7', '0,7'),
('Seler konserwowy', '17', '0,7', '0,1', '5,4'),
('Seler korzeniowy', '21', '1,6', '0,3', '7,7'),
('Seler naciowy', '13', '1', '0,2', '3,6'),
('Ser Brie pełnotłusty', '329', '19,8', '28', '0,2'),
('Ser Camembert pełnotłusty', '291', '21,4', '23', '0,2'),
('Ser Cheddar pełnotłusty', '391', '27,1', '31,7', '0,1'),
('Ser Edamski pełnotłusty', '313', '26,1', '23,4', '0,1'),
('Serek homogenizowany', '161', '12,7', '11', '3'),
('Serek homogenizowany waniliowy', '159', '16,8', '4,2', '13,3'),
('Serek twarogowy ziarnisty', '101', '12,3', '4,3', '3,3'),
('Serek typu \"Fromage\" naturalny', '379', '10,2', '37,1', '2,4'),
('Ser Ementaler pełnotłusty', '380', '28,8', '29,7', '0,1'),
('Ser Gouda pełnotłusty', '316', '27,9', '22,9', '0,1'),
('Ser kozi', '388', '21,4', '33,9', '0'),
('Ser kozi, twarożek', '168', '8,7', '14', '4'),
('Ser Mascarpone', '394', '3,5', '40', '5,1'),
('Ser mozzarella', '254', '24', '16', '3'),
('Ser mozzarella light', '157', '19', '8,5', '1'),
('Ser Parmezan', '452', '41,5', '32', '0,1'),
('Ser Radamer', '339', '26,2', '26', '0,1'),
('Ser Rokpol pełnotłusty', '363', '22,6', '30,6', '0,1'),
('Ser Salami pełnotłusty', '351', '25,2', '28,1', '0,1'),
('Ser topiony', '298', '13,5', '27', '1,2'),
('Ser Trapistów pełnotłusty', '367', '23,5', '30,7', '0,1'),
('Ser Trapistów tłusty', '351', '28', '26,8', '0,1'),
('Ser twarogowy chudy', '99', '19,8', '0,5', '3,5'),
('Ser twarogowy półtłusty', '133', '18,7', '4,7', '3,7'),
('Ser twarogowy tłusty', '175', '17,7', '10,1', '3,5'),
('Ser Tylżycki pełnotłusty', '353', '26,1', '27,9', '0,1'),
('Ser typu \"Feta\"', '215', '17', '16', '1'),
('Sezam', '632', '23,2', '59,9', '10'),
('Siemie lniane', '534', '18', '42', '29'),
('Skórka cytrynowa', '120', '1,6', '0,2', '25'),
('Skrobia kukurydziana', '353', '0,2', '0', '88,5'),
('Skrobia ziemniaczana', '343', '0,6', '0,1', '83,9'),
('Śledź solony', '217', '19,8', '15,4', '0'),
('Śledź w oleju', '301', '16,4', '26,5', '0'),
('Śliwka', '45', '0,6', '0,2', '11,7'),
('Śliwki suszone', '267', '3,5', '1,2', '68,9'),
('Słodki ziemniak (batat)', '86', '1,6', '0,1', '20'),
('Śmietana, 12% tłuszczu', '133', '2,7', '12', '3,9'),
('Śmietana, 18% tłuszczu', '184', '2,5', '18', '3,6'),
('Śmietanka kremowa 30%', '287', '2,2', '30', '3,1'),
('Soczewica czerwona suche nasiona', '327', '25,4', '3', '57,5'),
('Soja suche nasiona', '382', '34,3', '19,6', '32,7'),
('Sok ananasowy', '48', '0,3', '0,1', '11,4'),
('Sok brzoskwiniowo pomarańczowy', '32', '0,7', '0,1', '7,4'),
('Sok buraczany', '34', '0,8', '0,2', '7,6'),
('Sok cytrynowy', '30', '0,4', '0,3', '6,4'),
('Sok egzotyczny', '57', '0,8', '0,3', '12,7'),
('Sok grejpfrutowy', '40', '0,5', '0,1', '9,2'),
('Sok jabłkowy', '42', '0,1', '0,1', '10'),
('Sok marchwiowo brzoskwiniowy', '44', '0,5', '0,1', '11,3'),
('Sok marchwiowo jabłkowo bananowy', '39', '0,3', '0,1', '10,2'),
('Sok marchwiowo jabłkowo śliwkowy', '39', '0,4', '0,2', '10,2'),
('Sok marchwiowo jabłkowy', '44', '0,5', '0,2', '12,1'),
('Sok marchwiowo pomarańczowy', '40', '0,6', '0,1', '10,8'),
('Sok marchwiowy', '43', '0,4', '0,1', '11,3'),
('Sok pomarańczowo grejpfrutowy', '43', '0,6', '0,1', '9,8'),
('Sok pomarańczowy', '43', '0,6', '0,1', '9,9'),
('Sok pomidorowy', '14', '0,8', '0,2', '3,3'),
('Sok wieloowocowy', '45', '0,2', '0,1', '10,9'),
('Sok wielowarzywny', '25', '1', '0,3', '5,7'),
('Sól', '0', '0', '0', '0'),
('Sola świeża', '83', '17,5', '1,4', '0'),
('Sól czosnkowa', '9', '4,3', '1,2', '1,9'),
('Sos sojowy', '0', '0,6', '0', '0,3'),
('Starta skórka z pomarańczy', '120', '1,6', '0,2', '25'),
('Suszone pomidory', '215', '5', '14', '23'),
('Syrop klonowy', '265', '0,1', '0,1', '63'),
('Szafran', '310', '11', '5,9', '65'),
('Szałwia', '315', '11', '13', '61'),
('Szczaw', '21', '1,1', '0,8', '4,9'),
('Szczupak świeży', '82', '18,4', '0,8', '0'),
('Szczypiorek', '29', '4,1', '0,8', '3,9'),
('Szparagi', '18', '1,9', '0,2', '3,7'),
('Szpinak', '16', '2,6', '0,4', '3'),
('Szpinak, mrożonka', '15', '2,3', '0,4', '2,7'),
('Szponder wołowy', '217', '19,3', '15,7', '0'),
('Szprotka wędzona', '243', '19,3', '18,3', '0'),
('Szynka delikatesowa z kurczaka', '123', '18,2', '5,6', '0'),
('Szynka kanapkowa', '102', '14,2', '4,4', '1,4'),
('Szynka parmeńska', '135', '26', '3', '1'),
('Szynka wiejska', '253', '17,1', '20,3', '0,9'),
('Szynka wieprzowa gotowana', '233', '16,4', '18,3', '1'),
('Szynka wołowa gotowana', '107', '20,9', '2', '1,1'),
('Szynka z indyka', '84', '17,1', '1,6', '0,1'),
('Szynka z piersi kurczaka', '98', '21,2', '1,2', '0,2'),
('Szynka z udźca kurczaka', '117', '17,2', '5,3', '0'),
('Szynkówka wieprzowa', '191', '13,6', '14,7', '1,4'),
('Szynkówka wołowa', '85', '16,2', '1,5', '1,4'),
('Tofu', '112', '12', '6', '3'),
('Truskawki', '28', '0,7', '0,4', '7,2'),
('Tuńczyk w oleju', '190', '27,1', '9', '0'),
('Tuńczyk w sosie własnym', '96', '21', '1,2', '0'),
('Tymianek', '276', '9,1', '7,4', '64'),
('Udko kurczaka bez skóry', '125', '17,8', '6', '0'),
('Udko kurczaka ze skórą', '158', '16,8', '10,2', '0'),
('Udziec indyka bez skóry', '104', '19,4', '2,8', '0'),
('Udziec indyka ze skórą', '131', '18,4', '6,4', '0'),
('Wafle ryżowe', '390', '8', '3', '81'),
('Wątróbka kurczaka', '136', '19,1', '6,3', '0,6'),
('Wędzona pierś z kurczaka', '107', '23', '0,5', '0'),
('Wędzonka wołowa gotowana', '102', '17,8', '3,1', '0,5'),
('Wieprzowina karkówka', '267', '16,1', '22,8', '0'),
('Wieprzowina łopatka', '257', '16', '21,7', '0'),
('Wieprzowina schab surowy', '174', '21', '10', '0'),
('Wieprzowina żeberka', '321', '15,2', '29,3', '0'),
('Wino białe półwytrawne', '81', '0', '0', '3,7'),
('Wino białe słodkie', '95', '0,2', '0', '5,9'),
('Wino białe wytrawne', '66', '0,1', '0', '0,6'),
('Wino czerwone', '68', '0,1', '0', '0,2'),
('Winogrona', '69', '0,5', '0,2', '17,6'),
('Wiórki kokosowe', '606', '5,6', '63,2', '27'),
('Wiśnie', '47', '0,9', '0,4', '10,9'),
('Włoszczyzna krojona w paski', '25', '1,4', '0,3', '7,9'),
('Woda', '0', '0', '0', '0'),
('Zarodki pszenne', '323', '27,5', '9,4', '45,5'),
('Żelatyna', '343', '84,2', '0,1', '0'),
('Ziele angielskie', '263', '6,1', '8,7', '72'),
('Ziemniaki', '77', '1,9', '0,1', '18,3'),
('Ziemniaki młode', '69', '1,8', '0,1', '16,3'),
('Zioła prowansalskie', '1', '0', '0,1', '0'),
('Żółtko jajka kurzego', '314', '15,5', '28,2', '0,3'),
('Żurawina niskosłodzona do mięs', '161', '0,2', '0,7', '38,8'),
('Żurawina suszona', '320', '0,1', '1,4', '82,4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
