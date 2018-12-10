-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 22 2018 г., 08:23
-- Версия сервера: 5.6.37
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
  `imgPath` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gallery` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `header` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `slug` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `created_at`, `updated_at`, `category_id`, `imgPath`, `gallery`, `header`, `text`, `slug`) VALUES
(1, NULL, NULL, 1, NULL, NULL, 'numquamujv', 'Repellendus qui modi non. Ut modi et perspiciatis. Ipsam qui optio cupiditate ea officiis ut non quas. Quam suscipit quia doloribus dolores praesentium aut cumque et. Quasi fugit harum reprehenderit ut distinctio possimus. Perspiciatis neque et nam eum. Voluptas dolore ut laudantium dolorem quaerat qui. Neque optio est odit labore quae dicta. Consequatur est et voluptate accusantium doloribus. Atque odio saepe quidem dolorem voluptas sed temporibus laudantium. Voluptatem provident dolores placeat repellat. Consectetur est vel earum eos et dolorem nihil quasi. Animi qui autem odit voluptas. Aut provident itaque quae. Voluptas laborum quibusdam blanditiis perspiciatis. Praesentium modi velit qui voluptas harum quia consequatur. Repudiandae esse velit perspiciatis voluptatem occaecati. Exercitationem ipsam rerum doloremque optio ipsum reprehenderit saepe. Alias rerum quidem dolores. Eos odit non ducimus nam voluptatum autem voluptatem.', 'numquamujv'),
(2, NULL, NULL, 1, NULL, NULL, 'ea6uD', 'Voluptas consequatur est illo vel aliquid nulla at. Est nihil est tenetur dolore aperiam quidem. Explicabo quis voluptatibus nihil quasi. Eaque aut et voluptatibus delectus accusamus et sit. Aut et non aut aut. Eos voluptas adipisci consectetur occaecati quia ipsam. Ipsum soluta quia praesentium eum sunt. Et reiciendis expedita eveniet et incidunt quo. Optio quasi eius omnis odit. Voluptatem labore labore soluta autem. Cupiditate atque aut quia. Velit animi dolores est aspernatur placeat et. Eum omnis facere ipsa. Labore voluptatem dicta nisi dolores commodi. Adipisci aliquid dolorem eligendi error. Illo neque sint velit iste dolor rerum. Nihil esse et reprehenderit eum nisi. Non non omnis iste error. Rerum consequuntur eius et perspiciatis dolorum. Atque voluptates consequuntur ullam dolor illo ullam aspernatur.', 'ea6uD'),
(3, NULL, NULL, 1, NULL, NULL, 'omnisdBD', 'Facere dolorem laboriosam quo non hic. Nisi cupiditate quod exercitationem sit quia cumque. Laudantium vitae molestiae non dolor. Ab et et accusamus harum dolorum quia ab. Sapiente enim dolorem et nihil corporis. Sit numquam corrupti vel non. In dolor voluptatem laboriosam provident rerum qui voluptas. Quis in excepturi ipsam tempore aut. Officia commodi laborum mollitia et aliquid mollitia. Deserunt quo repellat voluptatem aut. Temporibus consequatur dolorum occaecati et qui dolores numquam. Sint deserunt molestiae et ipsum deserunt quasi. Ducimus et quos cupiditate tenetur. In ea saepe nesciunt sapiente ipsa temporibus eum. Dolorum laborum ipsa dignissimos dicta. Aliquam placeat accusamus dolores. Laudantium quaerat et voluptatem ratione facere omnis voluptatum ratione. Tenetur velit accusantium quos iure doloribus ipsum. Cum facere illum sed tempora. Laborum voluptatem consequatur deleniti molestiae harum voluptas repellat. Fuga architecto quos voluptas amet sunt hic illo impedit.', 'omnisdBD'),
(4, NULL, NULL, 1, NULL, NULL, 'rerumwpD', 'Amet sed fuga est earum temporibus tenetur corporis incidunt. Esse possimus repudiandae et delectus. Distinctio repellendus laboriosam magni non ad dolores. Et et voluptas et veniam. Voluptas aut nemo cumque exercitationem dolor fugiat sed delectus. Porro et eligendi sit aspernatur rerum voluptas. Vel provident dolore eum exercitationem. Perferendis impedit architecto a voluptate asperiores facere. Repellat eos ipsa nihil doloremque minima eos accusantium. Recusandae et ipsam a rerum repellat. Quidem optio qui qui voluptatem. Rerum accusantium fugiat sit nam dolor et. Excepturi et voluptatem consequatur consequatur. Impedit laudantium ratione suscipit amet magnam reiciendis. Aliquam rerum aut culpa facilis. Sed voluptas autem repudiandae beatae et aperiam. Ut deserunt voluptatem odio est. Ut est consequatur omnis consectetur sed. Sint harum dolore est voluptas. Minima cum voluptatem in explicabo officiis deserunt quasi repellat. Qui qui praesentium perferendis asperiores.', 'rerumwpD'),
(5, NULL, NULL, 1, NULL, NULL, 'officiis4Yl', 'Error non ipsum sed deserunt incidunt. Ut occaecati magni est qui aut est. Neque totam et animi unde eum. Animi aspernatur in molestiae beatae et. Amet quas quos et similique. Itaque ut ut quis quisquam. Odio architecto aut quam cum earum exercitationem porro magni. Optio et expedita ut quas facilis. Doloribus et qui et eos. Non aut recusandae qui temporibus itaque reiciendis dolores consequatur. Est earum quod quia nemo exercitationem. Cupiditate accusantium rerum quos dolorum ex quo ad. Et sit nihil dolores assumenda magnam. Ipsum omnis labore enim. Id deserunt molestiae ut et. Aut tenetur est harum quis recusandae eum. Impedit et officia commodi et. Pariatur aut ut explicabo autem aut quia. Autem quisquam eius quia dicta nobis qui debitis. Voluptatem consectetur reprehenderit omnis tempora sunt repellat asperiores. Eius repellendus at aliquam et nihil modi et.', 'officiis4Yl'),
(6, NULL, NULL, 2, NULL, NULL, 'autHG3', 'Repellendus sequi laborum id ea. Sit soluta aliquid eligendi doloremque. Libero quis a odio alias. Quis dolor necessitatibus est eaque totam quae. Occaecati occaecati aliquid odit debitis velit autem perferendis officia. Id similique placeat blanditiis ut dolores earum est. Nesciunt et animi impedit esse corrupti repudiandae aliquid. Nesciunt quo asperiores fugit similique consectetur minima. Enim deleniti aspernatur enim repellendus fugiat dolorem omnis. Rerum et accusantium at ut. Iste doloremque qui reiciendis asperiores occaecati nulla. Dolor officia assumenda quo qui amet vel at. Voluptas in et velit aut saepe consectetur. Sapiente dolores sint qui molestiae aut quia odit. Neque deserunt quia quo rerum enim vel. Odio sit labore qui distinctio. Et sit maxime nihil minima earum. Sed eligendi quia deleniti doloremque qui laudantium. Ducimus pariatur quo fugiat occaecati.', 'autHG3'),
(7, NULL, NULL, 2, NULL, NULL, 'namOcd', 'Sequi illum et fuga aliquam facilis. Minus architecto et laudantium ut dolores animi accusantium. Modi alias itaque et laborum qui non ut. Aut molestias sapiente nisi iusto aut illo sit. Consequuntur laboriosam ut fugit porro doloribus quia et amet. Officiis eveniet optio et inventore. Enim quos neque est quia. Aspernatur perferendis aliquid libero inventore repellendus qui. Amet quod est dolorem accusantium recusandae cupiditate provident ipsum. Magnam sit rem veritatis. Rerum odio porro nisi maxime molestias rerum officiis. Perferendis alias commodi nihil cupiditate. Voluptas dolores autem voluptas illum debitis. Quisquam ut commodi blanditiis illo reiciendis sequi et. Aliquam ab ut cum doloremque libero delectus. Consequuntur consequuntur quo nemo voluptates assumenda aliquid sapiente veniam. Officiis beatae vitae provident eum dolore. Laborum beatae corrupti qui molestias quia eum nisi. Consequatur vel labore sit voluptatem qui voluptate.', 'namOcd'),
(8, NULL, NULL, 2, NULL, NULL, 'eaJVz', 'Ullam eveniet dolor deserunt aut. Consequatur est provident est quaerat. Odio nam facilis quae animi consequatur numquam qui. Et molestiae omnis dolores dolor et. Fugit laudantium ut commodi. Maiores voluptatem qui hic. Et consequatur perspiciatis consequatur voluptatem quia. Id nam dolorem vero sit. Vitae necessitatibus et voluptatum ab. Et reiciendis repellat possimus quam nemo possimus. Ut laborum ea quisquam omnis explicabo laudantium. Assumenda sint omnis hic itaque quod eius repellat quia. Earum voluptates cupiditate dicta suscipit unde. Vitae et quibusdam repellat laborum. Non et necessitatibus aliquid est amet non quisquam. Magnam dolorum dolor sunt repellat. Impedit aliquam asperiores qui dolorem. Facere rem dolores nulla dolorem. Delectus occaecati cupiditate eos. Quo labore sunt tempora quas voluptatem sit quia totam. Molestiae suscipit velit adipisci assumenda. Qui ullam error dolor vel ab. Qui quia expedita quaerat facilis optio dolorum.', 'eaJVz'),
(9, NULL, NULL, 2, NULL, NULL, 'voluptatem6hN', 'Aut dolore a quo dolorum doloribus impedit. Quidem aliquam occaecati laborum quas. Quod et cupiditate aut unde quas aliquid. Est ut cumque rem doloremque. Assumenda earum quis doloribus enim dolorem debitis iure ex. Culpa aut non aut dolor. Reprehenderit a accusantium nesciunt ducimus nemo molestiae ipsam perferendis. Illo officiis error culpa earum harum illo. Odit nesciunt ut qui aut alias. Ullam dolorum tempora nostrum voluptatibus. Eos deserunt fuga qui distinctio excepturi. Excepturi dolorem at ut. Dolorum sint itaque excepturi consequatur et. Omnis iste eum rem quae et repellat. Et cumque aut eius. Beatae consequuntur est at id dolores qui. Id libero facere sint beatae reiciendis asperiores qui. Qui quaerat in maxime explicabo nulla autem. Optio doloribus tenetur repudiandae aut rerum quasi ut sed. Et et occaecati vel consequatur labore quaerat. Repellat saepe earum odit adipisci nesciunt tenetur quidem.', 'voluptatem6hN'),
(10, NULL, NULL, 2, NULL, NULL, 'et2n1', 'Provident omnis provident ut tempore. Id nulla molestiae rerum enim magnam. Ut beatae illum et sed necessitatibus. Nihil distinctio sunt eum distinctio. Aliquid nisi id aliquam quia non eos odio omnis. Amet veniam aut rerum quam. Quisquam minus a minima quae repellat suscipit incidunt. Laudantium dolorum sed error in dolor eos. Hic aut odit quia iste. Dolore voluptatum aut quis non voluptatem quia ut. Dolores magni cumque laborum ipsum. Ipsam soluta ut labore rerum. Deserunt similique laudantium animi laborum enim rerum. Nesciunt consequatur quaerat modi atque. Voluptatem repudiandae rerum repellendus quo architecto ullam deleniti. Maxime necessitatibus deleniti cumque exercitationem. Quia laborum quis voluptatibus explicabo iste molestiae. Voluptatibus cum quisquam repudiandae animi sint. Dolorem ut unde necessitatibus quae error voluptatem voluptatem. Minima voluptatem dolor cum sequi.', 'et2n1'),
(11, NULL, NULL, 3, NULL, NULL, 'rerum68k', 'Dolorum aliquid aperiam excepturi ut quia possimus sit. Voluptatum optio ea sunt non architecto voluptatem quis. Aut et et adipisci repudiandae. Saepe et temporibus tempore praesentium et repudiandae. Quis impedit velit alias ut. Itaque tempore alias adipisci id. Dolor natus voluptas delectus quo rerum qui error autem. Officiis distinctio vero incidunt numquam dolore esse repudiandae. Nihil ducimus quisquam ipsa distinctio qui laudantium fugiat quia. Architecto et eligendi aut tempora omnis non ut. Deserunt quis mollitia voluptatibus. Omnis inventore sequi ab autem. Et ea ipsam quam blanditiis impedit ad dicta. Eius quasi et necessitatibus. Ea eos odit sint et. Quis vero unde est magni. Quia sit quos dolorum quasi aspernatur. Porro velit numquam nostrum tempora. Dignissimos adipisci totam maiores odit odio dicta. Ullam aspernatur in a adipisci dolore ut. Ipsa quaerat doloribus doloribus officia quidem. Minus aut voluptatem voluptas dolorum sed facilis inventore.', 'rerum68k'),
(12, NULL, NULL, 3, NULL, NULL, 'undeWqg', 'Voluptatem beatae ut quos suscipit iste aut. Modi reprehenderit aut vitae optio rerum repellendus. Et aut qui neque molestiae sit. Cupiditate labore explicabo suscipit qui. Ut quos doloribus sunt corporis. Libero excepturi nulla enim asperiores quis necessitatibus ipsa. Laborum quaerat est corporis earum aut et. Similique animi voluptas est beatae temporibus molestiae. Id non perferendis dolor sint et. Reiciendis debitis enim eum omnis architecto non. Vitae ut consequatur nulla inventore excepturi voluptates omnis nihil. Quis quis dignissimos ut qui. Voluptatem voluptas amet aut iusto. Vel ut enim fuga voluptas quis eligendi. Et odio aut quia dolores. Aperiam corrupti esse ut. Voluptatem ducimus totam fugit sapiente. Molestias vel placeat sint quas qui ratione. Rerum ut velit nisi. Eius velit molestiae cupiditate harum laborum asperiores. Voluptas vitae quia consequatur dolorem enim ipsa.', 'undeWqg'),
(13, NULL, NULL, 3, NULL, NULL, 'quimTA', 'Eaque quia aut doloremque voluptates commodi. Non rerum dolor rerum exercitationem laudantium sint. Non mollitia dolor ex et consequuntur sunt sed. Porro eveniet harum consequatur non et. Possimus vitae quia vero. Commodi molestiae laudantium exercitationem fugiat eos aliquid. Et sequi assumenda molestiae cumque. Est neque ut voluptatem natus itaque occaecati. Sit et ut eaque velit veritatis molestiae. Et id sint ad dolore vitae eos inventore. Ut voluptas rem impedit et. Porro nostrum provident suscipit dolorum et quo. Inventore totam rerum delectus. Itaque commodi odit eveniet quibusdam sit soluta. Et voluptate esse perspiciatis officiis voluptatem perferendis aut. Nemo qui vel labore vero. Eum odio est voluptatem possimus est ad sit. Sit et voluptatem amet consequatur. Libero sed asperiores laboriosam voluptate ab itaque expedita. Veniam nihil porro sint enim inventore et rerum. Occaecati aut libero dolor aut laudantium. Odio omnis error consequatur sapiente quia.', 'quimTA'),
(14, NULL, NULL, 3, NULL, NULL, 'eosMWL', 'Veritatis dolores quisquam suscipit eos rerum deserunt consequuntur non. Ea aspernatur laudantium maxime quibusdam voluptas illum accusantium. Qui perferendis delectus voluptatem. Laudantium maxime voluptatem et vitae. Ea explicabo qui aut sint. Ut explicabo eius sequi dolor dolorem esse quibusdam consequatur. Perspiciatis in ipsum rem autem dicta. Repellendus voluptatem quo dolores dolores et consectetur. Ducimus ut est consequatur similique sit. Quidem vero quia facere est sit magnam laboriosam. Ad distinctio molestiae velit et cum vel eum asperiores. Eos consectetur aperiam quaerat facere provident. Fugit et soluta sunt non et qui. Quia alias sunt et ut consequatur in accusantium. Molestiae molestiae molestias nesciunt est alias aut. Sit quae doloribus amet animi. Error aspernatur sed distinctio est repellendus aliquid. Unde ipsa tempora consequuntur nostrum.', 'eosMWL'),
(15, NULL, NULL, 3, NULL, NULL, 'solutaGA8', 'Sunt nihil similique sit mollitia. Sequi eum eum ut eum eos consequatur voluptatibus. Voluptatum animi doloribus nemo qui aut. Omnis maiores dolor doloremque vero. Libero vel fuga assumenda voluptate. Repellendus fugit doloribus rerum omnis dolores. Aut commodi odit provident saepe et qui. Possimus ab commodi natus autem. Illo aut nihil autem et ipsam fugit et. Repudiandae assumenda sequi est qui veritatis non eveniet. Id placeat quaerat quos placeat rerum. Illum praesentium nesciunt illum placeat voluptatibus. Quis ea eos minus earum aliquid eligendi. Voluptatibus expedita facere rerum sed voluptates non. Architecto tempore qui odit optio autem corporis reprehenderit. Illo quia reprehenderit fugit repellat sapiente velit. Doloremque labore ut non quisquam. Vitae et quod voluptate officia. Est quo earum earum hic illum ut aut. Qui non quod optio architecto sed praesentium enim.', 'solutaGA8'),
(16, NULL, NULL, 4, NULL, NULL, 'dolorumbhq', 'Ab in eaque dolorum ut asperiores autem iste voluptatem. Repudiandae enim qui in et. Ut placeat perspiciatis sunt in. Modi ut autem omnis asperiores exercitationem eligendi maxime. Laudantium facilis voluptatem odit id officiis. Voluptatum minima dolor velit non. Voluptatibus voluptates porro fuga corporis exercitationem commodi. Veritatis sit vitae corrupti laudantium in. Et quasi a dolorum. Eius quae ea distinctio deserunt. Sed autem sunt iste debitis deserunt a facere officiis. Consequuntur officiis maxime nihil sit. Assumenda commodi ratione ab tenetur incidunt quia. Perferendis fuga consequatur ea placeat voluptates. Eum earum iste perspiciatis ut dolorem sed laborum. Commodi ratione dolores consequatur dolore saepe saepe. Dolore architecto nesciunt omnis nam doloribus perferendis ut sed. Pariatur quis incidunt qui tempore fuga harum repellat. Aliquam ut vitae at corrupti. Eum sint unde omnis optio. Voluptatem quia sed est reprehenderit eum esse et.', 'dolorumbhq'),
(17, NULL, NULL, 4, NULL, NULL, 'quiGRc', 'Consequatur iure sit debitis aut natus aut id. Eius assumenda corporis nostrum fuga temporibus dolorum. Voluptates consequuntur eaque aut ab neque. Ullam adipisci et dignissimos animi quod eligendi et ut. Veritatis excepturi praesentium ut laudantium deleniti. Occaecati est accusamus dolor fuga qui. Nemo maiores est consequatur non aliquam libero eveniet. Perferendis tempore quo amet. Est sed ullam quam rerum libero. Sequi vel corporis perferendis consequuntur vel est. Eveniet qui ipsam voluptatem. Ratione nam ea rerum officia repellendus dignissimos. Quis soluta placeat quae facere quas vel. Ipsam placeat totam perspiciatis error non neque est. Et qui blanditiis eveniet dolores beatae dolor architecto. Et omnis est officia dolores et harum. Saepe dolores debitis alias nihil ipsum. Voluptates rem pariatur qui ipsum. Nostrum mollitia natus hic eveniet sed. Amet blanditiis eos magni saepe rerum. Adipisci sit et aut. Aliquid amet dolorem ullam qui enim rerum consequatur.', 'quiGRc'),
(18, NULL, NULL, 4, NULL, NULL, 'voluptatemKKi', 'Numquam inventore illum fuga minus. Saepe et rem explicabo maiores ut. Voluptatem mollitia mollitia consectetur omnis esse. Eaque quo minima quibusdam nam error distinctio. Aut expedita veniam voluptatum tenetur vel sequi deleniti. Vitae aut officia cumque non dolorem ullam numquam. Qui fuga assumenda nulla qui qui quisquam. Minima beatae nisi odit omnis necessitatibus sapiente debitis. Eius molestiae ducimus nesciunt numquam. Voluptatibus praesentium eos expedita hic. Vel non qui dignissimos accusamus cupiditate rem quia. Vel ipsam non ut expedita sunt dolorem autem. Tenetur deleniti totam odit et. Voluptates incidunt voluptate in quaerat ut. Minus repellendus repellendus ut aperiam. Aspernatur veniam consequuntur laborum quo. Qui velit sed omnis suscipit omnis. Totam excepturi numquam possimus voluptates sit. Facilis amet excepturi assumenda dolores consequatur id.', 'voluptatemKKi'),
(19, NULL, NULL, 4, NULL, NULL, 'voluptasbY1', 'Beatae modi ut itaque enim. Enim distinctio magnam necessitatibus ut consequatur. Est sit ut eveniet ullam repellat et enim. Eaque porro cumque aut voluptates repudiandae quia itaque. Atque nesciunt ut et id eum quaerat. Consectetur praesentium placeat deleniti fugit quasi sapiente libero quibusdam. Totam aut quaerat doloremque similique. Sit et fugiat culpa voluptas maxime et quasi. Autem voluptatum sunt unde beatae ducimus dolorem nihil. Consequatur quidem sint odio dolores laborum fugit recusandae non. Illo qui quos quam rem at. Quaerat non id quia optio voluptatem consequatur. Autem id iusto ea ex rerum distinctio. Id consequatur nostrum eum expedita. Delectus voluptate quia aspernatur qui dolorum. Illo nostrum fugiat culpa qui placeat voluptatem. Hic et fugit facere aliquid velit qui. Provident quam quia earum magni. Praesentium saepe pariatur quaerat et. Voluptatibus occaecati rerum non quidem animi vel laudantium. Enim sint ad voluptatem aperiam eius.', 'voluptasbY1'),
(20, NULL, NULL, 4, NULL, NULL, 'autMyH', 'Quia aspernatur nulla et non dolorem doloribus libero. Distinctio ut qui esse temporibus amet soluta. Nesciunt quia dignissimos et expedita impedit amet voluptatem ducimus. Dignissimos sunt dicta blanditiis quod eos libero labore. Rerum sed vitae veniam ullam. Minus et voluptates molestias repellat aspernatur. Consequatur omnis minima dolorem sit dignissimos id neque. Recusandae molestiae dolorem quibusdam non. Ut occaecati aliquid repellendus saepe repudiandae quia. Illum explicabo quod aut qui est architecto. Ea blanditiis aperiam qui quam et. Hic voluptatem iusto necessitatibus. Sint ipsam ea ut cupiditate. Cum et omnis dolorem rem illo voluptatum. Accusamus itaque voluptas nostrum cum. Id enim est consequatur occaecati quia aut qui. Qui expedita ab laboriosam vitae dolorem. Eligendi qui expedita at ea excepturi sunt. Dolorem dolores non est eum corrupti veritatis accusamus et. Dolore similique velit labore ut. Est officia explicabo veritatis porro.', 'autMyH');

-- --------------------------------------------------------

--
-- Структура таблицы `article_categories`
--

CREATE TABLE `article_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

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
  `address` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `shorttext` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `keywords` text COLLATE utf8_unicode_ci,
  `shopname` text COLLATE utf8_unicode_ci,
  `mapsrc` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

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
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2018_08_10_180913_create_table_roles', 1),
(15, '2018_08_21_183446_create_product_category_table', 1),
(16, '2018_08_22_181830_create_products_table', 1),
(17, '2018_09_16_192927_create_orders_tables', 1),
(18, '2018_10_21_180504_create_reviews_table', 1),
(19, '2018_10_22_174509_create_testimonials_table', 1),
(20, '2018_10_23_163455_create_article_categories', 1),
(21, '2018_10_23_163921_create_articles', 1),
(22, '2018_10_24_163921_create_contacts', 1);

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
  `address` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `imgPath` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gallery` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `description` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recommended` tinyint(1) NOT NULL DEFAULT '0',
  `slug` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `instock` tinyint(1) NOT NULL DEFAULT '1',
  `popularity` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `category_id`, `imgPath`, `gallery`, `name`, `price`, `description`, `recommended`, `slug`, `instock`, `popularity`) VALUES
