-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 14 2018 г., 01:50
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `imgPath` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` json DEFAULT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `created_at`, `updated_at`, `category_id`, `imgPath`, `gallery`, `header`, `text`, `slug`) VALUES
(1, NULL, NULL, 1, NULL, NULL, 'saepe19M', 'Aut fuga voluptatibus omnis. Nemo et quia ut. Cupiditate exercitationem velit et ad autem architecto quia voluptas. Unde occaecati odio esse velit rerum maiores quibusdam. Ad corrupti minima natus quo ipsum esse aliquam. Suscipit vel et voluptatem qui consequatur. Laborum quis aut unde saepe perferendis voluptates. Laudantium in consequatur odit amet enim culpa dolorem. Suscipit ea ex qui voluptatem harum excepturi rerum id. Suscipit doloribus qui doloribus aperiam aut cum ex. Sit non deleniti molestias sed. Optio minus et eos voluptate. Tempora fugiat ullam quo illum. Et nesciunt culpa velit vel qui. Ad aut dolorem occaecati eveniet unde ipsum. Quia ut quidem delectus. Necessitatibus aut odit laborum delectus esse ratione. Repellendus fuga minima quia aut earum. Sit quo voluptatem et quasi fugit. Natus dolorem quibusdam quia. Nesciunt eligendi iusto dolor quia illum sed quo. Dolor beatae cumque ex eveniet deleniti illum distinctio incidunt. Quaerat doloribus corporis rerum.', 'saepe19M'),
(2, NULL, NULL, 1, NULL, NULL, 'evenietMau', 'In quod rem officiis alias tempore praesentium voluptas. Voluptatibus quia vel voluptates accusantium. Dolor quis non qui vel tempora quaerat. Ducimus error veritatis sequi unde aut fuga cum. Molestias sint aut eligendi id voluptatem error et. Rerum tenetur vel consequatur sit autem quia. Voluptatem veritatis nisi inventore cum laboriosam qui. Provident voluptate enim qui laboriosam eum unde. Soluta eum eaque qui id accusamus voluptas quas. Laborum molestiae autem atque. Minus quod sunt sed quis consequatur velit. Aliquam dolorem inventore necessitatibus rem doloremque sed. Eaque aut similique qui nihil quaerat et. Eveniet sint sit earum eos sed. Harum accusamus sit minima et. Maiores reiciendis a quasi reprehenderit aut. Et modi sunt ratione quo facilis. Aperiam est nam animi rerum officia. Quasi sed et est officiis nihil iusto voluptatem dolorum. Reiciendis et nemo doloribus aut ut ea vel.', 'evenietMau'),
(3, NULL, NULL, 1, NULL, NULL, 'officiisl4H', 'Iusto dignissimos corrupti minima velit pariatur. Quia aut incidunt dolor cumque alias perspiciatis voluptatibus qui. Doloremque blanditiis asperiores qui. Eos sed alias dolorum corporis consequatur facilis dicta. Dolorum nemo voluptatem totam quidem repellat possimus. Enim et quisquam temporibus aut ut. Suscipit qui aut quia et ratione aut. Possimus iure omnis provident voluptas delectus sed vel. Blanditiis sed et fugiat et. Aut id fuga soluta ut voluptatibus. At voluptatem delectus accusamus laboriosam quis. Sit cum sequi amet dolores reprehenderit est est. Voluptatem et ipsa voluptate assumenda adipisci. Assumenda laudantium consequatur dignissimos corporis et. Voluptas quia quod voluptatem similique tempore provident aliquid. Adipisci adipisci nihil ex ex quod voluptas eos. Aut quia nemo ex non aspernatur quia. Dolorem sed aperiam sit. Quia ipsum nemo eaque nostrum. Ea est voluptatem tenetur sunt qui placeat.', 'officiisl4H'),
(4, NULL, NULL, 1, NULL, NULL, 'auth82', 'Molestiae magnam maxime quam dolorem sunt odit totam. Tempora fuga dolores dolor voluptatem facilis neque. Temporibus est ab expedita consequuntur. Vel expedita quo error natus ullam. Officiis alias in reiciendis ea. Molestias est dolores est consequatur non quia ad. Voluptates occaecati qui quo consequatur ex modi. Sint culpa quisquam excepturi maxime vitae saepe ut. Rem voluptatum voluptas omnis. Molestiae omnis similique voluptatem quidem sed qui. Omnis commodi ratione blanditiis quis ipsa distinctio. Voluptate aliquam quae nostrum nesciunt. Quibusdam nulla nesciunt doloremque rerum magnam ut nam. Alias sapiente repudiandae omnis iure sit. Reprehenderit ut in optio velit rerum asperiores perspiciatis veniam. Ipsum occaecati assumenda quia omnis aut reiciendis deleniti. Cum itaque placeat consequatur. Recusandae natus sit nulla sunt.', 'auth82'),
(5, NULL, NULL, 1, NULL, NULL, 'id3zV', 'Nihil voluptas tempore odit labore perspiciatis ut. Corrupti voluptate asperiores dolor illum itaque voluptatibus ipsam perspiciatis. Iusto voluptates dolore officiis assumenda iusto nulla necessitatibus. Fuga aut et aut consequatur totam. Repellendus voluptate sunt aperiam. Dolores ipsa est doloribus saepe saepe. Dicta ex officiis nam laboriosam tempora. Dolor iusto nostrum vero tempore. Quia consequatur qui dolore mollitia. Error libero adipisci eum pariatur sint rerum. Dolor sit id nostrum sed suscipit. Fuga numquam vel harum ad. Consectetur asperiores ex odio iusto. Beatae est incidunt maxime voluptas sint et. Veritatis maiores porro non mollitia quos. Minima a dignissimos ut molestias nisi et. Ut corporis laborum soluta repudiandae. Mollitia omnis deleniti quo ad quia. Natus nesciunt suscipit placeat quo sequi.', 'id3zV'),
(6, NULL, NULL, 2, NULL, NULL, 'autemgwi', 'Debitis ipsa illo tenetur. Aut sapiente ut non. Quaerat laboriosam voluptatum aut sed sed. Reprehenderit et non adipisci dolores et et. Dolorem ab ipsum optio dolores. Magnam rem commodi rerum magnam nisi est nam culpa. Aut dicta recusandae cumque sequi culpa eum ea. Amet nemo dicta reprehenderit blanditiis vero culpa. Autem sed et illum molestiae quos qui amet. Cupiditate doloribus nulla fugit ex hic. Dolores in optio sit quod qui sint. Distinctio optio vero fugiat ut aperiam consectetur saepe. Cumque ut voluptatum soluta. Dolore et quas exercitationem unde sint culpa dolorem. Laboriosam occaecati quia necessitatibus non. Doloribus in molestiae cumque qui molestias. Est et aliquid ipsam voluptatem dolor quis corrupti. Quisquam dolorum nesciunt ut doloribus. Quo recusandae quos cupiditate aut est quis. Vero a laborum officia est magni non. Optio illo hic non fugit doloribus at accusantium.', 'autemgwi'),
(7, NULL, NULL, 2, NULL, NULL, 'doloribuskzz', 'Saepe consectetur unde qui natus illo. Fugiat aut aliquam est ut et quia et sit. Dolores alias temporibus deleniti ut. Est est nam vel enim ipsam id repellat. Aliquam sit libero suscipit rem odio labore. Aut omnis qui cupiditate nobis dolor sed numquam. Necessitatibus aut fuga tempore ratione autem eos. Expedita totam blanditiis itaque porro consectetur velit quae. Assumenda totam aut voluptatem qui optio. Veritatis dolorum corporis eveniet debitis et soluta veritatis unde. Cumque aperiam velit deleniti nisi aut. Veniam veniam voluptatum odit suscipit enim ut. Natus delectus qui praesentium animi pariatur. Unde eum magnam rerum nesciunt. Qui est veritatis voluptate sapiente eum officiis. Magni deserunt et rerum. Debitis vel libero velit totam. Sunt aliquam dolorem laboriosam consequuntur et. Similique dolor quas vel soluta. Facere ea a et vel.', 'doloribuskzz'),
(8, NULL, NULL, 2, NULL, NULL, 'velitNWl', 'Est est voluptates ut quod est blanditiis qui. Sint id libero eius architecto et amet ut. Vitae consequatur nobis maxime sit atque totam. Perspiciatis eveniet iure ex distinctio beatae. Commodi expedita reprehenderit nesciunt in ex. At vero doloremque beatae nemo. Voluptas impedit nam mollitia dolores ipsum modi fugit laborum. Omnis dolorem quis libero ad reiciendis excepturi deleniti magni. Vitae dolorem eos reiciendis iure non sapiente porro totam. Magni magnam delectus id est quia sed nihil. Assumenda facilis qui consectetur ut. Voluptatem voluptas molestias eum pariatur exercitationem numquam repudiandae dolores. Iste nobis quod voluptatem aut voluptas enim debitis. Esse ut maxime quaerat. Excepturi cumque aliquam eligendi cupiditate. Placeat a pariatur labore inventore. Explicabo temporibus impedit sunt aut id est neque. Nobis nam qui voluptatum natus qui quia. Et nihil dicta veritatis nostrum laudantium. Aperiam culpa itaque fugiat itaque ad sint.', 'velitNWl'),
(9, NULL, NULL, 2, NULL, NULL, 'repellenduskmm', 'Dicta odio laboriosam deserunt qui voluptatem. Voluptate dolorem qui est dolores doloribus dolorum. Voluptas cum ratione harum deserunt enim ad. Est autem quod molestias nisi doloribus qui consequatur. Nobis harum dolorem cum vero suscipit facere laborum. Corrupti hic perferendis dolore ad tenetur eos. Hic et ut beatae. Itaque quis repellat voluptas sapiente nostrum sint nostrum dolor. Nostrum est deleniti omnis est eligendi. Aliquam accusamus aut in eos incidunt exercitationem unde. Qui sit et tempore sed quia. Vero est magnam asperiores dolore. Aperiam quia corporis architecto. Voluptatem dolores eius consequatur aliquid amet nisi. Sunt sunt ea consequatur fuga mollitia. Non rerum modi velit animi animi in sequi enim. Placeat in temporibus fugiat nam est. Qui autem nihil distinctio cum ullam. Similique consequatur voluptas eaque optio. Aut beatae quisquam dicta quae. Reprehenderit nisi sequi dolorem quaerat.', 'repellenduskmm'),
(10, NULL, NULL, 2, NULL, NULL, 'autemsjZ', 'Quia odio quasi sunt rerum consequatur aut officiis. Aut nisi ipsum voluptatem hic. Autem at dignissimos veniam ut. Odio tempore molestiae ullam qui. Cum similique et nam quisquam repellat sunt quo nobis. Mollitia dolore tenetur molestiae velit voluptatem suscipit beatae ut. Modi alias temporibus dolorem commodi eos. Sed consequatur consequatur cumque quis numquam ea. Enim et animi suscipit culpa molestiae. Atque doloremque officia aut exercitationem. Officia quis qui voluptatem corporis vel quis. Harum omnis id eaque et et. Ratione dolore sit eveniet nemo et. Ipsam est ipsa quaerat. Repellendus tempora id aliquid libero enim consequuntur. Nam molestiae sit atque temporibus at fuga. Dolorum qui maiores hic consequatur corrupti laudantium eligendi. Molestiae optio animi enim voluptatem perspiciatis sit voluptatem.', 'autemsjZ'),
(11, NULL, NULL, 3, NULL, NULL, 'etwN3', 'Et voluptatem temporibus qui deleniti. Assumenda et veritatis asperiores doloremque et voluptatem. Laudantium deleniti ut facilis saepe asperiores quo eos. Mollitia iste est dolore sunt ipsam quos. Numquam laudantium deleniti quidem eius atque vel odio. Esse deserunt voluptatem qui qui et temporibus ab. Voluptas et cum occaecati qui voluptas ut placeat. Eum et quaerat distinctio deleniti. Voluptatem rem ipsa dolorem iure quis corrupti. Sint delectus cumque autem placeat. Saepe vitae vel vel. Consequatur rerum consequuntur sed sed. Facilis reprehenderit laudantium ipsum quisquam sequi. Veniam rem incidunt minima reiciendis animi illo. Alias laudantium atque non libero perspiciatis dolor aut. Aspernatur aspernatur labore a. Deleniti voluptatem rem at est quisquam ipsam omnis velit. Recusandae quia ratione totam dignissimos. Expedita deleniti velit qui iste dignissimos incidunt.', 'etwN3'),
(12, NULL, NULL, 3, NULL, NULL, 'corruptiKmR', 'Labore quidem molestias non culpa numquam quisquam. Veniam neque nisi dolor quaerat porro. Ipsum cupiditate non nihil excepturi. Dolores perspiciatis id occaecati maxime accusantium molestiae deleniti. Amet voluptatum consequatur officia voluptas et reprehenderit ipsum. Aspernatur enim cum dignissimos et. Et vitae rem esse saepe. Quasi molestiae ut maiores cumque. Omnis odit aspernatur sint. Aut quia sit officiis exercitationem accusantium commodi autem. Tempora excepturi qui laudantium accusantium non quo. Aliquid nemo ipsam et magnam. Et quod voluptas blanditiis nemo. Et exercitationem similique dolorem ad est nam nemo ut. Occaecati reiciendis excepturi non commodi. Qui quia molestias sit ea iste quibusdam. Perferendis est assumenda voluptatem. Dolorum dolores iure labore earum illo. Nemo ut est sunt corporis qui hic et. Qui non vero mollitia neque occaecati debitis hic.', 'corruptiKmR'),
(13, NULL, NULL, 3, NULL, NULL, 'exercitationemsLL', 'Recusandae dolorem maxime et libero. Sit nemo et corporis ut ut. Optio nihil quas mollitia hic. Nihil dolor dolorem minima rerum earum. Dolor sapiente eos vero quia rerum nostrum molestias. Velit occaecati minima facilis velit. Facere quaerat et consequuntur et hic magni. Id enim perferendis unde quo sunt sit. Vero sed adipisci numquam placeat. Velit ut quo excepturi ab rem ad laborum. Qui saepe et dolores excepturi aliquam. Aut minus accusantium amet. Itaque sit autem eos quidem officia. Et vel ut modi. Cupiditate omnis saepe rerum non architecto et excepturi. Dicta quasi sequi repellat unde id quo. Reiciendis qui facilis sint qui. Recusandae et dolorem nam iste. Possimus quia tenetur explicabo laboriosam ad commodi numquam. Eveniet doloribus in labore eius expedita. Nisi aliquam repellat at ut. Atque eveniet magni quasi nam libero. Ut alias quas quia qui nisi. Cupiditate ut adipisci nam reiciendis dignissimos numquam. Quod eos odit corporis. Minus placeat et ut est sint cumque et.', 'exercitationemsLL'),
(14, NULL, NULL, 3, NULL, NULL, 'consequaturRzP', 'Suscipit in soluta voluptatibus eligendi asperiores et. Sint aut nostrum maxime impedit nulla quis. Magni quae aut voluptas laboriosam aut placeat est. Culpa consectetur voluptas nisi deserunt voluptas qui doloremque voluptates. Dolores nisi nulla dicta quis doloribus. Unde excepturi nihil omnis qui animi ad autem. Esse ut et ex dolorum architecto assumenda. Minima aut pariatur rerum quia. Repellendus aut quis consequatur officiis. Fuga accusantium quibusdam ad vero porro. Sed et perferendis repellendus maxime sunt. Deleniti tempora sed delectus occaecati non ut iste. Iste quidem dolorem voluptatibus sit eligendi. Iusto voluptate officiis est suscipit voluptatum fugit hic labore. Suscipit laudantium saepe et odit et dolor. Totam qui sit velit et et. Quis omnis et dolorem nam incidunt. Autem adipisci nemo dolorem quod ipsam odio. Modi dolor facilis ut explicabo. Nemo culpa id et saepe voluptas ducimus nam. Ipsum provident non optio velit.', 'consequaturRzP'),
(15, NULL, NULL, 3, NULL, NULL, 'eum3E6', 'Eius necessitatibus recusandae iste nesciunt culpa quo aut. Veniam ipsa voluptate quas quisquam. Cum vel pariatur eum et aut totam eaque molestias. Illum architecto architecto excepturi iusto. Neque voluptates nihil consequuntur ea ut. Fugit occaecati sed asperiores quas maiores omnis atque. Placeat cupiditate voluptas quisquam quas reiciendis ipsum veritatis. Voluptates aut beatae perspiciatis nam possimus et illo omnis. Aut enim aperiam cum ipsam et aspernatur. Est laborum officiis qui sapiente eum vitae. Commodi ipsam minus qui hic labore vel illo necessitatibus. Iusto quis et ut cupiditate ut sint aut perferendis. Et repudiandae odio omnis sapiente eum officia minima quam. Esse labore occaecati autem quos corporis ut id earum. Mollitia perspiciatis impedit deleniti accusamus. Ut est vitae aut nam. Reiciendis quis reprehenderit quidem iure et non. Repellat et recusandae rerum sed. Nemo nihil fugit beatae aliquid nesciunt. Nulla accusantium sit molestiae doloremque.', 'eum3E6'),
(16, NULL, NULL, 4, NULL, NULL, 'voluptasMzB', 'Dicta voluptas et nulla est iusto laboriosam eos cum. Ea nobis quia odit inventore sed. Illum consequatur aut quia aperiam quod dolorum. Placeat et sint est dolore voluptates et amet. Pariatur ut velit facere voluptatem. Voluptas sapiente sed et sint. Est quia nihil praesentium officiis maxime delectus. Aspernatur libero et non autem laudantium. Neque animi nobis iure ducimus provident. Iste delectus eligendi dolor voluptatem nihil. Expedita dolores placeat quis molestiae. Eum enim doloremque animi dolor aut. Sapiente incidunt officiis voluptatum nulla. Laboriosam dolore qui at ea beatae sunt qui. Impedit atque eos recusandae nam in. Ut non in sit perspiciatis voluptatem. Aperiam dignissimos hic eaque ullam. Dicta odio maxime dignissimos enim dolor. Nihil sed mollitia impedit ipsam perspiciatis et. Voluptatum et velit molestiae itaque quasi vero qui. Vel voluptatem sed sit molestias. Voluptas ipsam iste minus temporibus dolorum est aut.', 'voluptasMzB'),
(17, NULL, NULL, 4, NULL, NULL, 'estGT2', 'Illum culpa delectus ab nulla non aliquid. Adipisci sequi blanditiis libero eum praesentium. Illum reprehenderit non iusto non alias. Qui aut qui ut voluptates nisi. Occaecati nemo iusto quam suscipit magnam aut. Sed nihil exercitationem ut quia. Qui vel necessitatibus ipsam voluptas esse ipsum. Dolorem sit accusamus et sed alias aut. Id maiores placeat sunt dolor. Est voluptatem hic voluptas nam voluptate nostrum. Et consequatur repellat illo iure architecto consequatur inventore. Fugit voluptas deserunt error amet omnis non iste vero. Sed voluptas tenetur quo laborum suscipit voluptatem sunt accusamus. Harum commodi similique qui praesentium quas ut. Ut et fugit cum consequatur enim. Ut voluptatem asperiores beatae omnis impedit impedit aut. Dolorum tempore qui quo. Earum quibusdam quia et rerum non labore. Pariatur enim officia sint perferendis eaque. Est nesciunt consequatur eaque voluptates non. Sed laborum nemo natus reiciendis.', 'estGT2'),
(18, NULL, NULL, 4, NULL, NULL, 'omnisGFX', 'Fugit asperiores temporibus voluptatem necessitatibus. Omnis voluptates temporibus sit quibusdam temporibus quam. Aut nesciunt odio aut deserunt aut nostrum. Impedit consequuntur qui corrupti maxime dolore dolor. Doloribus adipisci voluptate et minus perferendis voluptatibus. Eum rerum vero maiores sit consequatur autem. Aut accusamus hic velit ut quam excepturi quo. Maiores reiciendis dolor voluptates eum molestiae vitae tenetur. Qui maxime et temporibus aspernatur aut. Tempora est ut nobis ullam reiciendis ab facere. Et alias quia quia aut. Commodi ipsam qui et vitae atque reiciendis eos. Ut et ea deserunt aperiam consectetur. Dolor qui nesciunt quos a ad rerum. Sit id rerum esse occaecati. Quia hic corrupti sit debitis minima sit. Dolor dignissimos laudantium error dolorem. Perspiciatis earum aut voluptas odit fugiat. Quae voluptatibus dicta qui reprehenderit ad numquam. Repellat praesentium atque nisi. Delectus dolor quia sed itaque asperiores.', 'omnisGFX'),
(19, NULL, NULL, 4, NULL, NULL, 'rationeH0W', 'Sit aut accusamus ipsum id. Et suscipit et autem perspiciatis. Voluptates non non et et ratione animi. Maiores molestiae inventore minima natus voluptas maxime. Vitae qui illum vitae officia. Expedita necessitatibus necessitatibus quia. Mollitia necessitatibus officiis totam accusamus. Voluptates adipisci corrupti et id qui mollitia. Temporibus vero ratione aut consequatur odit. Minus et non velit est vel illum at. Tenetur dolore saepe minima nesciunt optio aspernatur aut. Eos eos rerum eaque temporibus sint veritatis. Labore quia repudiandae aut quo sed repellat provident. Adipisci corrupti ullam ducimus soluta animi rerum officiis. Quis rerum ut explicabo et. Rerum aliquam corrupti doloremque neque iusto non. Voluptas quos harum temporibus eos. Et eius aut ut. Doloribus omnis sit vero. Labore quo debitis est sit. Accusantium ea dolorum sit consectetur eaque et. Sed iusto aut vel deleniti aspernatur dolores. Suscipit ullam non in consectetur neque.', 'rationeH0W'),
(20, NULL, NULL, 4, NULL, NULL, 'adipisciRPY', 'Velit velit est odit repellendus aut deleniti ea. Reprehenderit maiores harum veritatis. Iure alias nihil natus totam vitae aspernatur. Voluptas consequuntur sed distinctio commodi. Distinctio eos placeat dolor ad voluptate expedita quas. Architecto dolores eligendi ea sequi quae. Non unde fugit rerum libero officiis exercitationem omnis. Facere et et veniam rerum asperiores cumque neque qui. Vel maiores illo blanditiis eaque. Praesentium rerum sed aspernatur voluptates ut sint. Eos illo nobis eius voluptas aut exercitationem autem. In et quis corporis libero. Totam quos dolores tempora labore necessitatibus dignissimos quos. Sed illum est aliquam. Aut dolorem autem quo minima consequuntur culpa modi. Minus ducimus et sed veniam nobis. Asperiores et iusto qui aut ut et harum odio. Voluptatem eligendi illo est quo. Libero odio nemo ea rerum odit. Dicta necessitatibus veritatis voluptas dolorum hic.', 'adipisciRPY');

-- --------------------------------------------------------

--
-- Структура таблицы `article_categories`
--

CREATE TABLE `article_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `article_categories`
--

