-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2013 at 07:39 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `id` bigint(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `spec` varchar(40) NOT NULL,
  `quali` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `about` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `fname`, `lname`, `age`, `sex`, `spec`, `quali`, `email`, `image`, `about`) VALUES
(15, 'SV', 'Kotwal', 66, 'Male', 'Urologist/kidney specialist', 'MBBS,MS (Gen Surgery) ,MCh (Urology)', 'drkotwal@gmail.com', 'images/kotwal.jpg', 'Dr (Col) SV Kotwal is a well known senior \r\nUrologist and kidney transplant surgeon.<br />\r\nHe graduated from Grant Medical College Bombay in \r\n1967 after after an excellent academic career and \r\njoined the Army Medical Corps immediately \r\nthereafter. He had an outstanding service profile \r\nincluding actual combat experience (Indo-Pak war \r\n1971 & IPKF ops 1986). He stood first at MS (Gen \r\nSurgery) examination of Pune University in 1975. \r\nAfter serving as a general surgeon as per service \r\nrequirements, he was selected for \r\nsuperspecialisation and qualified for the MCh \r\n(Urology) degree from AIIMS, New Delhi in 1984. He \r\nhad a distinguished service career and obtained \r\npremature retirement in Aug 1999, having held the \r\nappointment of Senior Adviser (Urology) at Army \r\nHospital (R&R) Delhi.<br />\r\nCol Kotwal has extensive in all branches of \r\nUrology. He has one of the largest personal series \r\nof PCNL in North India (nearly 5000) and has \r\nperformed 300 kidney transplants. He pioneered \r\nmicrosurgery in the Armed Forces and has vast \r\nexperience of uro-oncology and pediatric urology. \r\nHis work in endourology and vascular \r\nreconstructions has won international acclaim. He \r\nstarted the only integrated centre in the country \r\nfor treatment of Gender Identity Dysphoria at \r\nSitaram Bhartia Institute in Delhi and has \r\nperformed several such operations about which he \r\nwill talk to us today.<br />\r\nHe has conducted operative workshops all over the \r\ncountry and has actively participated in regional, \r\nnational and international professional \r\nConferences. He has delivered several prestigious \r\norations and guest lectures and has been chairing \r\nscientific sessions regularly at various fora. He \r\nhas been involved in research and is the recipient \r\nof the Amir Chand and Gurshanti Devi awards during \r\nservice. He was awarded the PN Kataria Gold medal \r\nin 2005, the Marudhara Jodhpur Trust award and \r\nOration, 2008 and has been awarded the Pinnamaneni \r\nVenkateswara award and oration 2009 and the most \r\nprestigious Himadri Sarkar Oration of the \r\nUrological Society of India in 2012. He has also \r\nbeen awarded the Urology Gold Medal for 2012.<br />\r\nCol Kotwal is a recognised post-graduate teacher \r\nfor the MS (Gen Surg) and MCh (Urol) degrees of \r\nthe University of Pune and the MS degree of Delhi \r\nUniversity. He is an examiner and Inspector of the \r\nNational Board of Examinations. He is also the \r\nVisiting Professor of Urology at CMC Ludhiana and \r\nMedical College Guwahati.<br />\r\nCol Kotwal is a member of several professional \r\nbodies and has been elected to the Governing \r\nCouncil of the Urological Society of India. He \r\nheld the appointment of President of the North \r\nZone Urological Society of India. He was elected \r\nPresident Urological Society of India and \r\ncontributed to the Society with several landmark \r\ninitiatives. <br />\r\nCol Kotwal has been a keen cricketer and has \r\nabiding interest in Indian wild-life and wildlife \r\nphotography. His literary interests include \r\nmilitary history and contemporary English works by \r\nIndian authors.'),
(17, '', 'Aarti', 30, 'Female', 'Pediatrician/Child Specialist', 'M.B.B.S', 'draarti@gmail.com', 'images/aarti.jpg', 'I am a consultant Pediatrician at an esteemed health care organization. <br />\r\n<br />\r\nDiploma in Child Health (Gold Medalist): Sarojini Naidu Medical College, Agra.<br />\r\n<br />\r\nMBBS:		       Lady Hardinge Medical College (LHMC), New Delhi.<br />\r\nIntern at LHMC, New Delhi<br />\r\n     <br />\r\n  Experience:<br />\r\nApollo Hospital, Lavasa,<br />\r\nConsultant Pediatrician & Neonatologist.<br />\r\nMai Mangeshkar, Pune.<br />\r\nAamby Valley Hospital, Lonavala.<br />\r\nVisiting Consultant Pediatrician.<br />\r\nPresently operating Pediatrics & Neonatology clinic in Pune.<br />\r\nMadhuban Clinic, Karvenagar<br />\r\nChildrenâ€™s Clinic, Bavdhan 	<br />\r\nPushpanjali Hospital & Research Centre, Agra<br />\r\nSenior resident in the Pediatrics and Neonatology department.<br />\r\nDeenanath Mangeshkar Hospital, Pune.<br />\r\nSenior Registrar in Pediatrics Department. Worked in NICU, PICU, wards & OPD.<br />\r\n<br />\r\nAchievements:<br />\r\nGold Medalist at Dr.Bhim Rao Ambedkar University, Agra for securing first position in order of merit at the Diploma of Child Health exam in year 2003.<br />\r\nSecured 63rd rank in All India Medical Entrance Examination in 1995.<br />\r\nAmongst the top 10% of students at LHMC in all three professionals.<br />\r\nCleared Diploma in National Board Primary Examination in June 2001 (first attempt).<br />\r\nSecured 275th rank for Uttar Pradesh postgraduate medical examination in year 2002.'),
(18, '', 'Chakravarthi', 36, 'Male', 'Sexologist', 'MBBS; MHSc (Reproductive & Sexual Medicine)', 'docchak@gmail.com', 'images/chakravarthy.jpg', 'Dr A CHAKRAVARATHY MBBS; MBA (Hospital Management); MHSc (Reproductive & Sexual Medicine)</br />\r\n\r\nRegistration No: 67878 Class A Modern Medicine (Tamil Nadu Medical Council)<br />\r\n\r\nDr A Chakravarthy is the only qualified Sexual Medicine Consultant from Modern Medicine / Allopathic Medicine in South Kerala.<br />\r\n\r\nHe is the Founder President of International Association of Sexual Medicine<br />\r\n\r\nHe is the expert of Sexual health in the panel of many international health care organizations like HealthCareMagic & Medindia.<br />\r\n\r\nHe is the expert writer in Times of India, Healthmeup and lot of other media<br />\r\n\r\nHe is a member of Indian Medical Association, International AIDS Society, Indian Association for Sexology & World Association for Sexual Health<br />'),
(23, 'Bharat', 'Chowda', 56, 'Male', 'Dermatologist/Skin Specialist', 'M.B.B.S, D.V.D', 'chowda@gmail.com', 'images/chowda.png', 'Dr.Bharat Chawda is a leading Dermato-surgeon and \r\nCosmetic Laser Specialist practicing presently at \r\nApollo Hospital, Bhilai(Chhattisgarh, India).\r\nHe has worked for more than 10 years in Delhi at \r\nvarious leading cosmetic and laser clinics. He has \r\nbeen doing Hair Transplantation (FUE & FUT)since \r\nlast 12 years,apart from general skin practice .\r\nAfter completing his post graduation in \r\nDermatology, venereology and leprology from \r\nManipal Academy Of Higher Education, Manipal, he \r\naccomplished his extensive training on lasers and \r\ndermato-surgery. He has been in to lasers ever \r\nsince it had been first introduced in India, and \r\nhas extensive experience in treating all kinds of \r\nbirth marks, scars (acne, chicken pox etc...).\r\nHe started his career with National Skin & Hair \r\nCare Centre , Bangalore & then later shifted to \r\nDelhi. In delhi he was with NEW LOOK LASER CLINIC \r\n,AXIS LASER TECHNIQUE & PERFECT SKIN CENTER .\r\nHe has been using all kinds of lasers since \r\nlong.He also had the opportunity of taking hands \r\non training on Botox from Dr. Dina Anderson (US) \r\nin 1999 and has been using Botox in practice ever \r\nsince. He has been doing Fillers also ever since \r\nfor wrinkles.His main area of interest has been on \r\nMicrofollicular Hair grafting ( FUE & FUT) .FUE is \r\nthe latest technique where there is no stitches or \r\nno scar left.He had his formal training from \r\nAmerican Academy of Aesthetic Medicine,Taiwan .\r\n'),
(24, 'Anjali', 'Dange', 46, 'Male', 'Nutritionist', 'MSc. Food Science and Nutrition', 'dange@yahoo.co.in', 'images/dange.png', 'Achievements: Anjali is a Nutrition Therapist, Dietitian, Researcher and Lifestyle management expert. She has helped people from different walks of life, varied nationalities (Indian to over-seas) to achieve optimal health and well being through personalized preventive health care management and patient care nutrition processes of the highest standards.<br />\r\nAnjali has successfully provided Medical Nutrition Therapy for problems like Diabetes, High Cholesterol , Obesity, Kidney disorders, digestive disorders, malnutrition, thyroid - related abnormalities, etc through an integrated nutrition approach involving prescription of diet regimes, personalized counselling and appropriate fitness programs.<br />\r\n\r\nExpertise: A professional healthcare expert in the field of Nutrition & Dietetics with more than 10 years of International & local experience helping patients achieve optimal health and well being utilizing latest research and knowledge\r\nShe is an expert the following areas:<br />\r\na) Nutrition for Life (Infants, Toddlers, Kids, Teens, Women, Men, Healthy Aging)<br />\r\nb) Disease Management & Prevention<br />\r\nc) Healthy Weight Loss & Fitness<br />\r\nd) Nutrition Policy & Food Safety<br />\r\ne) Childhood Obesity & School Nutrition<br />\r\nf) Community Nutrition & Research<br />\r\nAnjaliâ€™s greatest strength is her excellent communication skills. She speaks over 7 different languages: English, Hindi, Telugu, Kannada, Tamil, Konkani and Arabic."<br />\r\n\r\nCurrent clinic: She currently practices as a Chief Nutritionist at a US based Age-Management Institute at Hyderabad. She counsels Cine celebrities, politicians and business - class clients. At her previous location, she led the clinical nutrition department and implemented JCI standards in Nutrition Policy and Patient Care (highest quality standards for a multispecialty hospital). Her exposure to a multi-national clientele has allowed her to reach out to people who have different cultures and food habits.<br />\r\nAnjali is an active member of well known associations like American Dietetic Association, American Overseas Dietetic Association, Harvard Post Grad Medical Association, Indian Dietetic Association and Nutrition Society of India. She has also published various articles in magazines, newspapers and conducted workshops, radio talk shows and seminars to hospitals, schools and general public.'),
(25, 'A K ', 'Singh', 38, 'Male', 'Pulmonologist/Lung specialist', 'MBBS, MD (Tuberculosis & Respiratory Diseases)', 'drsingh@gmail.com', 'images/singh.png', 'Achievements: Dr Anil Kumar Singh worked as a Senior Registrar in Dr M L Chest Hospital, GSVM Medical College, Kanpur and Lala Ram Sarup Institute of Tuberculosis & Respiratory Diseases (LRSI), New Delhi.I am involved in various research activities. I have conducted phase III clinical trial of an investigational pharmacological product in patients of Non small - non squamous cell carcinoma of lung conducted by Amgen India. I have delivered lecture on â€œDifficult Asthmaâ€. I have a number of paper presentations and publications to his credit.<br />\r\n<br />\r\nAffiliations: Member â€“ Indian Society of Critical Care of Society (ISCCM), 2010<br />\r\n<br />\r\nExpertise: Dr Anil Kumar Singh is an expert in treating HIV, asthma, allergies, sleep medicine, tuberculosis and all other respiratory diseases. He has a special interest in tuberculosis.<br />\r\n<br />\r\nCurrent clinic: Dr Anil Kumar Singh is a consultant in Fortis Flt. Lt. Rajan Dhall Hospital, New Delhi & Escorts Hospital, Okhla Road, New Delhi'),
(26, 'Addananki ', 'Rao', 68, 'Male', 'General Practice', 'MBBS, MS', 'drrao@yahoo.co.in', 'images/rao.png', 'Achievements: Dr. A M Mohan Rao, a Practicing Physician and Medical Informatics Specialist, has developed Physician Assistant Artificial Intelligence Reference System (PAIRS), a tool that helps in diagnosing difficult cases. SNOMED CT database radiology concepts are derived from PAIRS. He has well versed knowledge on processing of CT/MRI images using Slicer3 for automatic segmentation, application of Vascular Model Toolkit for coronary arteries and has also genetically engineered a lung cancer gene in yeast and E.coli. Dr. A M Mohan Rao has 12 publications to his credit. <br />\r\n<br />\r\nExpertise: Dr. A M Mohan Rao, a Practicing physician and researcher/developer, entrepreneur is an expert in electrocardiography, Causal (Graph) theory and its application to probability, Logic and its interpretations; and Bayesian probability, Expectation-Maximization, Markov assumption - their application in the fields of medical diagnosis and image processing.<br />\r\n<br />\r\nCurrent clinic: Consultant physician'),
(28, 'Adnan', 'Syed', 34, 'Male', 'General Practice', 'MBBS, ACLS, BLS', 'adnan_care@yahoo.co.in', 'images/adnan.png', 'M.B.B.S. from Rajiv Gandhi University of Health Sciences, Bangalore, 2005-2011 (Including Internship)<br />\r\nalso successfully completed Advance Cardiovascular Life Support (ACLS) & Basic Life Support (BLS) Course from GVK Emergency and Medical Research Institute (International Training Centre for American Heart Association) Secunderabad, India.<br />\r\n<br />\r\nSummary:<br />\r\n<br />\r\nâ€¢	Worked as an Intern at Osmania General Hospital for a period of 1 year.<br />\r\nâ€¢	Performed analysis, treatment of Patient, Diagnosis and recommendation for improvement. <br />\r\nâ€¢	Maintain Safety, Quality and to take precautionary measures to avoid infection.<br />\r\nâ€¢	In depth knowledge of advance and current principle, policies, procedures and methods in medicine.<br />\r\nâ€¢	Great Ability of demonstration about drug and prescription.<br />\r\nâ€¢	Sound knowledge of Ethical stan'),
(29, 'Ajmera', 'Vanmali', 48, 'Male', 'Family practice', 'MBBS, FCGP, MCCP', 'acv_doc@yahoo.co.in', 'images/ajmera.png', 'Achievements:  Dr Ajmera Chandravadan Vanmali has the following credentials.<br />\r\n1) Dr Ajmera C V, after his MBBS, passed FCGP examination held by IMA College of General Practitioners, New Delhi.<br />\r\n2) He was awarded the degree of MCCP in Cardio-thoracic Medicine by the Association of the College Chest Physicians, New Delhi<br />\r\n3) 1st prize in Best Clinician Competition held at Virani Hospital<br />\r\n4) Life member - Indian Medical Association Rajkot Branch.<br />\r\n				- Family Physicians Association Rajkot Branch<br />\r\n				- IMA College of GPs New Delhi.<br />\r\n5) Association of College of Chest Physicians New Delhi<br />\r\n6) Member of Institute of Teaching - an affiliated Institute of Association of Chest Physicians New Delhi<br />\r\n7) Chaired and participated several Scientific sessions in various State & National Conferences.<br />\r\n8) Was editor of Medical News - IMA Rajkot - a monthly Bulletin published by IMA Rajkot in the year 1994-95<br />\r\n9) Member of Editorial Board of the book â€œArt of Diagnosisâ€ Published by IMA Rajkot in June 1994; has also written two chapters in the same book.<br />\r\n10) Has written a book â€œECG Made Easyâ€ Published by Family Physicians Association Rajkot.<br />\r\n11) Delivers speeches & Interviews regularly on Doordarshan Rajkot and All India Radio Rajkot on Health Promotion and Prevention of Diseases.<br />\r\n12) Was Doctor member of Disaster Action Committee Rajkot District.<br />\r\n13) He has conducted and attended numerous conferences and workshops.<br />\r\n<br />\r\nExpertize: Dr Ajmera Chandravadan Vanmali has 35 years of  experience in treating all medical cases. He is well versed in treating acute and chronic illnesses. He provides health education and preventive care for all ages. His expertise lies in treating people with multiple health issues and comorbidities. He is a specialist in providing Cardio-thoracic medicine. <br />\r\n<br />\r\nCurrent Clinic: Dr Ajmera Chandravadan Vanmali is a Consulting General Practitioner in Rajkot, Gujarat.'),
(30, 'Alpesh', 'Gediya', 44, 'Male', 'Psychiatrists', 'MD, Psychiatry', 'stress_byte@gmail.com', 'images/alpesh.png', 'I am Consultant Neuropsychiatrist. I choose this profession as i love to help the people to come out from the diseased state.'),
(31, 'Amar', 'Vennapusa', 53, 'Male', 'Laparoscopic Surgeon, Surgical Gastroent', 'MS & DNB (General Surgery), MRCSEd, FNB (Minimal A', 'dr.amar.care@gmail.com', 'images/amar.png', 'Dr. V. Amar is a Board Certified Minimal Access Metabolic & Bariatric Surgeon. He is the first surgeon from Andhra Pradesh to successfully complete two years Fellowship of National Board of Examinations in Minimal Access Surgery - FNB (MAS).<br />\r\nHe has a number of publications to his credit. He gave several presentations in national and international conferences. He regularly conducts continuing medical education programs to doctors.<br />\r\n<br />\r\nHis Professional Fellowships & Memberhips:<br />\r\n- Fellow of National Board (FNB)<br />\r\n- Fellow of Association of Minimal Access Surgeons of India <br />\r\n  (FMAS)  <br />\r\n- Life Member of Obesity & Metabolic Surgery Society of India   <br />\r\n  (OSSI)<br />\r\n- Life Member of Association of Minimal Access Surgeons of India <br />\r\n  (AMASI)<br />\r\n- Life Member of Indian Association of Gastrointestinal Endo <br />\r\n  Surgeons (IAGES)<br />\r\n- Life Member of Society of Endoscopic & Laparoscopic <br />\r\n  Surgeons of India (SELSI)<br />\r\n- Diplomate of National Board (DNB)<br />\r\n- Life member of Association of Surgeons of India (ASI)<br />\r\n- Member of Royal College of Surgeons of Edinburgh (MRCSEd)<br />\r\n- Life Member of Indian Hernia Society (IHS)<br />\r\n <br />\r\nDr. Amar is an expert in the following surgeries:<br />\r\n- Minimal Access Bariatric (Weight Loss) Surgery<br />\r\n- Minimal Access Metabolic Surgery<br />\r\n- Advanced Laparoscopic Surgery<br />\r\n- Minimal Access Surgical Gastroenterology<br />\r\n<br />\r\nHe has enormous practical experience in performing all types of laparoscopic bariatric surgeries for morbid and super obesity, laparoscopic metabolic surgeries to cure type 2 diabetes, laparo endoscopic single site surgeries, advanced laparoscopic gastroenterological surgeries and other advanced laparoscopic surgeries.<br />\r\n<br />\r\nCurrent Clinic:<br />\r\nDr. Amar is working as a Consultant Minimal Access Metabolic & Bariatric Surgeon and Advanced Laparoscopic Surgeon in Citizens Hospital, Serilingampally, Hyderabad and Nova Specialty Surgery, Jubilee Hills, Hyderabad.'),
(35, 'Amit', 'Kapoor', 42, 'Male', 'Orthopaedist/ Bone Specialist', 'DNB Orthopaedics, Fellow Spine', 'dramit@gmail.com', 'images/amit.png', 'After specializing in Orthopaedics from the Institute of Orthopaedic Research and Accident Surgery, Madurai, he gained experience as a senior resident at PGI Chandigarh and AIIMS New Delhi for around 3 years.  He further gained advanced training and experience at Ganga Hospital, Coimbatore and during Clinical Spine Fellowship at Singapore General Hospital, Singapore. He has a number of national and international publications to his credit.<br />\r\nHe provides services in the field of Orthopaedics and Joint Replacement.<br />\r\nHe also provides services for the complete spectrum of spine problems including spinal trauma, scoliosis(spinal deformity), spondylolisthesis, spinal stenosis, lumbar and cervical disc prolapse, cervical myelopathy, spinal infections, tumors, osteoporotic compression fractures. He special interests include minimal assess surgery (MIS) and deformity correction.');

