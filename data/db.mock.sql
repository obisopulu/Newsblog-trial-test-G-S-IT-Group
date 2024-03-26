-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 01:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 24, 'You can\'t input the feed without indexing the online OCR microchip!', 0, '2024-03-26 12:46:24', NULL, NULL),
(2, 2, 15, 'We need to navigate the redundant GB sensor!', 0, '2024-03-26 12:46:24', NULL, NULL),
(3, 2, 17, 'The AGP interface is down, connect the redundant microchip so we can copy the DNS hard drive!', 0, '2024-03-26 12:46:24', NULL, NULL),
(4, 1, 25, 'transmitting the alarm won\'t do anything, we need to bypass the 1080p USB application!', 0, '2024-03-26 12:46:24', NULL, NULL),
(5, 2, 21, 'We need to navigate the 1080p RAM circuit!', 0, '2024-03-26 12:46:24', NULL, NULL),
(6, 2, 14, 'We need to reboot the back-end SSD bus!', 0, '2024-03-26 12:46:24', NULL, NULL),
(7, 2, 15, 'You can\'t synthesize the application without connecting the optical IB alarm!', 0, '2024-03-26 12:46:24', NULL, NULL),
(8, 1, 2, 'The IB sensor is down, index the mobile pixel so we can calculate the ASCII capacitor!', 0, '2024-03-26 12:46:24', NULL, NULL),
(9, 1, 9, 'We need to back up the solid state SQL program!', 0, '2024-03-26 12:46:24', NULL, NULL),
(10, 1, 24, 'I\'ll input the open-source PCI panel, that should interface the SSL transmitter!', 0, '2024-03-26 12:46:24', NULL, NULL),
(11, 2, 21, 'The PNG pixel is down, copy the back-end protocol so we can index the AI bandwidth!', 0, '2024-03-26 12:46:24', NULL, NULL),
(12, 2, 8, 'We need to hack the optical SMTP panel!', 0, '2024-03-26 12:46:24', NULL, NULL),
(13, 2, 14, 'If we synthesize the microchip, we can get to the SCSI system through the redundant ASCII feed!', 0, '2024-03-26 12:46:24', NULL, NULL),
(14, 2, 6, 'The CSS transmitter is down, compress the 1080p port so we can transmit the CLI firewall!', 0, '2024-03-26 12:46:24', NULL, NULL),
(15, 1, 22, 'Use the primary SSL driver, then you can back up the open-source panel!', 0, '2024-03-26 12:46:24', NULL, NULL),
(16, 2, 21, 'synthesizing the interface won\'t do anything, we need to navigate the solid state PCI card!', 0, '2024-03-26 12:46:24', NULL, NULL),
(17, 2, 19, 'I\'ll generate the neural COM circuit, that should interface the HTTP port!', 0, '2024-03-26 12:46:24', NULL, NULL),
(18, 2, 11, 'Try to bypass the HDD monitor, maybe it will navigate the back-end array!', 0, '2024-03-26 12:46:24', NULL, NULL),
(19, 1, 16, 'quantifying the firewall won\'t do anything, we need to compress the optical SDD capacitor!', 0, '2024-03-26 12:46:24', NULL, NULL),
(20, 2, 9, 'I\'ll hack the open-source PCI system, that should bus the UTF8 microchip!', 0, '2024-03-26 12:46:24', NULL, NULL),
(21, 2, 12, 'The CSS feed is down, synthesize the auxiliary circuit so we can back up the THX transmitter!', 0, '2024-03-26 12:46:24', NULL, NULL),
(22, 2, 25, 'Use the virtual VGA firewall, then you can synthesize the 1080p array!', 0, '2024-03-26 12:46:24', NULL, NULL),
(23, 2, 3, 'The THX card is down, quantify the bluetooth array so we can input the THX pixel!', 0, '2024-03-26 12:46:24', NULL, NULL),
(24, 2, 2, 'The UTF8 panel is down, hack the wireless sensor so we can hack the IB bandwidth!', 0, '2024-03-26 12:46:24', NULL, NULL),
(25, 2, 25, 'synthesizing the pixel won\'t do anything, we need to transmit the bluetooth FTP hard drive!', 0, '2024-03-26 12:46:24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `headline` varchar(160) NOT NULL,
  `source` varchar(160) DEFAULT NULL,
  `article` longtext NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `thumbnail`, `headline`, `source`, `article`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'https://picsum.photos/seed/Wbt9Y/640/480', 'supposing incidentally brightly gee whoa tinted', NULL, 'Aureus solitudo tolero. Decretum solutio nam bellum adopto cubitum demoror tenuis tergum una. Aureus tepidus curatio patior amor.\nCallide canis demitto. Crux supellex delego. Accendo sumptus depromo vis termes comminor vetus molestias.\nAcies vox amita valens corporis utroque approbo vilis denuo ex. Ipsum vesco numquam utrum decet. Tantum surculus solus minima degenero.\nTalus una et velociter cedo suus vergo tamdiu vulgaris. Auxilium ultra coruscus viscus. Repudiandae sufficio tabella tam coepi suscipio.', 0, '2024-03-26 12:46:24', NULL, NULL),
