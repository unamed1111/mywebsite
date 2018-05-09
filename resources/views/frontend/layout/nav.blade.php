  <div class="workZone">
    <div class="midBox">
      <div class="topBox">
        <div class="bottomBox">
          <div class="leftBox">
            <div class="box1">
              <div class="leftTexttitle"> Thương hiệu</div>
              
              @foreach ($trademarks as $trademarks)
                <div class="leftText"><a href="" class="boldText">{{$trademarks->trademark_name}}</a></div>
              @endforeach
              <div class="leftText"> <span class="boldText">Duis cursus tortor.</span></div>
              <div class="clear"></div>
            </div>
            <div class="box2">
              <div class="leftTexttitle">Khoảng giá</div>
              
              
              <div class="leftText"> <span class="boldText">Nunc viverra tortor.</span> Integer sem nisi, adipiscing non, sagittis eget, hendrerit non, nisi. Aliquam ante. Nam magna. Nulla adipiscing porta ante vestibulum.</div>
              <div class="clear"></div>
            </div>
            <div class="box3">
              <div class="leftTexttitle">năng lượng</div>
              
              
              <div class="leftText"> <span class="boldText">Duis cursus tortor.</span> Nunc consectetuer diam ac odio. Pellentesque vel mauris sit amet urna malesuada.</div>
              <div class="clear"></div>
            </div>
            <div class="clear"></div>
          </div>
          <div class="workZoneRight">
            <div class="rightBox inner">
              <div style="padding:0 15px 20px 15px;">
                <h1 class="inner">Contact</h1>
                <div> <strong> <br />
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum varius, risus neque venenatis arcu, a semper massa mi eget ipsum. </strong><br />
                  <br />
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin sed odio et ante adipiscing lobortis. Quisque eleifend, arcu a dictum varius, risus neque venenatis arcu, a semper massa mi eget ipsum. </div>
                <div> <br />
                  <h6 class="inner">Contact Form:</h6>
                  <br />
                  <form action="#" method="post">
                    <table width="80%">
                      <tr>
                        <td width="145" align="left" valign="top" class="body" id="Company"><strong>Company:</strong></td>
                        <td width="280" align="left" valign="top"><input name="Company" type="text" size="40" /></td>
                      </tr>
                      <tr>
                        <td align="left" valign="top" class="body" id="Contact"><strong>Full Name:</strong></td>
                        <td align="left" valign="top"><input name="Name" type="text" size="40" /></td>
                      </tr>
                      <tr>
                        <td align="left" valign="top" class="body" id="Address"><strong>Address: </strong></td>
                        <td align="left" valign="top"><input name="Address" type="text" size="40" /></td>
                      </tr>
                      <tr>
                        <td align="left" valign="top" class="body" id="Phone"><strong> Phone: </strong></td>
                        <td align="left" valign="top"><input name="Phone" type="text" size="40" /></td>
                      </tr>
                      <tr>
                        <td align="left" valign="top" class="body" id="Email"><strong> Email: </strong></td>
                        <td align="left" valign="top"><input name="Email" type="text" size="40" /></td>
                      </tr>
                      <tr>
                        <td align="left" valign="top" class="body" id="Comments"><strong> Questions / Comments: </strong></td>
                        <td align="left" valign="top"><textarea name="comments" cols="32" rows="6"></textarea></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><input type="submit" name="submit" class="button" value="Send Now" /></td>
                      </tr>
                    </table>
                  </form>
                </div>
                <div> <br />
                  <h6 class="inner">Contact Information: </h6>
                  <img src="images/photo-contact.jpg" alt="" width="152" height="100" class="project-img" /><br />
                  <br />
                  <br />
                  100 Lorem Ipsum Dolor Sit<br />
                  88-99 Sit Amet, Lorem<br />
                  USA<br />
                  <br />
                  <p> <span><img src="images/ico-phone.png" alt="" width="20" height="16" hspace="2" /> Phone:</span> (888) 123 456 789<br />
                    <span><img src="images/ico-fax.png" alt="" width="20" height="16" hspace="2" /> Fax:</span> (888) 987 654 321<br />
                    <span><img src="images/ico-website.png" alt="" width="20" height="16" hspace="2" /> Website:</span> <a href="#">www.mycompany.com</a><br />
                    <span><img src="images/ico-email.png" alt="" width="20" height="16" hspace="2" /> Email:</span> <a href="#">info@mycompany.com</a><br />
                    <span><img src="images/ico-twitter.png" alt="" width="20" height="16" hspace="3" /> <a href="#">Follow</a> on Twitter</span><br />
                  </p>
                </div>
              </div>
            </div>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>