--
-- Triggers `doctors`
--
DROP TRIGGER IF EXISTS `init-cap1`;
DELIMITER //
CREATE TRIGGER `init-cap1` BEFORE INSERT ON `doctors`
 FOR EACH ROW begin
SET new.fname = CONCAT(UCASE(LEFT(NEW.fname,1)) , SUBSTRING(NEW.fname,2));
set new.lname = CONCAT(UCASE(LEFT(NEW.lname,1)) , SUBSTRING(NEW.lname,2));
end
//
DELIMITER ;
DROP TRIGGER IF EXISTS `init-cap2`;
DELIMITER //
CREATE TRIGGER `init-cap2` BEFORE UPDATE ON `doctors`
 FOR EACH ROW begin
SET new.fname = CONCAT(UCASE(LEFT(NEW.fname,1)) , SUBSTRING(NEW.fname,2));
set new.lname = CONCAT(UCASE(LEFT(NEW.lname,1)) , SUBSTRING(NEW.lname,2));
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pat_det`
--

CREATE TABLE IF NOT EXISTS `pat_det` (
  `id` bigint(20) unsigned NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `bg` varchar(3) NOT NULL,
  `email` varchar(40) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `dob` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pat_det`
--

INSERT INTO `pat_det` (`id`, `fname`, `lname`, `bg`, `email`, `sex`, `dob`) VALUES
(11, 'Sumalya', 'Bhattacharya', 'B+', 'sumosing@gmail.com', 'Male', '1990-02-01'),
(19, 'Shayan', 'Dey', 'O+', 'shayanani@gmail.com', 'Male', '1991-01-08'),
(20, 'Sanket', 'Bhaumik', 'B+', 'navsanket@gmail.com', 'Male', '1991-09-07'),
(37, 'Vikash', 'Kumar', 'a+', 'vickykumgup@gmail.com', 'Male', '1996-08-07'),
(39, 'Pramit', 'Dey', 'B+', 'pramit.dey@gmail.com', 'Male', '1991-03-08'),
(40, 'Ayan', 'Paul', 'AB+', 'paul.ayan@yahoo.co.in', 'Male', '1991-06-27'),
(55, 'Arko', 'Chakravorty', 'B+', 'arko19491@gmail.com', 'Male', '1991-04-19'),
(56, 'Ravish', 'Jasuja', 'B-', 'jazz@gmail.com', 'Male', '1991-06-19'),
(57, 'Random A', 'Tep', 'B+', 'abc@abc.com', 'Male', '2013-04-04'),
(58, 'Abc', 'Gfd', 'O-', 'ma@mm.mm', 'Male', '2013-04-03');