(1, NULL, '2018-11-19 01:07:11', 8, 'http://shop-blog/uploads/photos/shares/img1.jpg', '[\"http:\\/\\/shop-blog\\/uploads\\/photos\\/shares\\/img6.jpg\",\"http:\\/\\/shop-blog\\/uploads\\/photos\\/shares\\/img1.jpg\"]', 'beataeTpP', '62.45', '<p>Magni natus harum deserunt libero quo temporibus. Rerum saepe aut ad sed eum quia. Eius provident unde officiis dolorum in sed earum. At nihil voluptate aut et. Deserunt dolorem perferendi', 1, 'beataetpp', 1, 0),
(2, NULL, NULL, 2, 'http://shop-blog/uploads/files/shares/1 - копия/1.JPG', '[\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/1 - \\u043a\\u043e\\u043f\\u0438\\u044f\\/2.JPG\",\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/1 - \\u043a\\u043e\\u043f\\u0438\\u044f\\/3.JPG\"]', 'accusantium6FZ', '35.38', 'Officia laboriosam voluptatem autem modi vel qui. Deserunt et labore incidunt officiis. Cum consequatur voluptatem quaerat deleniti quisquam. Voluptate dolorem eum at occaecati sequi velit re', 1, 'accusantium6FZ', 1, 0),
(3, NULL, NULL, 6, 'http://shop-blog/uploads/files/shares/1 - копия (2)/1.JPG', '[\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/1 - \\u043a\\u043e\\u043f\\u0438\\u044f (2)\\/2.JPG\",\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/1 - \\u043a\\u043e\\u043f\\u0438\\u044f (2)\\/3.JPG\"]', 'quisquamxhJ', '17.52', 'Repellat quibusdam laborum minima accusantium eligendi. Ab unde repudiandae id nam sed aperiam. Sit quasi saepe debitis tenetur ullam rerum qui in. Et maxime ex non consequatur veritatis fugi', 1, 'quisquamxhJ', 1, 0),
(4, NULL, NULL, 5, 'http://shop-blog/uploads/files/shares/2/1.JPG', '[]', 'atque5Nj', '90.14', 'Aut in itaque neque dolorem. Dolores id tempora facere ut voluptatem doloribus. Amet enim nisi recusandae sapiente laudantium dolores veniam. Et harum cupiditate voluptas labore voluptas minu', 1, 'atque5Nj', 1, 0),
(5, NULL, NULL, 3, 'http://shop-blog/uploads/files/shares/2 - копия/1.JPG', '[]', 'idgOC', '48.37', 'Ipsam placeat voluptatem sint et quisquam id unde ut. Placeat sint dolores ut dolor. Placeat voluptatum ut rerum. Natus repellendus est non dignissimos. Qui neque ad dolor ut necessitatibus u', 1, 'idgOC', 1, 0),
(6, NULL, NULL, 2, 'http://shop-blog/uploads/files/shares/2 - копия (2)/1.JPG', '[]', 'sintUQw', '1.63', 'Quidem culpa dolorem voluptatem iste. Maxime nihil molestiae consectetur quo officia. Nobis ipsa sit aspernatur eaque voluptatem aut neque exercitationem. Similique et voluptatem tempora a re', 1, 'sintUQw', 1, 0),
(7, NULL, NULL, 8, 'http://shop-blog/uploads/files/shares/3/1.JPG', '[\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/3\\/2.JPG\"]', 'quia9cD', '56.18', 'Quaerat ullam beatae et eaque repudiandae est. Est repellat enim quasi quia. Officia perferendis unde molestiae ab et. Velit aspernatur quaerat reiciendis eius vel temporibus. Illo officiis s', 0, 'quia9cD', 1, 0),
(8, NULL, NULL, 6, 'http://shop-blog/uploads/files/shares/3 - копия/1.JPG', '[\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/3 - \\u043a\\u043e\\u043f\\u0438\\u044f\\/2.JPG\"]', 'etiPy', '74.94', 'Hic est et corrupti dolor veritatis voluptatem at non. Perspiciatis dolor qui dolorum atque. Distinctio cumque qui ut consequuntur consequuntur quia. Expedita voluptas sunt enim molestiae qui', 1, 'etiPy', 1, 0),
(9, NULL, NULL, 3, 'http://shop-blog/uploads/files/shares/3 - копия (2)/1.JPG', '[\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/3 - \\u043a\\u043e\\u043f\\u0438\\u044f (2)\\/2.JPG\"]', 'etyNm', '45.47', 'Distinctio iusto voluptas enim inventore. Veniam id voluptatem repudiandae id voluptatem natus enim. Ullam id aspernatur itaque amet modi ratione ut. Nulla quisquam odio facere. Labore et ver', 1, 'etyNm', 1, 0),
(10, NULL, NULL, 8, 'http://shop-blog/uploads/files/shares/5/1.JPG', '[\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/5\\/2.JPG\",\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/5\\/3.JPG\"]', 'velitCuf', '17.06', 'Architecto consequatur tempora distinctio consectetur eius sed repellendus. Sint voluptas enim necessitatibus aliquam. Dolores pariatur maxime rerum nisi earum possimus autem. Aut impedit sit', 0, 'velitCuf', 1, 0),
(11, NULL, NULL, 9, 'http://shop-blog/uploads/files/shares/5 - копия/1.JPG', '[\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/5 - \\u043a\\u043e\\u043f\\u0438\\u044f\\/2.JPG\",\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/5 - \\u043a\\u043e\\u043f\\u0438\\u044f\\/3.JPG\"]', 'architecto7vI', '71.78', 'Iste repellendus aut incidunt est nulla eum dolores distinctio. Corporis quisquam ipsum voluptatum et eos maiores. Non et enim ut porro id ipsam qui. Quas voluptates eos laudantium voluptate ', 1, 'architecto7vI', 1, 0),
(12, NULL, NULL, 6, 'http://shop-blog/uploads/files/shares/5 - копия (2)/1.JPG', '[\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/5 - \\u043a\\u043e\\u043f\\u0438\\u044f (2)\\/2.JPG\",\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/5 - \\u043a\\u043e\\u043f\\u0438\\u044f (2)\\/3.JPG\"]', 'nisip85', '90.37', 'Doloribus repellat odit dolorem aut eius. Et et molestiae est quos a dolores. Qui quis aliquid vel consectetur. Accusantium ducimus accusantium asperiores rem quo nihil. Adipisci qui ad optio', 0, 'nisip85', 1, 0),
(13, NULL, NULL, 8, 'http://shop-blog/uploads/files/shares/6/1.JPG', '[\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/6\\/2.JPG\",\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/6\\/3.JPG\"]', 'delenitizZI', '50.90', 'Ut maiores nisi rem. Ex vel quos explicabo atque ipsa. Et eos qui animi facere ducimus. Natus maiores voluptatum id. Consectetur excepturi dolor voluptates asperiores mollitia ut. Veniam et a', 0, 'delenitizZI', 1, 0),
(14, NULL, NULL, 2, 'http://shop-blog/uploads/files/shares/6 - копия/1.JPG', '[\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/6 - \\u043a\\u043e\\u043f\\u0438\\u044f\\/2.JPG\",\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/6 - \\u043a\\u043e\\u043f\\u0438\\u044f\\/3.JPG\"]', 'inventoreDjf', '19.68', 'Non sapiente nam et dolorum. Et repudiandae quia culpa quidem atque quo et. Officia aperiam sed id at repellat est blanditiis similique. Earum ducimus nihil temporibus dignissimos similique a', 0, 'inventoreDjf', 1, 0),
(15, NULL, NULL, 6, 'http://shop-blog/uploads/files/shares/6 - копия (2)/1.JPG', '[\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/6 - \\u043a\\u043e\\u043f\\u0438\\u044f (2)\\/2.JPG\",\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/6 - \\u043a\\u043e\\u043f\\u0438\\u044f (2)\\/3.JPG\"]', 'ullamtbz', '69.07', 'Nemo recusandae in sequi illum. Et dolores iusto eius et. Et non minima aspernatur animi aperiam enim quasi id. Ipsum nesciunt necessitatibus nisi nostrum officiis nulla aliquid rerum. Qui ar', 1, 'ullamtbz', 1, 0),
(16, NULL, NULL, 3, 'http://shop-blog/uploads/files/shares/7/1.JPG', '[\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/7\\/2.JPG\",\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/7\\/3.JPG\"]', 'doloremqueCqO', '40.93', 'Consequatur temporibus ipsa rerum et. Et quas voluptatem cum quia aut quibusdam sint. Deserunt corrupti iste voluptates repellat sunt. Nobis ab et quo excepturi quam. Est voluptatem qui aliqu', 0, 'doloremqueCqO', 1, 0),
(17, NULL, NULL, 2, 'http://shop-blog/uploads/files/shares/7 - копия/1.JPG', '[\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/7 - \\u043a\\u043e\\u043f\\u0438\\u044f\\/2.JPG\",\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/7 - \\u043a\\u043e\\u043f\\u0438\\u044f\\/3.JPG\"]', 'voluptatemY2e', '38.65', 'Quasi porro qui asperiores earum. Numquam possimus eaque minus non est nemo itaque. Ratione et sint consequatur illo beatae voluptatem quam dolores. Deserunt voluptatem itaque vitae sunt. Com', 0, 'voluptatemY2e', 1, 0),
(18, NULL, NULL, 5, 'http://shop-blog/uploads/files/shares/7 - копия (2)/1.JPG', '[\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/7 - \\u043a\\u043e\\u043f\\u0438\\u044f (2)\\/2.JPG\",\"http:\\/\\/shop-blog\\/uploads\\/files\\/shares\\/7 - \\u043a\\u043e\\u043f\\u0438\\u044f (2)\\/3.JPG\"]', 'aperiamIyG', '78.38', 'Illum architecto libero voluptatem assumenda et vel qui est. Nam architecto animi perspiciatis omnis et pariatur sit. Eaque et ea temporibus necessitatibus et voluptate quod autem. Adipisci q', 1, 'aperiamIyG', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imgPath` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `product_categories`
--

INSERT INTO `product_categories` (`id`, `created_at`, `updated_at`, `name`, `description`, `imgPath`, `slug`, `_lft`, `_rgt`, `parent_id`) VALUES
(1, '2018-11-19 00:49:18', '2018-11-19 00:49:18', 'shoes', NULL, NULL, 'shoes', 1, 6, NULL),
(2, '2018-11-19 00:49:18', '2018-11-19 00:49:18', 'man shoes', NULL, NULL, 'man-shoes', 2, 3, 1),
(3, '2018-11-19 00:49:18', '2018-11-19 00:49:18', 'woman shoes', NULL, NULL, 'woman-shoes', 4, 5, 1),
(4, '2018-11-19 00:49:18', '2018-11-19 00:49:18', 'clothes', NULL, NULL, 'clothes', 7, 12, NULL),
(5, '2018-11-19 00:49:18', '2018-11-19 00:49:18', 'man clothes', NULL, NULL, 'man-clothes', 8, 9, 4),
(6, '2018-11-19 00:49:18', '2018-11-19 00:49:18', 'woman clothes', NULL, NULL, 'woman-clothes', 10, 11, 4),
(7, '2018-11-19 00:49:18', '2018-11-19 00:49:18', 'accessories', NULL, NULL, 'accessories', 13, 18, NULL),
(8, '2018-11-19 00:49:18', '2018-11-19 00:49:18', 'man accessories', NULL, NULL, 'man-accessories', 14, 15, 7),
(9, '2018-11-19 00:49:19', '2018-11-19 00:49:19', 'woman accessories', NULL, NULL, 'woman-accessories', 16, 17, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `text` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

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
  `text` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `testimonials`
--

INSERT INTO `testimonials` (`text`, `author`, `created_at`, `updated_at`) VALUES
('Sit qui non nam et consectetur eaque autem.', 'quasi', NULL, NULL),
('Alias deserunt et excepturi voluptatibus commodi.', 'ipsam', NULL, NULL),
('Cum sed id minima ad.', 'corrupti', NULL, NULL),
('Adipisci impedit ut unde.', 'qui', NULL, NULL),
('Numquam tempora asperiores veritatis quia.', 'repellendus', NULL, NULL),
('Deleniti enim et aut quod sint ut nobis.', 'rem', NULL, NULL),
('Molestiae dignissimos sit qui culpa itaque.', 'ut', NULL, NULL),
('Tenetur nihil dolorem dolorem et.', 'aut', NULL, NULL),
('Consequuntur voluptatem ut nisi est.', 'enim', NULL, NULL),
('Et qui et et.', 'repudiandae', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `address`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL, 'test@test.com', '$2y$10$xsNFTKtOQpzQ27wj4RzfXeDmALS2dlDLvevHM2J2/WgUiCEyILtMm', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users_roles`
--

CREATE TABLE `users_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
