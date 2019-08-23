-- Хост: 127.0.0.1:3306
-- Время создания: Авг 13 2019 г., 22:31
-- Версия сервера: 5.6.41
-- Версия PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `geekbrains`
--

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `lang` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `name`, `age`, `lang`) VALUES
(1, 'Тимофей', 67, 'php'),
(2, 'Юрий', 32, 'js'),
(5, 'Надежда', 18, 'php'),
(6, 'Евгений', 23, 'html'),
(7, 'Савелий', 27, 'java'),
(8, 'Александр', 33, 'java'),
(9, 'Андрей', 14, 'php'),
(10, 'Ирина', 22, 'java'),
(11, 'Вероника', 18, 'c++'),
(12, 'Никита', 26, 'java'),
(13, 'Ярослав', 19, 'php'),
(14, 'Владимир', 43, 'html'),
(15, 'Дмитрий', 29, 'js'),
(16, 'Анатолий', 30, 'js'),
(17, 'Алексей', 26, 'php'),
(28, 'Тимофей', 75, 'java'),
(39, 'Виталий', 34, 'php'),
(40, 'Виталий', 34, 'php'),
(41, 'Джон Сноу', 16, 'js'),
(42, 'Олег', 22, 'java'),
(43, 'Константин', 35, 'russian'),
(44, 'Андрей', 26, 'php'),
(45, 'Максим', 32, 'php'),
(46, 'Евгений', 26, 'php'),
(47, 'Аретм', 30, 'java'),
(48, 'Максим', 34, 'c++');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
