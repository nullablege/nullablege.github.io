

<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

define('MAILHOST',"smtp.gmail.com");
define('USERNAME',"327hastanesibilgisistemi@gmail.com");
define('PASSWORD',"jvjk qkor afdo ptoi");
define('SEND_FROM',"info@hastane327.com");
define('SEND_FROM_NAME','327Hastanesi');
define('REPLY_TO',"info@327Hastanesi.com");
define('REPLY_TO_NAME','Ege');


function sendEmail($email,$subject,$message){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = MAILHOST;
    $mail->Username = USERNAME;
    $mail->Password = PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->setFrom(SEND_FROM,SEND_FROM_NAME);
    $mail->addAddress($email);
    $mail->addReplyTo(REPLY_TO,REPLY_TO_NAME);
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = $message;
    if(!$mail->send())
        return 0;
    else{
        return 1;
    }
}

session_start(); // Session başlatılıyor

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cooldown = 600;

    if (isset($_SESSION['last_email_time'])) {
        $elapsed_time = time() - $_SESSION['last_email_time'];

        if ($elapsed_time < $cooldown) {
            exit;
        }
    }

    $_SESSION['last_email_time'] = time(); 

    $ad = htmlspecialchars(stripslashes(trim($_POST['ad'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $telefon = htmlspecialchars(stripslashes(trim($_POST['telefon'])));
    $konu = htmlspecialchars(stripslashes(trim($_POST['konu'])));
    $mesaj = htmlspecialchars(stripslashes(trim($_POST['mesaj'])));
    $str = <<<EGE

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Konu : $konu  <br>
    Mesaj : $mesaj <br>
    Telefon : $telefon <br>
    Email : $email <br>
    Ad : $ad <br>
</body>
</html>

EGE;

    sendEmail("egenull0@gmail.com", $konu, $str);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ege AYTAÇ | Software Developer</title>
    <link rel="shortcut icon" href="img/icon100.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<!-- Header  -->
<header class="header">
    <a href="#home" class="logo">Ege <span>AYTAÇ</span></a>
    
    <i class='bx bx-menu' id="menu-icon" ></i>

    <nav class="navbar">
        <a href="#home" class="active">Ana Sayfa</a>
        <a href="#education">Eğitim</a>
        <a href="#services">Hizmetler</a>
        <a href="#testimonials" disabled >Referanslar</a>
        <a href="#contact">İletişim</a>
    </nav>
</header>
<!-- !Header  -->
<!-- Home  -->
<section class="home" id="home">
    <div class="home-content">
        <h1>Merhaba, ben Ege</h1>
        <h3 class="text-animation">Ben <span></span></h3>
        <p>
            Merhabalar, ben Ege. Şu anda Doğu Akdeniz Üniversitesi IT Bölümünde öğrenim görmekteyim. Okulun yanı sıra programlamaya derin bir merakım var. Programlamanın sadece yüzeysel olarak öğrenilip geçilmesinden ziyade, arka planda neyin nasıl çalıştığını derinlemesine anlamaya yönelik bir yaklaşım benimsediğim için yavaş ama sağlam adımlarla ilerlediğimi düşünüyorum.

            GitHub hesabıma 2024 yazı itibarıyla yaptığım projeleri ufak ufak yüklemeye başladım. Oradan gelişimimi ve projelerimden işinize yarayabilecek olanları inceleyebilirsiniz. Benimle iletişim kurmak isterseniz, sayfadaki iletişim bölümünü kullanmaktan çekinmeyin.
            
            Şu anda öğrenci olmama ve herhangi bir iş deneyimim olmamasına rağmen, programlamaya başlayan çoğu kişinin yaptığı gibi web alanına yöneldim. Aktif olarak ilgilendiğim alan ise PHP (Web > Backend) diyebilirim. Yapmak istediğiniz bir iş birliği veya yardıma ihtiyacınız varsa lütfen benimle iletişime geçmekten çekinmeyin.
            
            Aşağıdaki bölümde aktif olarak (belli bir seviyede) kodladığım dilleri görebilirsiniz. Bu dillerin hiçbirinde profesyonel olduğumu iddia etmiyorum; yalnızca belirli bir seviyede bilgi sahibi olduğum dilleri ekledim.
        </p>

        <div class="social-icons">
            <a href="#">
            <img src="https://img.icons8.com/?size=100&id=zRvbzAjx4VWY&format=png&color=000000" alt="">
            </a>
            <a href="#">
                <img src="https://img.icons8.com/?size=100&id=YjeKwnSQIBUq&format=png&color=000000" alt="">
            </a>
            <a href="#">
                <img src="https://img.icons8.com/?size=100&id=ldQqWiIRv9bc&format=png&color=000000" alt="">
            </a>
            <a href="#">
                <img src="https://img.icons8.com/?size=100&id=108784&format=png&color=000000" alt="">
            </a>
            <a href="#">
                <img src="https://img.icons8.com/?size=100&id=YrKoPXb4jv9l&format=png&color=000000" alt="">
            </a>
            <a href="#">
                <img src="https://img.icons8.com/?size=100&id=xqzBBnrMKwEz&format=png&color=000000" alt="">
            </a>
            <a href="#">
                <img src="https://img.icons8.com/?size=100&id=40670&format=png&color=000000" alt="">
            </a>
            <a href="#">
                <img src="https://img.icons8.com/?size=100&id=2T6TKY6whzgV&format=png&color=000000" alt="">
            </a>
            <a href="#">
                <img src="https://img.icons8.com/?size=100&id=45490&format=png&color=000000" alt="">
            </a>
            <a href="#">
                <img src="https://img.icons8.com/?size=100&id=l75OEUJkPAk4&format=png&color=000000" alt="">
            </a>
        </div>

        <div class="social-icons">
            <a href="https://www.instagram.com/nullablege" target="_blank"><i class='bx bxl-instagram' ></i></a>
            <a href="#" target="_blank"><i class='bx bxl-youtube' ></i></a>
            <a href="https://github.com/nullablege" target="_blank"><i class='bx bxl-github' ></i></a>
            <a href="https://www.linkedin.com/in/nullablege/" target="_blank"><i class='bx bxl-linkedin' ></i></a>
        </div>

        <div class="btn-group">
            <a href="CV.jpg" target="_blank" class="btn">CV</a>
            <a href="#contact" class="btn">Bana Ulaş</a>
            <a href="transkript.pdf" target="_blank" class="btn">Transkript</a>
        </div>

    </div>
    <div class="home-img">
        <img src="img/1.png" alt="">
    </div>
</section>
<!-- !Home -->

<!-- Education -->

<section class="education" id="education" >
<h2 class="heading">Eğitim</h2>
<div class="timeline-items">

    <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">2009 - 2012</div>
        <div class="timeline-content">
            <h3>İlkokul Diploması</h3>
            <p>Atatürk Ortaokulu, Antalya</p>
        </div>
    </div>

    <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">2012 - 2016</div>
        <div class="timeline-content">
            <h3>Ortaokul Diploması</h3>
            <p>Atatürk Ortaokulu, Antalya</p>
        </div>
    </div>

    <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">2016 - 2017</div>
        <div class="timeline-content">
            <h3>Lise</h3>
            <p>Özel Antalya TAC Anadolu Lisesi, Antalya</p>
        </div>
    </div>

    <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">2017 - 2018</div>
        <div class="timeline-content">
            <h3>Lise</h3>
            <p>Özel Kent Koleji Güzelbahçe Kampüsü, İzmir</p>
        </div>
    </div>

    <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">2018 - 2020</div>
        <div class="timeline-content">
            <h3>Lise Diploması</h3>
            <p>Özel Urla Atılgan Anadolu Lisesi, İzmir</p>
        </div>
    </div>

    <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">2022 - Halen</div>
        <div class="timeline-content">
            <h3>Üniversite (Lisans) Diploması</h3>
            <p>Doğu Akdeniz Üniversitesi, Gazimağusa</p>
        </div>
    </div>

</div>
</section>

<!-- ! Education -->

<!-- SERVICES -->

<section class="services" id="services">
    <h2 class="heading">Hizmetler</h2>
    <div class="services-container"> <!-- Bu ana container olmalı -->
        <div class="service-box">
            <div class="service-info">
                <h4>Front-End Development</h4>
                <p>
                    Sizler için HTML, CSS, Bootstrap kullanarak (genellikle bir backend işlemini temalandırmak amacıyla) sitenize responsive görünüme sahip bir frontend çalışması yapabilirim. Eğer istediğiniz tasarımı bana iletirseniz, bahsettiğim teknolojilerle o tasarımı web’e taşıyabilirim.                </p>
            </div>
        </div>

        <div class="service-box">
            <div class="service-info">
                <h4>Back-End Development</h4>
                <p>
                    Sizler için PHP yardımıyla var olan bir frontend projenize backend işlevi kazandırabilirim. İşletmeniz için sıfırdan bir sistem tasarlayarak işlerinizi kolaylaştırabilirim. SQL tabanlı PHP projeleri, mevcut API’lerle haberleşebilen PHP projeleri ya da sizin veritabanınıza özel bir API projesi hazırlayabilirim.                </p>
            </div>
        </div>

        <div class="service-box">
            <div class="service-info">
                <h4>Full-Stack Development</h4>
                <p>
                    Sizler için HTML, CSS, Bootstrap, JavaScript, PHP kullanarak veritabanına sahip, API’lerle haberleşebilen, işlevselliği yüksek ve responsive tasarıma sahip bir site tasarlayabilirim. Bu site, işletmenizin yönetimini gözlemlemenize ve takip etmenize yardımcı olabilir. İsteklerinizi bana ilettiğinizde, size bu konuda yardımcı olabilirim.                </p>
            </div>
        </div>

        <div class="service-box">
            <div class="service-info">
                <h4>C# Form Application Development</h4>
                <p>
                    Sizler için C# kullanarak bir form uygulaması (masaüstü uygulaması) tasarlayabilirim. Bu uygulama, sizin istekleriniz doğrultusunda hazırlanacak olup bir veritabanına sahip olabilir. Programı, işinize en çok yarayacak şekilde tasarlayabilirim.                </p>
            </div>
        </div>

        <div class="service-box">
            <div class="service-info">
                <h4>Web Scraping</h4>
                <p>
                    Python Selenium Framework’ü kullanarak sizler için Web Scraping (veri kazıma) uygulaması yapabilirim. Veri kazıma, internette herhangi bir yerde API anahtarı gerektirmeden, sizin kendi gözünüzle erişebildiğiniz her türlü veriye erişim sağlamayı mümkün kılar. Ancak, bu işlemin yasal sorumlulukları bulunduğunu ve taleplerin tarafımca feshedilebileceğini unutmamanız gerekmektedir.                </p>
            </div>
        </div>

        <div class="service-box">
            <div class="service-info">
                <h4>Python Development</h4>
                <p>
                    Python ile yapılabileceğini düşündüğünüz projelerde size destek olabilir ya da projeyi tamamen sizin için tamamlayabilirim.                </p>
            </div>
        </div>

        <div class="service-box">
            <div class="service-info">
                <h4>Programlama Dersi / Mentorluk </h4>
                <p>
                    Kendi tecrübelerimden yola çıkarak, yaptığım hataları yapmamanızı sağlayabilir ve yetkin olduğum konularda dilim döndüğünce size yardımcı olmaya çalışabilirim. Ben de kısa bir süre önce geçtiğiniz yoldan geçtiğim için, taze tecrübelerimle sizi kendimden daha üst seviyeye taşıyabilirim.
                </p>
            </div>
        </div>

        <div class="service-box">
            <div class="service-info">
                <h4>Algoritma Eğitimi</h4>
                <p>
                    Programlamanın temeli olan algoritma konusunu sizler için daha anlaşılır ve idrak edilebilir biçimde açıklayabilirim. Üniversitelerde ilk dönem görülen bu ders için sizleri sınavlarınıza hazır hale getirebiliri. Akış diyagramları veya Sözde kodlar tasarlamanızda yardımcı olabilirim.
                </p>
            </div>
        </div>

    </div>
</section>
    

<!-- ! SERVICES -->


<!-- TESTIMONIALS -->

<section class="testimonials" id="testimonials">

    <div class="testimonials-box">
        <h2 class="heading">Referanslar</h2>
        <div class="wrapper">

            <div class="testimonial-item">
                <img src="img/1.png" alt="">
                <h2>1. Referans</h2>
                <div class="rating">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, reiciendis!</p>
            </div>

            <div class="testimonial-item">
                <img src="img/1.png" alt="">
                <h2>2. Referans</h2>
                <div class="rating">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, reiciendis!</p>
            </div>

            <div class="testimonial-item">
                <img src="img/1.png" alt="">
                <h2>3. Referans</h2>
                <div class="rating">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, reiciendis!</p>
            </div>


        </div>
    </div>

</section>

<!-- !TESTIMONIALS -->

<!-- CONTACT -->

<section class="contact" id="contact">
    <h2 class="heading">Bana <span>Ulaş</span></h2>
    <form action="" method="POST">
        <div class="input-group">

            <div class="input-box">
                <input type="text" name="ad" id="ad" placeholder="Adınız" required>
                <input type="email" name="email" id="email" placeholder="E-Posta" required> 
            </div>

            <div class="input-box">
                <input type="number" name="telefon" id="Telefon" placeholder="Telefon" required>
                <input type="text" name="konu" id="konu" placeholder="Konu" required> 
            </div>

        </div>

        <div class="input-group-2">
            <textarea name="mesaj" id="mesaj" placeholder="Mesajınız" cols="30" rows="10"></textarea>
            <input type="submit" value="gonder" class="btn">
        </div>
        
    </form>
</section>

<!-- ! CONTACT -->

<!-- Footer -->

<footer class="footer">
    <div class="social">
        <a href="https://www.instagram.com/nullablege" target="_blank"><i class='bx bxl-instagram' ></i></a>
        <a href="#" target="_blank"><i class='bx bxl-youtube' ></i></a>
        <a href="https://github.com/nullablege" target="_blank"><i class='bx bxl-github' ></i></a>
        <a href="https://www.linkedin.com/in/nullablege/" target="_blank"><i class='bx bxl-linkedin' ></i></a>
    </div>

    <ul class="list">
        <li><a href="#home">Ana Sayfa</a></li>
        <li><a href="#education">Eğitim</a></li>
        <li><a href="#services">Hizmetler</a></li>
        <li><a href="#testimonials">Referanslar</a></li>
    </ul>
    <p class="copyright">&copy; Ege AYTAÇ | Tüm Hakları Saklıdır.</p>
</footer>



<!-- ! Footer -->


<script src="script.js"></script>  
</body>
</html>