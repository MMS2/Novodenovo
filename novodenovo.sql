-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 29-Jun-2015 às 16:19
-- Versão do servidor: 5.5.43-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `novodenovo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text COLLATE utf8_bin NOT NULL,
  `senha` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `nome`, `senha`) VALUES
(1, 'admin', 'admin'),
(2, 'teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text COLLATE utf8_bin NOT NULL,
  `area` text COLLATE utf8_bin NOT NULL,
  `cliente_nome` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=120 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text COLLATE utf8_bin NOT NULL,
  `noticia` text COLLATE utf8_bin NOT NULL,
  `slug` text COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL,
  `data` text COLLATE utf8_bin NOT NULL,
  `edicao` text COLLATE utf8_bin NOT NULL,
  `pag` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=44 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `noticia`, `slug`, `img`, `data`, `edicao`, `pag`) VALUES
(39, 'Ex-presidente do Banco Central americano palestra na NRF 2015', '\r\n<p>Uma das palestras mais esperadas pelos participantes da NRF 2015 aconteceu neste segundo dia de atividades, a do ex-presidente do Banco Central americano, Ben Bernanke. O atuou durante um período importante da crise econômica e financeira americana. Durante a palestra, Ben Bernanke falou sobre a crise financeira nos Estados Unidos e como aconteceu a retomada do crescimento do país. </p>\r\n\r\n<p>Falando para o público da NRF, Ben Bernanke demonstrou confiança na economia americana para 2015. Sua percepção está baseada no fato de que há cinco anos a economia tem um crescimento econômico positivo e em 2015 deverá apresentar o melhor desempenho.</p>\r\n<p> Além disso, apresentou números que revelam uma tendência de retomada da economia americana, com o desemprego em queda, o consumo interno aumentando consistentemente e o mercado imobiliário se expandindo.</p>\r\n<p>Reconheceu a forte possibilidade de aumento das taxas de juros americanas em 2015 e que isso poderá trazer impactos negativos para outras economias e afirmou que a economia europeia ainda vive uma situação de estagnação econômica.</p>\r\n<p><img src="http://www.cndl.org.br/useruploads/images/imagens_2015/nrf_2015/ben_bernanke_official_portrait.jpg" alt="" ></p>\r\n<p>De sua conversa percebe-se um cenário positivo para a economia americana em 2015, com crescimento do PIB, redução do desemprego e aumento do consumo interno. Obviamente esse quadro deverá ser seguido por maior taxa interna de juros, valorização do Dólar Americano frente a outras moedas e crescimento moderado da renda interna.</p>\r\n<p><strong>Delegação da CNDL tira foto oficial</strong></p>\r\n<p>A delegação da CNDL esteve reunida na escadaria no Centro de Convenções Javits Center, onde acontece a NRF 2015 para tirar a foto oficial da delegação. Esta é a maior delegação da CNDL a participar da maior feira de varejo do mundo.</p>\r\n<p><img src="http://www.cndl.org.br/useruploads/images/imagens_2015/nrf_2015/nrf_00012.jpg" alt="" ></p>\r\n<br>\r\n<br>\r\n<strong>Fonte:</strong> Assessoria de Imprensa da CNDL\r\n', 'ex-presidente_do_banco_central_americano_palestra_na_nrf_2015', 'publico/uploads/a187c646207a4e11f529465faad4dec9.jpg', '15/01/15', '', ''),
(40, 'RETORNO FOI POSITIVO PARA ME DIFERENCIAR', '<p>Dono de dez lojas de\r\nlingerie na zona leste\r\nde São Paulo, o empresário\r\nMarcelo Dória integra pelase gunda vez a comitiva\r\ndo Sebrae à 4ª Retail''s Big\r\nShow,em Nova York, nos Estados\r\nUnidos. Referência\r\npor antecipar tendências do\r\nvarejo mundial, o evento,\r\nconsiderado o maior domundo\r\nno segmento, é promovido\r\nanualmente pela National Retail Federation(\r\nNRF).</p>\r\n<p>As ideias trazidas por Dória\r\nno ano passado foram\r\naprovadas por suas clientes.\r\n</p><p>Ele passou a fazer encontros\r\ntemáticos e cafés da manhã para\r\nse aproximar de suas consumidoras.\r\nO retorno foi muito\r\npositivo para me diferenciar,\r\nnão quero vender produto,quero\r\nvender atenção, afirma. Há\r\n17 anos no mercado,o empresário\r\nviu seu negócio deslanchar\r\napós começar a participar de feiras\r\nnacionais, há dez anos.</p>\r\n<p>Sempre fui a feiras relacionadas\r\nao meu segmento para ver\r\nas tendências de mercado, conhecer parceiros e fazer networking.\r\nO mais importante,no entanto,\r\né aprender melhorias de\r\nprocessos internos, de gestão,\r\nde produtos e de pessoas.</p>\r\n<p>Além de participarem da Retail''s\r\nBig Show, os 150 empresários\r\nlevados pelo Sebrae farão\r\nvisitas técnicas a grandes lojas\r\ndo varejo em Nova York e às\r\nprincipais empresas de tecnologia no\r\nVale do Silício.O retorno\r\nestá previsto para o dia 18 deste\r\nmês. Essa é uma oportunidade\r\nde trazer de o que está acontecendo\r\nde novidade no mundo e\r\naplicar no próprio negócio,\r\nafirma o consultor do Sebrae José\r\nCarmo Vieira de Oliveira.</p>\r\n<p>Entre os temas que serão\r\napresentados na feira neste\r\nano estão o perfil do novo\r\nconsumidor, vendas online\r\nversus PDV, fidelização do\r\ncliente, influência das mídias\r\nsociais e palestras e\r\nworkshops. Essa é a quarta\r\nvez que o Sebrae-SP leva empresários\r\nbrasileiros para a\r\nNRF Retail Big Show.</p>\r\n<p>Os interessado sem participar\r\nda missão devem possuir\r\nempresa estabelecida no Estado\r\nde São Paulo, apresentar\r\nfaturamento anual igual\r\nou inferior a R$ 3,6 milhões,\r\natuar no setor varejista ou\r\nter atividade diretamente relacionada\r\nao varejo e aderir\r\nao pacote de viagem completo.</p>\r\n<p>O subsídio do Sebrae-SP,\r\nválido para um participante\r\npor empresa, contempla ingresso\r\nà feira, despesas com\r\nestadia, tradutores, visitas\r\ntécnicas, transporte interno.\r\nO interessado arca como custo\r\nintegral da passagem, taxas,\r\nalimentação e demais\r\ndespesas.</p>', 'retorno_foi_positivo_para_me_diferenciar', 'publico/uploads/6dd8e30eff8e9b1cba9435eebc024684.jpg', '15/01/15', '', ''),
(42, 'Comportamento do varejo é destaque no terceiro dia de NRF 2015', '\r\n<p>Nesta terça-feira, 13 de janeiro, foram discutidos na NRF 2015 temas relacionados ao comportamento estratégico do varejo. No Painel, a Nova Divisão Digital ficou evidente que a tecnologia está mudando rapidamente o comportamento dos consumidores e isso vem reformulando o posicionamento dos varejistas.</p>\r\n<p><img src="http://www.cndl.org.br/useruploads/images/imagens_2015/nrf_2015/foto_034.jpg" alt="" width="600" height="359"></p>\r\n<p>Segundo pesquisa da Deloitte Consultoria, a sociedade em geral abraçou o uso intensivo das mídias sociais, de forma que existe uma demanda por melhor funcionalidade no uso dos canais de internet. A dicotomia entre oferta mais informações versus maior facilidade de navegação, coloca uma nova condição para os canais de mídia social.</p>\r\n<p><img src="http://www.cndl.org.br/useruploads/images/imagens_2015/nrf_2015/foto_033.jpg" alt=""></p>\r\n<p>Foi amplamente defendida também a ideia de que hoje fazemos parte de uma "família global", onde os clientes também ajudam as empresas a crescerem nos seus mercados. Essa condição reflete o engajamento dos clientes no mundo digital.<br>\r\n  <br>\r\n  Nesse mundo é fundamental que o varejista conheça profundamente o seu cliente para ajudá-lo a solucionar seus problemas e surpreendê-lo. O cliente deixa de ser um consumidor de produtos e passa a ser demandador de soluções. E ainda quer vivenciar uma experiência de compra com satisfação. Isso significa que o varejista deve oferecer aos clientes os diversos canais de compra, seja na própria loja, seja nas lojas virtuais.</p>\r\n<p><img src="http://www.cndl.org.br/useruploads/images/imagens_2015/nrf_2015/foto_030.jpg" alt="" width="600" height="449"></p>\r\n<p><img src="http://www.cndl.org.br/useruploads/images/imagens_2015/nrf_2015/foto_031.jpg" alt="" width="600" height="411"></p>\r\n<p><img src="http://www.cndl.org.br/useruploads/images/imagens_2015/nrf_2015/foto_023.jpg" alt="" width="600" height="450"></p>\r\n', 'comportamento_do_varejo_e_destaque_no_terceiro_dia_de_nrf_2015', 'publico/uploads/c51207af6a26ad4df14d2290bbb409e7.jpg', '15/01/15', '', ''),
(43, 'Delegação da CNDL abre trabalhos na NRF 2015', '<p>Teve início neste domingo, 11 de janeiro, a NRF 2015, o maior encontro de varejo do mundo. A delegação da CNDL marcou presença. Na abertura dos trabalhos, o presidente da CNDL, Honório Pinheiro, participou de debate ao lado do vice-presidente da CNDL, José César da Costa, e dos presidentes do C.A. do SPC Brasil, Roque Pellizzaro Junior, e do C.D. do SPC Brasil, Bruno Selmi Dei Falci.</p>\r\n<p><img src="http://www.cndl.org.br/useruploads/images/imagens_2015/nrf_2015/nrf_0006.jpg" alt="" width="525" height="265"> </p>\r\n<p><strong>FIRAE</strong></p>\r\n<p>A CNDL participou do encontro da FIRAE no dia 10/01/2015, em Nova Iorque para discutir as tendências e os desafios do Varejo em 2015. Participaram 30 entidades de diversos países da Europa, Ásia, América do Norte e América do Sul. Dentre os desafios para 2015, a maioria das entidades apontaram as seguintes questões:</p>\r\n<p>- informalidade dos micro e pequenos varejistas</p>\r\n<p>-  crescimento das vendas em um ambiente econômico recessivo</p>\r\n<p>- capacitação da mão de obra haja vista a necessidade de acompanhar a evolução da tecnologia</p>\r\n<p>- regulação apropriada do varejo</p>\r\n<p>- reforma fiscal que diminua a carga tributária.</p>\r\n<p>A CNDL esteve representada oficialmente pelo seu 1º Vice Presidente, José Cesar da Costa, que se fez acompanhar do Superintendente Everton Correia, além do Consultor de Varejo da delegação, Professor Nelson Barrizzelli.</p>\r\n<p> </p>\r\n<p><img src="http://www.cndl.org.br/useruploads/images/imagens_2015/nrf_2015/nrf_0001.jpg" alt="" width="600" height="450"></p>\r\n<p><img src="http://www.cndl.org.br/useruploads/images/imagens_2015/nrf_2015/nrf_0002.jpg" alt="" width="600" height="404"></p>\r\n<p><img src="http://www.cndl.org.br/useruploads/images/imagens_2015/nrf_2015/nrf_0003.jpg" alt="" width="600" height="404"></p>\r\n<p><img src="http://www.cndl.org.br/useruploads/images/imagens_2015/nrf_2015/nrf_0004.jpg" alt="" width="600" height="404"></p>\r\n<p><img src="http://www.cndl.org.br/useruploads/images/imagens_2015/nrf_2015/nrf_0005.jpg" alt="" width="600" height="404"></p>\r\n<p><img src="http://www.cndl.org.br/useruploads/images/imagens_2015/nrf_2015/nrf_0008.jpg" alt="" width="600" height="404"></p>\r\n<p> </p>\r\n<p><strong>Palestras</strong></p>\r\n<p>No primeiro dia de palestras na NRF 2015, a delegação da CNDL conferiu assuntos importantes como tendências do varejo mundial e perspectivas para a América Latina em 2015.</p>\r\n<p>No painel Embracing Innovation, realizado na abertura da NRF, a Deloite apresentou as grandes tendências para 2015. Dentre as tendências podemos destacar: </p>\r\n<p>1. Demanda Mundial está mais fraca</p>\r\n<p>2. Fortalecimento do dólar Americano frente as demais moedas da Europa, Ásia e América Latina</p>\r\n<p>3. Arrefecimento do crescimento da economia chinesa</p>\r\n<p>4. Mudanças no perfil demográfico mundial, com o maior envelhecimento da população</p>\r\n<p>5. Crescimento da classe média global nos países em desenvolvimento</p>\r\n<p>6. Maior aplicação da tecnologia da informação e comunicação no mundo dos negócios</p>\r\n<p>Para a economia brasileira, a Deloitte apresentou um prognóstico de recessão, em face do aumento das taxas de juros e do ajuste fiscal necessário.</p>\r\n<p><img src="http://www.cndl.org.br/useruploads/images/imagens_2015/nrf_2015/nrf_0011.jpg" alt="" width="600" height="450"></p>\r\n<p><img src="http://www.cndl.org.br/useruploads/images/imagens_2015/nrf_2015/nrf_0010.jpg" alt="" width="600" height="487"></p>\r\n', 'delegacao_da_cndl_abre_trabalhos_na_nrf_2015', 'publico/uploads/989b32e2cd576740ba5360600f58b6a9.jpg', '15/01/15', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `obra`
--

CREATE TABLE IF NOT EXISTS `obra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_nome` text COLLATE utf8_bin NOT NULL,
  `area` text COLLATE utf8_bin NOT NULL,
  `descricao_obra` text COLLATE utf8_bin NOT NULL,
  `slug` text COLLATE utf8_bin NOT NULL,
  `data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `obra`
--

INSERT INTO `obra` (`id`, `cliente_nome`, `area`, `descricao_obra`, `slug`, `data`) VALUES
(19, 'Demetrios', 'PP', 'teste', 'demetrios', '29/06/15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
