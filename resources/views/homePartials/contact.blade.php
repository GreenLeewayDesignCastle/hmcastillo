<!--CONTACT-->
<section id="contact" class="white-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3 class="title-small">
          <span>Contact</span>
        </h3>
        <p class="content-detail">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        </p>

      </div>
      <div class="col-md-9 content-right">
        <form>
            {{ csrf_field() }}
          <div class="group">
            <input required="" type="text"><span class="highlight"></span><span class="bar"></span><label>Name</label>
          </div>
          <div class="group">
            <input required="" type="email"><span class="highlight"></span><span class="bar"></span><label>Email</label>
          </div>
          <div class="group">
            <textarea required=""></textarea><span class="highlight"></span><span class="bar"></span><label>Message</label>
          </div>
          <input id="sendMessage" name="sendMessage" type="submit" value="Send Message">
        </form>
      </div>
    </div>
  </div>
</section>
<!--/.CONTACT END-->
