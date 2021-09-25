<div>
    @include('livewire.navbar')
    <section id="main-container" class="main-container">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="column-title">We love to hear</h3>
            <!-- contact form works with formspree.io  -->
            <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
            <form id="contact-form" action="#" method="post" role="form">
              <div class="error-container"></div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Name</label>
                    <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email"
                      required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Subject</label>
                    <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"
                  required></textarea>
              </div>
              <div class="text-right"><br>
                <button class="btn btn-primary solid blank" type="submit">Send Message</button>
              </div>
            </form>
          </div>
    
        </div><!-- Content row -->
      </div><!-- Conatiner end -->
    </section><!-- Main container end -->
</div>
@include('livewire.footer')
