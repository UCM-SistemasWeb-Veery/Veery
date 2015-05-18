-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2015 at 06:31 PM
-- Server version: 5.6.19-1~exp1ubuntu2
-- PHP Version: 5.6.6-1+deb.sury.org~utopic+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `veery`
--

-- --------------------------------------------------------

--
-- Table structure for table `vry_albums`
--

CREATE TABLE IF NOT EXISTS `vry_albums` (
`albumID` int(11) unsigned NOT NULL,
  `artistID` int(11) NOT NULL,
  `albumName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `albumCover` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=52 ;

--
-- Dumping data for table `vry_albums`
--

INSERT INTO `vry_albums` (`albumID`, `artistID`, `albumName`, `albumCover`) VALUES
(1, 121, 'Furious 7 Soundtrack', 'furious7.jpg'),
(2, 122, 'Trap Queen (Single)', 'trapqueen.jpeg'),
(3, 123, 'V', 'v.png'),
(4, 124, 'X', 'x.png'),
(6, 125, 'Uptown Special', 'uptownspecial.jpg'),
(10, 1, 'Reasonable Doubt', 'http://upload.wikimedia.org/wikipedia/en/f/f5/Reasonable_Doubt_New.jpg'),
(12, 1, 'The Dynasty: Roc La Familia', 'http://upload.wikimedia.org/wikipedia/en/4/40/Jay-z-dynasty-roc-la-familia-2000.jpg'),
(31, 1, 'In My Lifetime, Vol. 1', 'http://upload.wikimedia.org/wikipedia/en/c/c9/Jayz_inmylifetime.jpg'),
(41, 1, 'Vol. 2... Hard Knock Life', 'http://upload.wikimedia.org/wikipedia/en/a/a1/Jay-z-vol-2-hard-knock-life.jpg'),
(51, 1, 'Vol. 3... Life and Times of S. Carter', 'http://upload.wikimedia.org/wikipedia/en/7/74/Jay-z-vol-3-life-and-times-s-carter.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vry_artists`
--

CREATE TABLE IF NOT EXISTS `vry_artists` (
`artistID` int(11) unsigned NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=126 ;

--
-- Dumping data for table `vry_artists`
--

INSERT INTO `vry_artists` (`artistID`, `userID`) VALUES
(1, 4),
(121, 9),
(122, 8),
(123, 7),
(124, 6),
(125, 5);

-- --------------------------------------------------------

--
-- Table structure for table `vry_followers`
--

CREATE TABLE IF NOT EXISTS `vry_followers` (
`relationID` int(11) unsigned NOT NULL,
  `userID` int(11) unsigned NOT NULL,
  `followerID` int(11) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Dumping data for table `vry_followers`
--

INSERT INTO `vry_followers` (`relationID`, `userID`, `followerID`) VALUES
(1, 1, 2),
(2, 1, 4),
(3, 4, 1),
(4, 38, 1),
(5, 38, 2),
(6, 38, 3),
(7, 38, 4),
(8, 38, 121),
(9, 38, 122),
(10, 38, 123),
(11, 6, 38),
(13, 4, 38),
(40, 1, 38),
(41, 5, 38);

-- --------------------------------------------------------

--
-- Table structure for table `vry_media`
--

CREATE TABLE IF NOT EXISTS `vry_media` (
`mediaID` int(11) unsigned NOT NULL,
  `mediaType` int(11) NOT NULL,
  `mediaParentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vry_songs`
--

CREATE TABLE IF NOT EXISTS `vry_songs` (
  `songID` int(11) unsigned NOT NULL,
  `albumID` int(11) unsigned NOT NULL,
  `songPath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `songTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `songArtists` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sonPlayCount` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vry_songs`
--

INSERT INTO `vry_songs` (`songID`, `albumID`, `songPath`, `songTitle`, `songArtists`, `sonPlayCount`) VALUES
(1, 1, 'seeyouagain.mp3', 'See you Again featuring Charlie Puth', 'Wiz Khalifa ', 6521458),
(2, 2, 'trapqueen.mp3', 'Trap Queen', 'Fetty Wap', 652148),
(3, 3, 'sugar.mp3', 'Sugar', 'Maroon 5', 652147),
(4, 4, 'thinkingoutloud.mp3', 'Thinking out loud', 'Ed Sheeran', 665425),
(5, 6, 'uptownfunk.mp3', 'Uptown Funk featuring Bruno Mars', 'Mark Ronson ', 41254);

-- --------------------------------------------------------

--
-- Table structure for table `vry_streams`
--

CREATE TABLE IF NOT EXISTS `vry_streams` (
`streamID` int(11) unsigned NOT NULL,
  `artistID` int(11) unsigned NOT NULL,
  `streamTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `streamUrl` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vry_streams`
--

INSERT INTO `vry_streams` (`streamID`, `artistID`, `streamTitle`, `streamUrl`) VALUES
(1, 1, 'My First Stream', 'https://www.youtube.com/embed/sNCz8fWs3lE');

-- --------------------------------------------------------

--
-- Table structure for table `vry_users`
--

CREATE TABLE IF NOT EXISTS `vry_users` (
`userID` int(11) unsigned NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userLastName` varchar(255) NOT NULL,
  `userSlug` varchar(255) NOT NULL,
  `userType` int(1) NOT NULL DEFAULT '1',
  `userDoB` date NOT NULL,
  `userHandle` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userProfilePicture` varchar(255) NOT NULL,
  `userHeader` varchar(255) NOT NULL,
  `userBio` text NOT NULL,
  `userHash` varchar(32) NOT NULL,
  `userActive` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `vry_users`
--

INSERT INTO `vry_users` (`userID`, `userName`, `userLastName`, `userSlug`, `userType`, `userDoB`, `userHandle`, `userPassword`, `userEmail`, `userProfilePicture`, `userHeader`, `userBio`, `userHash`, `userActive`) VALUES
(1, 'Rafa', 'Ramírez', 'rafa-ramirez', 0, '0000-00-00', 'raffe', '$2y$12$48SHn0yOorhzKlJpVEWF6uDWl1vqJm/jcb4ffBx5vChr64HQsum.e', 'r.ramirez@veery.es', 'raffe.jpg', 'raffeheader.jpg', '<p>Shawn Corey Carter (Brooklyn, Nueva York, Estados Unidos, 4 de diciembre de 1969), más conocido por su nombre artístico Jay Z (estilizado a JAY Z) es un rapero, productor, empresario y, ocasionalmente, actor de nacionalidad estadounidense. Es uno de los artistas de hip-hop más exitosos económicamente en Estados Unidos y mundialmente, poseyendo un patrimonio neto de más de $500 millones en 2012.</p>		 				<p>Como empresario e inversionista, Jay Z es co-propietario del 40/40 Club, es uno de los dueños de la franquicia de baloncesto los Brooklyn Nets de la NBA y es también el creador de la línea de ropa Rocawear. Es también el ex CEO de Def Jam Recordings, uno de los tres fundadores de Roc-A-Fella Records, y el fundador de Roc Nation. Como artista, tiene el récord de la mayoría de los álbumes número uno por un artista en solitario en el Billboard 200 con trece. Jay Z también tuvo cuatro números uno en el Billboard Hot 100, uno de ellos como artista principal.</p>		 				<p>Se casó con la superestrella de R&amp;B, Beyoncé Knowles, el 4 de abril de 2008. El 11 de diciembre de 2009, Jay Z fue catalogado como el décimo artista más exitoso de la década del 2000 por Billboard. Fue reconocido como el rapero más rico del mundo en una exclusiva lista creada por la revista Forbes. Además, fue el primero en una lista de los raperos más ricos en el 2010, ingresando más del doble que el que obtuvo el segundo lugar, Sean Diddy Combs. Jay Z se ha convertido en el rapero más rico de la actualidad, tal y como publicó la prestigiosa revista. Se estima que su fortuna sobrepasa los $990 millones.</p>', '', 1),
(2, 'Alberto', 'Miedes', 'alberto-miedes', 1, '0000-00-00', 'alberto.miedesgarces', '$2y$12$hxkjDPgvzBR124d/ms3yAOwXbp/fy8CAVbTUh7Y75aD67a6cNpv8S', 'amiedes@ucm.es', 'alberto.jpg', 'pitbull.png', '<p>Shawn Corey Carter (Brooklyn, Nueva York, Estados Unidos, 4 de diciembre de 1969), más conocido por su nombre artístico Jay Z (estilizado a JAY Z) es un rapero, productor, empresario y, ocasionalmente, actor de nacionalidad estadounidense. Es uno de los artistas de hip-hop más exitosos económicamente en Estados Unidos y mundialmente, poseyendo un patrimonio neto de más de $500 millones en 2012.</p>		 				<p>Como empresario e inversionista, Jay Z es co-propietario del 40/40 Club, es uno de los dueños de la franquicia de baloncesto los Brooklyn Nets de la NBA y es también el creador de la línea de ropa Rocawear. Es también el ex CEO de Def Jam Recordings, uno de los tres fundadores de Roc-A-Fella Records, y el fundador de Roc Nation. Como artista, tiene el récord de la mayoría de los álbumes número uno por un artista en solitario en el Billboard 200 con trece. Jay Z también tuvo cuatro números uno en el Billboard Hot 100, uno de ellos como artista principal.</p>		 				<p>Se casó con la superestrella de R&amp;B, Beyoncé Knowles, el 4 de abril de 2008. El 11 de diciembre de 2009, Jay Z fue catalogado como el décimo artista más exitoso de la década del 2000 por Billboard. Fue reconocido como el rapero más rico del mundo en una exclusiva lista creada por la revista Forbes. Además, fue el primero en una lista de los raperos más ricos en el 2010, ingresando más del doble que el que obtuvo el segundo lugar, Sean Diddy Combs. Jay Z se ha convertido en el rapero más rico de la actualidad, tal y como publicó la prestigiosa revista. Se estima que su fortuna sobrepasa los $990 millones.</p>', '', 1),
(3, 'Ignacio ', 'Ferreras', 'ignacio-ferreras', 1, '0000-00-00', 'iferreras', '$2y$12$hxkjDPgvzBR124d/ms3yAOwXbp/fy8CAVbTUh7Y75aD67a6cNpv8S', 'nachoferreras93@gmail.com', 'nacho.jpg', 'nachoheader.jpg', '<p>Shawn Corey Carter (Brooklyn, Nueva York, Estados Unidos, 4 de diciembre de 1969), más conocido por su nombre artístico Jay Z (estilizado a JAY Z) es un rapero, productor, empresario y, ocasionalmente, actor de nacionalidad estadounidense. Es uno de los artistas de hip-hop más exitosos económicamente en Estados Unidos y mundialmente, poseyendo un patrimonio neto de más de $500 millones en 2012.</p>		 				<p>Como empresario e inversionista, Jay Z es co-propietario del 40/40 Club, es uno de los dueños de la franquicia de baloncesto los Brooklyn Nets de la NBA y es también el creador de la línea de ropa Rocawear. Es también el ex CEO de Def Jam Recordings, uno de los tres fundadores de Roc-A-Fella Records, y el fundador de Roc Nation. Como artista, tiene el récord de la mayoría de los álbumes número uno por un artista en solitario en el Billboard 200 con trece. Jay Z también tuvo cuatro números uno en el Billboard Hot 100, uno de ellos como artista principal.</p>		 				<p>Se casó con la superestrella de R&amp;B, Beyoncé Knowles, el 4 de abril de 2008. El 11 de diciembre de 2009, Jay Z fue catalogado como el décimo artista más exitoso de la década del 2000 por Billboard. Fue reconocido como el rapero más rico del mundo en una exclusiva lista creada por la revista Forbes. Además, fue el primero en una lista de los raperos más ricos en el 2010, ingresando más del doble que el que obtuvo el segundo lugar, Sean Diddy Combs. Jay Z se ha convertido en el rapero más rico de la actualidad, tal y como publicó la prestigiosa revista. Se estima que su fortuna sobrepasa los $990 millones.</p>', '', 1),
(4, 'Jay-Z', '', 'jay-z', 2, '0000-00-00', 'jayz', '$2y$12$hxkjDPgvzBR124d/ms3yAOwXbp/fy8CAVbTUh7Y75aD67a6cNpv8S', 'jayz@veery.es', 'jz.png', 'jayzheader.jpg', '<p>Shawn Corey Carter (Brooklyn, Nueva York, Estados Unidos, 4 de diciembre de 1969), más conocido por su nombre artístico Jay Z (estilizado a JAY Z) es un rapero, productor, empresario y, ocasionalmente, actor de nacionalidad estadounidense. Es uno de los artistas de hip-hop más exitosos económicamente en Estados Unidos y mundialmente, poseyendo un patrimonio neto de más de $500 millones en 2012.</p>		 				<p>Como empresario e inversionista, Jay Z es co-propietario del 40/40 Club, es uno de los dueños de la franquicia de baloncesto los Brooklyn Nets de la NBA y es también el creador de la línea de ropa Rocawear. Es también el ex CEO de Def Jam Recordings, uno de los tres fundadores de Roc-A-Fella Records, y el fundador de Roc Nation. Como artista, tiene el récord de la mayoría de los álbumes número uno por un artista en solitario en el Billboard 200 con trece. Jay Z también tuvo cuatro números uno en el Billboard Hot 100, uno de ellos como artista principal.</p>		 				<p>Se casó con la superestrella de R&amp;B, Beyoncé Knowles, el 4 de abril de 2008. El 11 de diciembre de 2009, Jay Z fue catalogado como el décimo artista más exitoso de la década del 2000 por Billboard. Fue reconocido como el rapero más rico del mundo en una exclusiva lista creada por la revista Forbes. Además, fue el primero en una lista de los raperos más ricos en el 2010, ingresando más del doble que el que obtuvo el segundo lugar, Sean Diddy Combs. Jay Z se ha convertido en el rapero más rico de la actualidad, tal y como publicó la prestigiosa revista. Se estima que su fortuna sobrepasa los $990 millones.</p>', '', 1),
(5, 'Mark', 'Ronson', 'mark-ronson', 2, '0000-00-00', 'markyMark', '$2y$12$Kk4TrSYswbbhb9zyFa91Nudp1WuuUUHXp1Ss/ddHGL8h/ZMqp5zoG', 'iammark@geez.com', 'markRonson.jpg', 'ronsonCover.JPG', '<p>Mark Daniel Ronson (born 4 September 1975) is an English musician, DJ, singer, and record producer.</p>\r\n\r\n<p>While his debut album Here Comes the Fuzz failed to make an impact on the charts, his second album, Version, reached number two in the UK Album chart, and included three UK top 10 singles.[2] This success won him a Brit Award for Best British Male Solo Artist in 2008.[3] His third studio album, Record Collection, was released on 27 September 2010, peaking at number two in the UK.</p>\r\n<p>In 2014, Ronson achieved his first UK and US number one single with "Uptown Funk", which featured vocals from Bruno Mars. In 2015 the song won Ronson the Brit Award for British Single of the Year. His fourth studio album, Uptown Special, was released in January 2015, and became his first UK number one album.</p>\r\n\r\n<p>Ronson has also produced multi-platform, Grammy-winning albums for artists such as Amy Winehouse and Adele.</p>', '', 1),
(6, 'Ed', 'Sheeran', 'ed-sheeran', 2, '0000-00-00', 'eddieS', '$2y$12$Kk4TrSYswbbhb9zyFa91Nudp1WuuUUHXp1Ss/ddHGL8h/ZMqp5zoG', 'ed@veery.es', 'edSheeran.jpg', 'sheeranCover.jpg', '<p>Edward Christopher "Ed" Sheeran (born 17 February 1991) is an English singer-songwriter and musician. Born in Hebden Bridge, West Yorkshire and raised in Framlingham, Suffolk, he moved to London in 2008 to pursue a musical career. In early 2011, Sheeran released an independent extended play, No. 5 Collaborations Project, which caught the attention of both Elton John and Jamie Foxx. He then signed to Asylum Records. His debut album, +, containing the singles "The A Team" and "Lego House", was certified 6× Platinum in the UK. In 2012, Sheeran won two Brit Awards for Best British Male Solo Artist and British Breakthrough Act. "The A Team" won the Ivor Novello Award for Best Song Musically and Lyrically. In 2014, he was nominated for Best New Artist at the 56th Annual Grammy Awards.</p>', '', 1),
(7, 'Maroon 5', '', 'maroon-5', 2, '0000-00-00', 'wearemaroonfive', '$2y$12$Kk4TrSYswbbhb9zyFa91Nudp1WuuUUHXp1Ss/ddHGL8h/ZMqp5zoG', 'm5@veery.es', 'maroon.jpg', 'maroonHeader.jpg', '<p>Maroon 5 is an American pop rock band that originated in Los Angeles, California.[6][7] The group was formed in 1994 as Kara''s Flowers while its members were still in high school and originally consisted of Adam Levine (lead vocals, guitar), Jesse Carmichael (guitar, backing vocals) Mickey Madden (bass guitar) and Ryan Dusick (drums). The band, which self-released an album called We Like Digging?, was named after a girl the group had a crush on. They signed to Reprise Records and released an album, The Fourth World, in 1997. After a tepid response to the album, the band parted ways with the record label and the members attended college.</p>\r\n\r\n<p>In 2001, the band regrouped, with guitarist James Valentine added to the line-up, and pursued a new direction under the name Maroon 5.[8] At this point, Carmichael switched to playing keyboards, which has since become his main instrument in the band. After these changes, Maroon 5 signed with Octone Records and released their debut album, Songs About Jane, in June 2002. The album''s lead single "Harder to Breathe", received heavy airplay, which helped the album to debut at number six on the Billboard 200 chart.[9] The band won the Grammy Award for Best New Artist in 2005. For the next few years, they toured extensively worldwide in support of Songs About Jane and produced two live recordings: 2004''s 1.22.03.Acoustic and 2005''s Live – Friday the 13th.[10] In 2006, Dusick officially left Maroon 5 after suffering from serious wrist and shoulder injuries and was replaced by Matt Flynn. The band then recorded their second album, It Won''t Be Soon Before Long and released it in May 2007.[11] The album reached number one on the US Billboard 200 chart and the lead single, "Makes Me Wonder", became the band''s first number-one single on the Billboard Hot 100.</p>\r\n\r\n<p>In September 2010, Maroon 5 released their third studio album Hands All Over, which was re-released in 2011 to include the single "Moves like Jagger". While the original version of the album received mixed reviews, "Moves like Jagger" reached the number one position on the Billboard Hot 100. The band released their fourth album, Overexposed, on June 26, 2012. All four singles of the album were highly successful on the Billboard Hot 100, including second single "One More Night", which reached number one. In 2014, the band signed with Interscope Records and released their fifth studio album, V, with the very-first line-up of six official band members, as keyboardist and backing vocalist PJ Morton became an official member in 2012. The same year, a longtime friend of the band and bass player of Phantom Planet, Sam Farrar, became an official touring member, performing the keyboards with Carmichael and Morton. The album debuted atop the Billboard 200. Maroon 5 has sold more than 23 million albums and 109 million singles worldwide.[12][13]</p>', '', 1),
(8, 'Fetty ', 'Wap', 'fetty-wap', 2, '0000-00-00', 'thefappening', '$2y$12$Kk4TrSYswbbhb9zyFa91Nudp1WuuUUHXp1Ss/ddHGL8h/ZMqp5zoG', 'fap@veery.es', 'fap.png', 'fapCover.png', '<p>Willie Maxwell (born June 7, 1990), better known by his stage name Fetty Wap, is an American rapper. A native of Paterson, New Jersey, he is best known for his 2014 hit single "Trap Queen", which peaked at number 2 on the United States Billboard Hot 100.[1][2] He signed with 300 Entertainment in November 2014 and is set to release a self-titled mixtape in 2015.[3]</p>', '', 1),
(9, 'Wiz ', 'Khalifa', 'wiz-khalifa', 2, '0000-00-00', 'dawiz', '$2y$12$Kk4TrSYswbbhb9zyFa91Nudp1WuuUUHXp1Ss/ddHGL8h/ZMqp5zoG', 'wiz@veery.es', 'wiz.jpg', 'wizCover.jpg', '<p>Cameron Jibril Thomaz (born September 8, 1987), better known by the stage name Wiz Khalifa, is an American rapper, songwriter and actor. He released his debut album, Show and Prove, in 2006, and signed to Warner Bros. Records in 2007. His Eurodance-influenced single, "Say Yeah", received urban radio airplay, charting on the Rhythmic Top 40 and Hot Rap Tracks charts in 2008.[1]</p>\r\n\r\n<p>Khalifa parted with Warner Bros. and released his second album, Deal or No Deal, in November 2009. He released the mixtape Kush and Orange Juice as a free download in April 2010; he then signed with Atlantic Records.[2] He is also well known for his debut single for Atlantic, "Black and Yellow", which peaked at number one on the Billboard Hot 100. His debut album for the label, Rolling Papers, was released on March 29, 2011.[3] He followed that album with O.N.I.F.C. on December 4, 2012 which was backed by the singles "Work Hard, Play Hard" and "Remember You". Wiz released his fourth album Blacc Hollywood on August 18, 2014 backed by the lead single We Dem Boyz.</p>', '', 1),
(38, 'Rafael', 'ramirez urbina', 'rafael-ramirez-urbina', 1, '0000-00-00', 'raffe90', '$2y$12$Kk4TrSYswbbhb9zyFa91Nudp1WuuUUHXp1Ss/ddHGL8h/ZMqp5zoG', 'raffe90@gmail.com', 'album4.jpg', 'rhcp.jpg', '<p>This is your Bio</p>\r\n<p>I guess</p>', '$2y$12$u2k.Y8UIzzcR1RAcpbnqzOCy.', 0),
(39, 'denis', 'rodman', 'denis-rodman', 1, '0000-00-00', 'DEN', '$2y$12$j7TXXDWBSwDw5VQdPasyKe/dwHA54m1X8h8f/4YgEqCc7oRrPXvDS', 'DENMADRID91@GMAIL.COM', 'img/profilePictures/', 'img/headerPictures/', '<p>This is your Bio</p>', '$2y$12$mRFP6yo52jI5RA0W2gukHOgQf', 0),
(40, '', '', '', 1, '0000-00-00', '', '$2y$12$udDTNTC6E7owpZLcf8y8V.6RTQHOOCn3DMFOJsEYlFgM2L8OiQ6Ge', '', '', '', '', '$2y$12$dqiLa.cxaq.0s4Cnw6mnau9bV', 0),
(41, 'dennis', 'pinto rivero', 'dennis-pinto-rivero', 1, '0000-00-00', 'Dennis', '$2y$12$W.ox1A.IZ1R3X.4e4.gwMOvnoXV21.xpsKodS.DW4vK8iuC9wojrW', 'danielpintoriv@gmail.com', 'img/profilePictures/', 'img/headerPictures/', '<p>Well, im not a bot</p>', '$2y$12$1Uq8MFbXbd.66tgtRZOS.eF6r', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vry_user_posts`
--

CREATE TABLE IF NOT EXISTS `vry_user_posts` (
`postID` int(11) unsigned NOT NULL,
  `userID` int(11) unsigned NOT NULL,
  `postSlug` varchar(255) NOT NULL,
  `postContent` varchar(140) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `postDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `vry_user_posts`
--

INSERT INTO `vry_user_posts` (`postID`, `userID`, `postSlug`, `postContent`, `postDate`) VALUES
(1, 5, 'slug1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever sinc', '2015-05-17 22:03:29'),
(2, 6, 'slug2', 'nventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit a', '2015-05-17 22:03:29'),
(3, 7, 'slug113321', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini', '2015-05-17 22:03:29'),
(4, 8, 'slug1465465', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finib', '2015-05-17 22:03:29'),
(5, 9, 'slug15498+48941', 'm generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a ', '2015-05-17 22:03:29'),
(6, 38, 'slug19848', 'produced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in thei', '2015-05-17 22:03:29'),
(7, 38, 'slug18495+95', '\r\nIt is a long established fact that a reader will be distracted by the readable content o', '2015-05-17 22:03:29'),
(8, 9, 'slug1sdsdfgsdg', '"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, ', '2015-05-17 22:03:29'),
(9, 5, 'slug1sdfsdf', 'ction 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.1', '2015-05-17 22:03:29'),
(10, 6, 'slug1dsffgsdfg', 'ajority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are', '2015-02-04 16:19:51'),
(11, 7, 'slug17441681', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making ', '2015-05-17 22:03:29'),
(12, 8, 'slug189489+484', 'nventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit a', '2015-05-17 22:03:29'),
(13, 38, 'slug1848941984184', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini', '2015-05-17 22:03:29'),
(14, 5, 'slug18418641864', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finib', '2015-05-05 15:19:51'),
(15, 6, 'slug189498448', 'm generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a ', '2015-04-25 15:19:51'),
(16, 1, 'slug1758414', 'produced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in thei', '2015-02-23 16:19:51'),
(17, 2, 'slug19844844', '\r\nIt is a long established fact that a reader will be distracted by the readable content o', '2015-02-21 16:19:51'),
(18, 2, 'slug1841484484', '"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, ', '2014-11-12 16:19:51'),
(19, 4, 'slug198484894', 'ction 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.1', '2014-08-13 15:19:51'),
(20, 6, 'slug184984984894', 'ajority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are', '2014-04-25 15:19:51'),
(21, 1, '9slug184984984', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making ', '2014-11-14 16:19:51'),
(22, 3, 'slug1848489498', 'nventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit a', '2014-11-15 16:19:51'),
(23, 4, 'slug14894894894', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini', '2015-01-22 16:19:51'),
(24, 5, 'slug18949848948', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finib', '2015-05-12 15:19:51'),
(25, 6, 'slug184894894894', 'm generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a ', '2015-05-08 15:19:51'),
(26, 1, 'slug184984984', 'produced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in thei', '2015-02-25 16:19:51'),
(27, 2, 'slug18498498489', '\r\nIt is a long established fact that a reader will be distracted by the readable content o', '2015-02-19 16:19:51'),
(28, 2, 'slug1498489489', '"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, ', '2015-03-31 15:19:51'),
(29, 4, 'slug1894984894', 'ction 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.1', '2015-05-14 15:19:51'),
(30, 6, 'slug184984894', 'ajority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are', '2015-05-12 15:19:51'),
(31, 1, 'slug184894894', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making ', '2015-05-01 15:19:51'),
(32, 38, '', '<p>New post here....dfdf</p>', '2015-05-18 18:15:35'),
(33, 38, '', '<p>New post here....dfdf</p>', '2015-05-18 18:15:58'),
(34, 38, '', '<p>New post here....dfdf</p>', '2015-05-18 18:16:09'),
(35, 38, '', '<p>Nuevo post</p>', '2015-05-18 18:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `vry_video`
--

CREATE TABLE IF NOT EXISTS `vry_video` (
`videoID` int(11) unsigned NOT NULL,
  `artistID` int(11) unsigned NOT NULL,
  `videoTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `videoUrl` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vry_video`
--

INSERT INTO `vry_video` (`videoID`, `artistID`, `videoTitle`, `videoUrl`) VALUES
(1, 1, 'Jay-Z feat. Eminem - Renegade Live (Official HD Video)', 'https://www.youtube.com/embed/Rk-7Ql_5fZo'),
(2, 1, 'Jay-Z & Kanye West - Ni**as In Paris (Explicit)', 'https://www.youtube.com/embed/gG_dA32oH44'),
(3, 1, 'Pharrell - Frontin'' ft. Jay-Z', 'https://www.youtube.com/embed/LOtkH5amC7s');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vry_albums`
--
ALTER TABLE `vry_albums`
 ADD PRIMARY KEY (`albumID`);

--
-- Indexes for table `vry_artists`
--
ALTER TABLE `vry_artists`
 ADD PRIMARY KEY (`artistID`);

--
-- Indexes for table `vry_followers`
--
ALTER TABLE `vry_followers`
 ADD PRIMARY KEY (`relationID`);

--
-- Indexes for table `vry_media`
--
ALTER TABLE `vry_media`
 ADD PRIMARY KEY (`mediaID`);

--
-- Indexes for table `vry_streams`
--
ALTER TABLE `vry_streams`
 ADD PRIMARY KEY (`streamID`);

--
-- Indexes for table `vry_users`
--
ALTER TABLE `vry_users`
 ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `vry_user_posts`
--
ALTER TABLE `vry_user_posts`
 ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `vry_video`
--
ALTER TABLE `vry_video`
 ADD PRIMARY KEY (`videoID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vry_albums`
--
ALTER TABLE `vry_albums`
MODIFY `albumID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `vry_artists`
--
ALTER TABLE `vry_artists`
MODIFY `artistID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `vry_followers`
--
ALTER TABLE `vry_followers`
MODIFY `relationID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `vry_media`
--
ALTER TABLE `vry_media`
MODIFY `mediaID` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vry_streams`
--
ALTER TABLE `vry_streams`
MODIFY `streamID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vry_users`
--
ALTER TABLE `vry_users`
MODIFY `userID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `vry_user_posts`
--
ALTER TABLE `vry_user_posts`
MODIFY `postID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `vry_video`
--
ALTER TABLE `vry_video`
MODIFY `videoID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