INSERT INTO `article_categories` (`id`, `created_at`, `updated_at`, `name`, `slug`) VALUES
(1, NULL, NULL, 'Offers', 'offers'),
(2, NULL, NULL, 'Shipping info', 'shipping-info'),
(3, NULL, NULL, 'Information', 'information'),
(4, NULL, NULL, 'About us', 'about-us');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `shorttext` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `shopname` text COLLATE utf8mb4_unicode_ci,
  `mapsrc` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `created_at`, `updated_at`, `address`, `phone`, `email`, `text`, `shorttext`, `description`, `keywords`, `shopname`, `mapsrc`) VALUES
(1, NULL, NULL, '69000, Ukraine, Zaporizhzhya, Sobornye, 1', '+38(999)99-99-99', 'test@test.com', 'Welcome to our shop!', 'Welcome to our shop! best shop of all shops', 'Best clothes shop all over the world freeshipping', 'shop clothes new collection 2019', 'Best Shop', 'https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d8501.437318596923!2d35.135520251948435!3d47.84375884168317!3m2!1i1024!2i768!4f13.1!5e0!3m2!1suk!2sua!4v1541447194463');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(592, '2014_10_12_000000_create_users_table', 1),
(593, '2014_10_12_100000_create_password_resets_table', 1),
(594, '2018_08_10_180913_create_table_roles', 1),
(595, '2018_08_21_183446_create_product_category_table', 1),
(596, '2018_08_22_181830_create_products_table', 1),
(597, '2018_09_16_192927_create_orders_tables', 1),
(598, '2018_10_21_180504_create_reviews_table', 1),
(599, '2018_10_22_174509_create_testimonials_table', 1),
(600, '2018_10_23_163455_create_article_categories', 1),
(601, '2018_10_23_163921_create_articles', 1),
(602, '2018_10_24_163921_create_contacts', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `price` decimal(7,2) DEFAULT NULL,
  `address` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `qtt` int(10) UNSIGNED NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `imgPath` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` json DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `recommended` tinyint(1) NOT NULL DEFAULT '0',
  `slug` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instock` tinyint(1) NOT NULL DEFAULT '1',
  `popularity` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `category_id`, `imgPath`, `gallery`, `name`, `price`, `description`, `recommended`, `slug`, `instock`, `popularity`) VALUES
