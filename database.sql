
CREATE DATABASE IF NOT EXISTS kpop_wiki;
USE kpop_wiki;


CREATE TABLE IF NOT EXISTS banners (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_url VARCHAR(255) NOT NULL,
    caption TEXT,
    order_num INT DEFAULT 0
);


CREATE TABLE IF NOT EXISTS site_settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    setting_key VARCHAR(50) UNIQUE,
    setting_value TEXT
);


INSERT INTO banners (image_url, caption, order_num) VALUES
('/fotos/banner/banner-le-sserafim.jpg', 'Spaghetti el primer single album de Le Sserafim ya está disponible', 1),
('/fotos/banner/skzDaesang.jpg', 'Stray Kids recibe el daesang por karma', 2),
('/fotos/banner/iveMama.jpg', 'IVE recibe un premio en los MAMA en la categoría Global Trend Song', 3),
('/fotos/banner/illitNotCuteAnyMore.jpeg', 'Illit arrasa globalmente en todas las plataformas con su primer single album Not Cute Anymore', 4),
('/fotos/banner/kep1WaterBomb.jpeg', 'Kep1er sigue presente en los grandes escenarios de 2025', 5);


INSERT INTO site_settings (setting_key, setting_value) VALUES
('recommended_video_id', 'a2grcJdfXmY'),
('recommended_video_title', 'LE SSERAFIM (르세라핌) "CELEBRATION" OFFICIAL MV'),
('recommended_video_heading', 'Comeback recomendado del mes');

CREATE TABLE IF NOT EXISTS comebacks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    artist_name VARCHAR(100) NOT NULL,
    album_name VARCHAR(100),
    song_name VARCHAR(100),
    release_info VARCHAR(100),
    month INT,
    year INT DEFAULT 2025,
    company VARCHAR(100),
    is_hot BOOLEAN DEFAULT FALSE,
    image_url VARCHAR(255),
    spotify_url VARCHAR(255),
    apple_url VARCHAR(255),
    youtube_url VARCHAR(255),
    category VARCHAR(50) DEFAULT 'recientes',
    artist_id INT NULL
);


