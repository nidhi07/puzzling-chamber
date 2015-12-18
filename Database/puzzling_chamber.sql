-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2015 at 10:07 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `puzzling_chamber`
--

-- --------------------------------------------------------

--
-- Table structure for table `edge`
--

CREATE TABLE IF NOT EXISTS `edge` (
  `EdgeId` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `Category` varchar(2) NOT NULL,
  `Question` varchar(1500) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  `Hint1` varchar(500) NOT NULL,
  `Hint2` varchar(200) NOT NULL,
  `EncryptionDetails` varchar(1000) NOT NULL,
  `Successful` int(11) NOT NULL DEFAULT '0',
  `Attempts` int(11) NOT NULL DEFAULT '0',
  `Node1` int(11) NOT NULL,
  `Node2` int(11) NOT NULL,
  `Color` varchar(7) NOT NULL DEFAULT '#34DDDD'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edge`
--

INSERT INTO `edge` (`EdgeId`, `Weight`, `Category`, `Question`, `Answer`, `Hint1`, `Hint2`, `EncryptionDetails`, `Successful`, `Attempts`, `Node1`, `Node2`, `Color`) VALUES
(1, 7, 'WD', 'Choose the correct HTML tag for the largest heading \r\n A. <heading> \r\n B. <head> \r\n C. <h6> \r\n D. <h1>', 'D', 'Khdglqjv duh ghilqhg zlwk wkh k1 wr k6 wdjv', 'Headings are defined with the h1 to h6 tags.', 'Caesar Cipher -\nIt uses a simple letter substitution cipher that replaces\na letter with the letter 3 letters after it in the alphabet, \nwrapping back to the beginning if necessary.(A+3=D)\n [Digits are not in the encoded form] ', 0, 0, 1, 2, '#34DDDD'),
(2, 7, 'DS', 'The keyword used in C to transfer \r\ncontrol from a function back to the\r\ncalling function is ______\r\nA. break\r\nB. return\r\nC. continue\r\nD. goto', 'B', 'Wkh uhwxuq dgguhvv lv vdyhg dv sduw ri wkh \r\nrshudwlrq ri pdnlqj wkh vxeurxwlqh fdoo.', 'The return address is saved as part of the \r\noperation of making the subroutine call.', 'Caesar Cipher -\nIt uses a simple letter substitution cipher that replaces\na letter with the letter 3 letters after it in the alphabet, \nwrapping back to the beginning if necessary.(A+3=D)\n [Digits are not in the encoded form] ', 0, 0, 1, 3, '#34DDDD'),
(3, 7, 'M', 'Which of the following has the most capacity?\r\nA. 100 GB \r\nB. 100 KB\r\nC. 100 MB\r\nD. 100 TB', 'D', '1 WE = 1024 JE', '1 TB = 1024 GB', 'Caesar Cipher -\nIt uses a simple letter substitution cipher that replaces\na letter with the letter 3 letters after it in the alphabet, \nwrapping back to the beginning if necessary.(A+3=D)\n [Digits are not in the encoded form] ', 0, 0, 1, 4, '#34DDDD'),
(4, 7, 'CA', 'Consider the 4-to-1 multiplexer with two select lines S1 and S2 \n given in the link (http://localhost/PuzzlingChamber/images/Edge7.png) \n The minimal sum-of-products form of the boolean expression for the output \nF of the multiplexer is \n\n A. P''Q+ QR'' +PQ''R \n B. P''Q + P''QR'' + PQR'' + PQ''R \n C. P''QR + P''QR'' + QR'' + PQ''R \n D. PQR'' ', 'A', 'D pxowlsohahu ri 2^q lqsxwv kdv q vhohfw olqhv, zklfk duh xvhg wr vhohfw zklfk lqsxw olqh wr vhqg wr wkh rxwsxw.', 'A multiplexer of 2^n inputs has n select lines, which are used to select which input line to send to the output.', 'Caesar Cipher -\nIt uses a simple letter substitution cipher that replaces\na letter with the letter 3 letters after it in the alphabet, \nwrapping back to the beginning if necessary.(A+3=D)\n [Digits are not in the encoded form] ', 0, 0, 5, 6, '#34DDDD'),
(5, 7, 'CA', 'For the SOP expression AB''C + A''BC + ABC'', \r\nhow many 1s are in the truth table''s output column?\r\nA. 1\r\nB. 2\r\nC. 3\r\nD. 5', 'C', 'Sbe FBC, frr ragevrf jvgu inyhr 1 va bhgchg.', 'For SOP, see entries with value 1 in output.', 'ROT13-\r\nIt uses a simple letter substitution cipher that replaces a \r\nletter with the letter 13 letters after it in the \r\nalphabet, wrapping back to the beginning if \r\nnecessary.(A+13=N)\r\nA second application of ROT13 would\r\nrestore the original.', 0, 0, 7, 10, '#34DDDD'),
(6, 7, 'NL', 'What is the purpose of a subnet mask?\r\nA. To prevent firewalls allowing internal network access to the outside world\r\nB. To Hide the IP address of a computer\r\nC. To hide a small network inside a smaller one\r\nD. To separate the IP address into network and host parts', 'D', 'Fhoarggvat vf qbar sbe frphevgl naq cresbeznapr ernfbaf.', 'Subnetting is done for security and performance reasons.', 'ROT13-It uses a simple letter substitution cipher that replaces a letter with the letter 13 letters after it in the alphabet, wrapping back to the beginning if necessary.(A+13=N)A second application of ROT13 wouldrestore the original.', 0, 0, 5, 10, '#34DDDD'),
(7, 6, 'CA', 'Addition of 10 and 11 in binary is:\r\nA. 101\r\nB. 100\r\nC. 111\r\nD. 110', 'A', '1 + 1 = 10', '1 + 1 = 10', 'Caesar Cipher -\r\nIt uses a simple letter substitution cipher that replaces\r\na letter with the letter 3 letters after it in the alphabet,\r\nwrapping back to the beginning if necessary.(A+3=D)\r\n[Digits are not in the encoded form]\r\n', 0, 0, 2, 7, '#34DDDD'),
(8, 6, 'M', 'Who is the current CEO of Facebook?\r\nA. Donna Zuckerberg\r\nB. Mark Zuckerberg\r\nC. Arielle Zuckerberg\r\nD. Priscilla Chan', 'B', 'Kh lv rqh ri wkh fr-irxqghuv ri wkh zhevlwh.', 'He is one of the co-founders of the website.', 'Caesar Cipher -\r\nIt uses a simple letter substitution cipher that replaces\r\na letter with the letter 3 letters after it in the alphabet,\r\nwrapping back to the beginning if necessary.(A+3=D)\r\n[Digits are not in the encoded form]\r\n', 0, 0, 3, 7, '#34DDDD'),
(9, 6, 'WD', 'What is the full form of CSS?\r\nA. Creative Style Sheets\r\nB. Computer Style Sheets\r\nC. Cascading Style Sheets\r\nD. Colorful Style Sheets', 'C', 'Fdvfdglqj ghwhuplqhv zklfk vshflilf vwbohvkhhw\r\nuxoh dssolhv wr zklfk slhfh ri KWPO.', 'Cascading determines which specific stylesheet\r\nrule applies to which piece of HTML.', 'Caesar Cipher -\r\nIt uses a simple letter substitution cipher that replaces\r\na letter with the letter 3 letters after it in the alphabet,\r\nwrapping back to the beginning if necessary.(A+3=D)\r\n[Digits are not in the encoded form]\r\n', 0, 0, 4, 7, '#34DDDD'),
(10, 6, 'NL', 'You have an interface on a router with the IP address\r\nof 192.168.192.10/29. Including the router interface, \r\nhow many hosts can have IP addresses on the LAN attached \r\nto router interface?\r\nA. 6\r\nB. 8\r\nC. 30\r\nD. 62', 'A', 'Wzr ri wkh LSv lq d vxeqhw duh qhyhu xvhg wr dgguhvv krvwv', 'Two of the IPs in a subnet are never used to address hosts', 'Caesar Cipher -\r\nIt uses a simple letter substitution cipher that replaces\r\na letter with the letter 3 letters after it in the alphabet,\r\nwrapping back to the beginning if necessary.(A+3=D)\r\n[Digits are not in the encoded form]', 0, 0, 6, 7, '#34DDDD'),
(11, 6, 'DS', 'Suppose that an intermixed sequence of 10 push and 10 pop \r\noperations are performed on a LIFO stack. The pushes push \r\nthe letters 0 through 9 in order; the pops print out the \r\nreturn value. Which of the following output sequence could occur?\r\nA. 4765321908\r\nB. 0147865932\r\nC. 0241657398', 'B', 'cbc erzbirf gur ynfg ryrzrag gung jnf nqqrq', 'pop removes the last element that was added', 'ROT13-\r\nIt uses a simple letter substitution cipher that replaces a \r\nletter with the letter 13 letters after it in the \r\nalphabet, wrapping back to the beginning if \r\nnecessary.(A+13=N)\r\nA second application of ROT13 would\r\nrestore the original.\r\n', 0, 0, 7, 11, '#34DDDD'),
(12, 6, 'NL', 'You need to configure a server that is on the subnet 192.168.19.24/29. The router has the first available host address. Which of the following should you assign\r\nto the server?\r\nA. 192.168.19.0  255.255.255.0\r\nB. 192.168.19.33  255.255.255.240\r\nC. 192.168.19.26  255.255.255.248\r\nD. 192.168.19.31  255.255.255.248', 'C', 'for n1-128,2-192,3-224,4-240,5-248,6-252,7-254,8-255.', 'for n1-128,2-192,3-224,4-240,5-248,6-252,7-254,8-255.', 'Lucky Question(Already in encoded form) :D', 0, 0, 10, 13, '#34DDDD'),
(13, 6, 'WD', 'Which of the following is a DCL(Data Control Language) command?\r\nA. DROP\r\nB. ALTER\r\nC. REVOKE\r\nD. UPDATE', 'C', '141331 2443 45431514 4434 13343344423431 111313154343 4434 14114411 434434421514 2433 11 1411441112114315', 'DCL is used to control access to data stored in a database', 'For example, BAT becomes 12 11 44\r\n(http://localhost/PuzzlingChamber/images/polybius_square.jpg)', 0, 0, 5, 8, '#34DDDD'),
(14, 6, 'WD', 'In web programming, what is the QUERY_STRING?\r\nA. The part of a URL after the ? mark, not including the ? itself \r\nB. The part of a URL after the # mark, not including the # itself\r\nC. The part of a URL after the ? mark, including the ? itself \r\nD. The part of a URL after the # mark, including the # itself', 'A', 'Tde bfqrt puertfml jsqh fr urek sr s reosqstmq', 'The first question mark is used as a separator.', 'Example-\r\nPlaintext: A B C D E F G H I J K L M N O P Q R S T U V W X Y Z\r\nEncrypted: K R Y P T O S A B C D E F G H I J L M N Q U V W X Z  \r\nWith KRYPTOS as the keyword, all As become Ks, all Bs become\r\nRs and so on. Encrypting the message KNOWLEDGE IS \r\nPOWER using the keyword KRYPTOS:\r\nPlaintext: K N O W L E D G E I S P O W E R \r\nEncoded: D G H V E T P S T B M I H V T L\r\n(Key used in above hint is snake)\r\n', 0, 0, 10, 15, '#34DDDD'),
(15, 6, 'M', 'If a DVD ROM drive equipped computer will not play DVDs, what might you try?\r\nA. Install regions\r\nB. Install Codecs\r\nC. Install a dual head graphics card\r\nD. Install a DVD Writer', 'B', 'N qrivpr pncnoyr bs cresbezvat genafsbezngvbaf ba n qngn fgernz.', 'A device capable of performing transformations on a data stream.', 'ROT13-\r\nIt uses a simple letter substitution cipher that replaces a \r\nletter with the letter 13 letters after it in the \r\nalphabet, wrapping back to the beginning if \r\nnecessary.(A+13=N)\r\nA second application of ROT13 would\r\nrestore the original.', 0, 0, 13, 16, '#34DDDD'),
(16, 6, 'CA', 'System calls are usually invoked by using:\r\nA. Software Interrupt\r\nB. Polling\r\nC. An indirect Jump\r\nD. A privileged instruction', 'A', 'Vbvwhp fdoov duh qrw lqyrnhg gluhfwob.', 'System calls are not invoked directly.', 'Caesar Cipher -\r\nIt uses a simple letter substitution cipher that replaces\r\na letter with the letter 3 letters after it in the alphabet,\r\nwrapping back to the beginning if necessary.(A+3=D)\r\n[Digits are not in the encoded form]\r\n', 0, 0, 15, 18, '#34DDDD'),
(17, 6, 'DS', 'A is a B-Tree of minimum degree 2 and D is a B-Tree of minimum degree 4 there are 15 nodes in each then which of the following is true\r\nA. height of D > height of A\r\nB. height of D < height of A\r\nC. height of D = height of A\r\nD. None of the above\r\n', 'B', 'vs a>=1, u<= ybt(onfr g)((a+1)/2).', 'if n>=1, h<= log(base t)((n+1)/2).', 'ROT13-\r\nIt uses a simple letter substitution cipher that replaces a \r\nletter with the letter 13 letters after it in the \r\nalphabet, wrapping back to the beginning if \r\nnecessary.(A+13=N)\r\nA second application of ROT13 would\r\nrestore the original.\r\n', 0, 0, 12, 13, '#34DDDD'),
(18, 5, 'WD', 'Which CSS property controls the text size?\r\nA. text-size\r\nB. text-style\r\nC. font-style\r\nD. font-size', 'D', 'Li brx gr qrw vshflib d irqw-vlch, wkh ghidxow vlch \r\niru qrupdo whaw, olnh sdudjudskv, lv 16sa.', 'If you do not specify a font-size, the default size \r\nfor normal text, like paragraphs, is 16px.', 'Caesar Cipher -\r\nIt uses a simple letter substitution cipher that replaces\r\na letter with the letter 3 letters after it in the alphabet,\r\nwrapping back to the beginning if necessary.(A+3=D)\r\n[Digits are not in the encoded form]', 0, 0, 7, 9, '#34DDDD'),
(19, 5, 'DS', 'The initial configuration of the queue is a,b,c,d \r\n(a is the front end). To get the configuration \r\nd,c,b,a one needs a minimum of ?\r\nA. 2 deletions and 3 additions\r\nB. 3 additions and 2 deletions\r\nC. 3 deletions and 3 additions\r\nD. 3 deletions and 4 additions', 'C', 'Dhrhr sbyybjf gur pbaprcg bs SVSB.', 'Queue follows the concept of FIFO.', 'ROT13-\r\nIt uses a simple letter substitution cipher that replaces a \r\nletter with the letter 13 letters after it in the \r\nalphabet, wrapping back to the beginning if \r\nnecessary.(A+13=N)\r\nA second application of ROT13 would\r\nrestore the original.', 0, 0, 8, 9, '#34DDDD'),
(20, 5, 'M', 'What might you type into a Run dialogue in order to view current memory usage in Windows?\r\nA. Performance\r\nB. PMon\r\nC. Perfmon\r\nD. PerfMonitor\r\n', 'C', '3515422134423211331315 32343324443442 2443 442315 343114-431323343431 52243314345243 22151525''43 2111513442244415 44343431', 'Performance Monitor is the old-school Windows geek''s favorite tool.', 'For example, BAT becomes 12 11 44.\r\n(http://localhost/PuzzlingChamber/images/polybius_square.jpg)', 0, 0, 9, 12, '#34DDDD'),
(21, 5, 'CA', 'Determine the values of A, B, C, and D that make the \r\nsum term A'' + B + C'' + D equal to zero.\r\nA. A = 1, B = 0, C = 0, D = 0\r\nB. A = 1, B = 0, C = 1, D = 0\r\nC. A = 0, B = 1, C = 0, D = 0\r\nD. A = 1, B = 0, C = 1, D = 1', 'B', 'Li D = 0, wkhq D'' = 1', 'If A = 0, then A'' = 1', 'Caesar Cipher -\r\nIt uses a simple letter substitution cipher that replaces\r\na letter with the letter 3 letters after it in the alphabet,\r\nwrapping back to the beginning if necessary.(A+3=D)\r\n[Digits are not in the encoded form]', 0, 0, 9, 16, '#34DDDD'),
(22, 5, 'WD', 'What will the query SELECT 8 FROM emp return? (emp is a table having n rows and m columns)\r\nA. A single row containing 8\r\nB. n rows containing 8\r\nC. m rows containing 8\r\nD. 8 rows containing 8', 'B', 'Guvf vf fnzr nf FRYRPG vq,8 SEBZ rzc', 'This is same as SELECT id,8 FROM emp', 'ROT13-\r\nIt uses a simple letter substitution cipher that replaces a \r\nletter with the letter 13 letters after it in the \r\nalphabet, wrapping back to the beginning if \r\nnecessary.(A+13=N)\r\nA second application of ROT13 would\r\nrestore the original.', 0, 0, 13, 14, '#34DDDD'),
(23, 5, 'NL', 'In Linux, what is the best way to give read permission to everybody on a file?\r\nA. chmod 777 file.txt\r\nB. chmod 4777 file.txt\r\nC. chmod +r file.txt\r\nD. chmod 444 file.txt', 'C', 'adjmk 400 bfie - Qesk ny mwleq,\r\nadjmk 040 bfie - Qesk ny cqmuo,\r\nadjmk 004 bfie - Qesk ny wmqik', 'chmod 400 file - Read by owner,\r\nchmod 040 file - Read by group,\r\nchmod 004 file - Read by world', 'Example-\r\nPlaintext: A B C D E F G H I J K L M N O P Q R S T U V W X Y Z\r\nEncrypted: K R Y P T O S A B C D E F G H I J L M N Q U V W X Z  \r\nWith KRYPTOS as the keyword, all As become Ks, all Bs become\r\nRs and so on. Encrypting the message KNOWLEDGE IS \r\nPOWER using the keyword KRYPTOS:\r\nPlaintext: K N O W L E D G E I S P O W E R \r\nEncoded: D G H V E T P S T B M I H V T L\r\n(Key used in above hint is snake)\r\n', 0, 0, 11, 17, '#34DDDD'),
(24, 5, 'CA', '(224)^(0.5)=13. The nos. 224 and 13 have the base r. \r\nThe value of the radix r is:  (^ represents power)\r\nA. 12\r\nB. 8\r\nC. 5\r\nD. 6', 'C', 'Wr frqyhuw wkh elqdub qxpehu 10011011 wr ghflpdo, zulwh grzq wkh srzhuv ri wzr iurp uljkw wr ohiw', 'To convert the binary number 10011011 to decimal,write down the powers of two from right to left', 'Caesar Cipher -\r\nIt uses a simple letter substitution cipher that replaces\r\na letter with the letter 3 letters after it in the alphabet,\r\nwrapping back to the beginning if necessary.(A+3=D)\r\n[Digits are not in the encoded form]', 0, 0, 13, 17, '#34DDDD'),
(25, 5, 'M', 'Which would help boost a wireless network signal?\r\nA. Clean up the computer''s hard drive\r\nB. Use static IP addresses instead of dynamic ones\r\nC. Use a wireless repeater\r\nD. Install a second network card in the computers on the wireless network', 'C', 'Vg jvyy erserfu gur jveryrff fvtany ol fraqvat vg bhg ntnva obbfgvat gur nern pbirerq', 'It will refresh the wireless signal by sending it out again boosting the area covered', 'ROT13-\r\nIt uses a simple letter substitution cipher that replaces a \r\nletter with the letter 13 letters after it in the \r\nalphabet, wrapping back to the beginning if \r\nnecessary.(A+13=N)\r\nA second application of ROT13 would\r\nrestore the original.', 0, 0, 15, 19, '#34DDDD'),
(26, 5, 'NL', 'You work as network consultant. Your customer, ''Codec Solutions Pvt. Ltd.'', \r\nhas a Class C network license. Codec wants you to subnet the network to provide a separate \r\nsubnet for each of its departments. Each subnet must support atleast 24 hosts. \r\nWhich of the following subnet mask will you use?\r\nA. 255.255.255.192\r\nB. 255.255.255.224\r\nC. 255.255.255.240\r\nD. 255.255.255.248', 'B', 'Twm mb tde FOr fl s runlet sqe leveq urek tm skkqerr dmrtr', 'Two of the IPs in a subnet are never used to address hosts', 'Example-\r\nPlaintext: A B C D E F G H I J K L M N O P Q R S T U V W X Y Z\r\nEncrypted: K R Y P T O S A B C D E F G H I J L M N Q U V W X Z  \r\nWith KRYPTOS as the keyword, all As become Ks, all Bs become\r\nRs and so on. Encrypting the message KNOWLEDGE IS \r\nPOWER using the keyword KRYPTOS:\r\nPlaintext: K N O W L E D G E I S P O W E R \r\nEncoded: D G H V E T P S T B M I H V T L\r\n(Key used in above hint is snake)\r\n', 0, 0, 18, 19, '#34DDDD'),
(27, 5, 'DS', 'Which of the following algorithm design technique \r\nis used in the quick sort algorithm?\r\nA. Dynamic Programming\r\nB. Backtracking\r\nC. Divide and Conquer\r\nD. Greedy Method', 'C', 'Txlfnvruw glylghv d odujh duudb lqwr \r\nvpdoohu vxeduudbv.', 'Quicksort divides a large array into \r\nsmaller subarrays.', 'Caesar Cipher -\r\nIt uses a simple letter substitution cipher that replaces\r\na letter with the letter 3 letters after it in the alphabet,\r\nwrapping back to the beginning if necessary.(A+3=D)\r\n[Digits are not in the encoded form]\r\n', 0, 0, 16, 19, '#34DDDD'),
(28, 5, 'NL', 'Which tools cannot be used to find open ports in the local system?\r\nA. telnet\r\nB. ping\r\nC. nmap\r\nD. netstat', 'B', 'Aznc (Argjbex Znccre) vf hfrq gb qvfpbire ubfgf naq freivprf ba n pbzchgre argjbex', 'Nmap (Network Mapper) is used to discover hosts and services on a computer network.', 'ROT13-\r\nIt uses a simple letter substitution cipher that replaces a \r\nletter with the letter 13 letters after it in the \r\nalphabet, wrapping back to the beginning if \r\nnecessary.(A+13=N)\r\nA second application of ROT13 would\r\nrestore the original.\r\n', 0, 0, 16, 21, '#34DDDD'),
(29, 4, 'DS', 'Linked list are not suitable data structure of which one of the following problems ?\r\nA. Insertion Sort\r\nB. Binary Search\r\nC. Radix Sort\r\nD. Polynomial Manipulation', 'B', 'Yvaxrq yvfg pna or hfrq gb nqq gjb cbylabzvnyf.', 'Linked list can be used to add two polynomials.', 'ROT13-\r\nIt uses a simple letter substitution cipher that replaces a \r\nletter with the letter 13 letters after it in the \r\nalphabet, wrapping back to the beginning if \r\nnecessary.(A+13=N)\r\nA second application of ROT13 would\r\nrestore the original.', 0, 0, 9, 22, '#34DDDD'),
(30, 4, 'WD', 'Look at the following jQuery selector: $(''div#intro .head''). What does it select?\r\nA. All div elements with id=''intro'' or class=''head''\r\nB. The first element with id=''head'' inside any div element with class=''intro''\r\nC. All elements with class=''head'' inside the first div element with id=''intro''', 'B', 'Fryrpgf n fvatyr ryrzrag jvgu gur tvira vq nggevohgr', 'Selects a single element with the given id attribute', 'ROT13-\r\nIt uses a simple letter substitution cipher that replaces a \r\nletter with the letter 13 letters after it in the \r\nalphabet, wrapping back to the beginning if \r\nnecessary.(A+13=N)\r\nA second application of ROT13 would\r\nrestore the original.\r\n', 0, 0, 19, 22, '#34DDDD'),
(31, 4, 'CA', 'De Morgan''s second theorem says that NAND gate is equivalent to a bubbled _____ gate.', 'OR', 'Oernx gur yvar, punatr gur fvta', 'Break the line, change the sign', 'ROT13-\r\nIt uses a simple letter substitution cipher that replaces a \r\nletter with the letter 13 letters after it in the \r\nalphabet, wrapping back to the beginning if \r\nnecessary.(A+13=N)\r\nA second application of ROT13 would\r\nrestore the original.\r\n', 0, 0, 19, 20, '#34DDDD'),
(32, 4, 'DS', 'Big P has recently become very famous among girls .\r\nBig P goes to a party and every girl present there wants to dance with him. However, Big P cannot dance with all of them, \r\nbecause there are many of them. Now if a girl gets to dance with Big P, she considers herself to be ''1-Lucky''. \r\nA person that dances with someone who has danced with a person who has danced with Big P considers themselves ''2-Lucky'', and so on.\r\nThe Luckiness is defined on the basis of above mentioned rule. ( 1-Lucky -> Luckiness = 1).\r\nNote-\r\n(i)Luckiness of Big P is 0 .\r\n(ii) If a person''s luckiness cannot be determined from the above rules \r\n(he/she has not danced with anyone with finite luckiness), his/her luckiness is INF (infinity).\r\n(iii)If a person A is not Big P himself, and has danced with someone with luckiness X, \r\nand has not danced with anyone with Luckiness smaller than X, then A has luckiness X+1 .\r\nWhich of the following algorithms can be used most efficiently to find the luckiness of a person?\r\n\r\nA. Djikstra\r\nB. Bellman-Ford\r\nC. BFS\r\nD. DFS\r\nE. Floyd-Warshall', 'C', '(1) ylvlw dqg lqvshfw d qrgh ri d judsk; (2) jdlq dffhvv wr ylvlw wkh qrghv wkdw qhljkeru wkh fxuuhqwob ylvlwhg qrgh.', '(a) visit and inspect a node of a graph; (b) gain access to visit the nodes that neighbor the currently visited node.', 'Caesar Cipher -\r\nIt uses a simple letter substitution cipher that replaces\r\na letter with the letter 3 letters after it in the alphabet,\r\nwrapping back to the beginning if necessary.(A+3=D)\r\n[Digits are not in the encoded form]', 0, 0, 17, 22, '#34DDDD'),
(33, 4, 'WD', 'var person = {\r\n    firstName : ''John'',\r\n    lastName  : ''Doe'',\r\n    age       : 50,\r\n    eyeColor  : ''blue''\r\n};\r\n\r\ndocument.getElementById(''demo'').innerHTML =\r\nperson.firstName + '' is '' + person.age + '' years old.'';\r\n\r\nIn which language the above code is written?\r\nA. HTML\r\nB. Javascript\r\nC. CSS\r\nD. PHP', 'B', 'vy mb b rlsevjq ptqyvhrw tapuefqvjbt qewhinli', 'It is a dynamic computer programming language.', 'Say we want to encrypt the message ''I really like elephants'' \r\nwith the key ''dogs''. First, we''d convert each letter \r\nof the key to their respective numeric value.\r\nIn this case, ''4, 15, 7, 19''. \r\nThen we''d line it \r\nup repeating with the plaintext.\r\nI  r  e a  l l  y  l  i k  e  e  l e  p h  a n  t s\r\n4  15 7 19 4 15 7  19 4 15 7  19 4 15 7 19 4 15 7 19\r\nEach letter in the plaintext is now shifted by its \r\ncorresponding number from the key.\r\nI  r  e a  l l  y  l  i k  e  e  l e  p h  a n  t s\r\n4  15 7 19 4 15 7  19 4 15 7  19 4 15 7 19 4 15 7 19\r\nM  g  l t  p a  f  e  m z  l  x  p t  w a  e c  a l\r\n\r\nKey used in above hint is ''median''.', 0, 0, 20, 21, '#34DDDD'),
(34, 4, 'M', 'In Linux, what information is usually NOT stored in /etc/passwd file?\r\nA. Password in plaintext\r\nB. Username\r\nC. Shell\r\nD. Home directory', 'A', '442315 /154413/351143435214 21243115 2443 4215111411123115 1254 113131 4543154243 3421 442315 435443441532', 'The /etc/passwd file is readable by all users of the system.', 'For example, BAT becomes 12 11 44.\r\n(http://localhost/PuzzlingChamber/images/polybius_square.jpg)\r\n', 0, 0, 20, 23, '#34DDDD'),
(35, 4, 'M', 'Along with whom did Bill Gates found Microsoft?\r\nA. Kristi Gates\r\nB. Paul Allen\r\nC. Jody Patton\r\nD. Libby Gates', 'B', 'Ur vf nyfb gur sbhaqre bs Nyyra Vafgvghgr \r\nsbe Oenva Fpvrapr.', 'He is also the founder of Allen Institute \r\nfor Brain Science.', 'ROT13-\r\nIt uses a simple letter substitution cipher that replaces a \r\nletter with the letter 13 letters after it in the \r\nalphabet, wrapping back to the beginning if \r\nnecessary.(A+13=N)\r\nA second application of ROT13 would\r\nrestore the original.', 0, 0, 19, 23, '#34DDDD'),
(36, 4, 'NL', 'What does the command DF do at the Linux Bash command line?\r\nA. Deletes temporary files from a specified location\r\nB. Displays performance figures\r\nC. Defragments the hard disk drive\r\nD. Displays free disk space\r\n', 'D', 'Tde kb amjjslk rtslkr bmq kfrh bfieryrtej', 'The ''df'' command stands for "disk filesystem"', 'Example-\r\nPlaintext: A B C D E F G H I J K L M N O P Q R S T U V W X Y Z\r\nEncrypted: K R Y P T O S A B C D E F G H I J L M N Q U V W X Z  \r\nWith KRYPTOS as the keyword, all As become Ks, all Bs become\r\nRs and so on. Encrypting the message KNOWLEDGE IS \r\nPOWER using the keyword KRYPTOS:\r\nPlaintext: K N O W L E D G E I S P O W E R \r\nEncoded: D G H V E T P S T B M I H V T L\r\n(Key used in above hint is snake)\r\n', 0, 0, 14, 23, '#34DDDD'),
(37, 3, 'CA', 'The base or radix of the number system such that the following equation holds is _______\r\n(312/20)=13.1\r\n(Note: Give your answer in WORDS.)', 'FIVE', 'FC FSGJGFG OLV UBUESG AUDZRL 10011011 FP HVVWPEN,EDIEA UWPR WVA CHDIGG KJ KOC KKKA WZUTK BU SXYH.', 'To convert the binary number 10011011 to decimal,write down the powers of two from right to left.', 'A text-autokey uses the previous message text to determine the next element in the keystream.\r\nUsing an example message MEET AT THE FOUNTAIN encrypted with the keyword KILT:\r\nPlaintext:  MEETATTHEFOUNTAIN (unknown)\r\nkey:        KILTMEETATTHEFOUN (unknown)\r\nciphertext: WMPMMXXAEYHBRYOCA (known)\r\n\r\nYour Keyword=Mode\r\n', 0, 0, 22, 24, '#34DDDD'),
(38, 3, 'NL', 'In Linux, which file controls the number of available virtual terminals?\r\nA. /etc/fstab\r\nB. /etc/virttab\r\nC. /etc/mtab\r\nD. /etc/inittab', 'D', 'Virtual consoles can be configured in a file & read by a program which starts the text mode login process getty for several virtual consoles.', 'Virtual consoles can be configured in a file & read by a program which starts the text mode login process getty for several virtual consoles.', 'Lucky Question (Already in decoded form) :D', 0, 0, 20, 24, '#34DDDD'),
(39, 3, 'WD', 'How does Google Instant Search work?\r\nA. Through Angular JS\r\nB. Through Node JS\r\nC. Through AJAX\r\nD. Through JQuery', 'C', 'lb jwnrtwnk xxejllvh ysubt xx d efk hdof fawppdl ummxsgqop wpf fzrtf ysjm', 'It involves updating parts of a web page by fetching data from the database without reloading the whole page.', 'Say we want to encrypt the message ''I really like elephants'' \r\nwith the key ''dogs''. First, we''d convert each letter of \r\nthe key to their respective numeric value. In this case, \r\n''4, 15, 7, 19''. Then we''d line it up repeating with the plaintext.\r\nI  r  e a  l l  y  l  i k  e  e  l e  p h  a n  t s\r\n4  15 7 19 4 15 7  19 4 15 7  19 4 15 7 19 4 15 7 19\r\nEach letter in the plaintext is now shifted by it''s \r\ncorresponding number from the key.\r\nI  r  e a  l l  y  l  i k  e  e  l e  p h  a n  t s\r\n4  15 7 19 4 15 7  19 4 15 7  19 4 15 7 19 4 15 7 19\r\nM  g  l t  p a  f  e  m z  l  x  p t  w a  e c  a l\r\nKey used in the above hint is chair', 0, 0, 23, 24, '#34DDDD');

-- --------------------------------------------------------

--
-- Table structure for table `node`
--

CREATE TABLE IF NOT EXISTS `node` (
  `NodeId` int(11) NOT NULL,
  `Visited` tinyint(1) NOT NULL DEFAULT '0',
  `Color` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `node`
--

INSERT INTO `node` (`NodeId`, `Visited`, `Color`) VALUES
(1, 1, '#34DDDD'),
(2, 0, '#FFFFFF'),
(3, 0, '#FFFFFF'),
(4, 0, '#FFFFFF'),
(5, 0, '#FFFFFF'),
(6, 0, '#FFFFFF'),
(7, 0, '#FFFFFF'),
(8, 0, '#FFFFFF'),
(9, 0, '#FFFFFF'),
(10, 0, '#FFFFFF'),
(11, 0, '#FFFFFF'),
(12, 0, '#FFFFFF'),
(13, 0, '#FFFFFF'),
(14, 0, '#FFFFFF'),
(15, 0, '#FFFFFF'),
(16, 0, '#FFFFFF'),
(17, 0, '#FFFFFF'),
(18, 0, '#FFFFFF'),
(19, 0, '#FFFFFF'),
(20, 0, '#FFFFFF'),
(21, 0, '#FFFFFF'),
(22, 0, '#FFFFFF'),
(23, 0, '#FFFFFF'),
(24, 0, '#34DDDD');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `TeamName` varchar(50) NOT NULL,
  `CollegeName` varchar(50) NOT NULL,
  `MemberName1` varchar(50) NOT NULL,
  `MemberName2` varchar(50) NOT NULL,
  `Score` int(11) NOT NULL DEFAULT '200',
  `Weight` int(11) NOT NULL DEFAULT '0',
  `Msg` varchar(30) DEFAULT NULL,
  `Time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `url`
--

CREATE TABLE IF NOT EXISTS `url` (
  `url` varchar(1000) NOT NULL DEFAULT 'index.php'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `url`
--

INSERT INTO `url` (`url`) VALUES
('index.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `edge`
--
ALTER TABLE `edge`
 ADD PRIMARY KEY (`EdgeId`);

--
-- Indexes for table `node`
--
ALTER TABLE `node`
 ADD PRIMARY KEY (`NodeId`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
 ADD PRIMARY KEY (`TeamName`,`CollegeName`,`MemberName1`,`MemberName2`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