(1, NULL, NULL, 6, 'http://z95577e6.beget.tech/uploads/files/shares/1/1.JPG', '[\"http://z95577e6.beget.tech/uploads/files/shares/1/2.JPG\", \"http://z95577e6.beget.tech/uploads/files/shares/1/3.JPG\"]', 'utBtQ', '16.57', 'Non veniam cum qui. Dolore dolore cum omnis. Nam eligendi fugit ut sint suscipit. Officiis quos recusandae aut expedita et id voluptates. Temporibus quia aut tempore inventore tempora. Tempore atque omnis similique tempora officia omnis fuga. Nobis unde et porro quos. Sed assumenda fugit atque quo. Rem ab similique magnam incidunt. Enim qui ratione esse officia illo provident sed temporibus. Ratione inventore itaque nesciunt labore ea velit maiores. Harum recusandae maxime alias qui commodi suscipit quis. Et nulla voluptas omnis quibusdam repellat quis quia.', 0, 'utBtQ', 1, 0),
(2, NULL, NULL, 3, 'http://z95577e6.beget.tech/uploads/files/shares/1 - копия/1.JPG', '[\"http://z95577e6.beget.tech/uploads/files/shares/1 - копия/2.JPG\", \"http://z95577e6.beget.tech/uploads/files/shares/1 - копия/3.JPG\"]', 'atquePbb', '8.13', 'Sint molestiae aut et et similique qui ipsum. Et ea vero rerum eligendi ut. Quae non quia dolore incidunt dolorem. Ut rerum itaque quia est repellendus quas laboriosam. Ab quos in placeat nostrum accusamus. Unde eum impedit quibusdam eos. Qui ab minima ut aut. Recusandae qui nihil vero eum nemo ipsa quia. Vitae hic dignissimos animi. Unde necessitatibus consequatur dolorum voluptas sint ut. In et tenetur dolores ea eius nihil autem. Atque itaque nulla eveniet rerum. Labore vitae iure quo tempore quia autem. Et quam rem ea non.', 1, 'atquePbb', 1, 0),
(3, NULL, NULL, 2, 'http://z95577e6.beget.tech/uploads/files/shares/1 - копия (2)/1.JPG', '[\"http://z95577e6.beget.tech/uploads/files/shares/1 - копия (2)/2.JPG\", \"http://z95577e6.beget.tech/uploads/files/shares/1 - копия (2)/3.JPG\"]', 'nesciuntBbs', '12.48', 'Voluptatem impedit in officiis unde debitis minima id. Exercitationem laboriosam pariatur ea. Modi possimus aut id ab quia similique. Minima nostrum eaque sapiente sed et nihil facilis. Ex nihil velit amet autem mollitia voluptates aliquid. Tenetur omnis ullam voluptates labore sunt qui et. Vitae dolor necessitatibus labore inventore quaerat. Consequuntur ut sit sint modi. Aut culpa amet blanditiis ullam iste in. Quaerat omnis accusamus minima et quia. Rem saepe numquam adipisci nam aut dolorum. Aut excepturi quis est in voluptatem ut quibusdam.', 0, 'nesciuntBbs', 1, 0),
(4, NULL, NULL, 8, 'http://z95577e6.beget.tech/uploads/files/shares/2/1.JPG', '[]', 'veleoT', '33.22', 'Voluptas consequatur sed deleniti neque vel autem magnam. Voluptate magnam alias dolores enim omnis iusto eum eum. Qui voluptates nam quis commodi ut porro. Qui ea et error deserunt iusto repudiandae unde minima. Temporibus voluptatibus aut recusandae sunt neque. Minima quo consequatur cum quibusdam fugiat occaecati. Voluptas facilis similique veniam sit tempora voluptatem. Non dolores velit nihil deserunt nostrum dignissimos est.', 0, 'veleoT', 1, 0),
(5, NULL, NULL, 6, 'http://z95577e6.beget.tech/uploads/files/shares/2 - копия/1.JPG', '[]', 'similiquefzJ', '50.68', 'Occaecati provident quia nam. Reprehenderit ea aperiam animi provident aperiam. Repellendus doloremque quis in molestiae. Dolorem molestiae consequatur recusandae officiis soluta. Porro soluta dolorum hic at consequatur est. Nisi enim dolorem eos quis quia. Vel delectus recusandae blanditiis est modi animi. Aut nemo quos culpa ut placeat. Voluptas accusamus accusantium itaque aperiam quia. Aliquam quia velit labore placeat harum. Accusantium magnam nihil deserunt qui rerum pariatur ipsa. Ipsam alias possimus dolores consequatur aliquid quaerat qui.', 0, 'similiquefzJ', 1, 0),
(6, NULL, NULL, 2, 'http://z95577e6.beget.tech/uploads/files/shares/2 - копия (2)/1.JPG', '[]', 'rerum7KN', '42.65', 'Aperiam fugiat distinctio sint voluptatem quia quidem est. Et eligendi sed quae ipsum reiciendis. Eum corrupti sint harum nihil voluptatum. Accusamus adipisci necessitatibus ratione provident dolor. Vitae quod doloremque ut corporis. Maxime ratione doloremque ducimus magni. Rem id qui est architecto et. Aut minima maiores error quidem. A illo repudiandae nobis. Omnis error similique optio et. Dolor est dignissimos commodi inventore dignissimos sed. Delectus corrupti nam corrupti necessitatibus.', 0, 'rerum7KN', 1, 0),
(7, NULL, NULL, 3, 'http://z95577e6.beget.tech/uploads/files/shares/3/1.JPG', '[\"http://z95577e6.beget.tech/uploads/files/shares/3/2.JPG\"]', 'aliquidyC7', '54.35', 'In ipsum architecto rerum et ea architecto vel debitis. Eveniet quaerat labore eligendi et reiciendis. Amet recusandae atque porro nemo nihil quia tenetur. Temporibus fugit velit quos quia maiores consequatur natus qui. Facere aut suscipit eos. Consectetur vel ab occaecati est ab repellendus officia. Repellendus voluptatem magni commodi sint occaecati omnis animi. Laborum at dolore vero. Incidunt voluptatem voluptatem consequatur nostrum aut. Consectetur quam aspernatur consequatur et. Ipsam iste harum esse quasi. Ea nihil perferendis fuga magni rem. Odio vel laudantium iure.', 1, 'aliquidyC7', 1, 0),
(8, NULL, NULL, 3, 'http://z95577e6.beget.tech/uploads/files/shares/3 - копия/1.JPG', '[\"http://z95577e6.beget.tech/uploads/files/shares/3 - копия/2.JPG\"]', 'nisi9Cf', '96.95', 'Eos sunt eveniet perferendis error nulla earum dolorum. Beatae ipsum odio est et voluptatem tempore. Enim officiis reprehenderit ipsa est. Nisi sed mollitia aut consequatur. Omnis iusto dignissimos sequi. Numquam ex omnis et enim nulla dolor. Suscipit hic officiis vitae odio quae harum et quaerat. Dolore aliquid qui id non sapiente vitae. Fugiat cupiditate commodi exercitationem ratione cumque dolorem. Eligendi voluptas ut autem soluta. Pariatur fugit hic voluptate corrupti possimus magnam dolores. Delectus rem praesentium eveniet sit.', 0, 'nisi9Cf', 1, 0),
(9, NULL, NULL, 9, 'http://z95577e6.beget.tech/uploads/files/shares/3 - копия (2)/1.JPG', '[\"http://z95577e6.beget.tech/uploads/files/shares/3 - копия (2)/2.JPG\"]', 'aut1y6', '59.81', 'Occaecati natus eius sit ut fugiat. Eaque ducimus eaque enim reprehenderit aliquam provident veritatis. Explicabo et eveniet ut qui non delectus repellendus. Quia maiores corrupti consequatur eum quod nisi. Temporibus eligendi aspernatur quia asperiores totam quis. Provident a officiis facere ut. Nulla veniam sint voluptatem quidem autem. Perferendis maxime odit nam rem. Repudiandae officiis fugiat vitae. Quod voluptate sit cumque officiis quis odio. Dolorem est qui necessitatibus possimus sit. Corporis aspernatur dignissimos architecto totam et neque.', 0, 'aut1y6', 1, 0),
(10, NULL, NULL, 3, 'http://z95577e6.beget.tech/uploads/files/shares/5/1.JPG', '[\"http://z95577e6.beget.tech/uploads/files/shares/5/2.JPG\", \"http://z95577e6.beget.tech/uploads/files/shares/5/3.JPG\"]', 'minimay81', '78.81', 'Sint et placeat id illo impedit dicta ea. Odit quia est quas. Et ab ipsum vero et nemo odit et. Dolores voluptatem impedit aut voluptas excepturi. Cum est laboriosam est labore a quidem. Ab aperiam natus maiores ipsum molestiae aut recusandae. Eum temporibus et quasi at quis. At deserunt modi amet eligendi quae. Saepe in alias ex mollitia voluptatem maiores inventore molestias. Et quam commodi dicta. Quis perferendis ea reprehenderit consectetur iusto.', 1, 'minimay81', 1, 0),
(11, NULL, NULL, 2, 'http://z95577e6.beget.tech/uploads/files/shares/5 - копия/1.JPG', '[\"http://z95577e6.beget.tech/uploads/files/shares/5 - копия/2.JPG\", \"http://z95577e6.beget.tech/uploads/files/shares/5 - копия/3.JPG\"]', 'sedOng', '13.13', 'Id nulla eveniet at at eaque at. Labore ut et est vitae et. Totam consequuntur veniam id magnam magnam dicta aut provident. Sapiente nesciunt natus fugiat sint officia dignissimos voluptas. Cum est optio magni ipsa qui. Aliquid et quo saepe tempore. Autem rerum perspiciatis saepe totam. Error pariatur repellendus possimus. Cupiditate vel quas asperiores ea natus quaerat inventore. Repellat exercitationem ut officiis optio et ducimus. Possimus dolor iste nihil reprehenderit dolor aut natus debitis.', 0, 'sedOng', 1, 0),
(12, NULL, NULL, 2, 'http://z95577e6.beget.tech/uploads/files/shares/5 - копия (2)/1.JPG', '[\"http://z95577e6.beget.tech/uploads/files/shares/5 - копия (2)/2.JPG\", \"http://z95577e6.beget.tech/uploads/files/shares/5 - копия (2)/3.JPG\"]', 'utSp5', '94.95', 'Eos id et iure dignissimos omnis consequatur aut. Ut sint dicta adipisci perspiciatis omnis sed sed. Voluptate iure ut qui quasi. Laudantium qui voluptas impedit ea architecto esse deleniti sunt. In adipisci asperiores eaque commodi. Non amet nihil earum recusandae. Voluptatem nemo iste aut consequatur architecto consequatur. Veritatis doloribus perspiciatis omnis voluptatem. Ipsam eos unde ducimus quo inventore consequatur. Repellat nihil doloribus id est.', 1, 'utSp5', 1, 0),
(13, NULL, NULL, 5, 'http://z95577e6.beget.tech/uploads/files/shares/6/1.JPG', '[\"http://z95577e6.beget.tech/uploads/files/shares/6/2.JPG\", \"http://z95577e6.beget.tech/uploads/files/shares/6/3.JPG\"]', 'harumd1H', '20.51', 'Est soluta accusantium natus exercitationem. Ab sit esse quo. Aut id nostrum et impedit. Dolor dicta eum odit facilis et quam culpa. Consequatur officiis ea nihil. Ducimus quasi est amet voluptates possimus dolorum. Fugiat in non enim architecto libero dolores natus. Officiis quas iste non et asperiores sed reprehenderit. Eum asperiores repellendus error quis perspiciatis praesentium ipsum qui. Corporis accusantium error earum et sit. Autem dolore officia error ut.', 1, 'harumd1H', 1, 0),
(14, NULL, NULL, 2, 'http://z95577e6.beget.tech/uploads/files/shares/6 - копия/1.JPG', '[\"http://z95577e6.beget.tech/uploads/files/shares/6 - копия/2.JPG\", \"http://z95577e6.beget.tech/uploads/files/shares/6 - копия/3.JPG\"]', 'illumtrj', '52.13', 'Omnis beatae velit et quibusdam rerum. Doloribus iusto neque deserunt doloremque. Corporis ut atque aut nostrum rem amet. Ab tenetur id dolores maiores atque nesciunt dolorem quis. Cum libero nostrum dolores aut possimus illo eum. Iste et dolorem placeat distinctio veritatis voluptatem qui amet. Laborum excepturi consequatur dolor nam. In ea similique sit accusamus ut inventore doloribus. Ea id aliquam debitis veniam explicabo. Minima veritatis in dolor. Amet perferendis dolor et cumque officiis. Dolor voluptatem et hic repudiandae vel. Cumque enim dolor ea exercitationem possimus.', 0, 'illumtrj', 1, 0),
(15, NULL, NULL, 3, 'http://z95577e6.beget.tech/uploads/files/shares/6 - копия (2)/1.JPG', '[\"http://z95577e6.beget.tech/uploads/files/shares/6 - копия (2)/2.JPG\", \"http://z95577e6.beget.tech/uploads/files/shares/6 - копия (2)/3.JPG\"]', 'ipsambXC', '45.73', 'Est fuga accusamus natus et fugit. Consectetur eaque aut laborum molestiae consequatur et quas. Et atque iusto aliquid optio esse doloribus sequi. Consectetur assumenda nobis et ratione ut ut. Est nesciunt doloremque occaecati et et. Dolorem voluptatem dolorum quia facilis. Quasi dolor iste quaerat autem maiores aliquam voluptates deleniti. Est corrupti quia sunt cum tenetur. Voluptatem et atque est aut quo qui.', 0, 'ipsambXC', 1, 0),
(16, NULL, NULL, 5, 'http://z95577e6.beget.tech/uploads/files/shares/7/1.JPG', '[\"http://z95577e6.beget.tech/uploads/files/shares/7/2.JPG\", \"http://z95577e6.beget.tech/uploads/files/shares/7/3.JPG\"]', 'expeditacg1', '36.84', 'Quia et voluptatem voluptatum quis dolorem quibusdam sunt qui. Quam omnis sapiente occaecati saepe consectetur tenetur explicabo. Iste quo cupiditate quidem vero est consequatur qui. Voluptatem voluptas culpa laboriosam fugiat illum cupiditate ex. Hic quae tempore aut officia voluptatum perspiciatis sed atque. Sapiente eveniet voluptas consectetur optio sint. Provident dignissimos nisi earum et odio maiores tempore quia. Maxime blanditiis voluptatum fugiat aspernatur quaerat ut. Est enim eum quidem nulla vero omnis quia.', 0, 'expeditacg1', 1, 0),
(17, NULL, NULL, 8, 'http://z95577e6.beget.tech/uploads/files/shares/7 - копия/1.JPG', '[\"http://z95577e6.beget.tech/uploads/files/shares/7 - копия/2.JPG\", \"http://z95577e6.beget.tech/uploads/files/shares/7 - копия/3.JPG\"]', 'officiakLM', '79.67', 'Sed porro sed quo tempora ut. Cumque enim impedit aliquid pariatur autem sit sint. Optio et ut tenetur libero fuga. Fugit in tenetur voluptas quos aliquid modi dolor doloremque. Error quas ut neque perferendis in reiciendis facere. Qui dicta maiores nemo necessitatibus labore illum omnis est. Nihil explicabo laborum est et nobis. Libero nemo architecto nemo reiciendis voluptatem tenetur. Id non iusto fugiat aliquid rem eaque aut quae. Natus tempora id veritatis aut dolorem. Quidem dolore molestiae accusamus sunt excepturi doloribus quo. Alias sint est sint ut. Nemo inventore sed rerum quasi.', 1, 'officiakLM', 1, 0),
(18, NULL, NULL, 8, 'http://z95577e6.beget.tech/uploads/files/shares/7 - копия (2)/1.JPG', '[\"http://z95577e6.beget.tech/uploads/files/shares/7 - копия (2)/2.JPG\", \"http://z95577e6.beget.tech/uploads/files/shares/7 - копия (2)/3.JPG\"]', 'esseKIB', '21.67', 'Recusandae animi a quibusdam enim qui veritatis. Ea ut occaecati ut aspernatur. Quia repellat autem sit voluptas aut quidem. Quia voluptas molestiae unde id deleniti voluptas omnis. Corrupti maxime neque voluptates aut ipsam magnam. Nihil placeat vel in reprehenderit est esse sequi rem. Non sed autem tenetur voluptatibus perspiciatis. Quaerat qui rem dolores.', 1, 'esseKIB', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `imgPath` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_categories`
--

INSERT INTO `product_categories` (`id`, `created_at`, `updated_at`, `name`, `description`, `imgPath`, `slug`, `_lft`, `_rgt`, `parent_id`) VALUES
(1, '2018-11-13 20:48:14', '2018-11-13 20:48:14', 'shoes', NULL, NULL, 'shoes', 1, 6, NULL),
(2, '2018-11-13 20:48:14', '2018-11-13 20:48:14', 'man shoes', NULL, NULL, 'man-shoes', 2, 3, 1),
(3, '2018-11-13 20:48:14', '2018-11-13 20:48:14', 'woman shoes', NULL, NULL, 'woman-shoes', 4, 5, 1),
(4, '2018-11-13 20:48:14', '2018-11-13 20:48:14', 'clothes', NULL, NULL, 'clothes', 7, 12, NULL),
(5, '2018-11-13 20:48:14', '2018-11-13 20:48:14', 'man clothes', NULL, NULL, 'man-clothes', 8, 9, 4),
(6, '2018-11-13 20:48:14', '2018-11-13 20:48:14', 'woman clothes', NULL, NULL, 'woman-clothes', 10, 11, 4),
(7, '2018-11-13 20:48:14', '2018-11-13 20:48:14', 'accessories', NULL, NULL, 'accessories', 13, 18, NULL),
(8, '2018-11-13 20:48:14', '2018-11-13 20:48:14', 'man accessories', NULL, NULL, 'man-accessories', 14, 15, 7),
(9, '2018-11-13 20:48:14', '2018-11-13 20:48:14', 'woman accessories', NULL, NULL, 'woman-accessories', 16, 17, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `testimonials`
--

CREATE TABLE `testimonials` (
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `testimonials`
--

INSERT INTO `testimonials` (`text`, `author`, `created_at`, `updated_at`) VALUES
('Eum atque atque impedit.', 'voluptate', NULL, NULL),
('Commodi nam aut minima omnis nesciunt itaque ut.', 'voluptatum', NULL, NULL),
('Ut quod placeat expedita impedit quia dolor.', 'officiis', NULL, NULL),
('Nesciunt perferendis vel ratione amet.', 'qui', NULL, NULL),
('Nisi veniam odit est cumque.', 'odio', NULL, NULL),
('Recusandae qui eum est magni quae.', 'possimus', NULL, NULL),
('Autem iste aut non qui.', 'quaerat', NULL, NULL),
('Ut dignissimos vitae velit autem.', 'alias', NULL, NULL),
('Nemo quia quia modi doloribus fugit adipisci.', 'sit', NULL, NULL),
('Tenetur dolorum et neque in.', 'officia', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `address`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL, 'test@test.com', '$2y$10$y8rgHcIgiq.9EkH3F7ZUPuqh0b01i763RYOMTwpmqPzDCBTRiXOoG', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users_roles`
--

CREATE TABLE `users_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_roles`
--

INSERT INTO `users_roles` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Индексы таблицы `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `article_categories_slug_unique` (`slug`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Индексы таблицы `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_categories_slug_unique` (`slug`),
  ADD KEY `product_categories__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `users_roles`
--
ALTER TABLE `users_roles`
  ADD KEY `users_roles_user_id_foreign` (`user_id`),
  ADD KEY `users_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=603;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `article_categories` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `users_roles`
--
ALTER TABLE `users_roles`
  ADD CONSTRAINT `users_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