INSERT INTO comebacks (id, artist_name, album_name, song_name, release_info, month, year, company, is_hot, image_url, spotify_url, apple_url, youtube_url, category) VALUES 
(1,'ALLDAY PROJECT','ALLDAY PROJECT','ALLDAY PROJECT','1st Mini Album · 08-12-2025',12,2025,'',0,'/fotos/recientes/alldayproyect.webp','https://open.spotify.com/intl-es/album/2llGDqePFTgjCIxOW1RehG?si=gMiP38ZWQBucA7RHsjk2Qg','https://music.apple.com/us/album/allday-project-ep/1856093326','https://music.youtube.com/playlist?list=OLAK5uy_m3s2YrAhZg77LQ5mAoVtH_Ytk6fssCKbc&si=MY7G8XwHR2JNp30n','recientes'),
(2,'RESCENE','Lip Bomb','Lip Bomb','3rd Mini Album · 25-11-2025',11,2025,'',0,'/fotos/recientes/lipBomb.jpg','https://open.spotify.com/intl-es/album/3H7MTJVprjcvlvCeQdRe1H','https://music.apple.com/us/album/lip-bomb-ep/1852644693','https://music.youtube.com/playlist?list=OLAK5uy_kZrQiqGr_bgCcTLvKpgOzIebfJRBHdFqU&si=gKCHSEeicAFflL8K','recientes'),
(3,'ILLIT','Not Cute Anymore','Not Cute Anymore','1st Single Album · 24-11-2025',11,2025,'',0,'/fotos/recientes/NotCuteAnymore.jfif','https://open.spotify.com/intl-es/track/1k0JAiH11gHL9dc5dfQjQr?si=4a9bc742073c4f5c','https://music.apple.com/us/album/not-cute-anymore-single/1849105513','https://music.youtube.com/playlist?list=OLAK5uy_m22yyMNSqCGR5lMlu6aDGpBC9lyvnU9gM&si=e_exAVKTEOx2YcvN','recientes'),
(4,'STRAY KIDS','Do It','Do It','SKZ IT TAPE (Special Album) · 21-11-2025',11,2025,'',0,'/fotos/recientes/DoIt.jpg','https://open.spotify.com/intl-es/album/4lkJ6i3LDK8HvcU2tPWX9k?si=724c2194d0fb4fec','https://music.apple.com/us/album/do-it-ep/1846266203','https://music.youtube.com/playlist?list=OLAK5uy_nYozrF8dvixMpZLFrbNMngS1EYCfNjes0&si=Ls5jnmOEbjz00ssb','recientes'),
(5,'NCT DREAM','Beat It Up','Beat It Up','6th Mini Album · 17-11-2025',11,2025,'',0,'/fotos/recientes/BeatItUp.webp','https://open.spotify.com/intl-es/album/7jd5hUsxFPUsM0dqfpRjmp?si=1fVBZIoVQziPuXXFoIDbAg','https://music.apple.com/us/album/beat-it-up-ep/1849135853','https://music.youtube.com/playlist?list=OLAK5uy_kmoOC0j8PL4v7z-W8wwq64_jv29sWPCmE&si=HD-LswrjStZPfyWI','recientes'),
(6,'GIRLSET','Little Miss','Little Miss','Digital Single · 14-11-2025',11,2025,'',0,'/fotos/recientes/LittleMiss.png','https://open.spotify.com/intl-es/album/5ychqszZ89oPl6rBKSkGc6?si=E8XrjQibTficeXX7_2s0tw','https://music.apple.com/us/album/little-miss-single/1848461044','https://music.youtube.com/playlist?list=OLAK5uy_kNqTFB-Txe3nDm7MZ-pCp6RX9pikUtEJU&si=5A9aiUMSgsiPt51V','recientes'),
(7,'ITZY','TUNNEL VISION','TUNNEL VISION','11th Mini Album · 10-11-2025',11,2025,'',0,'/fotos/recientes/TunnelVision.jfif','https://open.spotify.com/intl-es/album/7CD7NdEDOMY5Owl9MEzgRw?si=2Z2q2Ea3R1uhwZuKZkkRUQ','https://music.apple.com/us/album/tunnel-vision-ep/1846236584','https://music.youtube.com/playlist?list=OLAK5uy_nAwplpKBLvrFvJQUrR89jEkhA6EoNW8SA&si=LIQKw2STi7uODMFD','recientes'),
(8,'YEONJUN','NO LABELS: PART 01','NO LABELS: PART 01','1st Mini Album · 07-11-2025',11,2025,'',0,'/fotos/recientes/NoLabelsPart01.jfif','https://open.spotify.com/intl-es/album/4tv1yPD1RAs8Zg5oOjthNF?si=IOubPBU8Qou68DfkUuWxbw','https://music.apple.com/us/album/no-labels-part-01-ep/1846790579','https://music.youtube.com/playlist?list=OLAK5uy_n4HvZHp-O-r2-ZkzmDrn4yNUC8pFTtRu4&si=bg-RR91yjaSAogAv','recientes'),
(9,'BOYNEXTDOOR','1st Digital Single','오늘만 I LOVE YOU (If I Say I Love You)','06/01/2025',1,2025,'KUZ',0,'/fotos/2025/Enero/IfISayILoveYou.png','https://open.spotify.com/intl-es/track/7GOIrZTegzVty8mhNhRuA0?si=b38b81b32ec147a3','https://music.apple.com/us/song/if-i-say-i-love-you/1785637238','https://music.youtube.com/watch?v=XVrO_3lnbig&si=Wf0SVIe8MUokFZoe','2025'),
(10,'IVE','Rebel Heart','Rebel Heart','13/01/2025',1,2025,'Starship',0,'/fotos/2025/Enero/RebelHeart.jpg','https://open.spotify.com/intl-es/album/7vwi3kXdpkaRO3if4N2gBN?si=19b5849edcc04897','https://music.apple.com/us/album/ive-empathy-ep/1789740675','https://music.youtube.com/playlist?list=OLAK5uy_kkAcLbT1VyAje9QXDTbFswztscTVHh9Ys&si=sM4hRwgtWEVaTxg6','2025'),
(11,'WEI','7th Mini Album','The Feelings','15/01/2025',1,2025,'Oui',0,'/fotos/2025/Enero/TheFeelings.jpg','https://open.spotify.com/intl-es/album/4tlFQWOtbAdiRZKXkMITvg?si=qEQIqz_xRoaM7jZJmWTDeA','https://music.apple.com/us/album/the-feelings-ep/1788816196','https://music.youtube.com/playlist?list=OLAK5uy_kdlola0_5hI7u5j09GtXf2Fo6OZeycdH4&si=WDl6Utp3pTdbYoxj','2025'),
(12,'GOT7','EP','Winter Heptgon','20/01/2025',1,2025,'Kakao',0,'/fotos/2025/Enero/WinterHeptagon.jpg','https://open.spotify.com/intl-es/album/2TtVKZ7e40MVhqNbtYuT5z?si=wOfD07MSSLOjQNj4Y4ZS-Q','https://music.apple.com/us/album/winter-heptagon/1791072309','https://music.youtube.com/playlist?list=OLAK5uy_k1wBnQku7bISA6TaUw_8b2msy8D0hYJZo&si=lR5TTi4AldixrM_8','2025'),
(13,'IVE','The 3rd EP','IVE EMPATHY','13/01/2025',2,2025,'Starship',1,'/fotos/2025/Febrero/IveEmpathy.jpg','https://open.spotify.com/intl-es/album/7vwi3kXdpkaRO3if4N2gBN?si=19b5849edcc04897','https://music.apple.com/us/album/ive-empathy-ep/1789740675','https://music.youtube.com/playlist?list=OLAK5uy_kkAcLbT1VyAje9QXDTbFswztscTVHh9Ys&si=sM4hRwgtWEVaTxg6','2025'),
(14,'Madein','EP','Madein Forever','14/02/2025',2,2025,'143',0,'/fotos/2025/Febrero/MadeinForever.jpg','https://open.spotify.com/intl-es/album/6HGJb9CKxgnIRdTsvY3Mey?si=O-VoMZ9FS1eLBP1QC9I9Dw','https://music.apple.com/us/album/madein-forever-ep/1795866550','https://music.youtube.com/playlist?list=OLAK5uy_kDahOcHqgsFL7BXyhgXJUxBxpIHmiQURw&si=XEdNjBfzOL7NcsEg','2025'),
(15,'KiiiKiii','Single pre-debut','I Do Me','24/02/2025',2,2025,'Starship',0,'/fotos/2025/Febrero/IDoMe.png','https://open.spotify.com/intl-es/track/5PclMa9Pxs1OFWSAS6Nid9?si=c1ca0dc762dc4b40','https://music.apple.com/us/song/i-do-me/1795471747','https://music.youtube.com/watch?v=KdaNGvHHfnw&si=FFkHZux2oALZW9cJ','2025'),
(16,'Lisa','Álbum','Alter Ego','28/02/2025',2,2025,'LLOUD',0,'/fotos/2025/Febrero/AlterEgo.jpg','https://open.spotify.com/intl-es/album/5eoWRkeplmcCL97afSMJVm?si=-AAE9_5-R_yT3WFNgD_Bcw','https://music.apple.com/us/album/alter-ego/1798585113','https://music.youtube.com/playlist?list=OLAK5uy_nc170XHjJ4_nlluG0twPLxrc80VLJRU3E&si=sZ39CsV8PT6RCukH','2025'),
(17,'8TURN','1st Single Album','Leggo','04/03/2025',3,2025,'MNH',0,'/fotos/2025/Marzo/Leggo.jpg','https://open.spotify.com/intl-es/album/1Q7A27EREoht3InaYb51VP?si=09312b24efd549da','https://music.apple.com/us/album/leggo-single/1798136339','https://music.youtube.com/playlist?list=OLAK5uy_kIQBvmVPZ2B_gU7yr1ZRN1hJ96Hdm4ifg&si=gi1iCAhnbpwUugUx','2025'),
(18,'Jennie','1st Studio Album','Ruby','07/03/2025',3,2025,'OA',1,'/fotos/2025/Marzo/Ruby.webp','https://open.spotify.com/intl-es/album/1vWMw6pu3err6qqZzI3RhH?si=ae05580674dd4162','https://music.apple.com/us/album/ruby/1795979743','https://music.youtube.com/playlist?list=OLAK5uy_mnvH-tUmViwVe-5sBgYIAJgUTztsrILrI&si=KiRN5lxlPgbP4tZy','2025'),
(19,'Le SSerafim','5th Mini Album','hot','14/03/2025',3,2025,'Source Music',0,'/fotos/2025/Marzo/hot.png','https://open.spotify.com/intl-es/album/3lyRrGhXCCMbt4jVO9Wur2?si=CK2Z4zJ1SM2pbJQ9F62uiw','https://music.apple.com/us/album/hot-ep/1799278610','https://music.youtube.com/playlist?list=OLAK5uy_k_sEmTmn2DhpHs4frZ1t-s27PYNKSNhAQ&si=-YS-0eZyDeS7m55p','2025'),
(20,'KiiiKiii','The 1st EP','Uncut Gem','24/03/2025',3,2025,'Starship',0,'/fotos/2025/Marzo/UncutGem.jpg','https://open.spotify.com/intl-es/album/5eoWRkeplmcCL97afSMJVm?si=-AAE9_5-R_yT3WFNgD_Bcw','https://music.apple.com/us/album/alter-ego/1798585113','https://music.youtube.com/playlist?list=OLAK5uy_nc170XHjJ4_nlluG0twPLxrc80VLJRU3E&si=sZ39CsV8PT6RCukH','2025'),
(21,'Solar (MAMAMOO)','2nd Single Album','Want','02/04/2025',4,2025,'RBW',0,'/fotos/2025/Abril/Want.jfif','https://open.spotify.com/intl-es/album/5Nz1GLdhSyy88BOSOpoNap?si=0fhEi824RoGKL6U3LqmjIQ','https://music.apple.com/us/album/want-single/1804763880','https://music.youtube.com/watch?v=Y2w-ko0-xkM&si=OKuLLv_6cz6jv8fs','2025'),
(22,'ARTMS','Single','Burn','04/04/2025',4,2025,'Modhaus',0,'/fotos/2025/Abril/burn.jpg','https://open.spotify.com/intl-es/album/4benP09DGGgfu79UY9zvaU?si=4HdkUtrbQ7ylTDCvhEdZYA','https://music.apple.com/es/album/burn-single/1795431483','https://music.youtube.com/playlist?list=OLAK5uy_lCLV9RtPmP4AousA0-yp220h_NC09SyN4&si=DrUubaMNNiZ7xceJ','2025'),
(23,'NCT WISH','The 2nd Mini Album','poppop','24/02/2025',4,2025,'SM',0,'/fotos/2025/Abril/poppop.jpg','https://open.spotify.com/intl-es/album/46VvKhK6C8GC2Ew7nAIK3Y?si=33bRnzrjTqCVBmy4q7tJYQ','https://music.apple.com/es/album/poppop-the-2nd-mini-album-ep/1805788241','https://music.youtube.com/playlist?list=OLAK5uy_kn4vbhPGj10V3I583tLu7lwq2alHHeDDk&si=oSeqvyob9E4iCmS-','2025'),
(24,'Chuu','3RD MINI ALBUM','Only Cry In The Rain','21/04/2025',4,2025,'ATRP',0,'/fotos/2025/Abril/OnlyCryInTheRain.jfif','https://open.spotify.com/intl-es/album/5BenIQ2E8TFdZoAtPjUP9a?si=3d88a37560024fb7','https://music.apple.com/es/album/only-cry-in-the-rain-ep/1808333343','https://music.youtube.com/playlist?list=OLAK5uy_lF1NukQk-RX_DPMHqx8rcYLc2BEMUeSuw&si=tudciAdXoKM9ja3T','2025'),
(25,'Tomorrow X Together','Digital Single','Love Language','02/05/2025',5,2025,'BigHit',0,'/fotos/2025/Mayo/LoveLanguage.webp','https://open.spotify.com/intl-es/album/5BeSpFkdJkSc9phzT3bJSs?si=498918cdf8154927','https://music.apple.com/es/album/love-language-single/1808843310','https://music.youtube.com/watch?v=JFv3O5fe-1c&si=XAe8I9UyvntEJ2-G','2025'),
(26,'Rose','OST: F1® The Movie','Messy','09/06/2025',5,2025,'Dream APT',0,'/fotos/2025/Mayo/messy.jpg','https://open.spotify.com/intl-es/album/0k428U1kVhDaxhqBP7PbGr?si=1b1c54c8c40c4ba7','https://music.apple.com/es/album/messy-from-f1-the-movie-single/1812102239','https://music.youtube.com/watch?v=QVTIWWNhaYE&si=g1Axdk4aoJHzNsKe','2025'),
(27,'Meovv','1st EP ALBUM','My Eyes Open Vvide','12/05/2025',5,2025,'THEBLACKLABEL',1,'/fotos/2025/Mayo/MyEyesOpenVvide.jpg','https://open.spotify.com/intl-es/album/4n3pIffNB5CVVBmfhATTo8?si=SSLkNCItQP-ex-nxPPy6KQ','https://music.apple.com/es/album/my-eyes-open-vvide-ep/1810320315','https://music.youtube.com/playlist?list=OLAK5uy_nENDdPMTnwbgSWlphZESnMDsY5-wrvEqI&si=MdKexE7n7NM8xLK3','2025'),
(28,'SEVENTEEN','5th Album','HAPPY BURSTDAY','26/05/2025',5,2025,'PLEDIS',0,'/fotos/2025/Mayo/HappyBurstday.png','https://open.spotify.com/intl-es/album/6160Q4MxABBaeqMW5AZss4?si=8f47b092f6884001','https://music.apple.com/es/album/seventeen-5th-album-happy-burstday/1846801259','https://music.youtube.com/playlist?list=OLAK5uy_kh7Eq_1nus733fKxANQJzMP96GxAEkvYA&si=xuL25qVpLHetCx5L','2025'),
(29,'ENHYPEN','6th Mini Album','DESIRE: UNLEASH','05/06/2025',6,2025,'BELIFT',0,'/fotos/2025/Junio/DesireUnleash.jpg','https://open.spotify.com/intl-es/album/5nskZ8CFMrSNiOrceMHr4B?si=2e44d7c8d0ba4a68','https://music.apple.com/es/album/desire-unleash/1814718475','https://music.youtube.com/playlist?list=OLAK5uy_lNZHvqZTLj3445H3WbX0Qui1LwGVy1r7w&si=ZQxiR7wr66GbtHaM','2025'),
(30,'Itzy','EP','Girls Will Be Girls','09/06/2025',6,2025,'JYP',0,'/fotos/2025/Junio/GirlsWillBeGirls.jpg','https://open.spotify.com/intl-es/album/0bVAPVpPL25nIfko4O1G4J?si=YJwMR0bzTxudjQUI_dTX_Q','https://music.apple.com/es/album/girls-will-be-girls-ep/1813822759','https://music.youtube.com/playlist?list=OLAK5uy_kLuxhZP9B8idU_UNfU0zujfombteXAaUg&si=B9pxSy4Ms1QdEXQb','2025'),
(31,'Ateez','12th Mini Album','GOLDEN HOUR: Part.3','13/06/2025',6,2025,'KQ',0,'/fotos/2025/Junio/GoldenHourPart3.jpg','https://open.spotify.com/intl-es/album/5LlszztgR3YH7aN7SPgTVi?si=4pfxs0rrTOiW4HysjcrtyA','https://music.apple.com/es/album/golden-hour-part-3-ep/1816843869','https://music.youtube.com/playlist?list=OLAK5uy_lQnb6fzlcjYIWuQsQkVX-UucviuRkoyfE&si=ld2cbhumH-EWi3MZ','2025'),
(32,'Illit','3rd Mini Album','Bomb','16/06/2025',6,2025,'BELIFT',0,'/fotos/2025/Junio/Bomb.jpg','https://open.spotify.com/intl-es/album/6tcKWEXikmRDB9KufEHvLp?si=92d7fea5ac844c80','https://music.apple.com/es/album/bomb-ep/1817427556','https://music.youtube.com/playlist?list=OLAK5uy_l6UpSvj_7tjJuEttE6KOaWo1WZ6cbRCWM&si=7_09nTzRFryfgTPH','2025'),
(33,'Xdinary Heroes','Digital Single','FiRE (My Sweet Misery)','07/07/2025',7,2025,'JYP',0,'/fotos/2025/Julio/FiRE(MySweetMisery).jpg','https://open.spotify.com/intl-es/album/6ZqZFhhTiwscyLwyoEq8ku?si=55afp9FiRrSKzMuYoL0pNw','https://music.apple.com/us/album/fire-my-sweet-misery-single/1821732599','https://music.youtube.com/watch?v=MDc22OX6MQM&si=CDESLesmGO6-nRDE','2025'),
(34,'Blacpink','Single','Jump','11/07/2025',7,2025,'YG',0,'/fotos/2025/Julio/Jump.jpg','https://open.spotify.com/intl-es/album/3hzoZlx2KwtvJEUl9piPWr?si=e7ff87f4f855476a','https://music.apple.com/us/album/jump-single/1824672650','https://music.youtube.com/watch?v=r6Eei81SuqE&si=YJEv9lPqJWBvSPUs','2025'),
(35,'Twice','4TH FULL ALBUM','This is for deluxe','14/07/2025',7,2025,'JYP',0,'/fotos/2025/Julio/ThisIsForDeluxe.jpg','https://open.spotify.com/intl-es/album/4vk90WpE6wOlE3wCO0md1U?si=MEY66InBSKSFadVeN-feAg','https://music.apple.com/us/album/this-is-for-deluxe/1826124841','https://music.youtube.com/playlist?list=OLAK5uy_nb9mK3A6GiAX3gMAUukGPfuF6UGPb8nCY&si=FeHw9DM2jvfzu1hU','2025'),
(36,'Tomorrow X Together','The 3rd Mini Album','The Star Chapter: TOGETHER','21/07/2025',7,2025,'BigHit',0,'/fotos/2025/Julio/TheStarChapterTOGETHER.jpg','https://open.spotify.com/intl-es/album/1FwFdMp4ewxTlLSudNzlyG?si=lbAbMOmmQre2RJdJbqcSIw','https://music.apple.com/us/album/the-star-chapter-together/1822309911','https://music.youtube.com/playlist?list=OLAK5uy_lgMZ0HP3TT0_fej9D95cHFuYRUDx2h6zE&si=WyidMb5YJhvYwxV5','2025'),
(37,'KiiiKiii','Digital Single','Dancing Alone','06/08/2025',8,2025,'Starship',0,'/fotos/2025/Agosto/DancingAlone.jpg','https://open.spotify.com/intl-es/album/70Dv2gOXbeIyHnwT30Hak5?si=80c174182f384662','https://music.apple.com/us/album/dancing-alone-single/1830522219','https://music.youtube.com/playlist?list=OLAK5uy_lqpyIwN1QQuTdlDzYCNcU9NvtBehcXPEY&si=IMmPoz2O7ptdUIjz','2025'),
(38,'Jeon Somi','2nd EP ALBUM','Chaotic & Confused','11/08/2025',8,2025,'THEBLACKLABEL',0,'/fotos/2025/Agosto/Chaotic&Confused.jfif','https://open.spotify.com/intl-es/album/171v7mbXgzaMBk7S0QmCWu?si=bccdef9658914727','https://music.apple.com/us/album/chaotic-confused-ep/1831153862','https://music.youtube.com/playlist?list=OLAK5uy_nlBOkqyEnesfcAYrNxK0CSW6o6BGZ-R74&si=u_82iHI3PjUn4GCM','2025'),
(39,'Kep1er','The 7th Mini Album','BubbleGum','19/08/2025',8,2025,'WAKEONE',0,'/fotos/2025/Agosto/BubbleGum.jpg','https://open.spotify.com/intl-es/album/3pKcgDJmV3GZwgElcupVrg?si=103c667693e64eaa','https://music.apple.com/us/album/bubble-gum-ep/1832943665','https://music.youtube.com/playlist?list=OLAK5uy_l8YRn3qytjiaPGW33To9luTNVb0_H8SCY&si=g7XxIjSlIyS80TuJ','2025'),
(40,'Stray Kids','The 4th Album','Karma','22/08/2025',8,2025,'LLOUD',1,'/fotos/2025/Agosto/Karma.jpg','https://open.spotify.com/intl-es/album/3wqskwruUGJHC4yHbo7nxc?si=d0c573c4b8ac4753','https://music.apple.com/us/album/karma/1827247172','https://music.youtube.com/playlist?list=OLAK5uy_nowk5ZhlgvepK_YlYP5SMssFFzCnW6Lcw&si=LVd60khOIjwjuOw5','2025'),
(41,'AESPA','The 6th Mini Album','Rich Man','05/09/2025',9,2025,'SM',0,'/fotos/2025/Septiembre/RichMan.jpg','https://open.spotify.com/intl-es/album/3rUhGAdzBVzicwTPAVQjXu?si=77c6b406c5014d2e','https://music.apple.com/us/album/rich-man-the-6th-mini-album-ep/1833163982','https://music.youtube.com/playlist?list=OLAK5uy_n7qRoieQ-x87TkJV6u8-G0xc6WfFpm9lc&si=2mh8i_Q94b96HAP9','2025'),
(42,'CORTIS','1st EP','COLOR OUTSIDE THE LINES','08/09/2025',9,2025,'BIGHIT',0,'/fotos/2025/Septiembre/ColorOutsideTheLines.jpg','https://open.spotify.com/intl-es/album/2yMfaynthtWVAkJ5A3Kwrf?si=5ffd16b682da4b60','https://music.apple.com/us/album/color-outside-the-lines-ep/1832031331','https://music.youtube.com/playlist?list=OLAK5uy_mLwZqYXn0ksDpyO8I6_jmMoHucqek6QqU&si=Qy_1g6sjfVw1-lWJ','2025'),
(43,'CHAEYOUNG (Twice)','THE FIRST ALBUM','LIL FANTASY vol.1','12/09/2025',9,2025,'JYP',0,'/fotos/2025/Septiembre/LilFantasyVol1.jpg','https://open.spotify.com/intl-es/album/5j07H7jnOu2gYRj1ZrPoak?si=e85de083b6a94aa6','https://music.apple.com/us/album/lil-fantasy-vol-1/1832584198','https://music.youtube.com/playlist?list=OLAK5uy_kz-1gUDe06jW7WEaa40gcTz38rihMuAzA&si=_uWiWEJJ7apkayun','2025'),
(44,'P1harmony','EP','Ex','28/02/2025',9,2025,'hello82',0,'/fotos/2025/Septiembre/Ex.jpg','https://open.spotify.com/intl-es/album/4fUrVp1xhJvcJfxYLlJiNm?si=3b7ce0388482488d','https://music.apple.com/us/album/ex-ep/1837123541','https://music.youtube.com/playlist?list=OLAK5uy_njC3t9wzGwFgXmAei9ywrKL_2z5TSouAU&si=Y2B0BblXWc60Qyxx','2025'),
(45,'BABYMONSTER','2nd Mini Album','We Go Up','10/10/2025',10,2025,'YG',0,'/fotos/2025/Octubre/WeGoUp.jpg','https://open.spotify.com/intl-es/album/2Accppyz0p8XZaSSCIAuDK?si=-cyQHIvcQSK5OO8jrpP1dg','https://music.apple.com/us/album/we-go-up-ep/1843247940','https://music.youtube.com/playlist?list=OLAK5uy_ki16_Lh3p19WqZ8SgTPuGd3Vl96qmbBfE&si=epM_dFbZpt3odDFe','2025'),
(46,'NMIXX','1st Full Album','Blue Valentine','13/10/2025',10,2025,'JYP',0,'/fotos/2025/Octubre/BlueValentine.jpg','https://open.spotify.com/intl-es/album/42URGYboRJEQPwXj7wlsoB?si=dc4f6b8e820c4c7f','https://music.apple.com/us/album/blue-valentine/1839523838','https://music.youtube.com/playlist?list=OLAK5uy_nvsmIZ4mfs1TwPX_-aM4mxw_SV_EytZ8U&si=BwA2mij1J5JIomoy','2025'),
(47,'MEOVV','Digital Single','BURNING UP','14/10/2025',10,2025,'THEBLACKLABEL',1,'/fotos/2025/Octubre/BurningUp.jpg','https://open.spotify.com/intl-es/track/3uqgFeHo4Jr1D3gVIHQlD7?si=074dd6db8574449e','https://music.apple.com/us/album/burning-up-single/1843953409','https://music.youtube.com/watch?v=TMyl1Q7qhYo&si=cw9MFVyzxDSkh9uT','2025'),
(48,'Hearts2Hearts','The 1st Mini Album','Focus','20/10/2025',10,2025,'SM',0,'/fotos/2025/Octubre/Focus.jpg','https://open.spotify.com/intl-es/album/0SVlu6q116wFO1m4EZ088b?si=BDXanp9ITCy_TPNeh9DX9A','https://music.apple.com/us/album/focus-the-1st-mini-album-ep/1841828519','https://music.youtube.com/playlist?list=OLAK5uy_mFqK1YXE6LkmnKISXi5bqe_TUR9szulx8&si=mEg3NkpTXTtMpDTQ','2025'),
(49,'FIFTY FIFTY','3rd Digital Single','Too Much Part 1','04/11/2025',11,2025,'ATTRAKT',0,'/fotos/2025/Noviembre/TooMuchPart1.jpg','https://open.spotify.com/intl-es/album/0spXOvUlUo1EUDs13nlXki?si=FIfSUMfHRo6ylGoUZDcEPw','https://music.apple.com/us/album/too-much-part-1-single/1846778098','https://music.youtube.com/playlist?list=OLAK5uy_ke1qpAffjHByTUyK7WWq-IqBTyBO4Nx_I&si=6I1PgNtZ2FxVaZEK','2025'),
(50,'Sunmi','1st Full Album','Heart Maid','05/11/2025',11,2025,'ABYSS',0,'/fotos/2025/Noviembre/HeartMaid.jpg','https://open.spotify.com/intl-es/album/3VTC0g2EGSIksMcUB4ajFN?si=53691f216b6b4c6b','https://music.apple.com/us/album/heart-maid/1848070290','https://music.youtube.com/playlist?list=OLAK5uy_mLqjFt4YTebR-CYWn43GmTiZ6CrZMeW7A&si=eRBnnMN8kU4aq-oN','2025'),
(51,'Yeonjun (TXT)','Mini Album','NO LABELS: PART 01','07/11/2025',11,2025,'BIGHIT',0,'/fotos/2025/Noviembre/NoLabelsPart01.jpg','https://open.spotify.com/intl-es/album/4tv1yPD1RAs8Zg5oOjthNF?si=ry26OGxKThGYrDxS_S6AdA','https://music.apple.com/us/album/no-labels-part-01-ep/1846790579','https://music.youtube.com/playlist?list=OLAK5uy_n4HvZHp-O-r2-ZkzmDrn4yNUC8pFTtRu4&si=nVJ-fsjl4eK-uhHb','2025'),
(52,'Stray Kids','SKZ IT TAPE','DO IT','21/11/2025',11,2025,'JYP',0,'/fotos/2025/Noviembre/DoIt.jpg','https://open.spotify.com/intl-es/album/4lkJ6i3LDK8HvcU2tPWX9k?si=YUemBfJrRgegWKSjEXk-TQ','https://music.apple.com/us/album/do-it-ep/1846266203','https://music.youtube.com/playlist?list=OLAK5uy_nYozrF8dvixMpZLFrbNMngS1EYCfNjes0&si=Lhgn2mFrILqmahSC','2025'),
(53,'ALLDAY PROJECT','1st EP Album','ALLDAY PROJECT','08/12/2025',12,2025,'THEBLACKLABEL',0,'/fotos/2025/Diciembre/AllDayProject.jpg','https://open.spotify.com/intl-es/album/2llGDqePFTgjCIxOW1RehG?si=_HNxILJ9Tu6ZRswvGkp6OQ','https://music.apple.com/us/album/allday-project-ep/1856093326','https://music.youtube.com/playlist?list=OLAK5uy_m3s2YrAhZg77LQ5mAoVtH_Ytk6fssCKbc&si=1zwDdRG69oB7R13B','2025'),
(54,'KIM CHAEHYUN (Kep1er)','Album: Single','You won’t forget me','11/12/2025',12,2025,'WAKEONE',0,'/fotos/2025/Diciembre/YouWontForgetMe.png','https://open.spotify.com/intl-es/album/2mgoXyvUPVjTadwT6f8fQV?si=ajYPMmmNTKyfWGXk7LIwrw','https://music.apple.com/us/album/you-wont-forget-me-single/1859918015','https://music.youtube.com/playlist?list=OLAK5uy_khpmmGOqox1-oXs_fWHJR8MFt1bHha37I&si=N5tDFjGPtzRqAsqy','2025'),
(55,'JOOHONEY (MONSTA X)','Pre-release','Push','22/12/2025',12,2025,'Starship',0,'/fotos/2025/Diciembre/Push.jpg','https://open.spotify.com/intl-es/track/3Ubi9wmq741iwTtMjYM1kP?si=88bccf4624174ae8','https://music.apple.com/us/album/push-feat-rei-single/1857576655','https://music.youtube.com/watch?v=fB665XdYuww&si=9J93-7p6MGltzXNn','2025'),
(56,'SAY MY NAME','3RD EP ALBUM','&Our Vibe','29/12/2025',12,2025,'iNKODE',0,'/fotos/2025/Diciembre/&OurVibe.jpg','https://open.spotify.com/intl-es/album/52f4wYBg1SDSaMMwZ5u3OF?si=MtVfAPUQTv6RAhqFYnVr0w','https://music.apple.com/us/album/our-vibe-ep/1861370118','https://music.youtube.com/playlist?list=OLAK5uy_kApCbh2UikWb1bBXrhTDc_dCDo9alRZRg&si=VAUnlBiuTu_ro5Uz','2025');



