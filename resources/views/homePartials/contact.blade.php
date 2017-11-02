<section id="contact" class="grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3 class="title-small">
                    <span>Want to hire me?</span>
                </h3>

                <p class="content-detail">
                    I'm currently accepting new projects
                     and would love to hear about yours.
                     Please take a few minutes to tell me about it.
                </p>
            </div>
            <div class="col-md-9 content-right">
                <form>
                    {{ csrf_field() }}
                    <div class="group">
                        <input required="" type="text">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Name</label>
                    </div>
                    <div class="group">
                        <input required="" type="email">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Email</label>
                    </div>
                    <div class="group">
                        <textarea required=""></textarea>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Message</label>
                    </div>
                    <button id="sendMessage" class="btn btn-basic btn-full-width" name="sendMessage" type="submit" >Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