--
-- Triggers `pat_det`
--
DROP TRIGGER IF EXISTS `init-cap-pat1`;
DELIMITER //
CREATE TRIGGER `init-cap-pat1` BEFORE INSERT ON `pat_det`
 FOR EACH ROW begin
SET new.fname = CONCAT(UCASE(LEFT(NEW.fname,1)) , SUBSTRING(NEW.fname,2));
set new.lname = CONCAT(UCASE(LEFT(NEW.lname,1)) , SUBSTRING(NEW.lname,2));
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE IF NOT EXISTS `problems` (
  `probid` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` bigint(20) NOT NULL,
  `did` bigint(20) NOT NULL,
  `prob` varchar(150) NOT NULL,
  `reply` varchar(100) NOT NULL,
  `prob_post_date` varchar(12) NOT NULL,
  `rep_date` varchar(12) NOT NULL,
  `image` varchar(40) NOT NULL,
  PRIMARY KEY (`probid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`probid`, `pid`, `did`, `prob`, `reply`, `prob_post_date`, `rep_date`, `image`) VALUES
(3, 19, 15, 'I am having back pain after work.', 'You should do regular excercise. Stop taking medicines and learn yoga.', '2013-04-01', '2013-04-01', ''),
(5, 20, 15, 'I am having stomach ache.', '', '2013-04-01', '', ''),
(8, 19, 15, 'I am having muscle pain.', 'Take medicines.', '2013-04-01', '2013-04-01', ''),
(9, 19, 17, 'My child is having cold.', 'Take Medicines.', '2013-04-04', '2013-04-04', ''),
(10, 27, 23, 'I am having pimples on my cheek.   Help me..', 'Take Ayurvedic Medicines.. And drink lots of water.. You will be fine! take care..', '2013-04-04', '2013-04-04', ''),
(24, 11, 23, 'skin itches. image uploaded. please see to it.', 'u need to apply medicine X.', '2013-04-06', '2013-04-06', 'images/imgres.jpg'),
(40, 40, 26, 'My fingers are swelling. This is happenning recently.', 'You should have a blood test if required.', '2013-04-09', '2013-04-09', 'images/images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `isdoc` int(2) NOT NULL DEFAULT '0',
  `isadmin` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `isdoc`, `isadmin`) VALUES
(1, 'admin', '1234', 0, 1),
(11, 'sumo', '1111', 0, 0),
(15, 'kotwal', 'kkttll', 1, 0),
(17, 'aarti', 'aarrttii', 1, 0),
(18, 'chak', 'docchak', 1, 0),
(19, 'ani', '11223344', 0, 0),
(20, 'navsanket', '1234', 0, 0),
(23, 'chowda', 'chowda', 1, 0),
(24, 'dange', 'dange', 1, 0),
(25, 'singh', '1singh1', 1, 0),
(26, 'rao', 'rraaoo', 1, 0),
(28, 'adnan', 'adnan', 1, 0),
(29, 'ajmera', 'ajmera', 1, 0),
(30, 'alpesh', 'alpesh', 1, 0),
(31, 'amar', 'amar', 1, 0),
(35, 'amit', 'amit', 1, 0),
(37, 'vikash2042', 'vicky', 0, 0),
(39, 'podpodan', '112233', 0, 0),
(40, 'ayan', 'paul', 0, 0),
(55, 'arko', 'arko91', 0, 0),
(56, 'ravi', 'ravi', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