CREATE TABLE IF NOT EXISTS promociones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    artist_name VARCHAR(100) NOT NULL,
    song_name VARCHAR(100) NOT NULL,
    program_info VARCHAR(100),
    image_url VARCHAR(255),
    youtube_url VARCHAR(255)
);

INSERT INTO promociones (artist_name, song_name, program_info, image_url, youtube_url) VALUES
('NMIXX', 'Blue Valentine', '2025 MBC Music Festival · 31-12-2025', '/fotos/promociones/BlueValentine.jpg', 'https://www.youtube.com/watch?v=L1JNz9uhkJo'),
('Cortis', 'GO!', 'SBS GayoDaejeon · 25-12-2025', '/fotos/promociones/Go!.jpg', 'https://www.youtube.com/watch?v=BxkG5Np5rFs'),
('Stray Kids', 'Do It', 'Inkigayo · 23-11-2025', '/fotos/promociones/DoIt.jpg', 'https://www.youtube.com/watch?v=BTvx_xtsC3c'),
('Aespa', 'Rich Man', 'Show! MusicCore · 06-09-2025', '/fotos/promociones/RichMan.jpg', 'https://www.youtube.com/watch?v=FVtSKrY8hYQ'),
('IVE', 'XOXZ', 'M COUNTDOWN · 28-08-2025', '/fotos/promociones/xoxz.jpg', 'https://www.youtube.com/watch?v=LqzfG98UeX8'),
('SEVENTEEN', 'Thunder', '세븐틴 [Music Bank] · 30-05-2025', '/fotos/promociones/Thunder.jpg', 'https://www.youtube.com/watch?v=yXjQe26dxHc'),
('Fifty Fifty', 'Midnight Special', 'MMT STAGE · 14-05-2025', '/fotos/promociones/MidnightSpecial.jpg', 'https://www.youtube.com/watch?v=MyS_ADgNR7g'),
('NCT WISH', 'poppop', 'MOVE TO PERFORMANCE · 16-04-2025', '/fotos/promociones/poppop.jpg', 'https://www.youtube.com/watch?v=f8sRbKyPnZE'),
('TNX', '아 진짜 (For Real?)', 'Just DANCE · 27-03-2025', '/fotos/promociones/ForReal.jpg', 'https://www.youtube.com/watch?v=L9glB-NcxuA'),
('YOUNG POSSE', 'XXL', '1theKILLPO · 21-03-2025', '/fotos/promociones/XXL.jpg', 'https://www.youtube.com/watch?v=C9UnUV2Q1Zk'),
('8TURN', 'RU-PUM PUM', 'Relay Dance · 14-01-2025', '/fotos/promociones/RU-PUMPUM.jpg', 'https://www.youtube.com/watch?v=t9hVNwGl18M'),
('GFRIEND', '우리의 다정한 계절 속에 (Season of Memories)', 'Studio Choom · 07-01-2025', '/fotos/promociones/SeasonOfMemories.jpg', 'https://www.youtube.com/watch?v=VClsKLNQFWQ');


CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'admin') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO users (username, email, password, role) VALUES 
('admin', 'admin@kpopwiki.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin');


CREATE TABLE IF NOT EXISTS artists (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    generation INT,
    description TEXT,
    image_url VARCHAR(255),
    spotify_url VARCHAR(255),
    apple_url VARCHAR(255),
    youtube_url VARCHAR(255),
    company VARCHAR(100),
    wiki_url VARCHAR(255) DEFAULT '#'
);

INSERT INTO artists (name, generation, image_url, company, spotify_url, apple_url, youtube_url, wiki_url) VALUES 
('H.O.T.', 1, '/fotos/1gen/HOT.jpg', 'SM Entertainment', 'https://open.spotify.com/intl-es/artist/5JrfgZAgqAMywJpLpJM0eS', 'https://music.apple.com/us/artist/h-o-t/4691436', 'https://music.youtube.com/channel/UCB0jUx1SVzaPu1QCVho9Ocw', '/Artistas/1Gen/Artistas/HOT.php'),
('The Light and The Salt', 1, '/fotos/1gen/Ligth&Salt.jpg', 'Beyond Music', 'https://open.spotify.com/intl-es/artist/0jhgI3xU8n2o1W6EOw9dIf', 'https://music.apple.com/us/artist/the-light-and-the-salt/561401202', 'https://music.youtube.com/channel/UCF1CYP5TlTQ059koiH0486w', '#'),
('Teen Teen Five', 1, '/fotos/1gen/TeenTeenFive.jfif', 'SM Entertainment', 'https://open.spotify.com/intl-es/artist/1eRjQfxyrZdxHhK62Np6nb', 'https://music.apple.com/us/artist/teen-teen-five/879422224', 'https://music.youtube.com/channel/UCkAW9J1fmjeeI_-K13kc54A', '#'),
('Baby V.O.X.', 1, '/fotos/1gen/BabyVOX.jpg', 'BABY VOX Co.', 'https://open.spotify.com/intl-es/artist/7H5LMtjHqkyH4U8dpLR4lo', 'https://music.apple.com/us/artist/baby-v-o-x/1386666947', 'https://music.youtube.com/channel/UCacV4mzrf3rTYg4WJBJ-iAQ', '#'),
('Jinusean', 1, '/fotos/1gen/Jinusean.jfif', 'YG Entertainment', 'https://open.spotify.com/intl-es/artist/4WItSECPefckW11qSnZXyv', 'https://music.apple.com/us/album/jinusean/1342475366', 'https://music.youtube.com/channel/UCgX9AAxncWN0z8B_HKtAXvA', '#'),
('FIN.K.L', 1, '/fotos/1gen/Fin.K.L.jpg', 'DSP Media', 'https://open.spotify.com/intl-es/artist/2aRLyjYp7WPr4EkjkI1gvS', 'https://music.apple.com/us/artist/fin-k-l/1457607690', 'https://music.youtube.com/channel/UCItG6VDI70FR31cjQwXLysQ', '#'),
('Koyote', 1, '/fotos/1gen/Koyote.jpg', 'JG STAR', 'https://open.spotify.com/intl-es/artist/3Xp2BCax4mS6EgstD0OyZR', 'https://music.apple.com/us/artist/koyote/42387681', 'https://music.youtube.com/channel/UC6crVQ5uz9pzRkvqHF8xvXA', '#'),
('Dynamic Duo', 1, '/fotos/1gen/dynamicduo.jpg', 'Amoeba Culture', 'https://open.spotify.com/intl-es/artist/4nvFFLtv7ZqoTr83387uK4', 'https://music.apple.com/us/artist/dynamicduo/412564585', 'https://music.youtube.com/channel/UC_AGxNvse-OseHxJ-AYT4FA', '#'),
('Hyun Jin-young & Wawa', 1, '/fotos/1gen/HyunJin-young.jpg', 'S.M. Entertainment', 'https://open.spotify.com/intl-es/artist/3ZZz9fLzRgFXJnEGVHV3Pn', 'https://music.apple.com/us/artist/hyun-jin-young/345034290', 'https://music.youtube.com/channel/UCFp8jw4bpmNNgcqnwH8uhXw', '#'),
('ZAM', 1, '/fotos/1gen/ZAM.jpg', 'DSP Media', 'https://open.spotify.com/intl-es/artist/0EGPipNhYWZAKovbdqcvuG', 'https://music.apple.com/us/artist/zam/1419991469', 'https://music.youtube.com/channel/UCMWTvczrmhlb0XUhc0Q309w', '#'),
('DEUX', 1, '/fotos/1gen/DEUX.jpg', 'WA:ID COMPANY', 'https://open.spotify.com/intl-es/artist/64RfnYDHtR3ZaLdtxAjPDA', 'https://music.apple.com/us/artist/deux/348272665', 'https://music.youtube.com/channel/UCxdjAtOEGsnjvPlgqKbi5jw', '#'),
('Two Two', 1, '/fotos/1gen/twotwo.jpg', 'RIAK', 'https://open.spotify.com/intl-es/album/5OtwgkGBBV1Fe8IeHOPVyR', 'https://music.apple.com/us/artist/two-two/879415819', 'https://music.youtube.com/channel/UCbucry1wu86u1NBKKMso9-A', '#'),
('Roo´RA', 1, '/fotos/1gen/roora.jpg', 'World Music Entertainment', 'https://open.spotify.com/intl-es/artist/7bb3cdFh1kkHdopjeJRgca', 'https://music.apple.com/us/artist/roora/335944008', 'https://music.youtube.com/channel/UClrlK9SJaioYAWDcK9g-S_w', '#'),
('Cool', 1, '/fotos/1gen/cool.jpg', 'Genie Music', 'https://open.spotify.com/intl-es/artist/0w3PsroIezW7uRTNxEJLb9', 'https://music.apple.com/us/artist/cool/683085172', 'https://music.youtube.com/channel/UCYz8SkesOW9PBgo7tr8E9mQ', '#'),
('DJ DOC', 1, '/fotos/1gen/djcoc.jpg', 'ENT102', 'https://open.spotify.com/intl-es/artist/3kDgt4vVKGTLmtC3FkOwWF', 'https://music.apple.com/us/artist/dj-doc/105750664', 'https://music.youtube.com/channel/UCw08Gv4gLCvrJ1aX3auWS7A', '#'),
('R.ef', 1, '/fotos/1gen/ref.jpg', 'TEAMEnt', 'https://open.spotify.com/intl-es/artist/7cZr14W0dKCGk0elwfecak', 'https://music.apple.com/us/artist/r-ef/635766380', 'https://music.youtube.com/channel/UC2vwBRDYXD4ZYsZLu_o_06w', '#'),
('Turbo', 1, '/fotos/1gen/turbo.jpg', 'The Turbo Company', 'https://open.spotify.com/intl-es/artist/3aboSJaljyYlTRXt7pEH0G', 'https://music.apple.com/us/artist/turbo/366849060', 'https://music.youtube.com/channel/UCldxOKMiWjehdybzCNVYm8w', '#'),
('Idol', 1, '/fotos/1gen/idol.jpg', 'DSP media', 'https://open.spotify.com/intl-es/artist/6JpkAWI44s0IyRdPRObOlt', 'https://music.apple.com/us/artist/idol/1458596230', 'https://music.youtube.com/channel/UCIBTrFHWfJDXpeHuyV337eQ', '#'),
('S.E.S', 1, '/fotos/1gen/ses.jpg', 'S.M. Entertainment', 'https://open.spotify.com/intl-es/artist/61HUG80Xma4rnXsqfZkzeM', 'https://music.apple.com/us/artist/s-e-s/1060470757', 'https://music.youtube.com/channel/UCxJtGwC62n2UeOzWu996STA', '#'),
('NRG', 1, '/fotos/1gen/NRG.jpg', 'Music Factory Entertainment', 'https://open.spotify.com/intl-es/artist/7xrfnodwPKuIxS9JuUECaf', 'https://music.apple.com/us/artist/nrg/1567172796', 'https://music.youtube.com/channel/UCfqbhtSqgx-lC4Bz5SIxiww', '#'),
('SECHSKIES', 1, '/fotos/1gen/SECHSKIES.jpg', 'YG Entertainment', 'https://open.spotify.com/intl-es/artist/6uRyNreOHUvWPNGnKfIo27', 'https://music.apple.com/us/artist/sechskies/1162613479', 'https://music.youtube.com/channel/UCcADqTjMyMol8B8mWm9n6rA', '#'),
('S#arp', 1, '/fotos/1gen/sharp.jpg', 'World Music Entertainment', 'https://open.spotify.com/intl-es/artist/4IQMpwDgwfxBhZPhiBq3I4', 'https://music.apple.com/us/artist/s-arp/914403355', 'https://music.youtube.com/channel/UCU51DyvAr0EG8btWHUX41Qw', '#'),
('CB Mass', 1, '/fotos/1gen/cbmass.jpg', 'Stone Music Entertainment', 'https://open.spotify.com/intl-es/artist/1P7AuUYePJ4GJPbEvqgPgL', 'https://music.apple.com/us/artist/cb-mass/337863135', 'https://music.youtube.com/channel/UCGVwyMCJrenwTTpPfwZSCUw', '#'),
('1TYM', 1, '/fotos/1gen/1tym.jpg', 'YG Entertainment', 'https://open.spotify.com/intl-es/artist/28VNvK7Z3jsX3U9253MzmJ', 'https://music.apple.com/us/artist/1tym/975424381', '', '#');


CREATE TABLE IF NOT EXISTS user_favorites (
    user_id INT,
    artist_id INT,
    PRIMARY KEY (user_id, artist_id),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (artist_id) REFERENCES artists(id) ON DELETE CASCADE
);
