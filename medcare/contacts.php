<?php 
/*Template Name: Contacts*/
get_header();?>

    <section class="map">
        <div class="embed-container  maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2592.8174595911687!2d11.18726901569608!3d49.46906367935203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479f5884fb7af3fd%3A0x43b6743fad8c9263!2zR2xhc3NjaGxlaWZ3ZWcsIDkwNTcxIFNjaHdhaWcgYmVpIE7DvHJuYmVyZywg0JPQtdGA0LzQsNC90LjRjw!5e0!3m2!1sru!2sua!4v1464012382218" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>

    <section class="bg_cont">
        <div class="container">
            <ul class="row contact-list">
              <li class="col-md-4 col-sm-4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-map-marker"></div>
                  </div>
                  <div class="box_cnt__no-flow">
                    <address>90571 Schwaig bei Nürnberg,<br/>Glasschleifweg<br>Deutschland</address>
                  </div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-envelope"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="mailto:info@medcare.com">info@medcare.com</a></div>
                </div>
              </li>
              <li class="col-md-4 col-sm-4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-phone"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:+ 49 (0) 911 – 95 33 565">+ 49 (0) 911 – 95 33 565</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-fax"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="callto:+ 49 (0) 911 – 95 33 564">+ 49 (0) 911 – 95 33 564</a></div>
                </div>
              </li>
              <li class="col-md-4 col-sm-4">
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-facebook"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on facebook</a></div>
                </div>
                <div class="box">
                  <div class="box_aside">
                    <div class="icon2 fa-twitter"></div>
                  </div>
                  <div class="box_cnt__no-flow"><a href="#">Follow on Twitter</a></div>
                </div>
              </li>
            </ul>
          </div>
    </section>


    <div class="container content">

        <div class="row">
            <div class="hr"></div>
        </div>
        
        <div class="row">
            <form action="">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="name" class="form-control" placeholder="Ваше имя:">
                    </div>
                    <div class="col-md-4">
                        <input type="email" name="email" class="form-control" placeholder="Email:">
                    </div>
                    <div class="col-md-4">
                        <input type="tel" name="phone" class="form-control" placeholder="Телефон:">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea name="" class="form-control" rows="14" placeholder="Сообщение:"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-default">Отправить</button>
                    </div>
                </div>
            </form>
        </div>

    </div> <!-- .container -->
<?php get_footer();?>