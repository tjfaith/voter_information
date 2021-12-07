<!-- Modal --> 
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
              </button>
              <h4 class="modal-title" id="myModalLabel">BID AND ORDER</h4>
            </div>
              <div class="modal-body" style="background-color:#008000">
                <section class="get-in-touch">
                   <!-- <p id="stock_title"></p> -->
                     <span style="font-size: 20px; text-align: center;" class="text-center title title2"></span>
                     <p class="text-center" style="color: #fff; font-size: 15px;">(<span class="price"></span>)</p>
                    <br/>
                     <form class="contact-form row row_contact" action="mail.php" method="POST">
                        <div class="form-field col x-50">
                           <input id="name" class="input-text js-input" type="text" name="sender_name" required>
                           <label class="label" for="name">Name</label>
                        </div>
                        <div class="form-field col x-50">
                           <input id="email" class="input-text js-input" type="email" name="email_address" required>
                           <label class="label" for="email">E-mail</label>
                        </div>
                        <!-- <div class="form-field col x-100">
                                          
                                          <input id="colorful" class="input-text js-input form-control" type="number" value="1.0" min="0" />
                                          <label class="label">Bid Price</label>
                                        </div> -->
                        <!-- <div class="form-field col x-100">
                           <input id="message" class="input-text js-input" type="text" name="subject" required>
                           <label class="label" for="subject">Subject</label>
                        </div> -->
                        <div class="form-field col x-100">
                           <input id="message" class="input-text js-input"  type="text" name="message" required>
                           <label class="label" for="message">Message</label>
                        </div>
                       
                         

                        <div class="form-field col x-100 align-center">
                           <input class="submit-btn" type="submit" value="Submit" name="submit2">
                        </div>
                     </form>
</section>
              </div>
              <div class="modal-footer" style="color: black">
                
              </div>
            </div>
          </div>
        </div>
