<?php
function display_custom_html() {
    $output = '
    <div class="container introduction-box">
    <p>
      هر بیزینس و کسب‌وکاری نیاز به یک وب سایت داره<br>
      شما با ایجاد یک وب سایت بین خودتون و مخاطب حس امنیت و اعتماد ایجاد میکنید <br>
      من به عنوان یک طراح با توجه به تجربه کاربری طرح مناسب کسب‌وکار شما رو بهتون تحویل میدم
    </p>
  </div>

  <div class="intro-skills">
    <div>
      <span class="intro-design-logo"><i class="fa-solid fa-code"></i></span>
      <h2>فرانت اند</h2>
      <p>
        Css, Html, Javascript<br>
        Sass, React, Jquery<br>
        Bootstrap<br>
        Fontawesome<br>
        Git, Github<br>
        Seo<br>
      </p>
    </div>
    <div>
      <span class="intro-design-logo"><i class=" fa-solid fa-spray-can"></i></span>
      <h2>ابزار طراحی</h2>
      <p>
        Photoshop <br>
        Figma<br>
        Adobe XD<br>
        Visual Studio<br>
      </p>
    </div>
    <div>
      <span class="fa-costume intro-design-logo"><i class="fa-solid fa-graduation-cap"></i></i></span>
      <h2>تحصیلات</h2>
      <p>
        کارشناسی مهدنسی کامپیوتر<br>
        طراحی ui,ux<br>
        مدرک آموزش زبان انگلیسی FCE<br>

      </p>
    </div>
  </div>


  
  <div class="lang-display-container">
    <div class="languages-display">
      <div class="circle-border">
        <div class="language-display-html"><i class="fa-brands fa-html5"></i>
          <span class="small-circle"></span>
        </div>
        <span class="language-text">HTML</span>
      </div>
      <div class="circle-border rotate-circle">
        <div class="language-display-css"><i class="css-rotate fa-brands fa-css3-alt"></i>
          <span class="small-circle"></span>
        </div>
        <span class="language-css-text">CSS</span>
      </div>
      <div class="circle-border">
        <div class="language-display-javascript"><i class="fa-brands fa-node-js"></i>
          <span class="small-circle"></span>
          <span class="small-arrow"><i class="fa-solid fa-location-arrow"></i></span>
        </div>
        <span class="language-text">JavaScript</span>
      </div>
    </div>
    <div class="lang-alters">
      <div class="lang-display-react" title="react"><i class="fa-brands fa-react"></i></div>
      <div class="lang-display-sass" title="sass"><i class="fa-brands fa-sass"></i></div>
      <div class="lang-display-bootstrap" title="bootstrap"><i class="fa-brands fa-bootstrap"></i></div>
      <div class="lang-display-git" title="git"><i class="fa-brands fa-git"></i></div>
      <div class="lang-display-github" title="github"><i class="fa-brands fa-github"></i></div>
      <div class="lang-display-fontawesome" title="fontawesome"><i class="fa-solid fa-font-awesome"></i></div>
    </div>
  </div>



  <div class="factors">
    <div class="factor-title">
      <h1>فاکتور های طراحی وبسایت</h1>
      <div class="factor" onclick="opendescription(0)">
        <h3>استاندارد های طراحی وبسایت<i class="factor-arrow fa-solid fa-chevron-down"></i></h3>
        <p class="factor-description">
          طراحی وب سایت، یعنی سایت مطابق با آخرین تکنولوژی ها و استانداردهای روز دنیا طراحی شود. یکی از مهم ترین قواعدی
          که
          گروه
          پرواز در طراحی سایت لحاظ میکند، سئو و بهینه بودن وبسایت از لحاظ ساختاری است. تحلیلگران سئوی گروه پرواز تمامی
          نکات
          را
          بررسی میکنند تا وبسایت بر اساس استانداردها تولید شده و مورد تایید موتورهای جستجو قرار گیرد. ما طرز فکر
          موتورهای
          جستجو
          را میشناسیم و به شما کمک میکنیم تا آن ها نیز شما را بشناسند تا نهایتا به کسب جایگاهی مناسب منجر شود.
        </p>
      </div>

      <div class="factor" onclick="opendescription(1)">
        <h3>طراحی سایت اصولی<i class="factor-arrow fa-solid fa-chevron-down"></i></h3>
        <p class="factor-description">
          همانطور که خلق یک اثر هنری نیاز به شناخت سلیقه مخاطب و عناصر بصری مانند رنگ ها، تصاویر و… دارد، در طراحی سایت
          نیز
          این موارد صادق است. شناخت ترکیب رنگ، هارمونی اجزای سایت و دانش چینش آنها در کنار هم که طی سالها تجربه وبسیما
          بدست
          آمده است، جزء اصلی ترین اصول طراحی سایت است که به آن پای بندیم.
        </p>
      </div>

      <div class="factor" onclick="opendescription(2)">
        <h3>رسپانسیو (واکنشگرا)<i class="factor-arrow fa-solid fa-chevron-down"></i></h3>
        <p class="factor-description">موبایل ها و تبلت ها را نباید فراموش کرد. امروزه حجم عظیمی از کاربران از گوشی های
          همراهشان برای جستجو در
          اینترنت
          استفاده میکنند، لذا میطلبد که وبسایت به گونه ای ریسپانسیو یا واکنش گرا طراحی شود تا در نمایشگر تمام موبایل ها
          و
          تبلت ها به درستی نمایش داده شود.
        </p>
      </div>

      <div class="factor" onclick="opendescription(3)">
        <h3>سرعت<i class="factor-arrow fa-solid fa-chevron-down"></i></h3>
        <p class="factor-description">
          در رقابت تنگاتنگ سایت ها بر سر دیده شدن، هرچه سریع تر باشید، بهتر دیده میشوید. رسیدن به سرعت استاندارد
          بارگزاری
          صفحات سایت امری ست تخصصی که در متدهای طراحی گروه پرواز جایگاه قابل توجهی دارد. در این راستا عواملی چون حجم
          بارگزاری هر صفحه به طور جداگانه و حجم بارگزاری تمام سایت اندازه گیری میشود. میزبانی سایت توسط یک هاستینگ
          قدرتمند
          تنها بخشی از کار است و کدنویسی بهینه و استفاده از مناسب ترین ابزارها ضامن سرعت بالای وبسایت است.
        </p>
      </div>
    </div>
  </div>

  ';

    return $output;
}
function register_custom_shortcodes() {
    add_shortcode('display-slogan-box', 'display_custom_html');
}
add_action('init', 'register_custom_shortcodes');
?>