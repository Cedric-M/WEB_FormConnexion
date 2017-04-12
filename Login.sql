SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Login`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `login` (`id`, `pseudo`, `password`) VALUES
(1, 'cexi', 'exia'),
(2, 'root', 'root');



ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

