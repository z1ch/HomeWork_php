<?php
$title = "Main";

$h1_ProductName = "Product name";

function year(){
    return getdate()['year'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="Style/index.css"> </head>

<body>
    <div class="container">
        <header class="headerMain">
            <h1 class="headerProductName"><?php echo $h1_ProductName ?></h1>
            <ul>
                <li>Put on this page information about your product</li>
                <li>A detailed description of your product</li>
                <li>Tell us about the advantages and merits</li>
                <li>Associate the page with the payment system</li>
            </ul>
            <video src="Video/Skater-in-the-Park.mp4" controls poster="Pictures/Skater-in-the-Park.jpg"></video>
            <div class="headerPhoto"></div>
        </header>
        <main class="mainMain">
            <div class="aboutProduct">
                <h2>About your product</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis facilis fuga, illo at. Natus eos, eligendi illum rerum omnis porro ex, magni, explicabo veniam incidunt in quam sapiente ut ipsum.</p>
                <p>Pariatur iure ab sunt nesciunt, quibusdam odio iste cumque itaque, ipsa vel exercitationem ullam quos aut nostrum cupiditate fuga quaerat quam animi dolores. Sequi itaque, unde perferendis nemo debitis dolor.</p>
                <figure></figure>
            </div>
            <article class="dignityMain">
                <h2>Dignity and pluses product</h2>
                <ul>
                    <li>Delectus dolorem vero quae beatae quasi dolor deserunt iste amet atque, impedit iure placeat, ullam. Reprehenderit aliquam, nemo cum velit ratione perferendis quas, maxime, quaerat porro totam, dolore minus inventore.</li>
                    <li>Delectus dolorem vero quae beatae quasi dolor deserunt iste amet atque, impedit iure placeat, ullam. Reprehenderit aliquam, nemo cum velit ratione perferendis quas, maxime, quaerat porro totam, dolore minus inventore.</li>
                    <li>Delectus dolorem vero quae beatae quasi dolor deserunt iste amet atque, impedit iure placeat, ullam. Reprehenderit aliquam, nemo cum velit ratione perferendis quas, maxime, quaerat porro totam, dolore minus inventore.</li>
                    <li>Delectus dolorem vero quae beatae quasi dolor deserunt iste amet atque, impedit iure placeat, ullam. Reprehenderit aliquam, nemo cum velit ratione perferendis quas, maxime, quaerat porro totam, dolore minus inventore.</li>
                    <li>Delectus dolorem vero quae beatae quasi dolor deserunt iste amet atque, impedit iure placeat, ullam. Reprehenderit aliquam, nemo cum velit ratione perferendis quas, maxime, quaerat porro totam, dolore minus inventore.</li>
                    <li>Delectus dolorem vero quae beatae quasi dolor deserunt iste amet atque, impedit iure placeat, ullam. Reprehenderit aliquam, nemo cum velit ratione perferendis quas, maxime, quaerat porro totam, dolore minus inventore.</li>
                </ul>
            </article>
            <section class="scrinshotsMain">
                <h2>Scrinshots</h2>
                <article> 
                    <img src="../Site/Pictures/image.jpg" alt="Scrinshots1">
                    <h3>The description for the image</h3>
                    <p>Pariatur iure ab sunt nesciunt, quibusdam odio iste cumque itaque, ipsa vel exercitationem ullam quos aut nostrum cupiditate fuga quaerat quam animi dolores. Sequi itaque, unde perferendis nemo debitis dolor.</p>
                </article>
                <article> 
                    <img src="../Site/Pictures/image.jpg" alt="Scrinshots1">
                    <h3>The description for the image</h3>
                    <p>Pariatur iure ab sunt nesciunt, quibusdam odio iste cumque itaque, ipsa vel exercitationem ullam quos aut nostrum cupiditate fuga quaerat quam animi dolores. Sequi itaque, unde perferendis nemo debitis dolor.</p>
                </article>
                <article> 
                    <img src="../Site/Pictures/image.jpg" alt="Scrinshots1">
                    <h3>The description for the image</h3>
                    <p>Pariatur iure ab sunt nesciunt, quibusdam odio iste cumque itaque, ipsa vel exercitationem ullam quos aut nostrum cupiditate fuga quaerat quam animi dolores. Sequi itaque, unde perferendis nemo debitis dolor.</p>
                </article>
                <article> 
                    <img src="../Site/Pictures/image.jpg" alt="Scrinshots1">
                    <h3>The description for the image</h3>
                    <p>Pariatur iure ab sunt nesciunt, quibusdam odio iste cumque itaque, ipsa vel exercitationem ullam quos aut nostrum cupiditate fuga quaerat quam animi dolores. Sequi itaque, unde perferendis nemo debitis dolor.</p>
                </article>
            </section>
            <article class="reviewsMain">
                <h2>Reviews</h2>
                <br> <img src="../Site/Pictures/userpic.jpg" alt="Avatar">
                <div>
                    <p>Porro officia cumque sint deleniti nemo facere rem vitae odit inventore cum odio, iste quia doloribus autem aperiam nulla ea neque reprehenderit. Libero doloribus, possimus officiis sapiente necessitatibus commodi consectetur?</p>
                    <h6>Lourens S.</h6> 
                </div> 
                <img src="../Site/Pictures/userpic.jpg" alt="Avatar">
                <div>
                    <p>Porro officia cumque sint deleniti nemo facere rem vitae odit inventore cum odio, iste quia doloribus autem aperiam nulla ea neque reprehenderit. Libero doloribus, possimus officiis sapiente necessitatibus commodi consectetur?</p>
                    <h6>Lourens S.</h6> 
                </div> 
                <img src="../Site/Pictures/userpic.jpg" alt="Avatar">
                <div>
                    <p>Porro officia cumque sint deleniti nemo facere rem vitae odit inventore cum odio, iste quia doloribus autem aperiam nulla ea neque reprehenderit. Libero doloribus, possimus officiis sapiente necessitatibus commodi consectetur?</p>
                    <h6>Lourens S.</h6> 
                </div> 
                <img src="../Site/Pictures/userpic.jpg" alt="Avatar">
                <div>
                    <p>Porro officia cumque sint deleniti nemo facere rem vitae odit inventore cum odio, iste quia doloribus autem aperiam nulla ea neque reprehenderit. Libero doloribus, possimus officiis sapiente necessitatibus commodi consectetur?</p>
                    <h6>Lourens S.</h6> 
                </div>
            </article>
            <section class="buyMain">
                <h2>Buy it now</h2>
                <br>
                <div class="lux">
                    <h3>Lux</h3>
                    <div>
                        <p>$200</p>
                    </div>
                    <ol>
                        <li>Porro officia cumque sint deleniti;</li>
                        <li>Тemo facere rem vitae odit;</li>
                        <li>Cum odio, iste quia doloribus autem;</li>
                        <li>Aperiam nulla ea neque;</li>
                        <li>Porro officia cumque sint deleniti;</li>
                        <li>Тemo facere rem vitae odit;</li>
                        <li>Cum odio, iste quia doloribus autem;</li>
                        <li>Aperiam nulla ea neque;</li>
                        <li>Porro officia cumque sint deleniti;</li>
                        <li>Тemo facere rem vitae odit;</li>
                        <li>Cum odio, iste quia doloribus autem;</li>
                        <li>Aperiam nulla ea neque.</li>
                    </ol>
                    <button><a href="#">BUY</a></button>
                </div>
                <div class="premium">
                    <h3>Premium</h3>
                    <div>
                        <p>$150</p>
                    </div>
                    <ol><li>Porro officia cumque sint deleniti;</li>
                        <li>Тemo facere rem vitae odit;</li>
                        <li>Cum odio, iste quia doloribus autem;</li>
                        <li>Aperiam nulla ea neque;</li>
                        <li>Porro officia cumque sint deleniti;</li>
                        <li>Тemo facere rem vitae odit;</li>
                        <li>Cum odio, iste quia doloribus autem;</li>
                        <li>Aperiam nulla ea neque.</li>
                    </ol>
                    <button><a href="#">BUY</a></button>
                </div>
                <div class="standart">
                    <h3>Standart</h3>
                    <div>
                        <p>$100</p>
                    </div>
                    <ol>
                        <li>Porro officia cumque sint deleniti;</li>
                        <li>Тemo facere rem vitae odit;</li>
                        <li>Cum odio, iste quia doloribus autem;</li>
                        <li>Aperiam nulla ea neque.</li>
                    </ol>
                    <button><a href="#">BUY</a></button>
                </div>
            </section>
        </main>
        <footer class="footerMain">
            <h2>Contacts</h2>
            <form action="#">
                <input type="text" name="name" placeholder="Your name:">
                <input type="email" name="email" placeholder="Your email:" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                <input type="tel" name="numberTel" placeholder="Your number:" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}">
                <textarea class="message" name="message" placeholder="Your text:"></textarea>
                <input type="submit" value="send">
            </form> 
            <img src="../Site/Pictures/skype_icon.png" alt="Skype"> <a href="#">here_your_login_skype</a>
            <br> <img src="../Site/Pictures/icq_icon.png" alt="icq"> <a href="#">279679659</a>
            <br> <img src="../Site/Pictures/email_icon.png" alt="email"> <a href="#">psdhtmlcss@mail.ru</a>
            <br> <img src="../Site/Pictures/phone_icon.png" alt="phone"> <a href="#">80 00 4568 55 55</a>
            <br> <img src="../Site/Pictures/social_buttons.png" alt="social networks"> 
            <?php echo '<br>' . year () ?>
        </footer>
    </div>
</body>

</html>