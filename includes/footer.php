<!-- Footer -->
  <footer id="footer">
    <div class="inner">
      <section>
        <h2>Get in touch</h2>
        <form method="post" action="#">
          <div class="field half first">
            <input type="text" name="name" id="name" placeholder="Name" />
          </div>
          <div class="field half">
            <input type="email" name="email" id="email" placeholder="Email" />
          </div>
          <div class="field">
            <textarea name="message" id="message" placeholder="Message"></textarea>
          </div>
          <ul class="actions">
            <li><input type="submit" value="Send" class="special" /></li>
          </ul>
        </form>
      </section>
      <section>
        <h2>Follow</h2>
        <ul class="icons">
          <?php foreach ($networks as $network) : ?>
            <li><a href="<?php echo $$network['href']; ?>" class="icon fa-<?php echo $$network['icon']; ?>"></a></li>
          <?php endforeach; ?>
        </ul>
      </section>
      <ul class="copyright">
        <li>&copy; <?php echo $name; ?>. Design - Shane Kirkham</li>
      </ul>
    </div>
  </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!-- jQuery + Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>
