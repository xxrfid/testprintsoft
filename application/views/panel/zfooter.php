<style>
  #buttoncr {
    position: fixed;
    border: 0;
    right: 0px;
    bottom: 0px;
    z-index: 9999;
  }

  #buttoncr .direct-chat {
    margin-bottom: 0px;
  }

  .tooltip {
    position: absolute;
    z-index: 999999;
  }

  /* width */
  .scrollable-element::-webkit-scrollbar {
    width: 5px;
  }

  /* Track */
  .scrollable-element::-webkit-scrollbar-track {
    background: #F8F9F9;
  }

  /* Handle */
  .scrollable-element::-webkit-scrollbar-thumb {
    background: #AED6F1;
  }

  /* Handle on hover */
  .scrollable-element::-webkit-scrollbar-thumb:hover {
    background: #5499C7;
  }

  .slctusr {
    margin-top: 5px;
    cursor: pointer;
  }
</style>

<div id="buttoncr" style="max-width: 500px; display:none">
  <div class="card card-prirary cardutline direct-chat direct-chat-primary stafcardchat">
    <div class="card-header bg-primary cardstaffchat">
      <h3 class="card-title">Staff Chat &nbsp &nbsp &nbsp &nbsp</h3>
      <div class="card-tools">
        <span id="staffchatcnt" data-toggle="tooltip" title="0 New Messages" class="badge bg-light">0</span>
        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
          <i class="fas fa-users"></i>
          <span class="badge badge-danger navbar-badge jmlstaffonline">0</span>
        </button>
        <button type="button" class="btn hidestaffchat btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body" style="display: block;">
      <!-- Conversations are loaded here -->
      <div class="row">
        <div class="col-2">
          <div id="userstaffchat" class="direct-chat-messages scrollable-element" style="overflow: auto; white-space: nowrap; min-width: 60px; border-right: 1px dashed #AED6F1; height: 500px;">
            <img class="direct-chat-img slctusr" src="https://dummyimage.com/80x80/dbfbff/0077ff.png&text=11" alt="Message User Image">
          </div>
        </div>
        <div class="col">
          <div id="isistaffchat" class="direct-chat-messages scrollable-element" style="height: 500px;">
            <!-- Message. Default to the left -->
            <div class="direct-chat-msg">
              <div class="direct-chat-infos clearfix">
                <span class="direct-chat-name float-left">Alexander Pierce</span>
                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
              </div>
              <!-- /.direct-chat-infos -->
              <img class="direct-chat-img" src="https://dummyimage.com/80x80/dbfbff/0077ff.png&text=11" alt="Message User Image">
              <!-- /.direct-chat-img -->
              <div class="direct-chat-text">
                Is this template really for free? That's unbelievable!
              </div>
              <!-- /.direct-chat-text -->
            </div>
            <!-- /.direct-chat-msg -->

            <!-- Message to the right -->
            <div class="direct-chat-msg right">
              <div class="direct-chat-infos clearfix">
                <span class="direct-chat-name float-right">Sarah Bullock</span>
                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
              </div>
              <!-- /.direct-chat-infos -->
              <img class="direct-chat-img" src="https://dummyimage.com/80x80/dbfbff/0077ff.png&text=12" alt="Message User Image">
              <!-- /.direct-chat-img -->
              <div class="direct-chat-text">
                You better believe it!
              </div>
              <!-- /.direct-chat-text -->
            </div>
            <!-- /.direct-chat-msg -->
          </div>
          <!--/.direct-chat-messages-->

          <!-- Contacts are loaded here -->
          <div class="direct-chat-contacts" style="height: 500px;">
            <center><b>=== Online List ===</b></center>
            <ul id="staffonlist" class="contacts-list" style="padding-left:20px; padding-right:20px">
              <li class="online slctusr ak12">
                <span class="contacts-list-name">
                  Achmad Rifai
                  <small class="contacts-list-date float-right">2021-07-27 15:00:12</small>
                </span>
              </li>
              <!-- End Contact Item -->
            </ul>
            <!-- /.contacts-list -->
          </div>
          <!-- /.direct-chat-pane -->
        </div>
      </div>


      <!-- Contacts are loaded here -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer" style="display: block;">
      <div class="input-group">
        <input id="isistaffmsg" type="text" name="message" placeholder="Type Message ..." class="form-control">
        <span class="input-group-append">
          <button class="btn btn-primary sendstaffchat">Send</button>
        </span>
      </div>
    </div>
    <!-- /.card-footer-->
  </div>
</div>

<audio id="myplaynosound">
  <source src="<?php echo $urlassets; ?>/sound/nosound.ogg" type="audio/ogg">
  <source src="<?php echo $urlassets; ?>/sound/nosound.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 1.0.1
  </div>
  <strong>Copyright &copy; 2020 <a href="https://ngx.my.id">Ngx.my.id</a>.</strong> All rights
  reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script>
  menuactive();
</script>
</body>

</html>