(2, 1, 'https://picsum.photos/seed/xkZMA3NlGs/640/480', 'than herd a uselessly recipe faraway', NULL, 'Capillus cubicularis reiciendis video. Decet adficio qui absque vespillo amiculum valens stultus patior. Angustus utrum utrimque una umerus crudelis aeneus depereo amicitia.\nSapiente damnatio concedo vilicus vulnero sto aer amplitudo ater dolore. Conqueror conatus acervus deripio aliquam trepide repudiandae. Comedo sapiente uterque accusamus conicio.\nAuctor usitas advoco omnis thymum. Decet accendo anser censura vomica expedita articulus. Urbanus vere nesciunt.\nDemens excepturi arbor causa votum decet adfectus debeo calcar. Deputo desparatus avaritia claro adduco supra dedecor. Attollo atque blandior.\nAer sollers angustus magni auctus possimus commodo. Cubitum anser blanditiis inventore decipio impedit dignissimos. Universe tantum atavus thermae quo delibero rem annus volo adamo.', 0, '2024-03-26 12:46:24', NULL, NULL),
(3, 1, 'https://picsum.photos/seed/fEImZYk/640/480', 'meanwhile apt pore soon gosh more unhappy middle where arm', NULL, 'Depono clibanus acceptus vinco tum patrocinor. Sunt derelinquo ascisco ara ulciscor verbum provident magni. Magni deduco cado inventore sublime vito quibusdam.\nQuo sperno nam amitto. Nam votum vitium civitas illo pax illo vigilo. Abundans depromo ara pauper consequatur temeritas bibo.\nAntiquus texo cur urbs blanditiis tam vulnero ventito sublime vomer. Delinquo cerno vivo demo porro asperiores adficio minus rerum. Sollicito sophismata provident antea qui natus distinctio trans.\nEius deporto vetus aequitas. Conicio aperio degero volup nisi supellex adipisci substantia. Culpo caveo acervus crebro tenetur optio voco veritas defessus.\nDepraedor consuasor umerus utrum ulciscor. Viridis despecto quae sub adsum candidus absum ventus caveo. Natus sustineo tricesimus.', 0, '2024-03-26 12:46:24', NULL, NULL),
(4, 1, 'https://loremflickr.com/640/480?lock=2714276131241984', 'though publicise folklore sturdy more mourn tease up liquidate', NULL, 'Thymbra alienus degenero adsum. Ullus aggero casus cimentarius ager terebro harum eveniet. Vir solutio cunctatio cogito infit testimonium velociter suffragium.\nUndique argentum a expedita. Sum approbo stabilis. Sufficio delectus succurro.\nAdmitto infit decipio ascisco agnosco ventito volva correptius maiores. Agnosco agnitio usus amplus suscipit vulgivagus et explicabo. Teneo adulescens conor synagoga volubilis illo vester decerno universe.', 0, '2024-03-26 12:46:24', NULL, NULL),
(5, 1, 'https://loremflickr.com/640/480?lock=5434091258249216', 'blah oof blank when ripe memorize nettle unfit unless collision', NULL, 'Accommodo talus suasoria suadeo. Talio appono tactus audio odit. Vilitas tego appositus conscendo villa suspendo.\nVado cupiditate vitium commemoro undique. Sollicito comis verecundia stultus tredecim civitas. Succurro occaecati aequitas vindico acsi tondeo.\nMinus corpus speculum. Audio utpote aetas cum utpote aliquid. Dedecor crur theologus auxilium ultio magni confido uterque.\nValeo coepi repellendus delibero asper. Condico averto laboriosam libero vulgaris turba subiungo. Spero vulticulus communis depulso.\nSpiculum sordeo pecco ad talio corrumpo commodi statua validus. Crapula utpote carus armarium uter tutis voco utrum crinis vigor. Vindico suggero careo victoria tabernus cohibeo administratio.', 0, '2024-03-26 12:46:24', NULL, NULL),
(6, 1, 'https://picsum.photos/seed/wUCIisD/640/480', 'jovially phew gee reason however snoopy concern along prepone', NULL, 'Capto atqui vinum deprimo sustineo carcer aspicio vulpes. Ait trado vitium. Similique ultio truculenter amoveo armarium atavus amoveo tergiversatio absorbeo.\nAggredior paens aurum dolor tricesimus terreo. Cinis vilis claustrum depraedor assumenda. Sulum arguo compono.\nAccusantium absum porro depopulo synagoga caterva vacuus. Tantillus capitulus conforto dolor. Bos urbanus votum.', 0, '2024-03-26 12:46:24', NULL, NULL),
(7, 1, 'https://loremflickr.com/640/480?lock=8260916636286976', 'upbeat brown daily julienne ack', NULL, 'Facilis decipio coadunatio ancilla vulticulus asperiores decipio ad sollicito voro. Culpa acidus ventus vociferor sophismata. Cena thermae neque cunae argentum cunae amplexus trepide sufficio cruciamentum.\nTextus desino soleo repudiandae nam avarus. Nostrum ante beneficium theologus tripudio cervus volup. Facilis decumbo depopulo acervus.\nVae sophismata sono appello. Ustulo subseco pauci vox deficio villa. Bestia beatus conventus.\nPerspiciatis summopere tepidus quas carmen cras vis. Tripudio talio pauci assumenda ustilo cedo crebro ante caries usus. Cubo tempora arbor cohibeo delicate apostolus celer quibusdam.', 0, '2024-03-26 12:46:24', NULL, NULL),
(8, 1, 'https://loremflickr.com/640/480?lock=2756020659027968', 'save creak pace aw brr along weaponize hmph', NULL, 'Via cometes verbum studio alius tonsor volutabrum dapifer corrumpo. Careo auxilium trans valetudo absens templum conatus ullus velit. Voluptatem vaco hic coniecto accusator cunae contego soluta amitto vulgo.\nTutis cibo temporibus. Supra solium celebrer adstringo nulla sufficio. Quas depono defaeco sit creber volubilis.\nCreo defendo turbo crebro. Repellendus aptus corrumpo suadeo. Curia viridis candidus comburo surgo.\nAbsens ex adflicto tibi turpis armarium baiulus laudantium pariatur. Thermae antea asper. Facere advenio umquam ipsum canto conduco vero sollers aranea.\nAsper tollo audax. Utrimque arto verecundia vulnero auctus. Ars strenuus corpus comptus cogito amita ver fuga coepi ter.', 0, '2024-03-26 12:46:24', NULL, NULL),
(9, 1, 'https://picsum.photos/seed/F6nw3exC/640/480', 'consequently lustrous whoever transgress an ah as lest', NULL, 'Utroque adipisci porro decretum vereor torqueo adinventitias canto quis consequatur. Assentator antiquus adeo vito sulum varius titulus abstergo. Ustulo demo vos antepono clementia capitulus universe.\nDolor vulgus varius comitatus eos venustas vaco demo angustus. Claudeo sub valetudo id absens provident. Vae alo vinculum sophismata tunc tyrannus.\nAbsum magnam capio veritatis volutabrum carbo officiis tantillus cresco delectus. Odit tot velum vulticulus aiunt atqui amitto brevis. Tego denego quia nihil ars alveus derelinquo ater nulla.\nAbsconditus degenero iusto cogito textilis ascit. Bis substantia corroboro clementia ante valens explicabo usitas. Nostrum canonicus villa cibus tabella trans delibero.\nDesparatus virtus voluptates. Ipsum in adipiscor sto ipsa demergo cinis nesciunt nobis calco. Vado pel annus.', 0, '2024-03-26 12:46:24', NULL, NULL),
(10, 1, 'https://picsum.photos/seed/AL24B3M6/640/480', 'mitigate timbale frenetically complete hence', NULL, 'Villa creber autem solum calco capto deripio comptus spoliatio ventus. Claustrum alo conventus combibo averto adeo vae quam caries. Congregatio damno vix carcer derideo averto aureus aeternus vulpes.\nAdhuc termes sollers. Tardus alienus testimonium virga debilito odio tubineus comes. Audio trans doloremque delicate.\nTerrito decumbo ars uredo civis usitas tolero vinculum caveo voluntarius. Thorax trepide cras cum. Aro deleo summa alioqui.', 0, '2024-03-26 12:46:24', NULL, NULL),
(11, 1, 'https://picsum.photos/seed/hpFlPU/640/480', 'calendar speedily woot thoroughly gosh sadly yowza ha photodiode not', NULL, 'Depereo dens autem acceptus arx. Civis acerbitas benigne nemo abutor supellex cultellus varietas coma adsidue. Amita velociter tendo tempus adhuc placeat est celer.\nVado suffragium terebro ea utpote custodia defleo adeptio. Auditor totidem odit. Terror omnis omnis totus tubineus.\nVer vilis colligo velum vulgivagus talis inflammatio paens. Alveus summa desipio natus ara repellendus. Tergiversatio contigo ascisco commodo.\nSum adhaero crepusculum adsidue viriliter thesaurus tantillus cerno. Approbo desino sodalitas nihil sortitus vigor caute aspernatur. Arbustum pecus conculco abundans capitulus vulpes.\nAgo acervus veritatis ocer cui vaco tyrannus adulescens voluptatem qui. Dolor distinctio cogito corpus totus vehemens vomer astrum venustas deludo. Deleniti conqueror delectus admoveo condico desparatus conicio.', 0, '2024-03-26 12:46:24', NULL, NULL),
(12, 1, 'https://loremflickr.com/640/480?lock=437332943568896', 'vacate excepting aw but nonconformist fatally ah', NULL, 'Et mollitia velociter cupiditate vix tricesimus. Certe vesper suasoria demitto denego quia sollicito tabula depono. Appello paulatim suggero combibo tunc.\nVigor subvenio porro a super tertius absque sub perspiciatis adflicto. Absens amoveo aperio usque carus tribuo. Adimpleo argentum quidem reprehenderit aequus aeternus libero.\nTergiversatio desparatus autem concido vomica advoco blandior ducimus temperantia. Magnam viriliter caveo repudiandae corrupti vorax blanditiis comparo. Amissio demergo una solus vitiosus autem doloremque cognatus maxime.\nThymbra apparatus dolores. Utor copia carpo consequuntur laborum suspendo vitae. Carus cultellus inflammatio thymum quis virtus vito pauper.', 0, '2024-03-26 12:46:24', NULL, NULL),
(13, 1, 'https://loremflickr.com/640/480?lock=3904726378741760', 'refusal fat consequently shark inasmuch descriptive wisely', NULL, 'Creptio accommodo sopor pariatur celo doloribus decerno truculenter. Apparatus appono volva delinquo. Praesentium astrum cena acervus accendo molestias testimonium magni coniecto vicissitudo.\nOmnis corroboro ut depono. Aro depulso odit deputo amplitudo. Subseco ipsam curis arca constans ancilla.\nComedo defetiscor debitis aro caterva spiritus. Vinculum neque cito capitulus votum adulatio. Conspergo corrupti combibo curto architecto terga vita voluntarius utique.\nUsus sordeo autus agnitio deinde. Tendo spargo ratione vox desidero aspicio alias. Civis combibo tepesco at amplus stipes undique.', 0, '2024-03-26 12:46:24', NULL, NULL),
(14, 1, 'https://loremflickr.com/640/480?lock=4192022822912000', 'eek motionless flaky mistreat aromatic sleepily what pfft antedate', NULL, 'Aliqua crustulum arceo suffragium ad tolero constans depulso. Conor taedium vado usque benevolentia vesper. Desipio derideo theatrum.\nExercitationem succurro caelestis tempora dignissimos arbor tempore coaegresco. Vester vallum canto esse ascisco consectetur curto aperio tempus. Vere synagoga civis surgo eaque adhaero degusto uredo cursim.\nAduro ater aggero. Carus tersus desidero thorax votum. Cibo apud cilicium triduana surculus.\nSubnecto thesis tergeo sopor crastinus. Armarium ulciscor utrum magnam qui. Thesis timor ago aliqua victoria sortitus campana tamisium curso.', 0, '2024-03-26 12:46:24', NULL, NULL),
(15, 1, 'https://loremflickr.com/640/480?lock=1690545925652480', 'gullible vice apropos now puzzled boo smoothly glamorous priesthood fooey', NULL, 'Bos culpa arma comprehendo. Tamdiu claustrum templum usitas. Vester theologus vicinus deduco correptius.\nFugiat id cornu demonstro. Cupiditate vulnero et corpus aliqua verumtamen utique charisma tendo vulnero. Tumultus crebro aeternus territo communis carbo arceo.\nCorrumpo animus studio advenio decerno bardus clibanus antea cupiditas carbo. Armarium praesentium valde undique cavus corrumpo. Auctus solium veniam animus quod tergo eligendi valens.\nCupressus tubineus creo ait vulgivagus valeo ab. Quisquam eaque copiose toties perferendis cunabula unus. Amita compono arx sumo ut defendo modi molestias.\nClaudeo cicuta statua vorago cubitum depraedor patrocinor aduro civis. Defero sodalitas certus veritas. Advoco aut turpis somniculosus porro explicabo.', 0, '2024-03-26 12:46:24', NULL, NULL),
(16, 1, 'https://picsum.photos/seed/pHLA1Kxqk/640/480', 'clamp satirize sometimes to because forked', NULL, 'Aurum candidus stips aedificium talis. Ipsum cunabula turpis. Curvo aequus sordeo.\nVix adsidue adduco voluptates bardus solvo delibero umerus deprecator cultellus. Adversus vindico temptatio tondeo tum copiose vigor communis. Sponte recusandae teres quidem tempora.\nConicio trepide quaerat totam iure tametsi quasi laborum aro bibo. Corroboro audeo attero. Supellex tabula suppellex vindico apparatus aveho tego voluptates stultus.', 0, '2024-03-26 12:46:24', NULL, NULL),
(17, 1, 'https://loremflickr.com/640/480?lock=3733178372063232', 'old-fashioned ew without geez reamer', NULL, 'Surgo strues cresco asporto ipsum capillus aeger. Tergo ab cogito cursus cui. Turpis acidus explicabo vorago desino.\nTalio terror adversus cena damno. Utilis defluo agnitio unus quo caput quasi arbustum. Explicabo aptus adhuc autem cribro creber.\nConforto bos molestias clam odit ciminatio. Validus timidus terminatio ratione astrum. Vorago adulescens pariatur molestiae admoneo consequatur.\nPeccatus nisi decerno similique delectus complectus. Trucido una colo vos coniecto vir ciminatio. Cibus conforto doloribus tabernus adinventitias cito trans repudiandae caritas cognatus.\nDefetiscor uterque coadunatio tergo usque auctus coruscus. Apparatus aduro officiis subiungo aestus talis. Summisse tamisium cogo.', 0, '2024-03-26 12:46:24', NULL, NULL),
(18, 1, 'https://loremflickr.com/640/480?lock=2507945791193088', 'campaign high duh below very boohoo digitize among minus or', NULL, 'Uxor desparatus summisse sumptus caelestis tyrannus terminatio. Aequus aduro tendo sustineo conservo denuncio sum viscus. Aureus curo amita delego aliqua urbanus cultura non cupressus.\nTactus uterque tener corroboro nihil ara excepturi dicta. Corrumpo deprimo tepidus adhuc apostolus talio adeptio talus solus vis. Patruus deripio appositus perferendis arcus tardus summopere ademptio subseco.\nCrux defungo dolorum cras caries asporto reiciendis explicabo. Dicta suasoria enim valeo. Trans dolore antepono curvo cultura terga cilicium tertius.', 0, '2024-03-26 12:46:24', NULL, NULL),
(19, 1, 'https://picsum.photos/seed/VQgXUl8BV/640/480', 'phooey ugh jubilant chopstick capitalise apud stunt beneath', NULL, 'Amoveo stultus tam illum curvo tertius ver ater. Amor nisi charisma. Caelum caelestis dicta aduro degenero.\nCotidie denuncio officiis tantillus vindico vulpes correptius utilis cattus. Tergiversatio nihil terror aetas caries subiungo appositus aliquam curatio. Cursus crebro tricesimus voluptate.\nUxor aequitas canis centum voluptate quaerat ut chirographum. Synagoga bellum crux vulariter ulciscor sublime uredo summisse depopulo perspiciatis. Debilito somniculosus sit necessitatibus tyrannus repellat stabilis.\nDeprecator sunt comptus patria umerus perspiciatis succurro defleo. Xiphias brevis rerum antepono. Casso libero coma spes uberrime civis.', 0, '2024-03-26 12:46:24', NULL, NULL),
(20, 1, 'https://picsum.photos/seed/KDSlx/640/480', 'jasmine beside patiently ha hm', NULL, 'Demergo aut congregatio ulciscor enim tonsor capitulus. Tunc consuasor abstergo adhuc claro voluptates addo varius sonitus curtus. Auditor sustineo vitae libero pauci turba similique ver trans.\nPax agnitio cogo aperte libero creptio. Rem sollers conforto amaritudo. Sunt aperte dedico adhaero quis impedit ulterius conservo vox.\nSurgo advenio ex succedo. Virgo defaeco voluptatum tonsor supra deputo. Complectus recusandae earum sapiente confido delectus aer pecco varietas virgo.\nCruentus stipes tersus. Suggero voluptates beatae aro accusantium amplus nostrum. Amor aedificium cruciamentum delego curtus comminor vestigium vito quibusdam.', 0, '2024-03-26 12:46:24', NULL, NULL),
(21, 1, 'https://picsum.photos/seed/M70z6/640/480', 'towards politely intently whether minus whether lanky about hm till', NULL, 'Adinventitias cernuus vapulus cometes. Deserunt truculenter temporibus celer undique. Curatio bellum utor certus.\nAliqua arbustum vapulus. Coaegresco acquiro neque recusandae unus via. Collum cupiditas tabella eligendi calcar doloremque tepesco.\nVer denuncio pauci abbas accusantium tempore capto deduco communis. Vomica crastinus contego clementia spectaculum cultura conduco defendo. Decipio depono crastinus vestigium alioqui.', 0, '2024-03-26 12:46:24', NULL, NULL),
(22, 1, 'https://loremflickr.com/640/480?lock=4113232576905216', 'worriedly incidentally down vainly without suddenly', NULL, 'Curiositas surgo angulus pecco conculco. Defero eaque cubicularis tendo uberrime strenuus contego calculus delibero pectus. Venustas conservo abbas abeo aveho cervus ex tenetur stips benigne.\nCui defetiscor demitto caput eveniet rem cur valeo dicta suggero. Armarium aliqua corporis quam vesco sopor administratio thesis. Deputo sunt facere velum ver demens cernuus ante calamitas.\nAccedo clamo decerno coma deludo cursim bestia. Arx templum caelum circumvenio subvenio sumptus auxilium. Depono aiunt cervus mollitia verus cruciamentum defleo sopor.\nMagni tremo sol quis. Libero communis carbo carbo. Testimonium contego sui sulum praesentium thema volutabrum tui delego arbustum.', 0, '2024-03-26 12:46:24', NULL, NULL),
(23, 1, 'https://picsum.photos/seed/aJxyCsXel/640/480', 'unequaled loudly whoa wrongly clerk yuck warmhearted', NULL, 'Coaegresco volaticus sit totidem clementia iusto ipsa tactus bellum collum. Vigor voro articulus dicta praesentium talis copia. Caritas demulceo cornu sustineo occaecati totidem tertius corroboro.\nIusto fugiat vespillo. Consequatur volo auctor auctor dolores sono admitto. Communis succedo unde sunt deputo tamdiu sursum accusamus.\nUstilo uredo viduo supellex vinco. Vinculum sto ver tunc solus. Comprehendo derideo cursim.\nAcquiro spes quasi surculus dolorum. Cornu vallum deleo amissio commodi statua admitto theca adipiscor aperiam. Suspendo talis curto aut alias currus.', 0, '2024-03-26 12:46:24', NULL, NULL),
(24, 1, 'https://loremflickr.com/640/480?lock=4120642813165568', 'a what sharply so next patriot sternly onset hm', NULL, 'Accusamus aqua tabesco. Suasoria adeo peccatus viriliter tenus tactus aequitas tener perferendis. Cupiditas ars aiunt casso tam damnatio cohibeo tracto.\nTenetur benigne tardus vilicus tantum blandior. Spero alius amissio una carus. Thymum crepusculum deripio.\nVilis vulticulus defero aegrotatio bene stillicidium amaritudo desidero termes. Saepe tamquam vorax bos adstringo ceno absum. Autem deporto voro tego totus tamisium.\nStrenuus caste vulticulus victoria defungo. Bonus colo vulpes tepidus vestrum unus alius templum ademptio nostrum. Demum inventore depulso aegrus demo conscendo tam labore.\nEius creber soleo cras dicta. Thalassinus sublime compono vespillo aegrus vilicus tot coaegresco. Claudeo ars tot arcesso cohaero deprimo bos quas color.', 0, '2024-03-26 12:46:24', NULL, NULL),
(25, 1, 'https://picsum.photos/seed/uyNdz/640/480', 'miserly crowd yowza acidly athwart people yum', NULL, 'Certus nobis molestias tutamen defaeco infit tenus strenuus vito cuius. Capillus ademptio absorbeo amicitia thalassinus conspergo catena aliquid nihil. Alveus maiores labore pectus decor admoveo causa unus ducimus spiculum.\nVerbum sopor villa curo unus viduo vix acerbitas accommodo. Cornu ullus cado degusto agnitio solum claro cruciamentum. Spiritus solitudo vix adamo summa sufficio.\nDenuncio cunabula doloremque ademptio decerno ars soluta benevolentia tricesimus. Ulciscor curatio cedo usque velum. Vinco aqua coruscus tempora.', 0, '2024-03-26 12:46:24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `name` varchar(160) NOT NULL,
  `email` varchar(160) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('POST','COMMENT','BOTH','NONE') NOT NULL DEFAULT 'COMMENT',
  `status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `name`, `email`, `password`, `role`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'https://avatars.githubusercontent.com/u/63345696', 'Fabian Noah', 'admin@test.com', 'admin', 'POST', 0, '2024-03-26 12:46:24', NULL, NULL),
(2, 'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/414.jpg', 'Ofelia Emerson', 'user@test.com', 'user', 'COMMENT', 0, '2024-03-26 12:46:24', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `searchable` (`user_id`,`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `searchable` (`user_id`,`headline`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `searchable` (`name`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
