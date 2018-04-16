<link rel="stylesheet" href="../elements/css/desktop.css">
<?php require_once 'inc/view/sidebar.php'; ?>
<div class="chat">
  <div class="chat-list">
    <div class="search">
      <form class="">
        <input type="text" name="" value="" placeholder="Search...">
        <input type="submit" name="search" value="">
      </form>
    </div>
    <div class="list" id="list">
      <div class="element unseen">
        <div class="photo" style="background:url(../elements/img/ui-avatar1.jpg) center no-repeat;background-size:cover;">
          <div class="status on">
          </div>
        </div>
        <div class="info">
          <div class="name">
            Mark Otto
          </div>
          <div class="message">
            I'm not sure about that, sorry man.
          </div>
          <div class="date">
            9:20 PM
          </div>
          <span class="unseen">
            3
          </span>
        </div>
      </div>
      <div class="element">
        <div class="photo" style="background:#0984e3;">
          <span>D</span>
        </div>
        <div class="info">
          <div class="name">
            Developers
          </div>
          <div class="message">
            Allison: What problem?
          </div>
          <div class="date">
            8:45 PM
          </div>
        </div>
      </div>
      <div class="element active">
        <div class="photo" style="background:url(../elements/img/ui-avatar2.jpg);background-size:cover;">
          <div class="status off">
          </div>
        </div>
        <div class="info">
          <div class="name">
            Allison Rudametkin
          </div>
          <div class="message">
            Yes, you can, i don't have problem.
          </div>
          <div class="date">
            Yesterday
          </div>
        </div>
      </div>
      <div class="element">
        <div class="photo" style="background:#0984e3;">
          <span>M</span>
        </div>
        <div class="info">
          <div class="name">
            Marketing
          </div>
          <div class="message">
            Mark: Cool!
          </div>
          <div class="date">
            March 03
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="chat-box">
    <div class="data">
      <div class="name">
        Allison Rudametkin
      </div>
      <div class="status off">
      </div>
      <div class="tools">
        <i class="icons">more_horiz</i>
      </div>
    </div>
    <div class="box"  id="box">
      <div class="element no-owner">
        <div class="photo" style="background:url(../elements/img/ui-avatar2.jpg);background-size:cover;">
        </div>
        <div class="message">
          <span class="name">Allison Rudametkin</span>
          Hi
        </div>
      </div>
      <div class="element no-owner">
        <div class="photo" style="background:url(../elements/img/ui-avatar2.jpg);background-size:cover;">
        </div>
        <div class="message">
          <span class="name">Allison Rudametkin</span>
          I'm Allison. How are you?
        </div>
      </div>
      <div class="element owner">
        <div class="photo" style="background:url(../elements/img/ui-profile.jpg);background-size:cover;">
        </div>
        <div class="message">
          <span class="name">Jessica Gignac</span>
          Hi! Fine and you?
        </div>
      </div>
      <div class="element no-owner">
        <div class="photo" style="background:url(../elements/img/ui-avatar2.jpg);background-size:cover;">
        </div>
        <div class="message">
          <span class="name">Allison Rudametkin</span>
          I'm cool. Have you seen the videos that I recommended you?
        </div>
      </div>
      <div class="element owner">
        <div class="photo" style="background:url(../elements/img/ui-profile.jpg);background-size:cover;">
        </div>
        <div class="message">
          <span class="name">Jessica Gignac</span>
          Of course, they helped me so much. I learned about Python sintaxis. I'm very happy now.
        </div>
      </div>
      <div class="element no-owner">
        <div class="photo" style="background:url(../elements/img/ui-avatar2.jpg);background-size:cover;">
        </div>
        <div class="message">
          <span class="name">Allison Rudametkin</span>
           Perfect, congrats!
        </div>
      </div>
    </div>
    <div class="send">
      <div class="box">
        <form class="message">
          <textarea name="message" id="message"></textarea>
          <label for="file-upload" class="custom-file-upload">
            <i class="icons">attach_file</i>
          </label>
          <input id="file-upload" type="file"/>
          <label for="submit" class="custom-submit">
            <i class="icons">send</i>
          </label>
          <input id="submit" type="submit" name="" value="">
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  const ps = new PerfectScrollbar('#box');
  const ps1 = new PerfectScrollbar('#list');
  const ps2 = new PerfectScrollbar('#message');
</script>
